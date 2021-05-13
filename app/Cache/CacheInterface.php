<?php

namespace App\Cache;

interface CacheInterface
{

    public function get($key);
    public function put($key,$value,$minutes=null);
    public function remember($key,$value,$minutes=null);
    public function forever($key,$value);
    public function forget($key);

}
