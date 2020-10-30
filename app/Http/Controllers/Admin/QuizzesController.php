<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Quiz\BulkDestroyQuiz;
use App\Http\Requests\Admin\Quiz\DestroyQuiz;
use App\Http\Requests\Admin\Quiz\IndexQuiz;
use App\Http\Requests\Admin\Quiz\StoreQuiz;
use App\Http\Requests\Admin\Quiz\UpdateQuiz;
use App\Models\Quiz;
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

class QuizzesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexQuiz $request
     * @return array|Factory|View
     */
    public function index(IndexQuiz $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Quiz::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'quiz_id', 'quiz_name'],

            // set columns to searchIn
            ['id', 'quiz_id', 'quiz_name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.quiz.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.quiz.create');

        return view('admin.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreQuiz $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreQuiz $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Quiz
        $quiz = Quiz::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/quizzes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/quizzes');
    }

    /**
     * Display the specified resource.
     *
     * @param Quiz $quiz
     * @throws AuthorizationException
     * @return void
     */
    public function show(Quiz $quiz)
    {
        $this->authorize('admin.quiz.show', $quiz);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Quiz $quiz
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Quiz $quiz)
    {
        $this->authorize('admin.quiz.edit', $quiz);


        return view('admin.quiz.edit', [
            'quiz' => $quiz,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateQuiz $request
     * @param Quiz $quiz
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateQuiz $request, Quiz $quiz)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Quiz
        $quiz->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/quizzes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/quizzes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyQuiz $request
     * @param Quiz $quiz
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyQuiz $request, Quiz $quiz)
    {
        $quiz->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyQuiz $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyQuiz $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Quiz::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
