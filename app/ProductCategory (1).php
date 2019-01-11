<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategory
 *
 * @package App
 * @property string $name
*/
class ProductCategory extends Model
{
    protected $fillable = ['name'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        ProductCategory::observe(new \App\Observers\UserActionsObserver);
    }
    
}
