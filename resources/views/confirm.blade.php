<x-start></x-start>

<section class="bg-[#537547] min-h-screen flex items-center justify-center">
    <div class="bg-[#30533E] flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
        <div class="w-full sm:px-4 md:w-1/2 md:px-16 mx-auto">
            <h2 class="text-white font-bold text-3xl text-center">Silahkan Konfirmasi Email Anda</h2>
            <p class="text-white text-md mt-8 text-center">
                Email Konfirmasi akan dikirimkan ke <strong>{{ $email }}</strong>. Silahkan cek email Anda.
            </p>

            <form action="{{ route('resend.verification') }}" method="POST">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <button class="bg-white mt-8 rounded-lg text-black py-2 hover:scale-95 duration-300">Kirim Ulang Email</button>
            </form>
        </div>

        <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="assets/img/pic-3.webp" alt="">
        </div>
    </div>
</section>

<x-end></x-end>