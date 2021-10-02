<?php

namespace Arafatkn\LaravelSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * Make "key" column as primary
     * @var string
     */
    protected $primaryKey = 'key';

    /**
     * SetPrimary Key as string
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Set Primary Key as not incrementing value
     * @var bool
     */
    public $incrementing = false;

    /**
     * Disabled Laravel default timestamp in settings table.
     * @var bool
     */
    public $timestamps = false;

    /**
     * make the key, value and autoload fillable
     */
    protected $fillable = ['key', 'value', 'autoload'];

}
