<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Task\BulkDestroyTask;
use App\Http\Requests\Admin\Task\DestroyTask;
use App\Http\Requests\Admin\Task\IndexTask;
use App\Http\Requests\Admin\Task\StoreTask;
use App\Http\Requests\Admin\Task\UpdateTask;
use App\Models\Task;
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
use App\Models\Quiz;

class TasksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTask $request
     * @return array|Factory|View
     */
    public function index(IndexTask $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Task::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'score', 'quiz_id', 'isCorrect'],

            // set columns to searchIn
            ['id', 'title', 'body', 'answer'],
            function ($query) use ($request) {
                $query->with(['quiz']);
                if($request->has('quizzes')){
                    $query->whereIn('quiz_id', $request->get('quizzes'));
                }
            }
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.task.index', ['data' => $data ,    'quizzes' => Quiz::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.task.create');

        return view('admin.task.create' , ['quizzes' => Quiz::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTask $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTask $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['quiz_id'] = $request->getQuizId();

        // Store the Task
        $task = Task::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tasks'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @throws AuthorizationException
     * @return void
     */
    public function show(Task $task)
    {
        $this->authorize('admin.task.show', $task);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Task $task)
    {
        $this->authorize('admin.task.edit', $task);


        return view('admin.task.edit', [
            'task' => $task,
            'quizzes' => Quiz::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTask $request
     * @param Task $task
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTask $request, Task $task)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['quiz_id'] = $request->getQuizId();
        // Update changed values Task
        $task->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/tasks'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTask $request
     * @param Task $task
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTask $request, Task $task)
    {
        $task->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTask $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTask $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Task::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
