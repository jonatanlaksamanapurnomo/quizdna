<div class="form-group row align-items-center" :class="{'has-danger': errors.has('exam_id'), 'has-success': fields.exam_id && fields.exam_id.valid }">
    <label for="exam_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.attempt.columns.exam_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.exam_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('exam_id'), 'form-control-success': fields.exam_id && fields.exam_id.valid}" id="exam_id" name="exam_id" placeholder="{{ trans('admin.attempt.columns.exam_id') }}">
        <div v-if="errors.has('exam_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('exam_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('student_id'), 'has-success': fields.student_id && fields.student_id.valid }">
    <label for="student_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.attempt.columns.student_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.student_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('student_id'), 'form-control-success': fields.student_id && fields.student_id.valid}" id="student_id" name="student_id" placeholder="{{ trans('admin.attempt.columns.student_id') }}">
        <div v-if="errors.has('student_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('student_id') }}</div>
    </div>
</div>


