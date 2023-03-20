{{--<style>--}}
{{--    @media print {--}}
{{--        html, body {--}}
{{--            width: 40mm;--}}
{{--            height: 80mm;--}}
{{--            position:absolute;--}}
{{--        }--}}
{{--    }--}}

{{--</style>--}}

<div class="flex min-h-screen flex-col justify-center bg-gray-50 py-6" >
    <div class="bg-white px-6 pt-8 pb-8 shadow-xl border sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10" id="printableArea">
        <div class="mx-auto max-w-md">
            <div class="flex items-center gap-6">
                <div>
                    <img src="{{asset("inc/logo/egesedeflogo.png")}}" class="h-16"/>
                </div>
                <div class="flex flex-col">
                    <p class="text-xl font-bold uppercase">Ege Sedef Aydınlatma, INC</p>
                    <p class="text-sm">Dokuz Eylül Mah. 695Sok. No:13 <br>Gaziemir / İZMİR<br> Posta Kodu:35140  <br> TÜRKİYE(TR) </p>
                </div>
            </div>
            <hr class="mt-5 h-px mx-auto my-4 bg-gray-700">

            <div class="mt-5">
                <div class="flex flex-col items-center">
                    <div class="mt-1 text-sm">
                        <img src="{{asset("inc/upload/barcode/1678881855.jpg")}}" class="w-48" alt="..">
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
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    M14771
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    0014-1P
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    BLK
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    1 pc
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-5">
                        <img src="{{asset("inc/upload/barcode/ean13.png")}}" class="w-48" alt="">
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<input type="button" onclick="printDiv('printableArea')" value="print a div!" />

{{--<script>--}}
{{--    function printDiv(divName) {--}}
{{--        var printContents = document.getElementById(divName).innerHTML;--}}
{{--        var originalContents = document.body.innerHTML;--}}

{{--        document.body.innerHTML = printContents;--}}

{{--        window.print();--}}

{{--        document.body.innerHTML = originalContents;--}}
{{--    }--}}
{{--</script>--}}
