import AppForm from '../app-components/Form/AppForm';


Vue.component('question-form', {
    mixins: [AppForm],
    data: function () {
        return {
            form: {
                question: '',
                score: '',
                exam: '',
                use_typingdna: false,
                check_plagiarism: false,

            },
            mediaCollections: ['gallery']
        }
    }

});
