import AppForm from '../app-components/Form/AppForm';

Vue.component('answer-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                answer:  '' ,
                score:  '' ,
                typingdna_score:  '' ,
                exam_id:  '' ,
                student_id:  '' ,
                question_id:  '' ,
                
            }
        }
    }

});