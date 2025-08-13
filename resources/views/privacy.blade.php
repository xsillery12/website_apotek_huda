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

<div class="max-w-4xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4 text-center">Kebijakan Privasi</h1>

    <div class="space-y-6 text-gray-700">
        <p>Apotek Huda menghargai privasi Anda. Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menggunakan,
            menyimpan, dan melindungi informasi pribadi Anda saat menggunakan layanan kami.</p>

        <h2 class="text-xl font-semibold mt-6">1. Informasi yang Kami Kumpulkan</h2>
        <ul class="list-disc pl-6">
            <li>Nama lengkap</li>
            <li>Alamat email</li>
            <li>Nomor telepon</li>
            <li>Alamat pengiriman</li>
            <li>Riwayat pesanan dan transaksi</li>
        </ul>

        <h2 class="text-xl font-semibold mt-6">2. Penggunaan Informasi</h2>
        <p>Informasi yang dikumpulkan akan digunakan untuk:</p>
        <ul class="list-disc pl-6">
            <li>Memproses dan mengirimkan pesanan</li>
            <li>Meningkatkan layanan dan pengalaman pengguna</li>
            <li>Mengirimkan informasi penting terkait akun atau pesanan</li>
            <li>Menghubungi Anda untuk keperluan dukungan pelanggan</li>
        </ul>

        <h2 class="text-xl font-semibold mt-6">3. Perlindungan Data</h2>
        <p>Kami menggunakan langkah-langkah keamanan teknis dan organisasi untuk melindungi data Anda dari akses,
            perubahan, atau penggunaan yang tidak sah.</p>

        <h2 class="text-xl font-semibold mt-6">4. Pembagian Data dengan Pihak Ketiga</h2>
        <p>Kami tidak menjual atau membagikan data pribadi Anda kepada pihak ketiga, kecuali:</p>
        <ul class="list-disc pl-6">
            <li>Untuk keperluan pengiriman (misalnya jasa kurir)</li>
            <li>Jika diwajibkan oleh hukum</li>
        </ul>

        <h2 class="text-xl font-semibold mt-6">5. Hak Anda</h2>
        <ul class="list-disc pl-6">
            <li>Anda berhak mengakses, mengubah, atau menghapus informasi pribadi Anda kapan saja.</li>
            <li>Anda dapat menghubungi kami jika ingin menonaktifkan akun atau menghapus data Anda.</li>
        </ul>

        <h2 class="text-xl font-semibold mt-6">6. Perubahan Kebijakan</h2>
        <p>Kami dapat memperbarui kebijakan privasi ini sewaktu-waktu. Perubahan akan diumumkan di halaman ini.</p>

        <p class="mt-6">Dengan menggunakan layanan Apotek Huda, Anda menyetujui kebijakan privasi ini.</p>

        <p class="text-sm text-gray-500 mt-4">Terakhir diperbarui: {{ now()->format('d F Y') }}</p>
    </div>
</div>

<!-- Footer -->
<x-footer></x-footer>

<x-end></x-end>
