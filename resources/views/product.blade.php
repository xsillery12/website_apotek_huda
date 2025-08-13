<x-start></x-start>

<x-navbar></x-navbar>

@extends('layouts.app')

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

<div x-data="{ isOpen: false }" class="relative bg-white">
    <div x-data="{ IsOpen: false }">
        <div class="relative lg:hidden" role="dialog" aria-modal="true">
            <div x-show="IsOpen" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true">
            </div>

            <!-- Overlay dan Sidebar -->
            <div x-show="IsOpen" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                class="fixed inset-0 z-50 flex justify-end">

                <!-- Sidebar panel -->
                <div class="w-full max-w-xs h-full bg-white py-4 pb-12 shadow-xl overflow-y-auto">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filter</h2>
                        <button type="button" @click="IsOpen = false"
                            class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">
                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <button type="button" @click="open = !open"
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                aria-controls="filter-section-mobile-1" :aria-expanded="open">
                                <span class="font-medium text-gray-900">Kategori</span>
                                <span class="ml-6 flex items-center">
                                    <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                    </svg>
                                    <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>

                            <div x-show="open" x-transition class="pt-6" id="filter-section-mobile-1">
                                <div class="space-y-6">
                                    @foreach ($categories as $category)
                                        <div class="flex items-center">
                                            <input id="filter-category-{{ $category->id }}" name="category[]"
                                                value="{{ $category->id }}" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-main-color focus:ring-main-color"
                                                {{ in_array($category->id, $selectedCategories ?? []) ? 'checked' : '' }}>
                                            <label for="filter-category-{{ $category->id }}"
                                                class="ml-3 text-sm text-gray-600">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <main class="mx-auto max-w-9xl px-10 sm:px-6 lg:px-24">
            <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-14">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                    Semua Produk
                </h1>


                <div class="flex items-center">
                    <div class="relative inline-block text-left">
                    </div>

                    <button type="button" @click="IsOpen = !IsOpen"
                        class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                        <span class="sr-only">Filter</span>
                        <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 0 1 .628.74v2.288a2.25 2.25 0 0 1-.659 1.59l-4.682 4.683a2.25 2.25 0 0 0-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 0 1 8 18.25v-5.757a2.25 2.25 0 0 0-.659-1.591L2.659 6.22A2.25 2.25 0 0 1 2 4.629V2.34a.75.75 0 0 1 .628-.74Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <form action="{{ route('products.search') }}" method="GET" class="max-w-md mx-auto m-8">
                <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="q"
                        class="block w-full p-4 ps-10 pe-28 text-sm text-gray-900 border border-main-color rounded-lg bg-white focus:ring-main-color focus:border-main-color"
                        placeholder="Cari di Apotek Huda" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-main-color hover:bg-third-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>

            <section aria-labelledby="products-heading" class="pb-24 pt-6">
                <h2 id="products-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->
                    <form method="GET" action="{{ route('products.filter') }}" class="hidden lg:block">
                        <h3 class="sr-only">Categories</h3>

                        <div x-data="{ open: true }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" @click="open = !open"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-1" :aria-expanded="open">
                                    <span class="font-medium text-gray-900">Kategori</span>
                                    <span class="ml-6 flex items-center">
                                        <!-- Expand icon, show/hide based on section open state. -->
                                        <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                        </svg>
                                        <!-- Collapse icon, show/hide based on section open state. -->
                                        <svg x-show="open" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" x-transition class="pt-6" id="filter-section-1">
                                <div class="space-y-4">
                                    @foreach ($categories as $category)
                                        <div class="flex items-center">
                                            <input id="filter-category-{{ $category->id }}" name="category[]"
                                                value="{{ $category->id }}" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-main-color focus:ring-main-color"
                                                {{ in_array($category->id, $selectedCategories ?? []) ? 'checked' : '' }}>
                                            <label for="filter-category-{{ $category->id }}"
                                                class="ml-3 text-sm text-gray-600">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3">
                        <!-- Your content -->
                        <div class="bg-white">
                            <div class="mx-auto max-w-6xl px-0 py-0 sm:px-6 sm:py-0 lg:max-w-7xl lg:px-8">
                                <div class="mt-5 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
                                    id="product-grid">
                                    @foreach ($products as $product)
                                        <div class="product-card bg-white rounded-lg overflow-hidden border shadow-sm flex flex-col"
                                            data-category="{{ $product->category->id }}">
                                            <!-- Label diskon & Gambar -->
                                            <div class="relative">
                                                <a href="{{ route('product.tampilkan', $product->id) }}">
                                                    <img src="{{ asset('assets/uploaded/' . $product->gambar) }}"
                                                        alt="{{ $product->name }}" class="w-full h-30 object-cover">
                                                </a>
                                                <div
                                                    class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-1.5 py-0.5 rounded">
                                                    -10%</div>
                                            </div>

                                            <!-- Isi card -->
                                            <div class="flex flex-col justify-between flex-grow p-3">
                                                <!-- Nama Produk -->
                                                <a href="{{ route('product.tampilkan', $product->id) }}">
                                                    <h3 class="text-sm font-medium leading-tight truncate"
                                                        style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ \Illuminate\Support\Str::title($product->name) }}
                                                    </h3>
                                                </a>

                                                <!-- Harga -->
                                                <div class="mt-1">
                                                    <div class="text-red-500 font-bold text-base">
                                                        Rp{{ number_format($product->harga, 0, ',', '.') }}</div>
                                                    <div class="text-gray-400 text-sm line-through">
                                                        Rp{{ number_format($product->harga * 1.2, 0, ',', '.') }}</div>
                                                </div>

                                                @guest
                                                    <!-- Tombol trigger modal -->
                                                    <button type="button"
                                                        onclick="document.getElementById('auth-modal').classList.remove('hidden')"
                                                        class="mt-4 mb-4 w-full text-sm font-medium text-white bg-green-500 rounded-md py-3 hover:bg-green-600">Tambah
                                                        ke Keranjang</button>
                                                @endguest

                                                @auth
                                                    <form action="{{ route('cart.add') }}" method="POST"
                                                        id="add-to-cart-form-{{ $product->id }}">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <button type="submit"
                                                            class="mt-4 mb-4 w-full text-sm font-medium text-white bg-green-500 rounded-md py-3 hover:bg-green-600">Tambah
                                                            ke Keranjang</button>
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Pagination -->
                                <div id="pagination" class="mt-6">
                                    <button id="prevBtn"
                                        class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md"
                                        disabled>
                                        <!-- Ikon Panah Kiri (SVG) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                    <span id="pageNumber" class="px-4">1</span>
                                    <button id="nextBtn"
                                        class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md">
                                        <!-- Ikon Panah Kanan (SVG) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<!-- Footer -->
<x-footer></x-footer>

<x-end></x-end>

<script>
    document.querySelectorAll('input[name="category[]"]').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            this.closest('form').submit(); // Submit form saat checkbox berubah
        });
    });
</script>

<script>
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');

            fetch("{{ route('cart.add') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update badge jumlah keranjang
                        document.getElementById('cart-badge').innerText = data.cart_count;
                        document.getElementById('cart-badge').classList.remove('hidden');
                    } else {
                        alert('Gagal menambahkan ke keranjang.');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tambah ke keranjang
        document.querySelectorAll("form[id^='add-to-cart-form-']").forEach(form => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                fetch(this.action, {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').content
                        },
                        body: formData,
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            updateCartBadge(data.cart_count);
                        } else {
                            alert(data.message || "Gagal tambah ke keranjang");
                        }
                    })
                    .catch(error => {
                        console.error("Gagal:", error);
                    });
            });
        });

        function updateCartBadge(count) {
            const badge = document.getElementById("cart-badge");
            if (!badge) return;

            if (count > 0) {
                badge.textContent = count;
                badge.classList.remove("hidden");
            } else {
                badge.classList.add("hidden");
            }
        }

        // Load awal saat halaman dimuat
        fetch('/cart/count')
            .then(res => res.json())
            .then(data => {
                updateCartBadge(data.count);
            });
    });
</script>

@guest
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartButtons = document.querySelectorAll('.add-to-cart-btn');
            cartButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modal = document.getElementById('auth-modal');
                    if (modal) {
                        modal.classList.remove('hidden');
                    }
                });
            });
        });
    </script>
@endguest

@push('scripts')
    <script>
        // Tutup modal jika klik di luar konten
        window.addEventListener('click', function(e) {
            const modal = document.getElementById('auth-modal');
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
@endpush

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const productsPerPage = 10; // Jumlah produk yang ingin ditampilkan per halaman
        const productGrid = document.getElementById('product-grid');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pageNumber = document.getElementById('pageNumber');

        let currentPage = 1;
        const products = Array.from(productGrid.getElementsByClassName('product-card'));
        const totalPages = Math.ceil(products.length / productsPerPage);

        function showPage(page) {
            const start = (page - 1) * productsPerPage;
            const end = page * productsPerPage;

            // Menyembunyikan semua produk
            products.forEach(product => product.style.display = 'none');

            // Menampilkan produk yang sesuai dengan halaman yang dipilih
            for (let i = start; i < end; i++) {
                if (products[i]) {
                    products[i].style.display = 'block';
                }
            }

            // Memperbarui nomor halaman dan tombol disabled
            pageNumber.textContent = page;
            prevBtn.disabled = page === 1;
            nextBtn.disabled = page === totalPages;
        }

        // Tombol Previous
        prevBtn.addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        });

        // Tombol Next
        nextBtn.addEventListener('click', function() {
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        });

        // Menampilkan halaman pertama
        showPage(currentPage);
    });
</script>
