<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Files per page
    |--------------------------------------------------------------------------
    */

    'perPage' => env('PHOTO_FILES_PER_PAGE', 20),

    /*
    |--------------------------------------------------------------------------
    | Max size for uploaded files, in Mb
    |--------------------------------------------------------------------------
    */

    'max_size' => env('PHOTO_MAX_SIZE', 10) * 1024,

    /*
    |--------------------------------------------------------------------------
    | Thumbnail settings
    |--------------------------------------------------------------------------
    | suffix - Suffix and ext for thumbnail file
    | width  - width of thumbnail
    |--------------------------------------------------------------------------
    */

    'thumbnail' => [
        'suffix' => 'thumb',
        'width'  => env('PHOTO_THUMB_WIDTH', 320),
    ],

    /*
    |--------------------------------------------------------------------------
    | Approved mime types for uploaded files
    |--------------------------------------------------------------------------
    */

    'mimeTypes' => 'image/jpeg,image/png,image/gif',

    /*
    |--------------------------------------------------------------------------
    | Path for markers for models Site, RestaurantType, AccommodationType
    |--------------------------------------------------------------------------
    */
    'marker' => [
        'path' => '/marker/',
        'ext'  => '.png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Path for flag icons for Languages
    |--------------------------------------------------------------------------
    */
    'flag' => [
        'path' => '/flag/',
        'ext'  => '.png',
    ]
];
