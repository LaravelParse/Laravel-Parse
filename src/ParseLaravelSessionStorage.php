<?php

namespace GrahamCampbell\Parse;

use Illuminate\Support\Facades\Session;
use Parse\ParseStorageInterface;

class ParseLaravelSessionStorage implements ParseStorageInterface
{
    /**
     * Parse will store its values in a specific key.
     *
     * @var string
     */
    private $storageKey = 'parseData';

    public function __construct()
    {

    }

    public function set($key, $value)
    {
        Session::put($this->storageKey . '.' . $key, $value);
    }

    public function remove($key)
    {
        Session::forget($this->storageKey . '.' . $key);
    }

    public function get($key)
    {
        if (Session::has($this->storageKey . '.' . $key)) {
            return Session::get($this->storageKey . '.' . $key);
        }

        return;
    }

    public function clear()
    {
        Session::forget($this->storageKey);
    }

    public function save()
    {
        // No action required.    PHP handles persistence for $_SESSION.
    }

    public function getKeys()
    {
        return array_keys(Session::get($this->storageKey));
    }

    public function getAll()
    {
        return Session::get($this->storageKey);
    }

}