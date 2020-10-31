<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('exam_name'), 'has-success': fields.exam_name && fields.exam_name.valid }">
    <label for="exam_name" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.exam.columns.exam_name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.exam_name" v-validate="'required'" @input="validate($event)"
               class="form-control"
               :class="{'form-control-danger': errors.has('exam_name'), 'form-control-success': fields.exam_name && fields.exam_name.valid}"
               id="exam_name" name="exam_name" placeholder="{{ trans('admin.exam.columns.exam_name') }}">
        <div v-if="errors.has('exam_name')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('exam_name') }}
        </div>
    </div>
</div>


<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('exam_start'), 'has-success': fields.exam_start && fields.exam_start.valid }">
    <label for="exam_start" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.exam.columns.exam_start') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.exam_start" :config="datetimePickerConfig"
                      v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                      :class="{'form-control-danger': errors.has('exam_start'), 'form-control-success': fields.exam_start && fields.exam_start.valid}"
                      id="exam_start" name="exam_start"
                      placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('exam_start')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('exam_start') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('exam_end'), 'has-success': fields.exam_end && fields.exam_end.valid }">
    <label for="exam_end" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.exam.columns.exam_end') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.exam_end" :config="datetimePickerConfig"
                      v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                      :class="{'form-control-danger': errors.has('exam_end'), 'form-control-success': fields.exam_end && fields.exam_end.valid}"
                      id="exam_end" name="exam_end"
                      placeholder="{{ trans('brackets/admin-ui::admin.forms.select_date_and_time') }}"></datetime>
        </div>
        <div v-if="errors.has('exam_end')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('exam_end')
            }}
        </div>
    </div>
</div>



