<x-start></x-start>

    <section class="bg-[#537547] min-h-screen flex items-center justify-center">
        <!-- Login Container -->
        <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
            <!-- Form -->
            <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
                <h2 class="text-white font-bold text-3xl text-center">Lupa Password?</h2>
                <p class="text-white text-sm mt-4 text-center">Jangan khawatir, ubah password Anda disini.</p>

                <!-- Flash Message Success -->
                @if (session('success'))
                    <div id="toast"
                        class="fixed top-4 right-4 bg-green-500 text-white p-4 rounded-lg shadow-lg transition-all opacity-0 transform translate-y-10">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('forgot-password.post') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <input class="bg-[#FDEBEB] p-2 mt-8 rounded-lg border w-full" type="text" name="email"
                            placeholder="Email" required>

                        <!-- Error Message -->
                        @error('email')
                            <div class="text-white text-sm mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="bg-white mt-4 rounded-lg text-black py-2 hover:scale-95 duration-300">Ubah Password</button>

                    <p class="text-sm text-gray-600 mt-2 text-center">
                        <a href="{{ route('login') }}"
                            class="text-white hover:underline flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-arrow-left mr-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                            Kembali ke Login
                        </a>
                    </p>
                </form>
            </div>

            <!-- Image -->
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="assets/img/login-3.webp" alt="">
            </div>
        </div>
    </section>

<!-- Script to Show Toast Notification -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toast = document.getElementById('toast');
        if (toast) {
            // Tampilkan toast
            toast.classList.remove('opacity-0', 'translate-y-10');
            toast.classList.add('opacity-100', 'translate-y-0');

            // Sembunyikan setelah 5 detik
            setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-10');
                toast.classList.remove('opacity-100', 'translate-y-0');
            }, 5000); // Toast akan hilang setelah 5 detik
        }
    });
</script>

<x-end></x-end>
