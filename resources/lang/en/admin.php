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

    // Do not delete me :) I'm used for auto-generation
];