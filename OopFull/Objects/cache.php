<?php

class PhpCache
{
    protected $path = null;
    protected $duration = null;
    //constructor to initialize
    function __construct($path, $duration = 60)
    {
        $this->path = $path;
        $this->duration = $duration;
    }
    //read the cache from the saved file if the time has not expired
    //unserialized then read file content
    function get($id)
    {
        $file = $this->path . $id . '.cache';
        if (file_exists($file) && (time() - filemtime($file) < $this->duration)) {
            return unserialize(file_get_contents($file));
        } else {
            return null;
        }
    }

    function set($id, $obj)
    {
        $file = $this->path . $id . '.cache';
        file_put_contents($file, serialize($obj));
    }
}

$cache = new PhpCache(dirname(__FILE__) . '\\cache\\', 600);
$key = 'mykey';
$value = $cache->get($key);
if ($value == null) {
    $value = 'new value';
    $cache->set($key, $value);
    echo 'created' . $value;
} else {
    echo 'got' . $value;
}
