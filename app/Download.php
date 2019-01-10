<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Download
 *
 * @package App
 * @property string $link
 * @property string $product
*/
class Download extends Model
{
    use SoftDeletes;

    protected $fillable = ['link', 'product_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Download::observe(new \App\Observers\UserActionsObserver);
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
