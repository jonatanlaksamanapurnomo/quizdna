<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\BulkDestroyStudent;
use App\Http\Requests\Admin\Student\DestroyStudent;
use App\Http\Requests\Admin\Student\IndexStudent;
use App\Http\Requests\Admin\Student\StoreStudent;
use App\Http\Requests\Admin\Student\UpdateStudent;
use App\Models\Student;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function loginPassword(Request $request){
        $student = Student::where('email', $request->email)->firstOrFail();
        if (!Hash::check($student->password, bcrypt($request->password))) {
            return 'not match!!';
        }
        return redirect('/student/dashboard');
    }

    public function signup(Request $request){
        $student = new Student;
        $student->email = $request->email;
        $student->name = $request->name;
        $student->password = bcrypt($request->password);
        $student->save();

        return redirect('/student/register')->with('id', md5($student->email)); 
    }

    /**
     * Display a listing of the resource.
     *
     * @param IndexStudent $request
     * @return array|Factory|View
     */
    public function index(IndexStudent $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Student::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'email', 'name'],

            // set columns to searchIn
            ['id', 'email', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.student.create');

        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStudent $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreStudent $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Student
        $student = Student::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/students'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/students');
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @throws AuthorizationException
     * @return void
     */
    public function show(Student $student)
    {
        $this->authorize('admin.student.show', $student);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Student $student)
    {
        $this->authorize('admin.student.edit', $student);


        return view('admin.student.edit', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStudent $request
     * @param Student $student
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateStudent $request, Student $student)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Student
        $student->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/students'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyStudent $request
     * @param Student $student
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyStudent $request, Student $student)
    {
        $student->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyStudent $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyStudent $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Student::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
