@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.exam.actions.edit', ['name' => $exam->id]))

@section('body')
    {{--    {{$answers->groupBy("student_id")['1']}}--}}
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
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            Edit Exam
                        </button>
                    </div>
                </form>
            </exam-form>
            <a href="{{"/admin/questions/create/" . $exam->id}}" class="btn btn-success" :disabled="submiting">
                Add Question
            </a>
        </div>
    </div>
    <div class="container-xl">
        <div class="card">
            <div class="accordion" id="accordionExample">
                @for ($i = 1; $i < 100; $i++)
                    @if(isset($answers["$i"]))
                        <div class="card">
                            <div class="card-header">
                                <h2 class="mb-0">
                                    <i class="btn btn-link" type="button" data-toggle="collapse"
                                       data-target="#a"
                                       aria-expanded="true"
                                       aria-controls="collapseOne">
                                        Student_id : {{$i}}
                                    </i>
                                </h2>
                            </div>

                            @foreach($answers["$i"] as $item)
                                <div id="a" class="collapse show"
                                     aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="lead text-center">
                                                    {{$item->answer}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <form method="post" action="{{url("admin/edit/$item->id/")}}">
                                            @csrf
                                            <input class="form-control mb-4" type="text" name="score"
                                                   id=""
                                                   placeholder="score">
                                            <div class="d-flex justify-content-center">
                                                <input type="submit" value="Give Score"
                                                       class="btn btn-outline-success ">
                                            </div>

                                        </form>
                                    </div>
                                    <hr/>
                                </div>
                            @endforeach

                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>



@endsection
