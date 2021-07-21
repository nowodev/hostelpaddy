<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Notify Theme
    |--------------------------------------------------------------------------
    |
    | You can change the theme of notifications by specifying the desired theme.
    | By default the theme light is activated, but you can change it by
    | specifying the dark mode. To change theme, update the global variable to `dark`
    |
    */
    
    'theme' => env('NOTIFY_THEME', 'dark'),
    
    /*
    |--------------------------------------------------------------------------
    | Demo URL
    |--------------------------------------------------------------------------
    |
    | if true you can access to the demo documentation of the notify package
    | here: http://localhost:8000/notify/demo, by default is true
    |
    */
    
    'demo' => true,
    
    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    */
    
    'timeout' => 5000,
    
    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | Available model: connect, drake, emotify, smiley, toast
    |
    */
    
    'preset-messages' => [
        'hostel-added' => [
            'message' => 'Hostel added successfully.',
            'type' => 'success',
            'model' => 'toast',
            'title' => '',
        ],
        'hostel-updated' => [
            'message' => 'Hostel updated successfully.',
            'type' => 'success',
            'model' => 'toast',
            'title' => '',
        ],
        'hostel-deleted' => [
            'message' => 'Hostel added successfully.',
            'type' => 'error',
            'model' => 'toast',
            'title' => '',
        ],
        'login' => [
            'message' => 'Login successful.',
            'type' => 'success',
            'model' => 'toast',
            'title' => '',
        ],
        'logout' => [
            'message' => 'You\'re now logged out.',
            'type' => 'error',
            'model' => 'toast',
            'title' => '',
        ],
        'favorites' => [
            'message' => 'Added to Favorites.',
            'type' => 'success',
            'model' => 'toast',
            'title' => '',
        ],
        'unfavored' => [
            'message' => 'Removed from Favorites.',
            'type' => 'error',
            'model' => 'toast',
            'title' => '',
        ],
        'general-error' => [
            'message' => 'An error occurred',
            'type' => 'error',
            'model' => 'drake',
            'title' => '',
        ]
    ],

];
