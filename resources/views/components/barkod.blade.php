<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <div class="flex justify-start items-center">
        <img src="{{asset("inc/logo/egesedeflogo.png")}}" class="w-12" alt="">
    </div>

    <h1 class="mt-2 text-2xl font-medium text-gray-900">
        Barkod Ekleme Sayfası
    </h1>

    <p class="mt-1 text-gray-500 leading-relaxed">
        Buradan Yeni Bir Ürüne Ait Barkod Oluşturabilirsin. Formu Doldurduktan Sonra Kaydet Butonuna Basmanız Yeterli.
    </p>
</div>
<div class="bg-gray-200 bg-opacity-25">
    <div class="flex justify-end p-6">
        <a class="px-4 py-3 bg-gray-600 text-white text-sm rounded-lg" href="{{route("dashboard")}}">Geri</a>
    </div>
    <form action="{{route("barkodStore")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex">
            <div class="flex items-center gap-10 flex-wrap p-10 ">
                <div class="flex-1">
                    <x-label for="text" value="{{ __('Ürün Adı') }}"/>
                    <x-input id="text" class="mt-1" type="text" name="productName" :value="old('productName')" required
                             autofocus/>
                </div>
                <div class="flex-1">
                    <x-label for="text" value="{{ __('Ürün Rengi') }}"/>
                    <x-input id="text" class="mt-1" type="text" name="productColor" :value="old('productColor')"
                             required autofocus/>
                </div>
                <div class="flex-1">
                    <x-label for="text" value="{{ __('Kutu İçi') }}"/>
                    <x-input id="text" class="mt-1" type="text" name="boxQuantity" :value="old('boxQuantity')" required
                             autofocus/>
                </div>
                <div class="flex-1">
                    <x-label for="text" value="{{ __('Barkod No') }}"/>
                    <x-input id="text" class="mt-1" type="text" name="barcodeEAN13" :value="old('barcodeEAN13')"
                             required autofocus/>
                </div>
                <div class="flex-1">
                    <x-label for="text" value="{{ __('Görsel') }}"/>
                    <x-input id="text" class="mt-1" type="file" name="image"/>

{{--                    <div class="custom-file">--}}
{{--                        <input type="file" name="image" class="custom-file-input" id="chooseFile">--}}
{{--                        <label class="custom-file-label" for="chooseFile">Select file</label>--}}
{{--                    </div>--}}
                </div>
                <div class="flex justify-center items-center p-6">
                    <button id="submit" type="submit" class="px-4 py-3 bg-blue-600 text-white text-sm rounded-lg">Kaydet</button>
                </div>
            </div>
        </div>
    </form>
</div>
