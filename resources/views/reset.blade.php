<x-start></x-start>

<section class="bg-[#537547] min-h-screen flex items-center justify-center">
        <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
            <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
                <h2 class="text-white font-bold text-3xl text-center">Set New Password</h2>
                <p class="text-white text-sm mt-4 text-center">Enter a new password, don't forget it again, okay?</p>

                <form action="{{ route('reset-password.post') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div class="relative mt-4">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="relative flex items-center">
                            <input class="bg-[#FDEBEB] p-2 rounded-lg border w-full" type="password" name="password"
                                data-type="password" placeholder="Enter New Password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                                class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                            </svg>
                        </div>
                        @error('password')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative">
                        <div class="relative flex items-center">
                            <input class="bg-[#FDEBEB] p-2 rounded-lg border w-full" type="password"
                                data-type="password" name="password_confirmation" placeholder="Confirm New Password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                                class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                            </svg>
                        </div>
                        @error('password_confirmation')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit"
                        class="bg-white mt-4 rounded-lg text-black py-2 hover:scale-95 duration-300">Reset
                        Password</button>
                </form>
            </div>

            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="{{ asset('assets/img/login-3.webp') }}" alt="">
            </div>
        </div>
    </section>

<script>
    document.querySelectorAll('.bi-eye').forEach(function(icon) {
        icon.addEventListener('click', function() {
            const passwordInput = this.closest('div').querySelector('input[data-type="password"]');

            if (passwordInput) {
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;

                // Ganti ikon mata
                this.setAttribute('fill', type === 'password' ? 'gray' : 'black');
            }
        });
    });
</script>

<x-end></x-end>
