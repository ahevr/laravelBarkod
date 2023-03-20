<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Barcode extends Model
{

    use Searchable;

    public function toSearchableArray(){

        return  [
            "productName" => $this->productName,
            "productCode" => $this->productCode,
        ];
    }

    protected $table = "barcodes";
    protected $guarded = [];



//    public function setImageAttribute($value){
//        if($value) {
//            $file =$value;
//            $extenstion = $file->getClientOriginalExtension();
//            $filename = time().'.'.$extenstion;
//            $file->move('inc/upload/barcode/', $filename);
//            $this->attributes['image'] = $filename;
//        }
//    }









}
