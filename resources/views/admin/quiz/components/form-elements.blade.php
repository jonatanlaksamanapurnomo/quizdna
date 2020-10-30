<div class="form-group row align-items-center" :class="{'has-danger': errors.has('quiz_id'), 'has-success': fields.quiz_id && fields.quiz_id.valid }">
    <label for="quiz_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.quiz.columns.quiz_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.quiz_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('quiz_id'), 'form-control-success': fields.quiz_id && fields.quiz_id.valid}" id="quiz_id" name="quiz_id" placeholder="{{ trans('admin.quiz.columns.quiz_id') }}">
        <div v-if="errors.has('quiz_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('quiz_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('quiz_name'), 'has-success': fields.quiz_name && fields.quiz_name.valid }">
    <label for="quiz_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.quiz.columns.quiz_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.quiz_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('quiz_name'), 'form-control-success': fields.quiz_name && fields.quiz_name.valid}" id="quiz_name" name="quiz_name" placeholder="{{ trans('admin.quiz.columns.quiz_name') }}">
        <div v-if="errors.has('quiz_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('quiz_name') }}</div>
    </div>
</div>


