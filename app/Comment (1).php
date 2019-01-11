<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 *
 * @package App
 * @property string $description
 * @property string $product
*/
class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = ['description', 'product_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Comment::observe(new \App\Observers\UserActionsObserver);
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
