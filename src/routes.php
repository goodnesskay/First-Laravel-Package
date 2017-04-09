<?php

Route::get('doodle',function(){

    echo "I love you Laravel";

});

Route::get('add/{a}/{b}', 'Codebag\Doodle\DoodleController@add');
Route::get('subtract/{a}/{b}', 'Codebag\Doodle\DoodleController@subtract');