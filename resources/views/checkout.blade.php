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

<div class="max-w-8xl mx-auto p-8 bg-white shadow-md rounded-lg mt-10 mb-10">

    <!-- Address Section -->
    <div class="border-b p-3 pb-8 mb-4">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold">Alamat Pengirim</h2>
                <p class="text-gray-600">{{ $user->name }} {{ $user->nomor_telepon }}</p>
                <p class="text-gray-600">{{ $user->alamat }}</p>
            </div>
        </div>
    </div>

    <!-- Tampilkan error validasi -->
    @if ($errors->any())
        <div class="text-red-500 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Pemesanan -->
    <form action="{{ route('orders.store') }}" method="POST" id="order-form">
        @csrf

        <!-- Opsi Pengiriman -->
        <h2 class="text-lg font-semibold p-2 pb-3 mb-2">Pilih Pengiriman</h2>
        <div class="relative w-full mb-4">
            <input type="hidden" name="delivery_cost" id="delivery_cost" value="">
            <select id="shipping_method" name="shipping_method"
                class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-3 px-4 pr-10 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out">
                @foreach ($opsiPengiriman as $key => $harga)
                    @php
                        $hargaAsli = number_format($harga, 0, ',', '.');
                        $label =
                            ucfirst(str_replace('_', ' ', $key)) .
                            ' - Rp ' .
                            ($voucher === 'Gratis Ongkir' ? '0' : $hargaAsli);
                    @endphp
                    <option value="{{ $key }}" data-price="{{ $voucher === 'Gratis Ongkir' ? 0 : $harga }}">
                        {{ $label }}
                    </option>
                @endforeach
            </select>

            @if ($voucher === 'Gratis Ongkir')
                <p class="text-sm text-green-600 mt-2">✔ Gratis Ongkir diterapkan</p>
            @endif
        </div>

        <!-- Produk Dipesan -->
        <h2 class="text-lg font-semibold p-2 pb-3 mb-2">Produk Dipesan</h2>
        @foreach ($cartItems as $productId => $product)
            <div class="flex justify-between items-center border-b p-4 pb-6 mb-4">
                <div class="flex items-center">
                    <img src="{{ asset('assets/uploaded/' . $product['image']) }}" alt="Product"
                        class="w-12 h-12 mr-4">
                    <p>{{ $product['name'] }}</p>
                </div>
                <div class="text-right">
                    <p>Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <p>x{{ $product['quantity'] }}</p>
                    <p class="font-semibold">
                        Rp {{ number_format($product['price'] * $product['quantity'], 0, ',', '.') }}
                    </p>
                </div>
            </div>
        @endforeach

        <!-- Hidden input produk -->
        @foreach ($cartItems as $index => $product)
            <input type="hidden" name="products[{{ $index }}][product_id]" value="{{ $product['id'] }}">
            <input type="hidden" name="products[{{ $index }}][jumlah]" value="{{ $product['quantity'] }}">
        @endforeach

        <!-- Hidden input alamat -->
        <textarea name="alamat" class="hidden">{{ $user->alamat }}</textarea>

        <!-- Rincian Biaya Pesanan -->
        <div class="border rounded-lg p-4 bg-gray-50 mb-6">
            <p class="text-lg font-semibold mb-4">Rincian Biaya Pesanan</p>
            <div class="space-y-3 text-sm text-gray-700">
                <div class="flex justify-between">
                    <span>Harga Awal</span>
                    <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                </div>

                @if (session('voucher_jumlah'))
                    <div class="flex justify-between text-green-600">
                        <span>Diskon ({{ session('voucher_jumlah') }})</span>
                        @php
                            $diskon = 0;
                            if (Str::endsWith(session('voucher_jumlah'), '%')) {
                                $persen = intval(str_replace('%', '', session('voucher_jumlah')));
                                $diskon = $total * ($persen / 100);
                            }
                        @endphp
                        <span>-Rp {{ number_format($diskon, 0, ',', '.') }}</span>
                    </div>
                @endif

                <div class="flex justify-between text-red-600">
                    <span>Pajak</span>
                    <span>Rp {{ number_format($tax, 0, ',', '.') }}</span>
                </div>

                <div class="flex justify-between">
                    <span>Biaya Pengiriman</span>
                    <span>Rp {{ number_format($shippingCost, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>

        <!-- Total -->
        <div class="flex justify-between items-center font-semibold p-2 pb-6">
            <p>Total Biaya Pesanan ({{ count($cartItems) }} produk)</p>
            <p id="grand-total-display">Rp {{ number_format($grandTotal, 0, ',', '.') }}</p>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-green-600 text-white py-4 rounded-lg hover:bg-green-700"
            id="pay-button">
            Buat Pesanan
        </button>
    </form>
</div>

<!-- Footer -->
<x-footer></x-footer>

<!-- Midtrans -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
</script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(event) {
        event.preventDefault();

        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                alert('Pembayaran sukses!');
                document.getElementById('order-form').submit();
            },
            onPending: function(result) {
                alert('Pembayaran pending.');
            },
            onError: function(result) {
                alert('Pembayaran gagal.');
            }
        });
    };
</script>

<!-- Update grand total saat metode pengiriman berubah -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const shippingSelect = document.getElementById('shipping_method');
        const grandTotalDisplay = document.getElementById('grand-total-display');
        const costInput = document.getElementById('delivery_cost');

        const totalProduk = {{ $total }};
        const pajak = {{ $tax }};
        const voucherJumlah = "{{ session('voucher_jumlah') ?? '' }}";

        function getDiskon() {
            if (voucherJumlah.endsWith('%')) {
                const persen = parseInt(voucherJumlah.replace('%', ''));
                return totalProduk * (persen / 100);
            }
            return 0;
        }

        function updateTotalDanOngkir() {
            const selectedOption = shippingSelect.options[shippingSelect.selectedIndex];
            const ongkir = parseInt(selectedOption.dataset.price || 0);
            costInput.value = ongkir;

            const diskon = getDiskon();
            const grandTotal = totalProduk - diskon + ongkir + pajak;

            grandTotalDisplay.textContent = 'Rp ' + grandTotal.toLocaleString('id-ID');
        }

        updateTotalDanOngkir();
        shippingSelect.addEventListener('change', updateTotalDanOngkir);
    });
</script>


<x-end></x-end>
