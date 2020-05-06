<?php

use Illuminate\Support\Facades\Route;

Route::resource('/permissions', 'PermissionsController', ['as' => 'laratrust'])
    ->only(['index', 'edit', 'update']);

Route::resource('/roles', 'RolesController', ['as' => 'laratrust'])
    ->except(['show']);

Route::resource('/roles-assignment', 'RolesAssignmentController', ['as' => 'laratrust'])
    ->only(['index', 'edit', 'update']);