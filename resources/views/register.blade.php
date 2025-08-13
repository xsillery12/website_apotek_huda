<x-start></x-start>

<!-- Notifikasi sukses -->
@if (session('success'))
    <div class="fixed top-5 right-5 bg-green-500 text-white p-4 rounded-lg shadow-lg" id="successMessage">
        {{ session('success') }}
    </div>
@endif

<section class="bg-[#537547] min-h-screen flex items-center justify-center">
    <!-- Login Container -->
    <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
        <!-- Form -->
        <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
            <h2 class="text-white font-bold text-2xl">Register to Apotek Huda</h2>
            <div class="mt-3 text-sm flex justify-between items-center">
                <p class="text-white text-center">Already have an account? <a href="{{ route('login') }}"
                        class="text-[#88C273] underline">Login</a></p>
            </div>

            <!-- Register Blade View -->
            @if (session('error'))
                <script>
                    alert('{{ session('error') }}'); // Tampilkan alert untuk error
                </script>
            @endif

            <form action="/register" method="post" class="flex flex-col gap-4">
                @csrf

                <!-- Name -->
                <input class="bg-[#FDEBEB] p-2 mt-8 rounded-lg border" type="text" name="name" placeholder="Name">
                @error('nama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <!-- Email -->
                <input class="bg-[#FDEBEB] p-2 rounded-lg border" type="text" name="email" placeholder="Email">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <!-- Password -->
                <div class="relative">
                    <input id="password" class=" bg-[#FDEBEB] p-2 rounded-lg border w-full" type="password"
                        name="password" placeholder="Password">
                    <svg id="toggle-password" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16"
                        style="cursor: pointer;">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                    </svg>
                </div>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <!-- Gender -->
                <div>
                    <select id="gender" name="jenis_kelamin" class="bg-[#FDEBEB] p-2 rounded-lg border w-full">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <!-- Phone Number -->
                <input type="tel" name="nomor_telepon" id="telepon" pattern="[0-9]{9,13}" inputmode="numeric"
                    placeholder="Nomor Telepon" oninput="this.value = this.value.replace(/[^0-9]/g, '');" minlength="9"
                    maxlength="13" class="bg-[#FDEBEB] p-2 rounded-lg border" required>

                <!-- Date of Birth -->
                <input datepicker datepicker-autohide id="tglLahir" datepicker-orientation="top"
                    datepicker-class="text-blue-300" datepicker-format="yyyy-mm-dd" type="text" name="tanggal_lahir"
                    class="bg-[#FDEBEB] p-2 rounded-lg border" placeholder="Pilih Tanggal Lahir">

                <!-- Hidden role -->
                <input type="hidden" name="role" value="Customer">

                <!-- Terms and Agreement -->
                <div class="mt-2 flex items-start">
                    <input type="checkbox" id="agreement" name="agreement" class="mt-1 mr-2">
                    <label for="agreement" class="text-sm text-white">I agree to the <a href="#"
                            class="text-[#88C273] underline">terms and conditions</a></label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-white mt-3 rounded-lg text-black py-2 hover:scale-95 duration-300">Register</button>
            </form>
        </div>

        <!-- Image -->
        <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="assets/img/login-3.webp" alt="">
        </div>
    </div>
</section>

<script>
    // Cek apakah ada session success dan tampilkan notifikasi
    @if (session('success'))
        setTimeout(() => {
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none'; // Sembunyikan notifikasi setelah 3 detik
            }
        }, 3000);
    @endif

    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        if (togglePassword) {
            togglePassword.addEventListener('click', function() {
                // Toggle antara type 'password' dan 'text'
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;

                // Ubah ikon berdasarkan status input type
                if (type === 'password') {
                    togglePassword.setAttribute('fill', 'gray');
                } else {
                    togglePassword.setAttribute('fill', 'black');
                }
            });
        }
    });
</script>

<x-end></x-end>
