<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <div class="flex justify-start items-center">
        <img src="{{asset("inc/logo/egesedeflogo.png")}}" class="w-12" alt="">
    </div>

    <h1 class="mt-2 text-2xl font-medium text-gray-900">
        Barkod Sistemine Hoş Geldin, {{ Auth::user()->name }}
    </h1>

    <p class="mt-1 text-gray-500 leading-relaxed">
        Barkod oluşturabilir veya oluşturulan barkodların çıktısını alabilirsiniz.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25">
    <div class="flex justify-center p-6">
        <a class="px-4 py-3 bg-blue-600 text-white text-sm rounded-lg" href="{{route("barkodForm")}}">Barkod Ekle</a>
    </div>

    <div class="p-6">
        <form action="{{route("barkodSearch")}}" class="grid">
            <input type="text" name="search" class="rounded-lg" placeholder="Ürün Adı veya Ürün Stok Kodu İle Arama Yapabilirsin......">
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 p-6">

        @foreach($barcodeGet as $row)
            <div class="hover:scale-105 duration-500 p-6 bg-gray-600 duration-400 rounded-lg shadow-2xl shadow-gray-500/20 flex text-white cursor-pointer">
                <div>
                    <div class="h-20 w-20 bg-white flex items-center justify-center ">
                        <img src="{{asset("inc/upload/barcode/".$row->image)}}" alt="">
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$row->productName}}</h2>
                        <div class="flex flex-col  ">
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Ürün Stok Kodu: {{$row->productCode}}
                            </p>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Ürün Barkodu: {{$row->barcodeEAN13}}
                            </p>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Rengi: {{$row->productColor}}
                            </p>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Koli Adeti:  {{$row->boxQuantity}} Adet
                            </p>
                        </div>

                    <div class="mt-5">
{{--                     <button class="px-4 py-3 bg-blue-500 rounded-lg mt-5 text-sm">Barkod Bas</button>--}}
                        <a class="px-4 py-3 bg-blue-500 rounded-lg text-sm" href="{{route("barkodDetail",$row)}}">Barkod Bas</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
