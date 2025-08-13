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

@extends('layouts.app')

<div class="max-w-8xl mx-auto my-10 bg-white rounded-lg shadow-lg p-6">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Image Section -->
        <div class="lg:w-1/3">
            <img src="{{ asset('assets/uploaded/' . $product->gambar) }}" alt="{{ $product->name }}"
                class="rounded-lg border w-96 h-96 object-cover mx-auto mt-5">
        </div>

        <!-- Product Details Section -->
        <div class="lg:w-2/3">
            <h1 class="text-3xl font-bold text-gray-800">{{ \Illuminate\Support\Str::title($product->name) }}</h1>

            <!-- Price Section -->
            <div class="mt-6">
                <div class="flex items-center gap-4">
                    <span class="text-black font-bold text-2xl">Rp
                        {{ number_format($product->harga, 0, ',', '.') }}</span>
                    {{-- <span class="text-red-600 text-2xl font-bold">Rp
                        {{ number_format($product->harga * 0.8, 0, ',', '.') }}</span>
                    <span class="text-white bg-red-500 px-2 py-1 rounded-lg text-sm">20%</span> --}}
                </div>
            </div>

            {{-- <!-- Delivery Options -->
            <div class="mt-6">
                <h3 class="text-gray-700 font-semibold">Pengiriman</h3>
                <div class="flex gap-4 mt-5">
                    <img src="{{ asset('assets/img/grab-bike.webp') }}" alt="Grab" class="h-6">
                    <img src="{{ asset('assets/img/spx-express.webp') }}" alt="SPX" class="h-6">
                    <img src="{{ asset('assets/img/gojek.webp') }}" alt="Gojek" class="h-6">
                </div>
            </div> --}}

            <!-- Quantity Section -->
            <div class="mt-6">
                <h3 class="text-gray-700 font-semibold">Kuantitas</h3>
                <div class="flex items-center mt-2 gap-4">
                    <div class="flex items-center border rounded-lg">
                        <!-- Tombol Minus -->
                        <button class="px-3 py-2 bg-gray-200 font-bold flex items-center justify-center"
                            onclick="decreaseQuantity()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                            </svg>
                        </button>
                        <!-- Tampilan Kuantitas -->
                        <span id="quantity-display" class="w-12 text-center">
                            1
                        </span>
                        <!-- Tombol Plus -->
                        <button id="increase-btn"
                            class="px-3 py-2 bg-gray-200 font-bold flex items-center justify-center transition-opacity duration-300"
                            onclick="increaseQuantity()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v12m6-6H6" />
                            </svg>
                        </button>
                    </div>
                    <span class="text-gray-500">tersisa {{ $product->stok }} buah</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-10 flex gap-4">

                @guest
                    <!-- Tombol untuk Guest (trigger modal) -->
                    <button type="button" class="flex bg-gray-200 text-gray-700 py-4 px-4 rounded-lg hover:bg-gray-300"
                        onclick="document.getElementById('auth-modal').classList.remove('hidden')">
                        Tambah ke Keranjang
                    </button>

                    <button type="button" class="flex bg-main-color text-white py-4 px-4 rounded-lg hover:bg-green-700"
                        onclick="document.getElementById('auth-modal').classList.remove('hidden')">
                        Beli Sekarang
                    </button>
                @endguest

                @auth
                    <!-- Tombol Tambah ke Keranjang -->
                    <form method="POST" action="{{ route('cart.add.with.quantity') }}" id="add-to-cart-form">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" id="quantity-input" value="1">
                        <button type="submit"
                            class="flex bg-gray-200 text-gray-700 py-4 px-4 rounded-lg hover:bg-gray-300">
                            Tambah ke Keranjang
                        </button>
                    </form>

                    <!-- Tombol Beli Sekarang -->
                    <form method="POST" action="{{ route('cart.add') }}" class="inline">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit"
                            class="flex bg-main-color text-white py-4 px-4 rounded-lg hover:bg-green-700">
                            Beli Sekarang
                        </button>
                    </form>
                @endauth

            </div>
        </div>
    </div>

    <!-- Description Section -->
    <div class="mt-20">
        <h2 class="text-lg font-bold text-gray-800">Deskripsi</h2>
        <p class="text-gray-700 mt-2 leading-relaxed">
            {!! nl2br(e($product->deskripsi)) !!}
        </p>
    </div>
</div>


<!-- Footer -->
<x-footer></x-footer>

<script>
    let quantity = 1;
    const maxStock = {{ $product->stok }};

    function updateQuantityDisplay() {
        document.getElementById("quantity-display").textContent = quantity;
        document.getElementById("quantity-input").value = quantity;
    }

    function decreaseQuantity() {
        if (quantity > 1) {
            quantity--;
            updateQuantityDisplay();
            checkButtons();
        }
    }

    function increaseQuantity() {
        if (quantity < maxStock) {
            quantity++;
            updateQuantityDisplay();
            checkButtons();
        }
    }

    function checkButtons() {
        const increaseButton = document.getElementById("increase-btn");
        increaseButton.disabled = quantity >= maxStock;
        increaseButton.classList.toggle("opacity-50", quantity >= maxStock);
        increaseButton.classList.toggle("cursor-not-allowed", quantity >= maxStock);
    }

    updateQuantityDisplay();
    checkButtons();
</script>

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

    <x-end></x-end>
