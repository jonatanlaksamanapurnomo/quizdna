<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer'), 'has-success': fields.answer && fields.answer.valid }">
    <label for="answer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.answer.columns.answer') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.answer" v-validate="'required'" id="answer" name="answer"></textarea>
        </div>
        <div v-if="errors.has('answer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('score'), 'has-success': fields.score && fields.score.valid }">
    <label for="score" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.answer.columns.score') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.score" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('score'), 'form-control-success': fields.score && fields.score.valid}" id="score" name="score" placeholder="{{ trans('admin.answer.columns.score') }}">
        <div v-if="errors.has('score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('score') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('typingdna_score'), 'has-success': fields.typingdna_score && fields.typingdna_score.valid }">
    <label for="typingdna_score" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.answer.columns.typingdna_score') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.typingdna_score" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('typingdna_score'), 'form-control-success': fields.typingdna_score && fields.typingdna_score.valid}" id="typingdna_score" name="typingdna_score" placeholder="{{ trans('admin.answer.columns.typingdna_score') }}">
        <div v-if="errors.has('typingdna_score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('typingdna_score') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('exam_id'), 'has-success': fields.exam_id && fields.exam_id.valid }">
    <label for="exam_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.answer.columns.exam_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.exam_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('exam_id'), 'form-control-success': fields.exam_id && fields.exam_id.valid}" id="exam_id" name="exam_id" placeholder="{{ trans('admin.answer.columns.exam_id') }}">
        <div v-if="errors.has('exam_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('exam_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('student_id'), 'has-success': fields.student_id && fields.student_id.valid }">
    <label for="student_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.answer.columns.student_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.student_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('student_id'), 'form-control-success': fields.student_id && fields.student_id.valid}" id="student_id" name="student_id" placeholder="{{ trans('admin.answer.columns.student_id') }}">
        <div v-if="errors.has('student_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('student_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('question_id'), 'has-success': fields.question_id && fields.question_id.valid }">
    <label for="question_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.answer.columns.question_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.question_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('question_id'), 'form-control-success': fields.question_id && fields.question_id.valid}" id="question_id" name="question_id" placeholder="{{ trans('admin.answer.columns.question_id') }}">
        <div v-if="errors.has('question_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('question_id') }}</div>
    </div>
</div>


