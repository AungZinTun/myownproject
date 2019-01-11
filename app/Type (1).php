<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Type
 *
 * @package App
 * @property string $title
*/
class Type extends Model
{
    use SoftDeletes;

    protected $fillable = ['title'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Type::observe(new \App\Observers\UserActionsObserver);
    }
    
}
