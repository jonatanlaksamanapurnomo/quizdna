import AppForm from '../app-components/Form/AppForm';

Vue.component('exam-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                exam_name:  '' ,
                exam_code:  '' ,
                exam_start:  '' ,
                exam_end:  '' ,
                total_score:  '' ,
                
            }
        }
    }

});