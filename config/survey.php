<?php

return [

    /*
    User model class to use
    */

    'userModel' => 'Illuminate\Foundation\Auth\User',

    /*
     * Database related configurations.
     */
    'database' => [
        /*
         * Name of the tables created by the migrations
         * and used by the models of this package.
         */
        'tables' => [
            'surveys' => 'surveys',
            'sections' => 'sections',
            'questions' => 'questions',
            'entries' => 'entries',
            'answers' => 'answers',
        ],
    ],
];
