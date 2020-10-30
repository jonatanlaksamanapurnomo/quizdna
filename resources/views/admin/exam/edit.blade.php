@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.exam.actions.edit', ['name' => $exam->id]))

@section('body')
    {{--    {{dd($exam->questions)}}--}}

    <div class="container-xl">
        <div class="card">

            <exam-form
                :action="'{{ $exam->resource_url }}'"
                :data="{{ $exam->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action"
                      novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.exam.actions.edit', ['name' => $exam->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.exam.components.form-elements')
                        <div class="accordion" id="accordionExample">
                            @foreach($exam->questions as $item)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="{{'#'. $item->id}}" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                view more
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="{{$item->id}}" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            {{$item->question}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

            </exam-form>

        </div>

    </div>

@endsection
