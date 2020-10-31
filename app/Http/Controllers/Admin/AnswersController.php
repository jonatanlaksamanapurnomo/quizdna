<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Answer\BulkDestroyAnswer;
use App\Http\Requests\Admin\Answer\DestroyAnswer;
use App\Http\Requests\Admin\Answer\IndexAnswer;
use App\Http\Requests\Admin\Answer\StoreAnswer;
use App\Http\Requests\Admin\Answer\UpdateAnswer;
use App\Models\Answer;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use http\Env\Request;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AnswersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAnswer $request
     * @return array|Factory|View
     */
    public function index(IndexAnswer $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Answer::class)->processRequestAndGet(
        // pass the request with params
            $request,

            // set columns to query
            ['id', 'score', 'typingdna_score', 'exam_id', 'student_id', 'question_id'],

            // set columns to searchIn
            ['id', 'answer', 'score', 'typingdna_score']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.answer.index', ['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.answer.create');

        return view('admin.answer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAnswer $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAnswer $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Answer
        $answer = Answer::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/answers'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/answers');
    }

    /**
     * Display the specified resource.
     *
     * @param Answer $answer
     * @return void
     * @throws AuthorizationException
     */
    public function show(Answer $answer)
    {
        $this->authorize('admin.answer.show', $answer);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Answer $answer
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function edit(Answer $answer)
    {
        $this->authorize('admin.answer.edit', $answer);


        return view('admin.answer.edit', [
            'answer' => $answer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAnswer $request
     * @param Answer $answer
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAnswer $request, Answer $answer)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Answer
        $answer->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/answers'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/answers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAnswer $request
     * @param Answer $answer
     * @return ResponseFactory|RedirectResponse|Response
     * @throws Exception
     */
    public function destroy(DestroyAnswer $request, Answer $answer)
    {
        $answer->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAnswer $request
     * @return Response|bool
     * @throws Exception
     */
    public function bulkDestroy(BulkDestroyAnswer $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Answer::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }


}
