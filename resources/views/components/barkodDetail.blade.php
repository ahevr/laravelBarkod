<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <div class="flex justify-start items-center">
        <img src="{{asset("inc/logo/egesedeflogo.png")}}" class="w-12" alt="">
    </div>

    <h1 class="mt-2 text-2xl font-medium text-gray-900">
        {{$barkodDetail->productName}} Ürününe Ait Barkod Bilgileri
    </h1>
    <p class="mt-1 text-gray-500 leading-relaxed">
        Buradan {{$barkodDetail->productName}} Adlı ürünün barkodunu yazdırabilirsiniz.
    </p>
</div>
<div class="bg-gray-200 bg-opacity-25">
    <div class="flex justify-end p-6 gap-6">
        <a class="px-4 py-3 bg-gray-600 text-white text-sm rounded-lg" href="{{route("dashboard")}}">Geri</a>
        <button class="px-4 py-3 bg-red-600 text-white text-sm rounded-lg" onclick="printDiv('printableArea')">Barkod Bas</button>
{{--        <a href="{{route("downloadPDF",$barkodDetail)}}" class="px-4 py-3 bg-red-600 text-white text-sm rounded-lg">Barkod Bas</a>--}}
    </div>
    <div class="flex min-h-screen flex-col mt-6 bg-gray-50">
        <div class="bg-white px-6 pt-8 pb-8 shadow-xl border sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10" id="printableArea">
            <div class="mx-auto max-w-md">
                <div class="flex items-center gap-6">
                    <div>
                        <img src="{{asset("inc/logo/egesedeflogo.png")}}" class="h-16"/>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xl font-bold uppercase">Ege Sedef Aydınlatma, INC</p>
                        <p class="text-sm">Dokuz Eylül Mah. 695Sok. No:13 <br>Gaziemir / İZMİR<br> Posta Kodu:35140 <br>
                            TÜRKİYE(TR) </p>
                    </div>
                </div>
                <hr class="mt-5 h-px mx-auto my-4 bg-gray-700">
                <div class="mt-5">
                    <div class="flex flex-col items-center">
                        <div class="mt-1 text-sm">
                            <img src="{{asset("inc/upload/barcode/".$barkodDetail->image)}}" class="w-48" alt="..">
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Product Code
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Product Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Product Color
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Box In
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        {{$barkodDetail->productCode}}
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        {{$barkodDetail->productName}}
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                        {{$barkodDetail->productColor}}
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                        {{$barkodDetail->boxQuantity}} pc
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-5 flex flex-col items-center">
                            {!! DNS2D::getBarcodeSVG("$barkodDetail->barcodeEAN13", 'QRCODE',2,2) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
