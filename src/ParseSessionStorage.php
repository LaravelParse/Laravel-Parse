<?php

namespace GrahamCampbell\Parse;

use Parse\ParseStorageInterface;

class ParseSessionStorage implements ParseStorageInterface
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

    /**
     * Sets a key-value pair in storage.
     *
     * @param string $key   The key to set
     * @param mixed  $value The value to set
     *
     * @return null
     */
    public function set($key, $value)
    {
        \Session::put($this->storageKey . '.' . $key, $value);
    }

    /**
     * Remove a key from storage.
     *
     * @param string $key The key to remove.
     *
     * @return null
     */
    public function remove($key)
    {
        \Session::forget($this->storageKey . '.' . $key);
    }

    /**
     * Gets the value for a key from storage.
     *
     * @param string $key The key to get the value for
     *
     * @return mixed
     */
    public function get($key)
    {
        if (\Session::has($this->storageKey . '.' . $key)) {
            return \Session::get($this->storageKey . '.' . $key);
        }
        return;
    }

    /**
     * Clear all the values in storage.
     *
     * @return null
     */
    public function clear()
    {
        \Session::forget($this->storageKey);
    }

    /**
     * Save the data, if necessary. This would be a no-op when using the
     * $_SESSION implementation, but could be used for saving to file or
     * database as an action instead of on every set.
     *
     * @return null
     */
    public function save()
    {
        return;
    }

    /**
    * Get all keys in storage.
    *
    * @return array
    */
    public function getKeys()
    {
        return array_keys(\Session::get($this->storageKey));
    }

    /**
     * Get all key-value pairs from storage.
     *
     * @return array
     */
    public function getAll()
    {
        return \Session::get($this->storageKey);
    }
}
