<x-start></x-start>

{{-- Script tambahan (jika pakai @stack) --}}
@stack('scripts')

{{-- Modal Login/Register (hanya tampil untuk guest) --}}
@guest
    <div id="auth-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md text-center">
            <h2 class="text-xl font-bold mb-2">Upss.. kamu belum login</h2>
            <p class="mb-6 text-gray-600">Silakan login atau daftar untuk menambahkan produk ke keranjang.</p>

            <div class="flex flex-col gap-3">
                <a href="{{ route('login') }}"
                    class="text-sm font-medium text-white bg-main-color rounded-md py-3 hover:bg-green-600">Login</a>
                <span class="text-sm text-gray-400">atau</span>
                <a href="{{ route('register') }}"
                    class="bg-green-500 text-white py-2 rounded hover:bg-green-400">Register</a>
            </div>
        </div>
    </div>
@endguest


<x-end></x-end>
