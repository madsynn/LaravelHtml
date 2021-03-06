<?php namespace Arcanedev\LaravelHtml\Tests\Stubs;

use Arcanedev\LaravelHtml\Traits\FormAccessible;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class     ModelThatUsesForms
 *
 * @package  Arcanedev\LaravelHtml\Tests\Stubs
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class ModelThatUsesForms extends Model
{
    /* ------------------------------------------------------------------------------------------------
     |  Traits
     | ------------------------------------------------------------------------------------------------
     */
    use FormAccessible;

    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    protected $table = 'models';

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
     */
    public function formStringAttribute($value)
    {
        return strrev($value);
    }

    public function getStringAttribute($value)
    {
        return strtoupper($value);
    }

    public function formCreatedAtAttribute(Carbon $value)
    {
        return $value->timestamp;
    }

    public function getCreatedAtAttribute($value)
    {
        return '1 second ago';
    }
}
