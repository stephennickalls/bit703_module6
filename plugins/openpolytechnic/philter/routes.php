<?php namespace Openpolytechnic\Philter;
use Route;
use Request;



/**
 * Class to filer requests to the required methods.
 */
$api = new Classes\Api();


Route::options('/{any}', function() {
    $headers = [
        'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers'=> 'X-Requested-With, Content-Type, X-Auth-Token, Origin, Authorization'
    ];
    return \Response::make('You are connected to the API', 200, $headers);
})->where('any', '.*');


Route::options('api/v1/{all}', function() {
    $headers = [
        'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers'=> 'X-Requested-With, Content-Type, X-Auth-Token, Origin, Authorization'
    ];
    return \Response::make('You are connected to the API', 200, $headers);
})->where('any', '.*');


Route::options('api/v1/{any}/{all}', function() {
    $headers = [
        'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers'=> 'X-Requested-With, Content-Type, X-Auth-Token, Origin, Authorization'
    ];
    return \Response::make('You are connected to the API', 200, $headers);
})->where('any', '.*');



// Route::options('api/v1/{all}', function() {
//     // file_put_contents('test.txt', 'hello from prefilght api/v1/{all}', FILE_APPEND);
//     // file_put_contents('test.txt', "\n", FILE_APPEND);
//     if (Request::getMethod() == "OPTIONS") {
//         echo('You are connected to the API');
//         die();
//     }
// });

// Route::options('api/v1/{any}/{all}', function() {
//     // file_put_contents('test.txt', 'hello from prefilght api/v1/{any}/{all}', FILE_APPEND);
//     // file_put_contents('test.txt', "\n", FILE_APPEND);
//     if (Request::getMethod() == "OPTIONS") {
//         echo('You are connected to the API');
//         die();
//     }
// });


Route::post('api/v1/login', function() use($api) {
    return $api->login();
});

Route::post('api/v1/users/add', function() use ($api) {
    return $api->registerUser();
});

Route::get('api/v1/logout', function() use ($api) {
    return $api->logout();
});

Route::get('api/v1/user', function() use ($api) {
//     $headers = [
//         // 'Access-Control-Allow-Origin'=> 'http://localhost:8080',
//         'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
//         'Access-Control-Allow-Headers'=> 'X-Requested-With, Content-Type, X-Auth-Token, Origin, Authorization'
//     ];
//     $value = Request::header('Authorization');
//     file_put_contents('test.txt', $value, FILE_APPEND);
//     return \Response::make($api->getUser(), 200, $headers);
// })->where('any', '.*');
file_put_contents('test.txt', 'hello from /user', FILE_APPEND);
    return $api->getUser();
//     $value = Request::header('Authorization');
//     file_put_contents('test.txt', $value, FILE_APPEND);
//     return $api->getUser();
});

Route::post('api/v1/users/update', function() use ($api) {
    return $api->updateUser();
});

Route::post('api/v1/users/delete', function() use ($api) {
    return $api->deleteUser();
});

Route::get('api/v1/images', function() use ($api) {    
    return $api->getImages();
});


Route::get('api/v1/images/{image_id}', function($image_id) use ($api) {
    return $api->getImage($image_id);
});

Route::get('api/v1/img/user', function() use ($api) {
    // file_put_contents('test.txt', 'hello from images/user', FILE_APPEND);
    // file_put_contents('test.txt', "\n", FILE_APPEND);
    return $api->getUserImages();
});

Route::post('api/v1/img/add', function() use ($api) {
    file_put_contents('test.txt', "hello from image/add\n", FILE_APPEND);
    return $api->addImage();
});

Route::post('api/v1/images/update/{image_id}', function($image_id) use ($api) {
    return $api->updateImage($image_id);
});

Route::get('api/v1/images/delete/{image_id}', function($image_id) use ($api) {
    return $api->deleteImage($image_id);
});


// Route::options('api/v1/{all}', function() {
//     if (Request::getMethod() == "OPTIONS") {
//         echo('You are connected to the API');
//         die();
//     }
// });

// Route::options('api/v1/{any}/{all}', function() {
//     if (Request::getMethod() == "OPTIONS") {
//         echo('You are connected to the API');
//         die();
//     }
// });

/***** YOU NEED TO IMPLEMENT THE MISSING ROUTES *****/