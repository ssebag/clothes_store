<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=['product_id','price','sale','number_of_pieces','invoice','date','user_id','color','size'];

    public function user(){
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function product(){
        return $this->belongsTo(Product::class)->withTrashed();
    }

}
