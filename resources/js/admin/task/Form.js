import AppForm from '../app-components/Form/AppForm';

Vue.component('task-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                body:  '' ,
                answer:  '' ,
                score:  '' ,
                quiz:  '' ,
                isCorrect:  false ,

            }
        }
    }

});
