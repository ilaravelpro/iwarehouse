<?php
/*
 * Author: Amirhossein Jahani | iAmir.net
 * Email: me@iamir.net
 * Mobile No: +98-9146941147
 * Last modified: 2021/08/29 Sun 04:42 PM IRDT
 * Copyright (c) 2020-2022. Powered by iAmir.net
 */

Route::namespace('v1')->prefix('v1')->middleware('auth:api')->group(function () {
    Route::apiResource('warehouses', 'WarehouseController', ['as' => 'api']);
});
