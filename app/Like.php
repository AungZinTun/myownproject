<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Like
 *
 * @package App
 * @property tinyInteger $like
 * @property string $product
*/
class Like extends Model
{
    use SoftDeletes;

    protected $fillable = ['like', 'product_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Like::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProductIdAttribute($input)
    {
        $this->attributes['product_id'] = $input ? $input : null;
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
