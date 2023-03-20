<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Barryvdh\DomPDF\Facade\Pdf;

class BarcodeController extends Controller
{


    public  function  testo(){
        return view("testo");
    }

    public function index(){
        $barcodeGet = Barcode::orderBy("id","ASC")->paginate(15);
        return view("dashboard",["barcodeGet"=>$barcodeGet]);
    }

    public function barkodForm(){
        return view("barkodForm");
    }

    public function barkodDetail($id){

        $barkodDetail = Barcode::findOrFail($id);

        return view("barkodDetailForm",["barkodDetail"=>$barkodDetail]);

    }

    public function downloadPDF($id){

        $barkodDetail = Barcode::findOrFail($id);

        $customPaper = array(0,0,283.464,340.157);




        $pdf = PDF::loadView('pdf',compact('barkodDetail'))->setPaper($customPaper);
//        $pdf = PDF::loadView('pdf',compact('barkodDetail'));

        return $pdf->download("SiparişNo: #SDF-".$barkodDetail->productName."-".date("Y").".pdf");

    }

    public function store(Request $request){

            $barkode = new Barcode();
            $barkode->productName = $request->productName;
            $barkode->productColor = $request->productColor;
            $barkode->boxQuantity = $request->boxQuantity;
            $barkode->barcodeEAN13 = $request->barcodeEAN13;

            if ($request->hasFile('image')) {
                $image = Image::make($request->file('image'));
                $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $image->greyscale()->save(public_path("inc/upload/barcode/") . $imageName);
            }

            $barkode->image = $imageName;
            $barkode->save();

            return to_route('barkodForm')->with("success", "$request->name" . " Adlı Ürün Başarılı Bir Şekilde Eklendi");
    }

    public function searchProduct(){
        $barcodeGet = Barcode::search(request('search'))->paginate(4);
        return view("dashboard",compact("barcodeGet"));
    }
}
