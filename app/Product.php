<?php

namespace App;
use App\Size;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=
    [
        'product_serial_num','style_id',
        'product_price','product_desc',
        'product_price_sale','product_quan',
        'mater_id','comp_id'
    ];
    public function style()
    {
        return $this->belongsTo('App\Style','style_id');
    }
    public function material()
    {
        return $this->belongsTo('App\Material','mater_id');
    }
    public function company()
    {
        return $this->belongsTo('App\Company','comp_id');
    }
    public function colors()
    {
        return $this->belongsToMany('App\Color','product_colors','product_id','color_id');

    }

    public function styleDetails()
    {
        return $this->belongsToMany('App\StyleDetails','product_style_details','product_id','style_details_id');
    }
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetails','product_id');
    }
    
}
