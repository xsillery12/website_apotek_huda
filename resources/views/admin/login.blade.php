<x-start></x-start>


<div class="flex flex-col items-center justify-center min-h-screen mx-auto">
    <div class="max-w-lg w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <!-- Login Form -->
        <div id="login-form" class="p-8 space-y-8 md:space-y-6 sm:p-8">
            <img src="assets/img/logo-login.webp" alt="logo" class="w-fit mx-auto">
            <form class="space-y-4 md:space-y-6" action="/login" method="post">

                @if (session()->has('loginError'))
                    <div id="alert-loginError" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('loginError') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-loginError" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                @if (session()->has('registerSuccess'))
                    <div id="alert-registerSuccess"
                        class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('registerSuccess') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-registerSuccess" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                <form class="space-y-4 md:space-y-6" action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <label for="login-email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="login-email"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        placeholder="name@company.com" required>

                    <label for="login-password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="login-password" placeholder="••••••••"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        required>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-fourth-color hover:underline">Forgot
                            password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-fourth-color focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                        in</button>
                </form>
                <p class="text-sm font-light text-gray-500">
                    Don’t have an account yet? <a id="show-register" href="#"
                        class="font-medium text-fourth-color hover:underline cursor-pointer">Sign up</a>
                </p>
            </form>
        </div>

        <!-- Register Form -->
        <div id="register-form" class="p-8 space-y-8 md:space-y-6 sm:p-8 hidden">
            <img src="assets/img/logo-login.webp" alt="logo" class="w-fit mx-auto">
            <form class="space-y-4 md:space-y-6" action="/register" method="post">

                <div>
                    <label for="register-name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                    <input type="text" name="name" id="register-name"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        placeholder="John Doe" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" name="email" id="email"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        placeholder="name@company.com" required>
                </div>
                <div>
                    <label for="register-password"
                        class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="register-password" placeholder="••••••••"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        required>
                </div>
                <div>
                    <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                        Telepon</label>
                    <input type="tel" name="nomor_telepon" id="telepon" pattern="[0-9]{9,13}"
                        inputmode="numeric" placeholder="+62 8123456789"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');" minlength="9" maxlength="13"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        required>
                </div>
                <div>
                    <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis
                        Kelamin</label>
                    <select id="gender" name="jenis_kelamin"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                        Lahir</label>
                    <input datepicker datepicker-autohide id="tglLahir" datepicker-orientation="top"
                        datepicker-class="text-blue-300" datepicker-format="yyyy-mm-dd" type="text"
                        name="tanggal_lahir"
                        class="border-gray-300 text-gray-700 focus:border-2 rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                        placeholder="Pilih Tanggal">
                </div>
                <input type="hidden" name="role" value="Karyawan">
                <button type="submit"
                    class="w-full text-white bg-fourth-color focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                    up</button>
                <p class="text-sm font-light text-gray-500">
                    Already have an account? <a id="show-login" href="#"
                        class="font-medium text-fourth-color hover:underline">Sign in</a>
                </p>
            </form>
        </div>
    </div>
</div>




<x-end></x-end>
