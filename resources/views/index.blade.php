<x-start></x-start>

<x-navbar></x-navbar>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6871cb8b51025b8ce970fde6/1ivu8667l';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Carousel -->
<div id="animation-carousel" class="hidden md:block relative w-full max-w-screen-xl mx-auto my-16" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="assets/img/carousel-1.webp"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel-1">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="assets/img/carousel-2.webp"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel-2">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="assets/img/carousel-3.webp"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="carousel-3">
        </div>
    </div>
    <!-- Slider controls -->
    <button
        class="absolute top-1/2 left-0 z-30 flex items-center justify-center px-8 cursor-pointer group focus:outline-none transform -translate-y-1/2"
        data-carousel-prev>
        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
        </svg>
    </button>

    <button
        class="absolute top-1/2 right-0 z-30 flex items-center justify-center px-8 cursor-pointer group focus:outline-none transform -translate-y-1/2"
        data-carousel-next>
        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
        </svg>
    </button>
</div>

<!-- Kategori Card -->
<div class="max-w-screen-xl mx-auto my-10 py-3 bg-white border border-gray-300 rounded-lg shadow-xl">
    <div class="flex items-center justify-between px-6 md:px-9">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 cursor-default">Kategori Pilihan</h5>
    </div>

    <!-- Grid responsif -->
    <div class="grid grid-cols-3 md:grid-cols-7 m-2 px-2 gap-4 md:gap-8">
        @foreach ($categories as $category)
            <a href="{{ route('products.filter') }}?category[]={{ $category->id }}"
                class="flex flex-col items-center font-medium text-base md:text-lg text-center">
                <img src="{{ asset('assets/uploaded/' . $category->image) }}" alt="{{ $category->name }}"
                    class="w-16 h-16 md:w-20 md:h-20 object-contain">
                <span class="mt-2 break-words">{{ $category->name }}</span>
            </a>
        @endforeach
    </div>
</div>

{{-- <!-- Modal Kategori -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="bg-white rounded-xl max-w-3xl p-6 space-y-4 shadow-lg bg-no-repeat bg-center"
        style="background-image: url('assets/img/modal-apotek.webp'); background-size: 40%;">
        <!-- Judul Modal -->
        <div class="flex items-center justify-between px-4">
            <h2 class="text-xl font-bold text-gray-800 cursor-default">KATEGORI</h2>
            <svg class="w-4 h-4 text-gray-400 cursor-pointer" data-modal-hide="default-modal" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </div>
        <hr class="border-t-2 border-main-color">
        <!-- Isi Modal -->
        <div class="flex flex-row flex-wrap m-2 px-2 gap-8 gap-x-14">
            @foreach ($categories as $category)
                <a href="#" class="flex flex-col items-center font-medium text-lg">
                    <img src="{{ asset('assets/uploaded/' . $category->image) }}" alt="{{ $category->name }}"
                        class="w-20 h-20">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>
</div> --}}

<!-- Section Upload, Voucher, Konsultasi -->
<div class="max-w-screen-xl mx-auto my-20 px-4 md:px-8">
    <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-6">
        <a href= "{{ route('upload') }}" class="size-fit pt-8">
            <img src="assets/img/upload-resep.webp" alt="upload-resep"
                class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
        </a>
        <a href="#" class="size-fit">
            <img src="assets/img/promo&voucher.webp" alt="promo&voucher"
                class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
        </a>
        <a href="#" class="size-fit">
            <img src="assets/img/konsultasi.webp" alt="konsultasi"
                class="object-cover drop-shadow-[11px_11px_15px_0px_#cbd5e0]">
        </a>
    </div>
</div>

<!-- Banner Daftar & Dapatkan -->
<div class="max-w-screen-xl mx-auto my-20 hidden md:block">
    <div class="size-fit">
        <img src="assets/img/daftar&dapatkan.webp" alt="daftar&dapatkan">
    </div>
</div>

<!-- Promo Card -->
<div class="max-w-screen-xl mx-auto my-24">
    <div class="flex items-center justify-between px-3">
        <h5 class="text-2xl md:text-2xl font-bold tracking-tight text-gray-900 cursor-default">
            Obat Promo<br class="md:hidden" /> Bulan Ini
        </h5>
        <a href="{{ route('products.index') }}"
            class="inline-flex items-center text-black gap-2 bg-second-color py-2 px-3 md:py-1 md:px-3 rounded-full text-sm md:text-base">
            Tampilkan Semua
            <svg class="w-5 h-5 md:w-6 md:h-6 border-2 border-black rounded-full p-1" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>

    <!-- Horizontal Scroll on Mobile -->
    <div class="mt-7 overflow-x-auto md:overflow-visible">
        <div class="flex flex-row md:justify-center items-start gap-6 px-3 md:px-0 w-max md:w-full">
            @foreach ($allProducts as $product)
                <a href="{{ route('product.tampilkan', $product->id) }}"
                    class="flex-shrink-0 flex flex-col w-64 rounded-xl border-2 border-gray-300 p-3 bg-white">
                    <div class="flex items-center justify-center bg-gray-100 h-44 rounded-lg overflow-hidden">
                        <img src="{{ asset('assets/uploaded/' . $product->gambar) }}" alt="{{ $product->name }}"
                            class="object-contain h-full max-h-full w-48">
                    </div>
                    <div class="mt-4">
                        <p class="text-xl truncate h-14">{{ $product->name }}</p>
                        <span class="text-3xl font-bold text-black">Rp.
                            {{ number_format($product->harga, 0, ',', '.') }}</span>
                        <div class="flex items-center gap-3 mt-2">
                            <s class="text-base font-semibold text-gray-500">Rp.
                                {{ number_format($product->harga * 1.25, 0, ',', '.') }}</s>
                            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Rekomendasi Card -->
<div class="max-w-screen-xl mx-auto my-20">
    <div class="flex items-center justify-between px-3">
        <h5 class="text-2xl md:text-2xl font-bold tracking-tight text-gray-900 cursor-default">Rekomendasi <br
                class="md:hidden" /> Obat <br class="md:hidden" /> Flu & Batuk
        </h5>
        <a href="{{ route('products.lihat', ['category_id' => 5]) }}"
            class="inline-flex items-center text-black gap-2 bg-second-color py-2 px-3 md:py-1 md:px-3 rounded-full text-sm md:text-base">
            Tampilkan Semua
            <svg class="w-5 h-5 md:w-6 md:h-6 border-2 border-black rounded-full p-1" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>

    <div class="mt-7 overflow-x-auto md:overflow-visible">
        <div class="flex flex-row md:justify-center items-start gap-6 px-3 md:px-0 w-max md:w-full">
            <!-- Product Card -->
            @foreach ($headacheProducts as $product)
                <a href="{{ route('product.tampilkan', $product->id) }}"
                    class="flex-shrink-0 flex flex-col w-64 rounded-xl border-2 border-gray-300 p-3 bg-white">
                    <div class="flex items-center justify-center bg-gray-100 h-44 rounded-lg overflow-hidden">
                        <img src="{{ asset('assets/uploaded/' . $product->gambar) }}" alt="{{ $product->name }}"
                            class="object-contain h-full max-h-full w-48">
                    </div>

                    <div class="px-2 flex-grow flex flex-col">
                        <p class="text-xl truncate h-14">{{ $product->name }}</p>
                        <span class="text-3xl font-bold">Rp. {{ number_format($product->harga, 0, ',', '.') }}</span>

                        <div class="flex items-center gap-5 my-2">
                            <s class="text-base font-semibold text-gray-500">Rp.
                                {{ number_format($product->harga * 1.25, 0, ',', '.') }}</s>
                            <span class="text-xs text-red-600 font-bold bg-pink-200 px-1">20%</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Section Keuntungan Belanja -->
<div class="max-w-screen-xl mx-auto my-12">
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 cursor-default text-center">
        Keuntungan Belanja di Apotek Huda
    </h5>
    <div class="flex flex-col items-center justify-center mt-6 gap-y-10 gap-x-20 md:flex-row">
        <span class="w-44">
            <img src="assets/img/gratis-ongkir.webp" alt="gratis-ongkir" class="object-cover w-full mx-auto">
        </span>
        <span class="w-44">
            <img src="assets/img/pengiriman-cepat.webp" alt="pengiriman-cepat" class="object-cover w-full mx-auto">
        </span>
        <span class="w-44">
            <img src="assets/img/promo-menarik.webp" alt="promo-menarik" class="object-cover w-full mx-auto">
        </span>
        <span class="w-44">
            <img src="assets/img/dijamin-asli.webp" alt="dijamin-asli" class="object-cover w-full mx-auto">
        </span>
        <span class="w-44">
            <img src="assets/img/psef.webp" alt="psef" class="object-cover w-full mx-auto">
        </span>
    </div>
</div>

{{-- <!-- Artikel Section -->
<div class="max-w-screen-xl mx-auto my-32">
    <h5 class="mb-5 ml-3 text-2xl font-bold tracking-tight text-gray-900 cursor-default">Artikel Kesehatan</h5>
    <div class="flex flex-row items-center flex-nowrap mt-7 gap-x-4">
        <!-- Artikel Card -->
        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>

            </div>
        </div>

        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>

            </div>
        </div>

        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>


            </div>
        </div>

        <div class="flex flex-col w-full max-w-xs rounded-3xl border-2 border-gray-300 mx-3 my-2 gap-y-2">
            <div class="size-full">
                <img src="assets/img/artikel.webp" alt="artikel" class="object-cover">
            </div>

            <div class="px-5 mb-3 pb-2">
                <h5 class="text-xl font-bold pb-3">Pentingnya Menjaga Kesehatan Mata di Usia Dini</h5>
                <p class="text-sm mb-3 font-normal text-gray-700">Beberapa hal yang perlu diperhatikan dalam menjaga
                    kesehatan mata di usia dini. </p>
                <a href="#"
                    class="font-semibold text-base italic underline underline-offset-4 hover:text-second-color">
                    Baca Selengkapnya...
                </a>


            </div>
        </div>

    </div>
</div> --}}

<!-- Footer -->
<x-footer></x-footer>

<x-end></x-end>
