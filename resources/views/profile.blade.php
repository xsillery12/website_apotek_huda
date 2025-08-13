<x-start></x-start>

<x-navbar></x-navbar>

@extends('layouts.app')

<!-- sidebar -->
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>
<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-24 transition-transform -translate-x-full sm:translate-x-0 bg-fourth-color"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <ul class="space-y-5 font-medium" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-second-color bg-gray-100"
            data-tabs-inactive-classes="text-white hover:text-second-color hover:bg-gray-100" role="tablist">
            <li>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 text-white mb-4 mx-1" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm5 11h-5v4l-5-5 5-5v4h5v2z">
                        </path>
                    </svg>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center p-2 rounded-lg group" id="profile-styled-tab"
                    data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-lg whitespace-nowrap cursor-default">Akun Saya</span>
                </a>
            </li>
            <li role="presentation" onclick="getHistoryOrder()">
                <a class="flex gap-x-2 items-center p-2 rounded-lg group" id="pesanan-styled-tab"
                    data-tabs-target="#styled-pesanan" type="button" role="tab" aria-controls="pesanan"
                    aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-lg whitespace-nowrap cursor-default">Riwayat Pesanan</span>
                </a>
            </li>
            <li role="presentation" onclick="getVoucherUser()">
                <a class="flex gap-x-2 items-center p-2 rounded-lg group" id="voucher-styled-tab"
                    data-tabs-target="#styled-voucher" type="button" role="tab" aria-controls="voucher"
                    aria-selected="false">
                    <svg class="w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        fill="currentColor" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M395.13,306.087c-9.206,0-16.696,7.49-16.696,16.696c0,9.206,7.49,16.696,16.696,16.696s16.696-7.49,16.696-16.696    C411.826,313.577,404.336,306.087,395.13,306.087z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M261.565,172.522c-9.206,0-16.696,7.49-16.696,16.696s7.49,16.696,16.696,16.696c9.206,0,16.696-7.49,16.696-16.696    S270.771,172.522,261.565,172.522z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M495.304,72.348H144.696v50.087c0,9.217-7.479,16.696-16.696,16.696s-16.696-7.479-16.696-16.696V72.348H16.696    C7.479,72.348,0,79.826,0,89.044v333.913c0,9.217,7.479,16.696,16.696,16.696h94.609v-50.087c0-9.217,7.479-16.696,16.696-16.696    s16.696,7.479,16.696,16.696v50.087h350.609c9.217,0,16.696-7.479,16.696-16.696V89.044C512,79.826,504.521,72.348,495.304,72.348    z M144.696,322.783c0,9.217-7.479,16.696-16.696,16.696s-16.696-7.479-16.696-16.696v-33.391c0-9.217,7.479-16.696,16.696-16.696    s16.696,7.479,16.696,16.696V322.783z M144.696,222.609c0,9.217-7.479,16.696-16.696,16.696s-16.696-7.479-16.696-16.696v-33.391    c0-9.217,7.479-16.696,16.696-16.696s16.696,7.479,16.696,16.696V222.609z M211.478,189.217c0-27.619,22.468-50.087,50.087-50.087    c27.619,0,50.087,22.468,50.087,50.087c0,27.619-22.468,50.087-50.087,50.087C233.946,239.304,211.478,216.836,211.478,189.217z     M257.512,343.544c-4.271,0-8.544-1.631-11.804-4.892c-6.521-6.521-6.521-17.087,0-23.609L387.37,173.37    c6.521-6.522,17.086-6.522,23.608,0c6.521,6.521,6.521,17.087,0,23.609L269.315,338.652    C266.054,341.914,261.782,343.544,257.512,343.544z M395.13,372.87c-27.619,0-50.087-22.468-50.087-50.087    c0-27.619,22.468-50.087,50.087-50.087s50.087,22.468,50.087,50.087C445.217,350.402,422.75,372.87,395.13,372.87z" />
                            </g>
                        </g>
                    </svg>
                    <span class="ms-3 text-lg cursor-default">Voucher</span>
                </a>
            </li>
            <li class="border-t py-2">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"
                        class="flex gap-x-2 items-center p-2 text-white rounded-lg  hover:bg-gray-100 hover:text-second-color hover:w-full  group">
                        <svg class="w-6 h-6 text-white group-hover:text-second-color" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                        </svg>
                        <span class="ms-3 text-lg whitespace-nowrap">Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<!-- Content tab -->
<div class="px-5 py-10 sm:ml-64" id="default-styled-tab-content">
    <!-- Tab profile -->
    <div class="hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="px-7 py-7 border-2 border-gray-200 bg-white rounded-lg ">
            <h1 class="text-2xl font-bold text-center">Profil Saya</h1>
            <p class="text-gray-500 text-center">Kelola informasi profil Anda</p>
            <hr class="my-5 border-gray-400">

            <form id="form-edit-user" class="flex flex-col gap-6 mx-5 mt-6 md:grid md:grid-cols-3 md:gap-6"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="edit-user-id" name="id" value="{{ Auth::user()->id }}">

                <!-- Foto Profil di atas -->
                <div
                    class="flex flex-col items-center justify-center gap-y-5 md:col-span-1 md:order-last md:ml-12 md:-translate-y-6">
                    <img id="previewImageUser" class="previewImage size-52 rounded-full object-cover"
                        src="assets/uploaded/{{ Auth::user()->image }}" alt="Foto Profil">
                    <label class="block my-2">
                        <span class="border-2 px-4 py-2 rounded-lg text-gray-400 cursor-pointer">Pilih Gambar</span>
                        <input class="imageInput hidden" name="image" id="image-user" type="file"
                            accept=".jpg,.png,.jpeg" value="{{ Auth::user()->image }}">
                    </label>
                    <span class="text-gray-400 text-sm text-center">
                        Ukuran gambar: maks. 2mb <br>
                        Format gambar: .JPG, .PNG, .JPEG
                    </span>
                </div>

                <!-- Form -->
                <div class="flex flex-col gap-y-4 md:col-span-2">
                    <div class="flex flex-col gap-2">
                        <label for="nama-user" class="font-semibold">Nama</label>
                        <input type="text" name="name" id="nama-user"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="Nama Anda" value="{{ Auth::user()->name }}" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="email-user" class="font-semibold">Email</label>
                        <input type="email" name="email" id="email-user"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="youremail@mail.com" value="{{ Auth::user()->email }}" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="telepon-user" class="font-semibold">Nomor Telepon</label>
                        <input type="tel" name="nomor_telepon" id="telepon-user" pattern="[0-9]{9,13}"
                            inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                            minlength="9" maxlength="13"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="+62 8123456789" value="{{ Auth::user()->nomor_telepon }}" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="gender-user" class="font-semibold">Gender</label>
                        <select id="gender-user" name="jenis_kelamin"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0">
                            <option value="L" @if (Auth::user()->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                            <option value="P" @if (Auth::user()->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="tanggal-lahir-user" class="font-semibold">Tanggal Lahir</label>
                        <input datepicker datepicker-autohide id="tanggal-lahir-user" datepicker-orientation="top"
                            datepicker-class="text-blue-300" datepicker-format="yyyy-mm-dd" type="text"
                            name="tanggal_lahir"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="Pilih Tanggal" value="{{ Auth::user()->tanggal_lahir }}">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="alamat-user" class="font-semibold">Alamat</label>
                        <input type="text" id="alamat-user" name="alamat"
                            class="border-0 border-b-2 border-gray-300 text-gray-700 focus:flex focus:border-2 focus:rounded-lg focus:border-third-color outline-none text-sm w-full p-2.5 focus:outline-none focus:ring-0"
                            placeholder="Masukkan alamat lengkap anda" value="{{ Auth::user()->alamat }}"
                            autocomplete="off" />
                        <input type="hidden" id="latitude" name="latitude"
                            value="{{ Auth::user()->latitude ?? '' }}">
                        <input type="hidden" id="longitude" name="longitude"
                            value="{{ Auth::user()->longitude ?? '' }}">
                    </div>

                    <div id="map" style="height: 300px; margin-top: 10px;"></div>


                    <button type="submit"
                        class="w-full mt-5 py-2.5 px-5 text-white bg-main-color rounded-lg border border-gray-200 hover:bg-fourth-color self-start">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tab Pesanan -->
    <div class="hidden px-7 py-7 border-2 border-gray-200 bg-white rounded-lg " id="styled-pesanan" role="tabpanel"
        aria-labelledby="pesanan-tab">
        <h1 class="text-2xl font-bold text-center">Riwayat Pesanan</h1>
        <hr class="my-5 border-gray-400">

        <div id="history-order" class="mx-5">
            <p id="loading-msg" class="text-center text-gray-400">Memuat pesanan...</p>
        </div>
    </div>

    <!-- Tab Voucher -->
    <div class="hidden px-7 py-7 border-2 border-gray-200 bg-white rounded-lg" id="styled-voucher" role="tabpanel"
        aria-labelledby="voucher-tab">
        <h1 class="text-2xl font-bold text-center">Voucher Saya</h1>
        <hr class="my-5 border-gray-400">

        <!-- Loading Message -->
        <p id="voucher-loading" class="text-center text-gray-400">Memuat Voucher...</p>

        <!-- Voucher Container (kosong dulu, nanti diisi dengan jQuery) -->
        <div id="voucher-user" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"></div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lat = parseFloat(document.getElementById('latitude').value) || -6.200000;
        var lng = parseFloat(document.getElementById('longitude').value) || 106.816666;

        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var marker = L.marker([lat, lng], {
            draggable: true
        }).addTo(map);

        marker.on('dragend', function() {
            var pos = marker.getLatLng();
            document.getElementById('latitude').value = pos.lat;
            document.getElementById('longitude').value = pos.lng;
        });

        var geocoder = L.Control.Geocoder.nominatim();

        var control = L.Control.geocoder({
            query: document.getElementById('alamat-user').value,
            placeholder: 'Cari alamat...',
            defaultMarkGeocode: false,
            geocoder: geocoder
        }).addTo(map);

        control.on('markgeocode', function(e) {
            var bbox = e.geocode.bbox;
            var center = e.geocode.center;

            map.fitBounds(bbox);

            marker.setLatLng(center);
            document.getElementById('latitude').value = center.lat;
            document.getElementById('longitude').value = center.lng;

            document.getElementById('alamat-user').value = e.geocode.name;
        });
    });
</script>

<x-end></x-end>
