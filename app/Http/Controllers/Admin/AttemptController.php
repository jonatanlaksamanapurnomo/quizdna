<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Attempt\BulkDestroyAttempt;
use App\Http\Requests\Admin\Attempt\DestroyAttempt;
use App\Http\Requests\Admin\Attempt\IndexAttempt;
use App\Http\Requests\Admin\Attempt\StoreAttempt;
use App\Http\Requests\Admin\Attempt\UpdateAttempt;
use App\Models\Attempt;
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

class AttemptController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAttempt $request
     * @return array|Factory|View
     */
    public function index(IndexAttempt $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Attempt::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            [''],

            // set columns to searchIn
            ['']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.attempt.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.attempt.create');

        return view('admin.attempt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAttempt $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAttempt $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Attempt
        $attempt = Attempt::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/attempts'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/attempts');
    }

    /**
     * Display the specified resource.
     *
     * @param Attempt $attempt
     * @throws AuthorizationException
     * @return void
     */
    public function show(Attempt $attempt)
    {
        $this->authorize('admin.attempt.show', $attempt);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Attempt $attempt
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Attempt $attempt)
    {
        $this->authorize('admin.attempt.edit', $attempt);


        return view('admin.attempt.edit', [
            'attempt' => $attempt,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAttempt $request
     * @param Attempt $attempt
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAttempt $request, Attempt $attempt)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Attempt
        $attempt->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/attempts'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/attempts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAttempt $request
     * @param Attempt $attempt
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyAttempt $request, Attempt $attempt)
    {
        $attempt->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAttempt $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyAttempt $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Attempt::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
