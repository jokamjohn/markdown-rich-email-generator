<?php

use App\Commands\EmailConvert;

Route::get('/', function() {
    return Redirect::to('latest');
});

Route::get('latest', function() {
    return Bus::dispatch(
        new EmailConvert('2015-10-20.md')
    );
});

Route::get('welcome', function() {
    return Bus::dispatch(
        new EmailConvert('welcome.md')
    );
});
