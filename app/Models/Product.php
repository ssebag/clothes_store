<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{


    use SoftDeletes;
    protected $fillable=['model_name' , 'more_details' , 'texture' , 'height','price', 'sale' ,
     'image_url' , 'company_id' , 'deleted_at' ];

    use HasFactory;
    public function company(){
        return $this->belongsTo('App\Models\Company','company_id');
    }
    public function color(){
        return $this->belongsTo('App\Models\Color','color_id');
    }
    public function size(){
        return $this->belongsTo('App\Models\Size','size_id');
    }
    public function invoice(){
        return $this->hasMany(Invoice::class);
      }
}
