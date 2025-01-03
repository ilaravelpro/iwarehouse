<?php
/*
 * Author: Amirhossein Jahani | iAmir.net
 * Email: me@iamir.net
 * Mobile No: +98-9146941147
 * Last modified: 2021/02/05 Fri 06:39 AM IRST
 * Copyright (c) 2020-2022. Powered by iAmir.net
 */

function iwarehouse_path($path = null)
{
    $path = trim($path, '/');
    return __DIR__ . ($path ? "/$path" : '');
}

function iwarehouse($key = null, $default = null)
{
    return iconfig('iwarehouse' . ($key ? ".$key" : ''), $default);
}

