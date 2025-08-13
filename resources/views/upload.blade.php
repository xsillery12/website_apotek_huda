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

<form action="{{ route('upload.resep') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="py-20 bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-7xl bg-white shadow-lg rounded-lg p-7">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Upload Resep</h2>

            @if (session()->has('ResepSuccess'))
                <div id="alert-ResepSuccess" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('ResepSuccess') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#alert-ResepSuccess" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            <!-- File Upload Input -->
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag
                            and
                            drop</p>
                        <p class="text-xs text-gray-500">JPG, PNG, JPEG (Max 2MB)</p>
                    </div>
                    <input id="dropzone-file" name="gambar" type="file" class="hidden" accept=".jpg, .png, .jpeg" onchange="showLoading()">
                </label>
            </div>

            <!-- Loading Spinner -->
            <div id="loading-spinner" class="flex justify-center items-center hidden mt-4">
                <svg class="w-8 h-8 animate-spin text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </div>

            <!-- Display Uploaded Image -->
            <div id="uploaded-image-container" class="mt-4 hidden">
                <h3 class="text-gray-700">Gambar yang diupload:</h3>
                <img id="uploaded-image" src="" alt="Uploaded Image"
                    class="mt-2 w-full max-w-xs mx-auto rounded-lg">
            </div>

            <!-- Additional Information -->
            <div class="mt-4">
                <label for="description" class="block text-gray-700 font-medium">Tambahkan Keterangan</label>
                <textarea id="description" rows="4" name="keterangan"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-green-500 focus:outline-none"
                    placeholder="Tambahkan keterangan resep agar admin mudah memahami"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end mt-6 space-x-4">
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Kembali</button>
                <button id="submit-button" type="submit"
                    class="px-4 py-2 bg-main-color text-white rounded-lg hover:bg-green-700">Kirim Resep</button>
            </div>
        </div>
    </div>
</form>

<!-- Footer -->
<x-footer></x-footer>

<script>
    function showLoading() {
        // Menampilkan loading spinner
        document.getElementById("loading-spinner").classList.remove("hidden");
    }

    // function uploadResep() {
    //     const formData = new FormData();
    //     const fileInput = document.getElementById("dropzone-file");
    //     const description = document.getElementById("description").value;

    //     if (fileInput.files.length === 0) {
    //         alert("Harap pilih gambar terlebih dahulu.");
    //         return;
    //     }

    //     // Menambahkan data gambar dan keterangan ke FormData
    //     formData.append("gambar", fileInput.files[0]);
    //     formData.append("keterangan", description);

    //     // Membuat request AJAX untuk mengupload gambar
    //     fetch("{{ route('upload.resep') }}", { // Ubah dengan route yang sesuai
    //         method: "POST",
    //         body: formData,
    //         headers: {
    //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //         },
    //     })
    //     .then(response => response.json())
    //     .then(data => {
    //         // Sembunyikan spinner setelah upload selesai
    //         document.getElementById("loading-spinner").classList.add("hidden");

    //         if (data.success) {
    //             alert("Resep berhasil diupload!");

    //             // Menampilkan gambar yang diupload
    //             const imageUrl = "{{ asset('storage/uploads/') }}" + "/" + data.filename; // Pastikan URL gambar sesuai
    //             document.getElementById("uploaded-image").src = imageUrl;
    //             document.getElementById("uploaded-image-container").classList.remove("hidden");
    //         } else {
    //             alert("Terjadi kesalahan saat mengupload resep.");
    //         }
    //     })
    //     .catch(error => {
    //         // Sembunyikan spinner jika terjadi error
    //         document.getElementById("loading-spinner").classList.add("hidden");
    //         alert("Terjadi kesalahan: " + error);
    //     });
    // }
</script>


<x-end></x-end>
