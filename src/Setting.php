<?php

namespace Arafatkn\LaravelSettings;

use Arafatkn\LaravelSettings\Models\Setting as SettingModel;

class Setting
{
    /**
     * Check whether the key exists or not
     *
     * @param string $key
     * @return boolean
     */
    public function has($key)
    {
        return (bool) SettingModel::where('key', $key)->count();
    }

    /**
     * Set a specific setting with key.
     *
     * @param string $key
     * @param string|null $value
     * @param bool $autoload
     * @return mixed
     */
    public function set($key, $value = null, $autoload = false)
    {
        return SettingModel::updateOrCreate(
            [
                'key' => $key
            ],
            [
                'value' => $value,
                'autoload' => $autoload,
            ]
        );
    }

    /**
     * Get a single setting
     *
     * @param string $key
     * @return string|null
     */
    public function get($key, $default = null)
    {
        $setting = SettingModel::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Remove single setting
     *
     * @param string $key
     * @return boolean
     */
    public function forget($key)
    {
        return SettingModel::where('key', $key)->delete();
    }

    /**
     * Remove all settings
     *
     * @return boolean
     */
    public function clean()
    {
        return SettingModel::query()->delete();
    }

    /**
     * Get All Settings
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return SettingModel::all();
    }
}