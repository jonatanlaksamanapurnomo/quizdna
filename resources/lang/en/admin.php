<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'task' => [
        'title' => 'Tasks',

        'actions' => [
            'index' => 'Tasks',
            'create' => 'New Task',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'body' => 'Body',
            'score' => 'Score',
            'isCorrect' => 'IsCorrect',
            
        ],
    ],

    'task' => [
        'title' => 'Tasks',

        'actions' => [
            'index' => 'Tasks',
            'create' => 'New Task',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'body' => 'Body',
            'answer' => 'Answer',
            'score' => 'Score',
            'isCorrect' => 'IsCorrect',
            
        ],
    ],

    'task' => [
        'title' => 'Tasks',

        'actions' => [
            'index' => 'Tasks',
            'create' => 'New Task',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'answer' => 'Answer',
            'score' => 'Score',
            'isCorrect' => 'IsCorrect',
            
        ],
    ],

    'task' => [
        'title' => 'Tasks',

        'actions' => [
            'index' => 'Tasks',
            'create' => 'New Task',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'answer' => 'Answer',
            'score' => 'Score',
            'quiz_id' => 'Quiz',
            'isCorrect' => 'IsCorrect',
            
        ],
    ],

    'quiz' => [
        'title' => 'Quizzes',

        'actions' => [
            'index' => 'Quizzes',
            'create' => 'New Quiz',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'quiz_id' => 'Quiz',
            'quiz_name' => 'Quiz name',
            
        ],
    ],

    'exam' => [
        'title' => 'Exams',

        'actions' => [
            'index' => 'Exams',
            'create' => 'New Exam',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'exam_name' => 'Exam name',
            'exam_code' => 'Exam code',
            'exam_start' => 'Exam start',
            'exam_end' => 'Exam end',
            
        ],
    ],

    'question' => [
        'title' => 'Questions',

        'actions' => [
            'index' => 'Questions',
            'create' => 'New Question',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'question' => 'Question',
            'score' => 'Score',
            'use_typingdna' => 'Use typingdna',
            'check_plagiarism' => 'Check plagiarism',
            
        ],
    ],

    'exam' => [
        'title' => 'Exams',

        'actions' => [
            'index' => 'Exams',
            'create' => 'New Exam',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'exam_name' => 'Exam name',
            'exam_code' => 'Exam code',
            'exam_start' => 'Exam start',
            'exam_end' => 'Exam end',
            
        ],
    ],

    'question' => [
        'title' => 'Questions',

        'actions' => [
            'index' => 'Questions',
            'create' => 'New Question',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'question' => 'Question',
            'score' => 'Score',
            'exam_id' => 'Exam',
            'use_typingdna' => 'Use typingdna',
            'check_plagiarism' => 'Check plagiarism',
            
        ],
    ],

    'exam' => [
        'title' => 'Exams',

        'actions' => [
            'index' => 'Exams',
            'create' => 'New Exam',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'exam_name' => 'Exam name',
            'exam_code' => 'Exam code',
            'exam_start' => 'Exam start',
            'exam_end' => 'Exam end',
            
        ],
    ],

    'student' => [
        'title' => 'Students',

        'actions' => [
            'index' => 'Students',
            'create' => 'New Student',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            'exam_id' => 'Exam',
            
        ],
    ],

    'student' => [
        'title' => 'Students',

        'actions' => [
            'index' => 'Students',
            'create' => 'New Student',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            
        ],
    ],

    'answer' => [
        'title' => 'Answers',

        'actions' => [
            'index' => 'Answers',
            'create' => 'New Answer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'answer' => [
        'title' => 'Answers',

        'actions' => [
            'index' => 'Answers',
            'create' => 'New Answer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'answer' => 'Answer',
            'score' => 'Score',
            'typingdna_score' => 'Typingdna score',
            'exam_id' => 'Exam',
            'student_id' => 'Student',
            
        ],
    ],

    'answer' => [
        'title' => 'Answers',

        'actions' => [
            'index' => 'Answers',
            'create' => 'New Answer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'answer' => 'Answer',
            'score' => 'Score',
            'typingdna_score' => 'Typingdna score',
            'exam_id' => 'Exam',
            'student_id' => 'Student',
            'question_id' => 'Question',
            
        ],
    ],

    'student' => [
        'title' => 'Students',

        'actions' => [
            'index' => 'Students',
            'create' => 'New Student',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            'exam_id' => 'Exam',
            
        ],
    ],

    'student' => [
        'title' => 'Students',

        'actions' => [
            'index' => 'Students',
            'create' => 'New Student',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'name' => 'Name',
            
        ],
    ],

    'answer' => [
        'title' => 'Answers',

        'actions' => [
            'index' => 'Answers',
            'create' => 'New Answer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'answer' => 'Answer',
            'score' => 'Score',
            'typingdna_score' => 'Typingdna score',
            'exam_id' => 'Exam',
            'student_id' => 'Student',
            'question_id' => 'Question',
            
        ],
    ],

    'attempt' => [
        'title' => 'Attempt',

        'actions' => [
            'index' => 'Attempt',
            'create' => 'New Attempt',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'attempt' => [
        'title' => 'Attempts',

        'actions' => [
            'index' => 'Attempts',
            'create' => 'New Attempt',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'exam_id' => 'Exam',
            'student_id' => 'Student',
            
        ],
    ],

    'exam' => [
        'title' => 'Exams',

        'actions' => [
            'index' => 'Exams',
            'create' => 'New Exam',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'exam_name' => 'Exam name',
            'exam_code' => 'Exam code',
            'exam_start' => 'Exam start',
            'exam_end' => 'Exam end',
            'total_score' => 'Total score',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];