<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('question'), 'has-success': fields.question && fields.question.valid }">
    <label for="question" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.question') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea rows="5" class="form-control" v-model="form.question" v-validate="'required'" id="question"
                      name="question"></textarea>
        </div>
        <div v-if="errors.has('question')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('question')
            }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('score'), 'has-success': fields.score && fields.score.valid }">
    <label for="score" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.score') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.score" v-validate="'integer'" @input="validate($event)" class="form-control"
               :class="{'form-control-danger': errors.has('score'), 'form-control-success': fields.score && fields.score.valid}"
               id="score" name="score" placeholder="{{ trans('admin.question.columns.score') }}">
        <div v-if="errors.has('score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('score') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('exam_id'), 'has-success': fields.exam_id && fields.exam_id.valid }">
    <label for="exam_id" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.exam_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect
            v-model="form.exam"
            :options="{{$examTarget->toJson()}}"
            :multiple="false"
            track-by="id"
            label="exam_name"
            tag-placeholder="{{ __('Select Exam') }}"
            placeholder="{{ __('Exam') }}">
        </multiselect>
        <div v-if="errors.has('exam_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('exam_id')
            }}
        </div>
    </div>
</div>

<div class="form-check row"
     :class="{'has-danger': errors.has('use_typingdna'), 'has-success': fields.use_typingdna && fields.use_typingdna.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="use_typingdna" type="checkbox" v-model="form.use_typingdna" v-validate="''"
               data-vv-name="use_typingdna" name="use_typingdna_fake_element">
        <label class="form-check-label" for="use_typingdna">
            {{ trans('admin.question.columns.use_typingdna') }}
        </label>
        <input type="hidden" name="use_typingdna" :value="form.use_typingdna">
        <div v-if="errors.has('use_typingdna')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('use_typingdna') }}
        </div>
    </div>
</div>

<div class="form-check row"
     :class="{'has-danger': errors.has('check_plagiarism'), 'has-success': fields.check_plagiarism && fields.check_plagiarism.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="check_plagiarism" type="checkbox" v-model="form.check_plagiarism"
               v-validate="''" data-vv-name="check_plagiarism" name="check_plagiarism_fake_element">
        <label class="form-check-label" for="check_plagiarism">
            {{ trans('admin.question.columns.check_plagiarism') }}
        </label>
        <input type="hidden" name="check_plagiarism" :value="form.check_plagiarism">
        <div v-if="errors.has('check_plagiarism')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('check_plagiarism') }}
        </div>
    </div>
</div>
@isset($product)
    @include('brackets/admin-ui::admin.includes.media-uploader', [
        'mediaCollection' => app(App\Models\Question::class)->getMediaCollection('gallery'),
        'media' => $question->getThumbs200ForCollection('gallery'),
        'label' => 'Gallery'
    ])
@else
    @include('brackets/admin-ui::admin.includes.media-uploader', [
        'mediaCollection' => app(App\Models\Question::class)->getMediaCollection('gallery'),
        'label' => 'Gallery'
    ])
@endisset

