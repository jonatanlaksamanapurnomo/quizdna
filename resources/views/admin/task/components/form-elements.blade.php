
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.task.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('body'), 'has-success': fields.body && fields.body.valid }">
    <label for="body" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.body') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.body" v-validate="'required'" id="body" name="body" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('body')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('body') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer'), 'has-success': fields.answer && fields.answer.valid }">
    <label for="answer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.answer') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.answer" v-validate="''" id="answer" name="answer"></textarea>
        </div>
        <div v-if="errors.has('answer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('score'), 'has-success': fields.score && fields.score.valid }">
    <label for="score" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.score') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.score" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('score'), 'form-control-success': fields.score && fields.score.valid}" id="score" name="score" placeholder="{{ trans('admin.task.columns.score') }}">
        <div v-if="errors.has('score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('score') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('quiz_id'), 'has-success': fields.quiz_id && fields.quiz_id.valid }">
    <label for="quiz_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.quiz_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect
            v-model="form.quiz"
            :options="{{$quizzes->toJson()}}"
            :multiple="false"
            track-by="id"
            label="quiz_name"
            tag-placeholder="{{ __('Select Quiz') }}"
            placeholder="{{ __('Quiz') }}">
        </multiselect>
    </div>
</div>



<div class="form-check row" :class="{'has-danger': errors.has('isCorrect'), 'has-success': fields.isCorrect && fields.isCorrect.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="isCorrect" type="checkbox" v-model="form.isCorrect" v-validate="''" data-vv-name="isCorrect"  name="isCorrect_fake_element">
        <label class="form-check-label" for="isCorrect">
            {{ trans('admin.task.columns.isCorrect') }}
        </label>
        <input type="hidden" name="isCorrect" :value="form.isCorrect">
        <div v-if="errors.has('isCorrect')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('isCorrect') }}</div>
    </div>
</div>


