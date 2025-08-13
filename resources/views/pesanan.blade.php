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

<section class="py-8 relative">
    <div class="w-full max-w-6xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="max-w-6xl w-full mx-auto bg-white p-10 rounded-xl border border-gray-200 shadow-md">
            <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-start items-center gap-4 flex">
                    <h2 class="w-full text-center text-black text-3xl font-bold font-manrope leading-normal">Tracking
                        Pesanan
                    </h2>
                    {{-- <p class="max-w-4xl text-center text-gray-500 text-base font-normal leading-relaxed">Order tracking is a
                    service provided by companies to allow customers to monitor the progress and location of their
                    purchases from the time they are placed until they are delivered.</p> --}}
                </div>
                <div class="w-full flex-col justify-start items-start gap-10 flex">
                    <div class="w-full justify-between items-center flex sm:flex-row flex-col gap-3">
                        <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Detail Pembelian</h3>
                        <a href="{{ route('invoice.download', $order->id) }}"
                            class="sm:w-fit w-full px-5 py-2.5 bg-main-color hover:bg-second-color transition-all duration-400 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                            <span
                                class="px-2 py-px text-center text-white text-base font-semibold leading-relaxed">Download
                                Invoice</span>
                        </a>
                    </div>
                    <div
                        class="w-full py-6 border-t border-b border-gray-100 grid md:grid-cols-5 grid-cols-1 md:gap-8 gap-4">
                        <!-- Nomor Order -->
                        <div class="flex flex-col gap-1 p-3 bg-white rounded shadow-sm">
                            <h6 class="text-gray-500 text-sm">Nomor Order</h6>
                            <h4 class="text-black text-lg font-semibold">{{ $order->tag }}</h4>
                        </div>

                        <!-- Order Dibuat -->
                        <div class="flex flex-col gap-1 p-3 bg-white rounded shadow-sm">
                            <h6 class="text-gray-500 text-sm">Order Dibuat</h6>
                            <h4 class="text-black text-lg font-semibold">
                                {{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}
                            </h4>
                        </div>

                        <!-- Orderan Telah Sampai -->
                        <div class="flex flex-col gap-1 p-3 bg-white rounded shadow-sm">
                            <h6 class="text-gray-500 text-sm">Orderan Telah Sampai</h6>
                            <h4 class="text-black text-lg font-semibold">
                                {{ $order->status === 'Pesanan Selesai' ? \Carbon\Carbon::parse($order->updated_at)->format('M d, Y') : 'Pending' }}
                            </h4>
                        </div>

                        <!-- Jumlah Barang -->
                        <div class="flex flex-col gap-1 p-3 bg-white rounded shadow-sm">
                            <h6 class="text-gray-500 text-sm">Jumlah Barang</h6>
                            <h4 class="text-black text-lg font-semibold">{{ $order->jumlah }} items</h4>
                        </div>

                        <!-- Status -->
                        <div class="flex flex-col gap-1 p-3 bg-white rounded shadow-sm">
                            <h6 class="text-gray-500 text-sm">Status</h6>
                            <h4 class="text-black text-lg font-semibold">{{ ucfirst($order->status) }}</h4>
                        </div>
                    </div>

                </div>
                <div class="w-full flex-col justify-start items-start gap-10 flex">
                    <div class="w-full justify-between items-start flex sm:flex-row flex-col gap-3">
                        <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">
                            Tracking Pembelian
                        </h3>
                        <h3 class="text-gray-600 text-2xl font-semibold font-manrope leading-9 sm:text-right">
                            Order ID: {{ $order->tag }}
                        </h3>
                    </div>
                    <div class="w-full py-9 rounded-xl border border-gray-200 flex-col justify-start items-start flex">
                        <div class="w-full flex-col justify-center sm:items-center items-start gap-8 flex">
                            <ol
                                class="flex flex-row items-start md:px-14 sm:items-center justify-between w-full gap-4 sm:gap-6 overflow-x-auto">
                                @foreach ($steps as $index => $step)
                                    <li class="flex flex-col items-center text-center min-w-[50px]">
                                        <!-- Circle number -->
                                        <span
                                            class="w-6 h-6 lg:w-8 lg:h-8 mb-1 rounded-full flex items-center justify-center text-sm font-bold
                                            {{ $currentStep > $index ? 'bg-main-color text-white' : 'border-2 border-main-color text-main-color' }}">
                                            {{ $index + 1 }}
                                        </span>

                                        <!-- Step label -->
                                        <span
                                            class="text-xs sm:text-sm font-semibold text-main-color">{{ $step['label'] }}</span>

                                        <!-- Date -->
                                        <span class="text-[11px] text-gray-500">
                                            {{ $step['date'] ? \Carbon\Carbon::parse($step['date'])->format('M d, Y') : 'Pending' }}
                                        </span>
                                    </li>
                                @endforeach

                                @if ($order->status === 'Pesanan Dibatalkan')
                                    <div class="text-red-600 text-sm font-semibold mt-4 text-center w-full">
                                        Pesanan telah dibatalkan
                                    </div>
                                @endif
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="w-full flex-col justify-start items-start gap-10 flex">
                    <h3 class="text-gray-900 text-2xl font-semibold font-manrope leading-9">Produk yang Dibeli</h3>

                    <div class="w-full justify-center items-center">
                        <!-- Header (desktop only) -->
                        <div
                            class="w-full hidden md:grid grid-cols-3 px-6 py-4 bg-white rounded-t-md border border-gray-200">
                            <span class="text-gray-500 text-base font-normal leading-relaxed">Produk</span>
                            <span
                                class="text-gray-500 text-base font-normal leading-relaxed text-center">Kuantitas</span>
                            <span class="text-gray-500 text-base font-normal leading-relaxed text-center">Harga</span>
                        </div>

                        @foreach ($order->items as $item)
                            <div
                                class="grid grid-cols-1 md:grid-cols-3 px-6 py-4 border border-t-0 border-gray-200 bg-white">
                                <!-- Product Section -->
                                <div class="flex gap-4 items-start">
                                    <div
                                        class="w-[100px] h-[100px] rounded-xl bg-gray-100 flex justify-center items-center shrink-0">
                                        <img src="{{ asset('assets/uploaded/' . $item->product->gambar) }}"
                                            alt="{{ $item->product->name }}" class="w-[75px] object-cover" />
                                    </div>

                                    <!-- Info -->
                                    <div class="flex flex-col justify-between">
                                        <div>
                                            <h4 class="text-black text-base font-medium">{{ $item->product->name }}
                                            </h4>
                                            <h5 class="text-gray-500 text-sm font-normal leading-relaxed">ID Produk:
                                                {{ $item->product_id }}</h5>
                                        </div>

                                        <!-- Quantity & Price (mobile only) -->
                                        <div class="block md:hidden mt-2">
                                            <p class="text-gray-400 text-sm">Quantity:
                                                <span class="text-black font-medium">{{ $item->jumlah }}</span>
                                            </p>
                                            <p class="text-gray-400 text-sm">Price:
                                                <span class="text-black font-medium">Rp
                                                    {{ number_format($item->harga * $item->jumlah, 0, ',', '.') }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quantity (desktop only) -->
                                <div class="hidden md:flex justify-center items-center">
                                    <h5 class="text-black text-sm font-medium">{{ $item->jumlah }}</h5>
                                </div>

                                <!-- Price (desktop only) -->
                                <div class="hidden md:flex justify-center items-center">
                                    <h5 class="text-black text-md font-semibold">
                                        Rp {{ number_format($item->harga * $item->jumlah, 0, ',', '.') }}
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @php
                    $subtotal = 0;
                    $discount = $order->discount_amount ?? 0;
                    $delivery = $order->delivery_cost ?? 0;
                    $tax = 2500;

                    foreach ($order->items as $item) {
                        $subtotal += $item->harga * $item->jumlah;
                    }

                    $total = $subtotal - $discount + $delivery + $tax;
                @endphp

                <div class="w-full p-6 rounded-lg border bg-white border-gray-200 flex flex-col gap-4">
                    <div class="w-full flex justify-between items-center">
                        <h4 class="text-gray-600 text-lg font-medium leading-8">Diskon</h4>
                        <h4 class="text-right text-red-600 text-md font-medium leading-8">
                            @if ($order->discount_amount)
                                - Rp {{ number_format($order->discount_amount, 0, ',', '.') }}
                            @else
                                Rp 0
                            @endif
                        </h4>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <h4 class="text-gray-600 text-lg font-medium leading-8">Ongkos Kirim</h4>
                        <h4 class="text-right text-black text-md font-medium leading-8">
                            Rp {{ number_format($delivery, 0, ',', '.') }}
                        </h4>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <h4 class="text-gray-600 text-lg font-medium leading-8">Pajak</h4>
                        <h4 class="text-right text-black text-md font-medium leading-8">
                            Rp {{ number_format($tax, 0, ',', '.') }}
                        </h4>
                    </div>
                    <hr class="border-gray-300 my-3 w-full" />
                    <div class="w-full flex justify-between items-center">
                        <h4 class="text-gray-600 text-lg font-medium leading-8">Subtotal</h4>
                        <h4 class="text-right text-black text-md font-medium leading-8">
                            Rp {{ number_format($subtotal, 0, ',', '.') }}
                        </h4>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <h4 class="text-gray-600 text-lg font-semibold leading-8">Total</h4>
                        <h4 class="text-right text-black text-md font-semibold leading-8">
                            Rp {{ number_format($total, 0, ',', '.') }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<x-end></x-end>
