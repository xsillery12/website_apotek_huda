<x-start></x-start>

<meta name="csrf-token" content="{{ csrf_token() }}">

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

<section class="bg-background py-8 antialiased dark:bg-background md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-black sm:text-2xl">Keranjang Belanja</h2>

        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <div class="space-y-6">
                    @if (session('cart') && !empty(session('cart')))
                        @foreach (session('cart') as $productId => $product)
                            <div class="product-item rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6"
                                data-id="{{ $productId }}" data-price="{{ $product['price'] }}">
                                <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                    <!-- Gambar Produk -->
                                    <a href="#" class="shrink-0 md:order-1">
                                        <img class="h-20 w-20" src="{{ asset('assets/uploaded/' . $product['image']) }}"
                                            alt="{{ $product['name'] }}" />
                                    </a>

                                    <!-- Kuantitas Produk -->
                                    <label for="counter-input" class="sr-only">Choose quantity:</label>
                                    <div class="flex items-center justify-between md:order-3 md:justify-end">
                                        <div class="flex items-center">
                                            <button type="button" id="decrement-button-{{ $productId }}"
                                                class="decrement-button inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-main-color hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-gray-100"
                                                data-product-id="{{ $productId }}">
                                                <svg class="h-2.5 w-2.5 text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                </svg>
                                            </button>
                                            <input type="text" id="counter-input-{{ $productId }}"
                                                value="{{ $product['quantity'] }}"
                                                class="counter-input w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-black focus:outline-none focus:ring-0" />
                                            <button type="button" id="increment-button-{{ $productId }}"
                                                class="increment-button inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-main-color hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-gray-100"
                                                data-product-id="{{ $productId }}">
                                                <svg class="h-2.5 w-2.5 text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="text-end md:order-4 md:w-32">
                                            <p class="product-price text-base font-bold text-black">
                                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Informasi Produk -->
                                    <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                        <a href="#" class="text-base font-medium text-black hover:underline">
                                            {{ $product['name'] }}
                                        </a>
                                        <div class="flex items-center gap-4">
                                            <form action="{{ route('cart.remove', $productId) }}" method="GET">
                                                @csrf
                                                <button type="submit"
                                                    class="remove-button inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                                    <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18 17.94 6M18 18 6.06 6" />
                                                    </svg>
                                                    Hapus Produk
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Keranjang Anda kosong</p>
                    @endif
                </div>

                <!-- Modal Konfirmasi -->
                <div id="confirmation-modal"
                    class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-55 backdrop-blur-sm flex items-center justify-center">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                        <h2 class="text-2xl font-bold text-gray-800">Konfirmasi</h2>
                        <p class="text-md text-gray-700 my-4">Apakah Anda yakin ingin menghapus produk ini dari
                            keranjang?</p>
                        <div class="flex justify-end gap-4">
                            <button id="cancel-button"
                                class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                                Batal
                            </button>
                            <button id="confirm-button"
                                class="px-4 py-2 bg-main-color text-white rounded-md hover:bg-green-600">
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                <div class="space-y-4 rounded-lg border bg-white p-4 shadow-md sm:p-6">
                    <p class="text-xl font-semibold text-black">Rincian Biaya Pesanan</p>

                    <div class="space-y-4">
                        <div class="space-y-2">
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-600">Harga Awal</dt>
                                <dd class="text-base font-medium text-black" id="initial-price">Rp
                                    {{ number_format($total) }}</dd>
                            </dl>

                            @php
                                $voucherJumlah = session('voucher_jumlah');
                            @endphp

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-green-600">Diskon</dt>
                                <dd class="text-base font-medium text-green-600">
                                    @if ($voucher)
                                        {{ $voucher }} ( -Rp {{ number_format($discountAmount) }} )
                                    @else
                                        -Rp 0.00
                                    @endif
                                </dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-red-600">Pajak</dt>
                                <dd class="text-base font-medium text-red-600">Rp {{ number_format($tax) }}</dd>
                            </dl>
                        </div>

                        <dl class="flex items-center justify-between gap-4 border-t border-gray-500 pt-2">
                            <dt class="text-base font-bold text-black">Total Harga</dt>
                            <dd class="text-base font-bold text-black" id="total-price">Rp
                                {{ number_format($grandTotal) }}</dd>
                        </dl>
                    </div>

                    <!-- Button Checkout Pesanan -->
                    <a href="{{ route('checkout') }}"
                        class="flex w-full items-center justify-center rounded-lg px-5 py-2.5 text-sm font-medium bg-main-color text-white hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-primary-300 @if (!session('cart') || empty(session('cart'))) cursor-not-allowed opacity-50 @endif"
                        @if (!session('cart') || empty(session('cart'))) disabled @endif id="checkout-button">
                        Checkout Pesanan
                    </a>

                    <div class="flex items-center justify-center gap-2">
                        <span class="text-sm font-normal text-gray-500"> atau </span>
                        <a href="#" title=""
                            class="inline-flex items-center gap-2 text-sm font-medium text-black underline hover:no-underline">Lanjut
                            Belanja</a>
                    </div>
                </div>

                <div class="space-y-4 rounded-lg border bg-white p-4 shadow-md sm:p-6">
                    @if (session('success'))
                        <div class="p-3 mb-3 text-sm text-green-800 bg-green-100 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="p-3 mb-3 text-sm text-red-800 bg-red-100 rounded">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form class="space-y-4" method="POST" action="{{ route('voucher.apply') }}">
                        @csrf
                        <div>
                            <label for="voucher" class="mb-2 block text-sm font-medium text-black">Apa kamu punya
                                voucher diskon?</label>
                            <input type="text" name="voucher" id="voucher"
                                class="block w-full rounded-lg border bg-green-100 p-2.5 text-sm text-black focus:border-black focus:ring-black"
                                placeholder="Masukkan kode voucher" required />
                        </div>
                        <button type="submit"
                            class="flex w-full items-center justify-center rounded-lg bg-main-color px-5 py-2.5 text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-main-color">
                            Gunakan Kode Voucher
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<input type="hidden" id="voucher-type" value="{{ $voucher ?? '' }}">
<input type="hidden" id="voucher-discount" value="{{ $discountAmount ?? 0 }}">

<!-- Footer -->
<x-footer></x-footer>

<script>
    // Referensi semua tombol favorit
    const favoriteButtons = document.querySelectorAll('.favorite-button');

    // Cek status favorit dari localStorage
    function updateFavButtonState(button) {
        const productId = button.getAttribute('data-id');
        const isFavorited = localStorage.getItem(`isFavorited-${productId}`) === 'true';

        if (isFavorited) {
            button.classList.remove(
                'bg-white',
                'text-red-600',
                'hover:bg-red-200'
            );
            button.classList.add('bg-red-600', 'text-red-300', 'hover:bg-red-400');
        } else {
            button.classList.remove(
                'bg-red-600',
                'text-red-300',
                'hover:bg-red-400'
            );
            button.classList.add('bg-white', 'text-gray-600', 'hover:bg-gray-200');
        }
    }

    // Update status favorit di localStorage
    favoriteButtons.forEach((button) => {
        const productId = button.getAttribute('data-id');

        // Inisialisasi status tombol favorit
        updateFavButtonState(button);

        button.addEventListener('click', () => {
            const isFavorited = localStorage.getItem(`isFavorited-${productId}`) === 'true';
            localStorage.setItem(`isFavorited-${productId}`, !isFavorited);
            updateFavButtonState(button);
        });
    });

    document.addEventListener("DOMContentLoaded", () => {
        const removeButtons = document.querySelectorAll(".remove-button");
        const modal = document.getElementById("confirmation-modal");
        const cancelButton = document.getElementById("cancel-button");
        const confirmButton = document.getElementById("confirm-button");
        const initialPriceElement = document.getElementById('initial-price');
        const totalPriceElement = document.getElementById('total-price');

        let productToRemove = null;

        function updatePrice(productElement) {
            const counterInput = productElement.querySelector('.counter-input');
            if (!counterInput) return 0;

            const pricePerUnit = parseFloat(productElement.getAttribute('data-price'));
            const quantity = parseInt(counterInput.value);
            if (isNaN(quantity)) return 0;

            const initialPrice = pricePerUnit * quantity;
            const productPriceElement = productElement.querySelector('.product-price');
            productPriceElement.textContent = `Rp ${initialPrice.toLocaleString()}`;

            return initialPrice;
        }

        const incrementButtons = document.querySelectorAll('.increment-button');
        const decrementButtons = document.querySelectorAll('.decrement-button');

        incrementButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productElement = button.closest('.product-item');
                const counterInput = productElement.querySelector('.counter-input');
                if (!counterInput) return;

                if (parseInt(counterInput.value) < 20) {
                    counterInput.value = parseInt(counterInput.value) + 1;
                    updateCartQuantity(productElement.dataset.id, counterInput.value);
                    updatePrice(productElement);
                    updatePricesAfterRemoval();
                }
            });
        });

        decrementButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productElement = button.closest('.product-item');
                const counterInput = productElement.querySelector('.counter-input');
                if (!counterInput) return;

                if (parseInt(counterInput.value) > 1) {
                    counterInput.value = parseInt(counterInput.value) - 1;
                    updateCartQuantity(productElement.dataset.id, counterInput.value);
                    updatePrice(productElement);
                    updatePricesAfterRemoval();
                }
            });
        });

        function updateCartQuantity(productId, quantity) {
            fetch(`/cart/update/${productId}`, {
                    method: "POST",
                    body: JSON.stringify({
                        quantity: quantity
                    }),
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (!data.success) {
                        alert("Gagal memperbarui kuantitas");
                    }
                })
                .catch(error => {
                    console.error("Error updating cart:", error);
                    alert("Terjadi kesalahan saat memperbarui keranjang");
                });
        }

        removeButtons.forEach(button => {
            button.addEventListener("click", function() {
                productToRemove = this.closest(".product-item");
                modal.classList.remove("hidden");
            });
        });

        cancelButton.addEventListener("click", () => {
            modal.classList.add("hidden");
            productToRemove = null;
        });

        confirmButton.addEventListener("click", () => {
            if (productToRemove) {
                const productId = productToRemove.dataset.id;
                const form = document.querySelector(`form[action*="${productId}"]`);
                if (form) form.submit();
            }
            modal.classList.add("hidden");
            productToRemove = null;
        });

        function updatePricesAfterRemoval() {
            const remainingProducts = document.querySelectorAll(".product-item");
            let newInitialPrice = 0;

            if (remainingProducts.length > 0) {
                remainingProducts.forEach(product => {
                    newInitialPrice += updatePrice(product);
                });
            }

            // Ambil info voucher dari input hidden
            const voucherType = document.getElementById('voucher-type')?.value || '';
            const voucherDiscount = parseFloat(document.getElementById('voucher-discount')?.value) || 0;

            const tax = 2500;

            if (voucherType === 'Gratis Ongkir') {
                adjustedShipping = 0;
            }

            let newTotalPrice = newInitialPrice - voucherDiscount + tax;
            if (newTotalPrice < 0) newTotalPrice = 0;

            // Update tampilan harga
            initialPriceElement.textContent = `Rp ${newInitialPrice.toLocaleString()}`;
            totalPriceElement.textContent = `Rp ${newTotalPrice.toLocaleString()}`;
        }

        // Inisialisasi saat halaman dimuat
        updatePricesAfterRemoval();
    });

    // Mendapatkan tombol checkout
    const checkoutButton = document.getElementById('checkout-button');

    // Jika tombol checkout disabled, cegah pengalihan ke halaman checkout
    if (checkoutButton && checkoutButton.disabled) {
        checkoutButton.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah pengalihan ke halaman checkout
            alert('Keranjang Anda kosong. Tambahkan produk ke keranjang terlebih dahulu.');
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        const voucherCode = localStorage.getItem("kode_voucher");
        if (voucherCode) {
            document.getElementById("voucher").value = voucherCode;
            localStorage.removeItem("kode_voucher");
        }
    });
</script>

<x-end></x-end>
