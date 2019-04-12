<?php

namespace App\ShopAdmin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = 'category';

	/**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
    	'title', 'slug', 'parent_id'
    ];

    public function children() {
    	return $this->hasMany('App\ShopAdmin\Category','parent_id');
    }

    public function parent() {
    	return $this->belongsTo('App\ShopAdmin\Category','parent_id')->select(['id','title','slug']);
    }    
}
