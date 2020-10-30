import AppForm from '../app-components/Form/AppForm';

Vue.component('quiz-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                quiz_id:  '' ,
                quiz_name:  '' ,
                
            }
        }
    }

});