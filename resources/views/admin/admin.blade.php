<x-start></x-start>

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
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-10 transition-transform -translate-x-full sm:translate-x-0 bg-white rounded-r-lg"
    aria-label="Sidebar">
    <div class="h-full px-2 overflow-y-auto">
        <a href="/" class="flex items-center mb-12 mx-4">
            <img src="assets/img/logo-admin.webp" class="w-56" alt="Apotek Logo" />
        </a>
        <ul class="space-y-5 font-medium" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-gray-200 bg-fourth-color"
            data-tabs-inactive-classes="text-dark-color hover:text-gray-200 hover:bg-fourth-color" role="tablist">
            <li role="presentation">
                <a class="flex gap-x-2 items-center py-2 px-5 rounded-lg group" id="dashboard-styled-tab"
                    data-tabs-target="#styled-dashboard" role="tab" aria-controls="dashboard" aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-lg font-semibold whitespace-nowrap cursor-default">Dashboard</span>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center py-2 px-5 rounded-lg group" id="produk-styled-tab"
                    data-tabs-target="#styled-produk" role="tab" aria-controls="produk" aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-lg font-semibold whitespace-nowrap cursor-default">Produk</span>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center py-2 px-5 rounded-lg group" id="pesanan-styled-tab"
                    data-tabs-target="#styled-pesanan" role="tab" aria-controls="pesanan" aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <path
                            d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z">
                        </path>
                        <circle cx="10.5" cy="19.5" r="1.5"></circle>
                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    </svg>
                    <span class="flex-1 ms-3 text-lg font-semibold whitespace-nowrap cursor-default">Pesanan</span>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center py-2 px-5 rounded-lg group" id="resep-styled-tab"
                    data-tabs-target="#styled-resep" role="tab" aria-controls="resep" aria-selected="false">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-inherit group:text-inherit"
                        viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <path
                            d="M18 22a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12zM13 4l5 5h-5V4zM7 8h3v2H7V8zm0 4h10v2H7v-2zm0 4h10v2H7v-2z">
                        </path>
                    </svg>
                    <span class="flex-1 ms-3 text-lg font-semibold whitespace-nowrap cursor-default">Resep</span>
                </a>
            </li>
            <li role="presentation">
                <a class="flex gap-x-2 items-center py-2 px-5 rounded-lg group" id="voucher-styled-tab"
                    data-tabs-target="#styled-voucher" role="tab" aria-controls="voucher" aria-selected="false">
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
                    <span class="ms-3 text-lg font-semibold cursor-default">Voucher</span>
                </a>
            </li>

            <li class="border-t py-2 px-1 border-black">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex gap-x-2 w-full items-center py-2 px-5 text-dark-color rounded-lg  hover:bg-fourth-color hover:text-gray-200 group">
                        <svg class="w-6 h-6 text-dark-color group-hover:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                        </svg>
                        <span class="ms-3 text-lg font-semibold whitespace-nowrap">Sign Out</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<!-- Content tab -->
<div class="px-12 py-10 sm:ml-64" id="default-styled-tab-content">
    <!-- Tab dashboard -->
    <div class="hidden font-second-font" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <h2 class="text-fourth-color text-3xl font-bold">Dashboard</h2>
        <!-- Detail Toko -->
        <div
            class="flex flex-col items-center justify-center border-2 border-gray-200 bg-main-color text-white rounded-lg p-4 my-4">
            <h3 class="font-medium text-lg">Detail Toko</h3>
            <p class="font-light text-sm mb-4">Rekapitulasi Data Terkait Apotek</p>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 pb-2">
                <div
                    class="flex flex-col items-center border-2 border-gray-200 rounded-lg bg-white text-fourth-color font-bold p-4">
                    <span class="text-xl">{{ $jumlahObat }}</span>
                    <p class="text-sm">Jumlah Produk</p>
                </div>
                <div
                    class="flex flex-col items-center border-2 border-gray-200 rounded-lg bg-white text-fourth-color font-bold p-4">
                    <span class="text-xl">{{ $jumlahPesanan }}</span>
                    <p class="text-sm">Jumlah Pesanan</p>
                </div>
                <div
                    class="flex flex-col items-center border-2 border-gray-200 rounded-lg bg-white text-fourth-color font-bold p-4">
                    <span class="text-xl">{{ $jumlahPelanggan }}</span>
                    <p class="text-sm">Jumlah Pelanggan</p>
                </div>
                <div
                    class="flex flex-col items-center border-2 border-gray-200 rounded-lg bg-white text-fourth-color font-bold p-4">
                    <span class="text-xl">{{ $jumlahResep }}</span>
                    <p class="text-sm">Jumlah Resep</p>
                </div>
                <div
                    class="flex flex-col items-center border-2 border-gray-200 rounded-lg bg-white text-fourth-color font-bold p-4">
                    <span class="text-xl">{{ $jumlahVoucher }}</span>
                    <p class="text-sm">Jumlah Voucher</p>
                </div>
            </div>
        </div>

        <div class="flex flex-row flex-wrap gap-4 m-2">
            <!-- Card Produk -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Produk</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Kelola produk dengan menambahkan baru, memperbarui stok, dan menghapus produk.
                </p>
                <button id="manage-product-button"
                    class="flex items-center gap-x-2 border bg-fourth-color text-white px-3 py-2 rounded-lg font-semibold">
                    <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                        </path>
                        <path
                            d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                        </path>
                    </svg>
                    Manage
                </button>
            </div>
            <!-- Card Pesanan -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pesanan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Kelola pesanan pelanggan, perbarui status pesanan, dan hapus pesanan yang sudah selesai atau
                    dibatalkan.
                </p>
                <button id="manage-order-button"
                    class="flex items-center gap-x-2 border bg-fourth-color text-white px-3 py-2 rounded-lg font-semibold">
                    <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                        </path>
                        <path
                            d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                        </path>
                    </svg>
                    Manage
                </button>
            </div>
            <!-- Card Resep -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Resep</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Pantau resep pelanggan untuk memastikan catatan pasien tetap akurat dan terbaru.
                </p>
                <button id="manage-recipe-button"
                    class="flex items-center gap-x-2 border bg-fourth-color text-white px-3 py-2 rounded-lg font-semibold">
                    <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                        </path>
                        <path
                            d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                        </path>
                    </svg>
                    Manage
                </button>
            </div>
            <!-- Card Voucher -->
            <div
                class="max-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Voucher</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Kelola voucher dengan menambahkan baru, memperbarui tanggal, dan menghapus voucher yang tidak
                    berlaku.
                </p>
                <button id="manage-voucher-button"
                    class="flex items-center gap-x-2 border bg-fourth-color text-white px-3 py-2 rounded-lg font-semibold">
                    <svg class="size-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z">
                        </path>
                        <path
                            d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z">
                        </path>
                    </svg>
                    Manage
                </button>
            </div>
        </div>

    </div>

    <!-- Tab Produk -->
    <div class="hidden font-second-font" id="styled-produk" role="tabpanel" aria-labelledby="produk-tab">
        <div class="flex items-center justify-between m-4">
            <h2 class="text-fourth-color text-3xl font-bold">Produk</h2>
            <button type="button" id="btn-modal-product" data-modal-target="tambahProduk-modal"
                data-modal-toggle="tambahProduk-modal"
                class="flex items-center border bg-fourth-color px-4 py-2 text-white rounded-lg gap-x-2">
                <svg class="w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Tambah Produk
            </button>
        </div>

        <div class="relative overflow-x-auto shadow-md my-10 mx-4 sm:rounded-lg">
            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <button type="button" data-modal-target="tambahKategori-modal"
                    data-modal-toggle="tambahKategori-modal"
                    class="flex items-center border bg-fourth-color p-2 text-white rounded-lg gap-x-2">
                    <svg class="w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Tambah Kategori
                </button>
            </div>
            <!-- Tabel Kategori Produk -->
            <div class="overflow-y-auto max-h-64">
                <table id="table-kategori-produk" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2">
                        <tr>
                            <th scope="col" class="p-4 w-4">
                                no
                            </th>
                            <th scope="col" class="px-6 py-3">
                                nama kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                1
                            </td>
                            <th scope="row"
                                class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <img src="assets/img/oskadon-tablet.webp" alt="Product Image" class="w-10">
                                Oskadon Tablet
                            </th>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-target="editKategori-modal"
                                    data-modal-show="editKategori-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-target="hapusKategori-modal"
                                    data-modal-show="hapusKategori-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 pt-6">

                <!-- Search Input -->
                <label for="table-search-produk" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-produk"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-0 focus:border-third-color"
                        placeholder="Cari produk">
                </div>

            </div>
            <!-- Tabel Produk -->
            <div class="overflow-y-auto max-h-64">
                <table id="table-produk" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2">
                        <tr>
                            <th scope="col" class="p-4 w-4">
                                no
                            </th>
                            <th scope="col" class="px-6 py-3">
                                nama produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                stok
                            </th>
                            <th scope="col" class="px-6 py-3">
                                expired
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                1
                            </td>
                            <th scope="row"
                                class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <img src="assets/img/oskadon-tablet.webp" alt="Product Image" class="w-10">
                                Oskadon Tablet
                            </th>
                            <td class="px-6 py-4">
                                Sakit Kepala
                            </td>
                            <td class="px-6 py-4">
                                Rp. 8.000
                            </td>
                            <td class="px-6 py-4">
                                9
                            </td>
                            <td class="px-6 py-4">
                                5.0 (32 votes)
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-target="editProduk-modal"
                                    data-modal-show="editProduk-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-target="hapusProduk-modal"
                                    data-modal-show="hapusProduk-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Modal Tambah Produk -->
        <div id="tambahProduk-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <form id="form-create-produk" class="relative bg-white rounded-lg shadow "
                    enctype="multipart/form-data">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Tambah Produk
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="tambahProduk-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-5 gap-8">
                            <div class="col-span-2 flex flex-col items-center justify-center gap-y-5">
                                <img class="previewImage size-52 object-cover" src="assets/img/oskadon-tablet.webp"
                                    alt="Gambar produk">
                                <label class="block my-2">
                                    <span class="border-2 px-4 py-2 rounded-lg text-gray-400 cursor-pointer">Pilih
                                        Gambar</span>
                                    <input class="imageInput hidden" type="file" name="gambar"
                                        accept=".jpg,.png,.jpeg">
                                </label>
                                <span class="text-gray-400 text-sm">
                                    Ukuran gambar: maks. 2mb <br>
                                    Format gambar: .JPG, .PNG, .JPEG
                                </span>
                            </div>
                            <div class="col-span-3 grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                        Produk</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan nama produk" required>
                                </div>
                                <div class="col-span-2">
                                    <label for="input-add-category"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kategori Produk</label>
                                    <select id="input-add-category" name="category_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                        <option selected disabled>Pilih kategori</option>
                                        <option value="TV">TV/Monitors</option>
                                        <option value="PC">PC</option>
                                        <option value="GA">Gaming/Console</option>
                                        <option value="PH">Phones</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="harga"
                                        class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                                    <input type="number" name="harga" id="harga" data-input-counter
                                        data-input-counter-min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan harga produk" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="stok"
                                        class="block mb-2 text-sm font-medium text-gray-900">Stok</label>
                                    <input type="number" name="stok" id="stok" data-input-counter
                                        data-input-counter-min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan stok produk" required>
                                </div>
                                <div class="col-span-2">
                                    <label for="deskripsiProduk"
                                        class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Produk</label>
                                    <textarea id="deskripsiProduk" name="deskripsi" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 focus:border-third-color"
                                        placeholder="Masukkan Deskripsi Produk"></textarea>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tglProdukBuat"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Dibuat</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="datepicker-produk-create" name="tanggal_obat_dibuat" datepicker
                                            datepicker-buttons datepicker-autoselect-today datepicker-autohide
                                            datepicker-format="yyyy-mm-dd" datepicker-orientation="top"
                                            type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tglProdukExpired"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Expired</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="datepicker-produk-createExpired" name="tanggal_obat_expired"
                                            datepicker datepicker-buttons datepicker-autoselect-today
                                            datepicker-autohide datepicker-format="yyyy-mm-dd"
                                            datepicker-orientation="top" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Tambah Produk
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Edit Produk -->
        <div id="editProduk-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <form id="form-edit-produk" class="relative bg-white rounded-lg shadow"
                    enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" id="input-id" name="id">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Update Produk
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="editProduk-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-5 gap-8">
                            <div class="col-span-2 flex flex-col items-center justify-center gap-y-5">
                                <img id="previewProductImage" class="previewImage size-52 object-cover"
                                    src="assets/img/oskadon-tablet.webp" alt="Gambar produk">
                                <label class="block my-2">
                                    <span class="border-2 px-4 py-2 rounded-lg text-gray-400 cursor-pointer">Pilih
                                        Gambar</span>
                                    <input class="imageInput hidden" type="file" id="input-image" name="gambar"
                                        accept=".jpg,.png,.jpeg">
                                </label>
                                <span class="text-gray-400 text-sm">
                                    Ukuran gambar: maks. 2mb <br>
                                    Format gambar: .JPG, .PNG
                                </span>
                            </div>
                            <div class="col-span-3 grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="input-name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                        Produk</label>
                                    <input type="text" id="input-name" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan nama produk" required>
                                </div>
                                <div class="col-span-2">
                                    <label for="input-category"
                                        class="block mb-2 text-sm font-medium text-gray-900">Kategori Produk</label>
                                    <select id="input-category" name="category_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                        <option selected>Pilih kategori</option>
                                        <option value="TV">TV/Monitors</option>
                                        <option value="PC">PC</option>
                                        <option value="GA">Gaming/Console</option>
                                        <option value="PH">Phones</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="input-harga"
                                        class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                                    <input type="number" id="input-harga" name="harga" data-input-counter
                                        data-input-counter-min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan harga produk" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="input-stok"
                                        class="block mb-2 text-sm font-medium text-gray-900">Stok</label>
                                    <input type="number" id="input-stok" name="stok" data-input-counter
                                        data-input-counter-min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan stok produk" required>
                                </div>
                                <div class="col-span-2">
                                    <label for="input-deskripsi"
                                        class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Produk</label>
                                    <textarea id="input-deskripsi" name="deskripsi" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 focus:border-third-color"
                                        placeholder="Masukkan Deskripsi Produk"></textarea>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="input-tanggal-obat-dibuat"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Update</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="input-tanggal-obat-dibuat" name="tanggal_obat_dibuat" datepicker
                                            datepicker-buttons datepicker-autoselect-today datepicker-autohide
                                            datepicker-format="yyyy-mm-dd" datepicker-orientation="top"
                                            type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="input-tanggal-obat-expired"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Expired</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="input-tanggal-obat-expired" name="tanggal_obat_expired" datepicker
                                            datepicker-buttons datepicker-autoselect-today datepicker-autohide
                                            datepicker-format="yyyy-mm-dd" datepicker-orientation="top"
                                            type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Hapus Produk -->
        <div id="hapusProduk-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hapusProduk-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah Anda yakin ingin menghapus produk
                            ini?</h3>

                        <input type="hidden" id="deleteProductId">

                        <button onclick="confirmDeleteProduct()" data-modal-hide="hapusProduk-modal" type="button"
                            class="text-white bg-red-700 hover:bg-red-800 rounded-lg border border-gray-200 font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="hapusProduk-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                            batalkan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Kategori -->
        <div id="tambahKategori-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-fit">
                <!-- Modal content -->
                <form id="form-create-category" class="relative bg-white rounded-lg shadow "
                    enctype="multipart/form-data">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Tambah Kategori
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="tambahKategori-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-row-2 gap-8">
                            <div class="flex flex-col items-center justify-center gap-y-5">
                                <img class="previewImage size-44 object-cover rounded-full"
                                    src="assets/img/profile.jpg" alt="Profile Image">
                                <label class="block my-2">
                                    <span
                                        class="border-2 px-4 py-2 rounded-lg text-gray-400 text-sm cursor-pointer">Pilih
                                        Gambar</span>
                                    <input class="imageInput hidden" type="file" name="image"
                                        accept=".jpg,.png,.jpeg">
                                </label>
                                <span class="text-gray-400 text-sm">
                                    Ukuran gambar: maks. 2mb <br>
                                    Format gambar: .JPG, .PNG, .JPEG
                                </span>
                            </div>
                            <div class="grid gap-2  grid-cols-2">
                                <div class="col-span-2">
                                    <label for="tambah-name-kategori"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama Kategori</label>
                                    <input type="text" name="name" id="tambah-name-kategori"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Edit Kategori -->
        <div id="editKategori-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-fit">
                <!-- Modal content -->
                <form id="form-edit-kategori" class="relative bg-white rounded-lg shadow"
                    enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" id="editKategori-id" name="id">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Update Kategori
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="editKategori-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-row-2 gap-8">
                            <div class="flex flex-col items-center justify-center gap-y-5">
                                <img id="previewCategoryImage" class="previewImage size-44 object-cover rounded-full"
                                    src="assets/img/profile.jpg" alt="Profile Image">
                                <label class="block my-2">
                                    <span
                                        class="border-2 px-4 py-2 rounded-lg text-gray-400 text-sm cursor-pointer">Pilih
                                        Gambar</span>
                                    <input class="imageInput hidden" type="file" id="editKategori-image"
                                        name="image" accept=".jpg,.png,.jpeg">
                                </label>
                                <span class="text-gray-400 text-sm">
                                    Ukuran gambar: maks. 2mb <br>
                                    Format gambar: .JPG, .PNG, .JPEG
                                </span>
                            </div>
                            <div class="grid gap-2  grid-cols-2">
                                <div class="col-span-2">
                                    <label for="edit-name-kategori"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama Kategori</label>
                                    <input type="text" name="name" id="edit-name-kategori"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Hapus Kategori -->
        <div id="hapusKategori-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hapusKategori-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah Anda yakin ingin menghapus Kategori
                            ini?</h3>

                        <input type="hidden" id="deleteKategoriId">

                        <button onclick="confirmDeleteCategory()" data-modal-hide="hapusKategori-modal"
                            type="button"
                            class="text-white bg-red-700 hover:bg-red-800 rounded-lg border border-gray-200 font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="hapusKategori-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                            batalkan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Tab Pesanan -->
    <div class="hidden font-second-font" id="styled-pesanan" role="tabpanel" aria-labelledby="pesanan-tab">
        <h2 class="text-fourth-color text-3xl font-bold m-4">Pesanan</h2>

        <div class="relative overflow-x-auto shadow-md my-10 mx-4 sm:rounded-lg">
            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <!-- Search Input -->
                <label for="table-search-pesanan" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-pesanan"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-0 focus:border-third-color"
                        placeholder="Cari pesanan">
                </div>

            </div>
            <!-- Tabel Pesanan -->
            <div class="overflow-y-auto max-h-80">
                <table id="table-order" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2">
                        <tr>
                            <th scope="col" class="p-4 w-4">
                                no
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tag
                            </th>
                            <th scope="col" class="px-6 py-3">
                                jumlah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                customer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                1
                            </td>
                            <td class="px-6 py-4">
                                #53200002
                            </td>
                            <td class="px-6 py-4">
                                12 Item
                            </td>
                            <td class="px-6 py-4">
                                28-12-2024
                            </td>
                            <th scope="row"
                                class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <img src="assets/img/profile.jpg" alt="Profile Image" class="size-8 rounded-full">
                                Ronald Jones
                            </th>
                            <td class="px-6 py-4">
                                Rp. 8.000
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-blue-950 font-semibold">Shipping</p>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-target="editPesanan-modal"
                                    data-modal-show="editPesanan-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-target="hapusPesanan-modal"
                                    data-modal-show="hapusPesanan-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Modal Edit Pesanan -->
        <div id="editPesanan-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <form id="form-edit-order" class="relative bg-white rounded-lg shadow ">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" id="edit-order-id" name="id">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Update Pesanan
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="editPesanan-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-5 gap-8">
                            <!-- Detail Pesanan -->
                            <div class="col-span-2 flex flex-col gap-y-4">
                                <div id="user-order"
                                    class="flex flex-row items-center gap-x-4 border bg-gray-200 p-3 rounded-lg">
                                    <img src="assets/img/profile.jpg" alt="Profile Image"
                                        class="size-8 rounded-full">
                                    <span>Randall Murphy</span>
                                </div>
                                <div class="border bg-gray-200 p-3 rounded-lg">
                                    <ul class="space-y-5" id="product-list">
                                        <li class="flex flex-row items-center justify-between gap-x-2">
                                            <div class="flex items-center">
                                                <img class="size-8 object-fill" src="assets/img/oskadon-tablet.webp"
                                                    alt="Product Image">
                                                <div id="product-order" class="ps-3">
                                                    <p class="font-semibold text-sm">Oskadon Tablet</p>
                                                    <span class="font-normal text-gray-500 text-xs">Rp.8.000</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                    class="flex flex-row items-center justify-between border bg-gray-200 p-3 rounded-lg">
                                    <h3 class="text-base font-bold">Discount :</h3>
                                    <div id="diskon-order" class="flex items-center gap-x-2">
                                        <img class="w-10 object-fill" src="assets/img/voucher-1.webp"
                                            alt="Voucher Image">
                                        <span class="font-semibold text-sm">Discount 10%</span>
                                    </div>
                                </div>
                                <div id="total-order"
                                    class="flex flex-row items-center justify-between border bg-gray-200 p-3 rounded-lg">
                                    <h3 class="text-xl font-bold">Total =</h3>
                                    <span class="font-semibold text-base">Rp. 100.000</span>
                                </div>
                            </div>
                            <div class="col-span-3 grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="edit-tag-order"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tag</label>
                                    <input type="text" name="tag" id="edit-tag-order"
                                        class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        value="#53200002" readonly>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-tanggal-order"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pesanan</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="edit-tanggal-order" name="tanggal" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal" readonly>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-jumlah-order"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jumlah Pesanan</label>
                                    <input type="text" name="jumlah" id="edit-jumlah-order"
                                        class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        value="6 Item" readonly>
                                </div>
                                <div class="col-span-2">
                                    <label for="edit-alamat-order"
                                        class="block mb-2 text-sm font-medium text-gray-900">Alamat Pesanan</label>
                                    <textarea id="edit-alamat-order" name="alamat" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 focus:border-third-color"
                                        placeholder="Masukkan Alamat Pesanan" readonly></textarea>
                                </div>
                                <select id="edit-status-order" name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                    required>
                                    <option selected disabled>Pilih Status</option>
                                    <option value="Order Diterima">Order Diterima</option>
                                    <option value="Sedang Dikemas">Sedang Dikemas</option>
                                    <option value="Sedang Diantar">Sedang Diantar</option>
                                    <option value="Pesanan Selesai">Pesanan Selesai</option>
                                    <option value="Pesanan Dibatalkan">Pesanan Dibatalkan</option>
                                </select>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Hapus Pesanan -->
        <div id="hapusPesanan-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hapusPesanan-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah Anda yakin ingin menghapus pesanan
                            ini?</h3>

                        <input type="hidden" id="deleteOrderId">

                        <button onclick="confirmDeleteOrder()" data-modal-hide="hapusPesanan-modal" type="button"
                            class="text-white bg-red-700 hover:bg-red-800 rounded-lg border border-gray-200 font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="hapusPesanan-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                            batalkan</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Tab Resep -->
    <div class="hidden font-second-font" id="styled-resep" role="tabpanel" aria-labelledby="resep-tab">
        <h2 class="text-fourth-color text-3xl font-bold m-4">Resep</h2>

        <div class="relative overflow-x-auto shadow-md my-10 mx-4 sm:rounded-lg">
            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <!-- Search Input -->
                <label for="table-search-resep" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-resep"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-0 focus:border-third-color"
                        placeholder="Cari resep">
                </div>

            </div>
            <!-- Tabel Resep -->
            <div class="overflow-y-auto max-h-80">
                <table id="table-resep" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2">
                        <tr>
                            <th scope="col" class="p-4 w-4">
                                no
                            </th>
                            <th scope="col" class="px-6 py-3">
                                customer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                1
                            </td>
                            <th scope="row"
                                class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <img src="assets/img/profile.jpg" alt="Profile Image" class="size-8 rounded-full">
                                Ronald Jones
                            </th>
                            <td class="px-6 py-4">
                                28-12-2024
                            </td>
                            <td class="px-6 py-4 truncate">
                                Keterangan
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-target="editResep-modal"
                                    data-modal-show="editResep-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-target="hapusResep-modal"
                                    data-modal-show="hapusResep-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <!-- Modal Lihat Resep -->
        <div id="editResep-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <form action="#" class="relative bg-white rounded-lg shadow ">

                    <input type="hidden" id="lihat-recipe-id" name="id">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Lihat Resep
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="editResep-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-5 gap-8">
                            <!-- Detail Resep -->
                            <div class="col-span-2 flex flex-col gap-y-4">
                                <div id="user-recipe"
                                    class="flex flex-row items-center gap-x-4 border bg-gray-200 p-3 rounded-lg">
                                    <img src="assets/img/profile.jpg" alt="profile image"
                                        class="size-8 rounded-full">
                                    <span>Randall Murphy</span>
                                </div>
                                <div class="border bg-gray-200 p-3 rounded-lg">
                                    <ul class="space-y-5">
                                        <li class="flex flex-row items-center justify-between gap-x-2">
                                            <div class="flex items-center gap-x-3">
                                                <img id="previewRecipeImage" class="size-8 object-fill"
                                                    src="assets/img/oskadon-tablet.webp" alt="Resep Image">
                                                <p class="font-semibold text-sm">Resep</p>
                                            </div>
                                            <a id="Tampil-recipe-gambar" href="#" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="size-6 cursor-pointer text-gray-400" fill="currentcolor"
                                                    viewBox="0 0 48 48" data-tooltip-target="tooltip-animation-1">
                                                    <path
                                                        d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 33 44 L 33 43.949219 C 30.609 43.711219 28.467094 42.625 26.871094 41 L 12.5 41 C 11.673 41 11 40.327 11 39.5 L 11 8.5 C 11 7.673 11.673 7 12.5 7 L 24 7 L 24 15.5 C 24 17.981 26.019 20 28.5 20 L 37 20 L 37 24.460938 C 38.095 24.805937 39.103 25.343531 40 26.019531 L 40 18.5 C 40 18.0855 39.832047 17.710828 39.560547 17.439453 L 26.560547 4.4394531 C 26.289047 4.1680781 25.914 4 25.5 4 L 12.5 4 z M 27 9.1210938 L 34.878906 17 L 28.5 17 C 27.673 17 27 16.327 27 15.5 L 27 9.1210938 z M 17.5 25 C 16.671 25 16 25.671 16 26.5 C 16 27.329 16.671 28 17.5 28 L 26 28 C 26.952 26.733 28.197719 25.699 29.636719 25 L 17.5 25 z M 34 26 C 29.589 26 26 29.589 26 34 C 26 38.411 29.589 42 34 42 C 35.665 42 37.210187 41.487281 38.492188 40.613281 L 43.439453 45.560547 C 43.732453 45.854547 44.116 46 44.5 46 C 44.884 46 45.267547 45.853547 45.560547 45.560547 C 46.145547 44.974547 46.145547 44.025453 45.560547 43.439453 L 40.615234 38.492188 C 41.488234 37.210187 42 35.665 42 34 C 42 29.589 38.411 26 34 26 z M 34 29 C 36.757 29 39 31.243 39 34 C 39 36.757 36.757 39 34 39 C 31.243 39 29 36.757 29 34 C 29 31.243 31.243 29 34 29 z M 17.5 32 C 16.671 32 16 32.671 16 33.5 C 16 34.329 16.671 35 17.5 35 L 24.050781 35 C 24.017781 34.671 24 34.338 24 34 C 24 33.315 24.068219 32.646 24.199219 32 L 17.5 32 z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div id="tooltip-animation-1" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-400 rounded-lg shadow-sm opacity-0 tooltip">
                                                View
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-span-3 grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="lihat-tanggal-resep"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Resep</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="lihat-tanggal-resep" name="tangggal" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal" readonly>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <label for="lihat-keterangan-resep"
                                        class="block mb-2 text-sm font-medium text-gray-900">Keterangan Resep</label>
                                    <textarea id="lihat-keterangan-resep" name="keterangan" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 focus:border-third-color"
                                        placeholder="Masukkan Keterangan Resep" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <!-- <button type="submit" class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Simpan
                            </button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Hapus Resep -->
        <div id="hapusResep-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hapusResep-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah Anda yakin ingin menghapus Resep
                            ini?</h3>

                        <input type="hidden" id="deleteRecipeId">

                        <button onclick="confirmDeleteRecipe()" data-modal-hide="hapusResep-modal" type="button"
                            class="text-white bg-red-700 hover:bg-red-800 rounded-lg border border-gray-200 font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="hapusResep-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                            batalkan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Tab Voucher -->
    <div class="hidden font-second-font" id="styled-voucher" role="tabpanel" aria-labelledby="voucher-tab">
        <div class="flex items-center justify-between m-4">
            <h2 class="text-fourth-color text-3xl font-bold">Voucher</h2>
            <button type="button" data-modal-target="tambahVoucher-modal" data-modal-toggle="tambahVoucher-modal"
                class="flex items-center border bg-fourth-color px-4 py-2 text-white rounded-lg gap-x-2">
                <svg class="w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Tambah Voucher
            </button>
        </div>

        <div class="relative overflow-x-auto shadow-md my-10 mx-4 sm:rounded-lg">
            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <!-- Search Input -->
                <label for="table-search-voucher" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search-voucher"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-0 focus:border-third-color"
                        placeholder="Cari resep">
                </div>

            </div>
            <!-- Tabel Voucher -->
            <div class="overflow-y-auto max-h-80">
                <table id="table-voucher" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b-2">
                        <tr>
                            <th scope="col" class="p-4 w-4">
                                no
                            </th>
                            <th scope="col" class="px-6 py-3">
                                nama voucher
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tanggal exp
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                1
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                                <img class="size-8 object-fill" src="assets/img/voucher-1.webp"
                                    alt="Voucher Image">
                                <div class="ps-3">
                                    <div class="font-semibold">Discount 10%</div>
                                    <div class="font-normal text-gray-500">Minimal Belanja Rp. 30K</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Active
                            </td>
                            <td class="px-6 py-4">
                                28-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-target="editVoucher-modal"
                                    data-modal-show="editVoucher-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-target="hapusVoucher-modal"
                                    data-modal-show="hapusVoucher-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                2
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                                <img class="size-8 object-fill" src="assets/img/voucher-1.webp"
                                    alt="Voucher Image">
                                <div class="ps-3">
                                    <div class="font-semibold">Discount 30%</div>
                                    <div class="font-normal text-gray-500">Minimal Belanja Rp. 30K</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Exp
                            </td>
                            <td class="px-6 py-4">
                                29-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-show="editVoucher-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-show="hapusVoucher-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="p-4 w-4">
                                3
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
                                <img class="size-8 object-fill" src="assets/img/voucher-1.webp"
                                    alt="Voucher Image">
                                <div class="ps-3">
                                    <div class="font-semibold">Discount 20%</div>
                                    <div class="font-normal text-gray-500">Minimal Belanja Rp. 30K</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Active
                            </td>
                            <td class="px-6 py-4">
                                30-12-2024
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" data-modal-show="editVoucher-modal"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                        </path>
                                        <path
                                            d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" data-modal-show="hapusVoucher-modal"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true"
                                        fill="currentcolor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Modal Tambah Voucher -->
        <div id="tambahVoucher-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <form id="form-create-voucher" method="POST" class="relative bg-white rounded-lg shadow"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Tambah Voucher
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="tambahVoucher-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-5 gap-8">
                            <div class="col-span-2 flex flex-col items-center justify-center gap-y-5">
                                <img class="previewImage size-52 object-full" src="assets/img/voucher-1.webp"
                                    alt="Gambar voucher">
                                <label class="block my-2">
                                    <span class="border-2 px-4 py-2 rounded-lg text-gray-400 cursor-pointer">Pilih
                                        Gambar</span>
                                    <input class="imageInput hidden" type="file" id="tambah-gambar-voucher"
                                        name="gambar" accept=".jpg,.png,.jpeg">
                                </label>
                                <span class="text-gray-400 text-sm">
                                    Ukuran gambar: maks. 2mb <br>
                                    Format gambar: .JPG, .PNG, .JPEG
                                </span>
                            </div>
                            <div class="col-span-3 grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="tambah-name-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama Voucher</label>
                                    <input type="text" name="name" id="tambah-name-voucher"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan Nama Voucher" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tambah-jumlah-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jumlah Discount</label>
                                    <select id="tambah-jumlah-voucher" name="jumlah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                        <option selected disabled>Pilih Discount</option>
                                        <option value="10%">10%</option>
                                        <option value="20%">20%</option>
                                        <option value="30%">30%</option>
                                        <option value="50%">40%</option>
                                        <option value="Gratis Ongkir">Gratis Ongkir</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tambah-status-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                                    <select id="tambah-status-voucher" name="status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                        <option selected disabled>Pilih Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Expired">Expired</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="tambah-detail-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Detail Voucher</label>
                                    <textarea id="tambah-detail-voucher" name="detail" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 focus:border-third-color"
                                        placeholder="Masukkan Detail Voucher"></textarea>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tambah-tanggal-diskon-dibuat"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Buat</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="tambah-tanggal-diskon-dibuat" name="tanggal_diskon_dibuat"
                                            datepicker datepicker-buttons datepicker-autoselect-today
                                            datepicker-autohide datepicker-format="yyyy-mm-dd"
                                            datepicker-orientation="top" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tambah-tanggal-diskon-expired"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Expired</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="tambah-tanggal-diskon-expired" name="tanggal_diskon_expired"
                                            datepicker datepicker-buttons datepicker-autoselect-today
                                            datepicker-autohide datepicker-format="yyyy-mm-dd"
                                            datepicker-orientation="top" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Tambah Voucher
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Edit Voucher -->
        <div id="editVoucher-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
                <!-- Modal content -->
                <form id="form-edit-voucher" class="relative bg-white rounded-lg shadow"
                    enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" id="edit-voucher-id" name="id">

                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Update Voucher
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="editVoucher-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-5 gap-8">
                            <div class="col-span-2 flex flex-col items-center justify-center gap-y-5">
                                <img id="previewVoucherImage" class="previewImage size-52 object-full"
                                    src="assets/img/voucher-1.webp" alt="Gambar voucher">
                                <label class="block my-2">
                                    <span class="border-2 px-4 py-2 rounded-lg text-gray-400 cursor-pointer">Pilih
                                        Gambar</span>
                                    <input class="imageInput hidden" type="file" id="edit-gambar-voucher"
                                        name="gambar" accept=".jpg,.png,.jpeg">
                                </label>
                                <span class="text-gray-400 text-sm">
                                    Ukuran gambar: maks. 2mb <br>
                                    Format gambar: .JPG, .PNG, .JPEG
                                </span>
                            </div>
                            <div class="col-span-3 grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="edit-name-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama Voucher</label>
                                    <input type="text" name="name" id="edit-name-voucher"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        placeholder="Masukkan Nama Voucher" required>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-jumlah-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jumlah Discount</label>
                                    <select id="edit-jumlah-voucher" name="jumlah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                        <option selected disabled>Pilih Discount</option>
                                        <option value="10%">10%</option>
                                        <option value="20%">20%</option>
                                        <option value="30%">30%</option>
                                        <option value="50%">40%</option>
                                        <option value="Gratis Ongkir">Gratis Ongkir</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-status-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                                    <select id="edit-status-voucher" name="status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full p-2.5"
                                        required>
                                        <option selected disabled>Pilih Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Expired">Expired</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="edit-detail-voucher"
                                        class="block mb-2 text-sm font-medium text-gray-900">Detail Voucher</label>
                                    <textarea id="edit-detail-voucher" name="detail" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-0 focus:border-third-color"
                                        placeholder="Masukkan Detail Voucher"></textarea>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-tanggal-diskon-dibuat"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Buat</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="edit-tanggal-diskon-dibuat" name="tanggal_diskon_dibuat"
                                            datepicker datepicker-buttons datepicker-autoselect-today
                                            datepicker-autohide datepicker-format="yyyy-mm-dd"
                                            datepicker-orientation="top" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="edit-tanggal-diskon-expired"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Expired</label>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="edit-tanggal-diskon-expired" name="tanggal_diskon_expired"
                                            datepicker datepicker-buttons datepicker-autoselect-today
                                            datepicker-autohide datepicker-format="yyyy-mm-dd"
                                            datepicker-orientation="top" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-third-color block w-full ps-10 p-2.5"
                                            placeholder="Pilih tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end px-6 py-2 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-fourth-color focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Hapus Voucher -->
        <div id="hapusVoucher-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="hapusVoucher-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah Anda yakin ingin menghapus Voucher
                            ini?</h3>

                        <input type="hidden" id="deleteVoucherId">

                        <button onclick="confirmDeleteVoucher()" data-modal-hide="hapusVoucher-modal"
                            type="button"
                            class="text-white bg-red-700 hover:bg-red-800 rounded-lg border border-gray-200 font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="hapusVoucher-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                            batalkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-end></x-end>
