import AppForm from '../app-components/Form/AppForm';

Vue.component('attempt-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                exam_id:  '' ,
                student_id:  '' ,
                
            }
        }
    }

});