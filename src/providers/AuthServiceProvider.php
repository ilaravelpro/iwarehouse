<?php
/*
 * Author: Amirhossein Jahani | iAmir.net
 * Email: me@iamir.net
 * Mobile No: +98-9146941147
 * Last modified: 2021/02/05 Fri 06:39 AM IRST
 * Copyright (c) 2020-2022. Powered by iAmir.net
 */

namespace iLaravel\iWarehouse\Providers;

use Illuminate\Support\Facades\Gate;
class AuthServiceProvider extends \Illuminate\Foundation\Support\Providers\AuthServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();
        Gate::resource('warehouses', 'iLaravel\Core\Vendor\iRole\iRolePolicy');
    }
}
