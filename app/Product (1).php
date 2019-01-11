<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package App
 * @property string $name
 * @property text $description
 * @property string $photo1
 * @property string $photo2
 * @property string $link
 * @property integer $download_size
*/
class Product extends Model
{
    protected $fillable = ['name', 'description', 'photo1', 'photo2', 'link', 'download_size'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Product::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDownloadSizeAttribute($input)
    {
        $this->attributes['download_size'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_product_category');
    }
    
    public function tag()
    {
        return $this->belongsToMany(ProductTag::class, 'product_product_tag');
    }
    
    public function type()
    {
        return $this->belongsToMany(Type::class, 'product_type')->withTrashed();
    }
    
}
