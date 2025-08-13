const getProduct = () => {
    jQuery("#produk-styled-tab").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/products",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableProduk = jQuery("#table-produk tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' + _index + "</td>");

                    tr.append(
                        `<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><img src="assets/uploaded/${item.gambar}" alt="Product Image" class="w-10">${item.name}</th>`
                    );

                    tr.append(
                        `<td class="px-6 py-4"> ${
                            item.category ? item.category.name : "-"
                        } </td>`
                    );

                    tr.append('<td class="px-6 py-4">' + item.harga + "</td>");

                    tr.append('<td class="px-6 py-4">' + item.stok + "</td>");

                    tr.append(
                        '<td class="px-6 py-4">' +
                            item.tanggal_obat_expired +
                            "</td>"
                    );

                    tr.append(
                        `<td class="px-6 py-4 flex space-x-2">
                            <button type="button" onclick="getProductDetail(${item.id})" data-modal-target="editProduk-modal" data-modal-show="editProduk-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24">
                                    <path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path>
                                    <path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path>
                                </svg>
                            </button>
                            <button type="button" onclick="deleteProduct(${item.id})" data-modal-target="hapusProduk-modal" data-modal-show="hapusProduk-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24">
                                    <path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path>
                                </svg>
                            </button>
                        </td>`
                    );
                    tableProduk.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editProdukModalElement =
                        document.getElementById("editProduk-modal");
                    const hapusProdukModalElement =
                        document.getElementById("hapusProduk-modal");

                    const editProdukModal = editProdukModalElement
                        ? new Modal(editProdukModalElement)
                        : null;
                    const hapusProdukModal = hapusProdukModalElement
                        ? new Modal(hapusProdukModalElement)
                        : null;

                    // Event untuk membuka modal berdasarkan data-modal-target
                    jQuery(document).on(
                        "click",
                        "[data-modal-target]",
                        function () {
                            const modalId = jQuery(this).data("modal-target");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.show();
                            }
                        }
                    );

                    // Event untuk menutup modal berdasarkan data-modal-hide
                    jQuery(document).on(
                        "click",
                        "[data-modal-hide]",
                        function () {
                            const modalId = jQuery(this).data("modal-hide");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.hide();
                            }
                        }
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Produk : ", error);
            },
        });
    });
};

const getCategory = () => {
    jQuery("#produk-styled-tab").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/categories",
            type: "get",
            dataType: "json",
            success: (response) => {
                const tableCategory = jQuery(
                    "#table-kategori-produk tbody"
                ).empty();
                response.data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' + _index + "</td>");

                    tr.append(
                        `<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><img src="assets/uploaded/${item.image}" alt="Category Image" class="w-10">${item.name}</th>`
                    );

                    tr.append(
                        `<td class="px-6 py-4"><button type="button" onclick="getCategoryDetail(${item.id})" data-modal-target="editKategori-modal" data-modal-show="editKategori-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteCategory(${item.id})" data-modal-target="hapusKategori-modal" data-modal-show="hapusKategori-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`
                    );

                    tableCategory.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editKategoriModalElement =
                        document.getElementById("editKategori-modal");
                    const hapusKategoriModalElement = document.getElementById(
                        "hapusKategori-modal"
                    );

                    const editKategoriModal = editKategoriModalElement
                        ? new Modal(editKategoriModalElement)
                        : null;
                    const hapusKategoriModal = hapusKategoriModalElement
                        ? new Modal(hapusKategoriModalElement)
                        : null;

                    // Event untuk membuka modal berdasarkan data-modal-target
                    jQuery(document).on(
                        "click",
                        "[data-modal-target]",
                        function () {
                            const modalId = jQuery(this).data("modal-target");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.show();
                            }
                        }
                    );

                    // Event untuk menutup modal berdasarkan data-modal-hide
                    jQuery(document).on(
                        "click",
                        "[data-modal-hide]",
                        function () {
                            const modalId = jQuery(this).data("modal-hide");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.hide();
                            }
                        }
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getVoucher = () => {
    jQuery("#voucher-styled-tab").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/vouchers",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableVoucher = jQuery("#table-voucher tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' + _index + "</td>");

                    tr.append(
                        `<th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap"><img class="size-8 object-fill" src="assets/uploaded/${item.gambar}" alt="Voucher Image"><div class="ps-3"><div class="font-semibold">${item.name}</div><div class="font-normal text-gray-500">Discount ${item.jumlah}</div></div></th>`
                    );

                    tr.append(`<td class="px-6 py-4">${item.status}</td>`);

                    tr.append(
                        `<td class="px-6 py-4">${item.tanggal_diskon_expired}</td>`
                    );

                    tr.append(
                        `<td class="px-6 py-4"><button type="button" onclick="getVoucherDetail(${item.id})" data-modal-target="editVoucher-modal" data-modal-show="editVoucher-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteVoucher(${item.id})" data-modal-target="hapusVoucher-modal" data-modal-show="hapusVoucher-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`
                    );

                    tableVoucher.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editVoucherModalElement =
                        document.getElementById("editVoucher-modal");
                    const hapusVoucherModalElement =
                        document.getElementById("hapusVoucher-modal");

                    const editVoucherModal = editVoucherModalElement
                        ? new Modal(editVoucherModalElement)
                        : null;
                    const hapusVoucherModal = hapusVoucherModalElement
                        ? new Modal(hapusVoucherModalElement)
                        : null;

                    // Event untuk membuka modal berdasarkan data-modal-target
                    jQuery(document).on(
                        "click",
                        "[data-modal-target]",
                        function () {
                            const modalId = jQuery(this).data("modal-target");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.show();
                            }
                        }
                    );

                    // Event untuk menutup modal berdasarkan data-modal-hide
                    jQuery(document).on(
                        "click",
                        "[data-modal-hide]",
                        function () {
                            const modalId = jQuery(this).data("modal-hide");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.hide();
                            }
                        }
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getResep = () => {
    jQuery("#resep-styled-tab").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/recipes",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableResep = jQuery("#table-resep tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' + _index + "</td>");

                    tr.append(
                        `<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${
                            item.user ? item.user.name : "-"
                        }</th>`
                    );

                    tr.append(`<td class="px-6 py-4">${item.tanggal}</td>`);

                    tr.append(
                        `<td class="px-6 py-4 truncate">${item.keterangan}</td>`
                    );

                    tr.append(
                        `<td class="px-6 py-4"><button type="button" onclick="getResepDetail(${item.id})" data-modal-target="editResep-modal" data-modal-show="editResep-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteRecipe(${item.id})" data-modal-target="hapusResep-modal" data-modal-show="hapusResep-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`
                    );

                    tableResep.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editResepModalElement =
                        document.getElementById("editResep-modal");
                    const hapusResepModalElement =
                        document.getElementById("hapusResep-modal");

                    const editResepModal = editResepModalElement
                        ? new Modal(editResepModalElement)
                        : null;
                    const hapusResepModal = hapusResepModalElement
                        ? new Modal(hapusResepModalElement)
                        : null;

                    // Event untuk membuka modal berdasarkan data-modal-target
                    jQuery(document).on(
                        "click",
                        "[data-modal-target]",
                        function () {
                            const modalId = jQuery(this).data("modal-target");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.show();
                            }
                        }
                    );

                    // Event untuk menutup modal berdasarkan data-modal-hide
                    jQuery(document).on(
                        "click",
                        "[data-modal-hide]",
                        function () {
                            const modalId = jQuery(this).data("modal-hide");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.hide();
                            }
                        }
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getOrder = () => {
    jQuery("#pesanan-styled-tab").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/orders",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableOrder = jQuery("#table-order tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' + _index + "</td>");

                    tr.append(`<td class="p-4 w-4">${item.tag}</td>`);

                    tr.append(`<td class="p-4 w-4">${item.jumlah}</td>`);

                    tr.append(`<td class="px-6 py-4">${item.tanggal}</td>`);

                    tr.append(
                        `<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">${
                            item.user ? item.user.name : "-"
                        }</th>`
                    );

                    tr.append(`<td class="px-6 py-4">${item.total}</td>`);

                    tr.append(`<td class="px-6 py-4">${item.status}</td>`);

                    tr.append(
                        `<td class="px-6 py-4"><button type="button" onclick="getOrderDetail(${item.id})" data-modal-target="editPesanan-modal" data-modal-show="editPesanan-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteOrder(${item.id})" data-modal-target="hapusPesanan-modal" data-modal-show="hapusPesanan-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`
                    );

                    tableOrder.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editPesananModalElement =
                        document.getElementById("editPesanan-modal");
                    const hapusPesananModalElement =
                        document.getElementById("hapusPesanan-modal");

                    const editPesananModal = editPesananModalElement
                        ? new Modal(editPesananModalElement)
                        : null;
                    const hapusPesananModal = hapusPesananModalElement
                        ? new Modal(hapusPesananModalElement)
                        : null;

                    // Event untuk membuka modal berdasarkan data-modal-target
                    jQuery(document).on(
                        "click",
                        "[data-modal-target]",
                        function () {
                            const modalId = jQuery(this).data("modal-target");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.show();
                            }
                        }
                    );

                    // Event untuk menutup modal berdasarkan data-modal-hide
                    jQuery(document).on(
                        "click",
                        "[data-modal-hide]",
                        function () {
                            const modalId = jQuery(this).data("modal-hide");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.hide();
                            }
                        }
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getHistoryOrder = () => {
    // Fungsi untuk memformat harga menjadi Rp 422.500
    const formatRupiah = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0,
        })
            .format(number)
            .replace("Rp", "Rp");
    };

    jQuery.ajax({
        url: "/profile/orders",
        type: "get",
        dataType: "json",
        success: (response) => {
            jQuery("#loading-msg").remove(); // Hapus loading

            const historyOrder = jQuery("#history-order").empty();

            if (response.length === 0) {
                historyOrder.append(
                    `<p class="text-center text-gray-500">Belum ada pesanan.</p>`
                );
                return;
            }

            response.forEach((item) => {
                const statusClass = {
                    "Order Diterima": "bg-blue-200 text-blue-800",
                    "Sedang Dikemas": "bg-yellow-200 text-yellow-800",
                    "Sedang Diantar": "bg-blue-400 text-white",
                    "Pesanan Selesai": "bg-green-200 text-green-800",
                    "Pesanan Dibatalkan": "bg-red-200 text-red-800",
                };

                let productsHTML = "";

                // Ambil produk pertama
                const firstProduct = item.items[0];
                if (firstProduct) {
                    productsHTML += `
                        <div class="flex flex-row items-center justify-start gap-x-5">
                            <img src="assets/uploaded/${firstProduct.product.gambar}" 
                                alt="${firstProduct.product.name}" 
                                class="w-20 h-20 object-contain">
                            <div class="flex flex-col">
                                <p class="text-sm">${firstProduct.product.name}</p>
                                <p class="text-xs font-bold">x<span>${firstProduct.jumlah}</span></p>
                            </div>
                        </div>
                    `;
                }

                // Jika ada lebih dari 1 produk, tampilkan keterangan "+N produk lainnya"
                const otherProductsCount = item.items.length - 1;
                if (otherProductsCount > 0) {
                    productsHTML += `
                        <p class="text-xs text-gray-500 mt-1">+${otherProductsCount} produk lainnya</p>
                    `;
                }

                historyOrder.append(
                    `<div class="flex flex-col md:grid md:grid-cols-3 gap-4 px-2 py-6">
                        <div class="flex flex-col gap-2">
                            ${productsHTML}
                        </div>

                        <div class="flex flex-row md:flex-col justify-between md:items-center">
                            <span class="text-lg md:text-xl font-bold">${formatRupiah(
                                item.total
                            )}</span>
                            <span class="text-sm font-medium px-3 py-1 rounded-full ${
                                statusClass[item.status] ||
                                "bg-gray-200 text-gray-800"
                            }">${item.status}</span>
                        </div>

                        <div class="flex flex-col gap-3 md:items-center md:justify-center">
                            <a href="/pesanan/${
                                item.id
                            }" class="w-full md:w-1/2 py-2 px-4 text-center bg-main-color text-white rounded-lg border border-gray-400 active:text-white hover:bg-second-color">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                    <hr class="my-3 border-gray-400">`
                );
            });
        },
        error: (xhr, status, error) => {
            console.log("Error Fetching Order : ", error);
        },
    });
};

const getVoucherUser = () => {
    jQuery.ajax({
        url: "/profile/vouchers",
        type: "get",
        dataType: "json",
        success: (response) => {
            const voucherUser = jQuery("#voucher-user").empty();
            response.forEach((item) => {
                $("#voucher-loading").remove();
                voucherUser.append(`
                <div class="w-full sm:w-1/2 lg:w-1/4 px-2">
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                        <img src="assets/uploaded/${
                            item.gambar
                        }" class="w-full h-32 object-cover" alt="voucher ${
                    item.name
                }">

                        <div class="p-4 flex flex-col justify-between h-full">
                            <div class="mb-2">
                                <h3 class="text-lg font-semibold text-gray-800">${
                                    item.name
                                }</h3>
                                <p class="text-sm text-gray-500">Berlaku sampai ${
                                    item.berlaku_sampai ?? "tanggal tertentu"
                                }</p>
                                <p class="text-sm text-gray-500">Discount ${
                                    item.jumlah
                                }</p>
                            </div>

                            <button onclick="applyVoucherToCart('${item.kode}')"
                                class="mt-4 bg-main-color text-white text-center w-full py-2 rounded-md hover:bg-green-700 transition">
                                Gunakan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            `);
            });
        },
        error: (xhr, status, error) => {
            console.log("Error Fetching Voucher : ", error);
        },
    });
};

function applyVoucherToCart(kode) {
    // Salin ke clipboard
    navigator.clipboard.writeText(kode).then(() => {
        alert("Kode voucher disalin ke clipboard: " + kode);
    });

    // Simpan ke localStorage agar bisa diambil di halaman cart
    localStorage.setItem("kode_voucher", kode);

    // Redirect ke cart
    window.location.href = "/cart";
}

const getProductDetail = (id) => {
    jQuery.ajax({
        url: "/admin/product/" + id,
        type: "get",
        success: (response) => {
            $("#input-id").val(response.data.id);
            $("#input-name").val(response.data.name);
            $("#input-harga").val(response.data.harga);
            $("#input-stok").val(response.data.stok);
            $("#input-category").val(response.data.category_id);
            $("#input-deskripsi").val(response.data.deskripsi);
            $("#input-tanggal-obat-dibuat").val(
                response.data.tanggal_obat_dibuat
            );
            $("#input-tanggal-obat-expired").val(
                response.data.tanggal_obat_expired
            );
            $("#input-deskripsi").val(response.data.deskripsi);
            $("#previewProductImage").attr(
                "src",
                "/assets/uploaded/" + response.data.gambar
            );
            $("#input-gambar").val(response.data.gambar);

            $("#input-category").empty();

            jQuery.each(response.categories, function (key, category) {
                let selected = "";
                if (category.id === response.data.category_id) {
                    selected = "selected";
                }

                // Tambahkan option ke select kategori
                $("#input-category").append(
                    '<option value="' +
                        category.id +
                        '" ' +
                        selected +
                        ">" +
                        category.name +
                        "</option>"
                );
            });
        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const getCategoryDetail = (id) => {
    jQuery.ajax({
        url: "/admin/categories/" + id,
        type: "get",
        success: (response) => {
            $("#editKategori-id").val(response.data.id);
            $("#edit-name-kategori").val(response.data.name);
            $("#previewCategoryImage").attr(
                "src",
                "/assets/uploaded/" + response.data.image
            );
            $("#editKategori-image").val(response.data.image);
        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const getVoucherDetail = (id) => {
    jQuery.ajax({
        url: "/admin/voucher/" + id,
        type: "get",
        success: (response) => {
            $("#edit-voucher-id").val(response.data.id);
            $("#edit-name-voucher").val(response.data.name);
            $("#edit-jumlah-voucher").val(response.data.jumlah);
            $("#edit-status-voucher").val(response.data.status);
            $("#edit-detail-voucher").val(response.data.detail);
            $("#edit-tanggal-diskon-dibuat").val(
                response.data.tanggal_diskon_dibuat
            );
            $("#edit-tanggal-diskon-expired").val(
                response.data.tanggal_diskon_expired
            );
            $("#previewVoucherImage").attr(
                "src",
                "/assets/uploaded/" + response.data.gambar
            );
            $("#edit-gambar-voucher").val(response.data.gambar);
        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const getResepDetail = (id) => {
    jQuery.ajax({
        url: "/admin/recipe/" + id,
        type: "get",
        success: (response) => {
            // Mengisi field dengan data resep
            $("#lihat-recipe-id").val(response.data.id);
            $("#previewRecipeImage").attr(
                "src",
                "/assets/uploaded/" + response.data.gambar
            );
            $("#lihat-tanggal-resep").val(response.data.tanggal);
            $("#lihat-keterangan-resep").val(response.data.keterangan);
            $("#user-recipe span").text(response.data.user.name);

            // Mengambil dan menampilkan gambar profil pengguna
            $("#user-recipe img").attr(
                "src",
                "/assets/uploaded/" + response.data.user.profile_image // Perbaiki path gambar profil
            );
            // Mengubah href dari link gambar untuk membuka gambar asli
            $("#Tampil-recipe-gambar").attr(
                "href", 
                "/assets/uploaded/" + response.data.gambar
            );
        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const getOrderDetail = (id) => {
    jQuery.ajax({
        url: "/admin/order/" + id,
        type: "get",
        success: (response) => {
            console.log(response.data); // Menampilkan data yang diterima

            // Mengisi form modal dengan data yang diterima
            $("#edit-order-id").val(response.data.id);
            $("#edit-tag-order").val(response.data.tag);
            $("#edit-tanggal-order").val(response.data.tanggal);
            $("#edit-jumlah-order").val(response.data.jumlah);
            $("#edit-alamat-order").val(response.data.alamat);
            $("#edit-status-order").val(response.data.status);
            $("#user-order span").text(response.data.user.name);

            // Mengisi gambar profil pengguna
            $("#user-order img").attr(
                "src",
                "assets/uploaded/" + response.data.user.profile_image
            );

            // Mengisi produk yang dipesan
            let productHtml = "";
            response.data.product.forEach((item) => {
                productHtml += `
                    <li class="flex flex-row items-center justify-between gap-x-2">
                        <div class="flex items-center">
                            <!-- Menggunakan path yang benar untuk gambar -->
                            <img class="size-8 object-fill" src="assets/uploaded/${item.image}" alt="Product Image">
                            <div class="ps-3">
                                <p class="font-semibold text-sm">${item.name}</p>
                                <span class="font-normal text-gray-500 text-xs">Rp. ${item.harga}</span>
                            </div>
                        </div>
                    </li>
                `;
            });
            // Memastikan produk ditampilkan dengan benar di dalam elemen ul
            $("#product-list").html(productHtml); // Mengisi produk di dalam <ul>

            // Menampilkan total harga dengan format Rp
            let totalPrice = parseFloat(response.data.total); // Pastikan total harga dalam bentuk angka
            $("#total-order span").text(
                "Rp " + totalPrice.toLocaleString("id-ID") // Format ke dalam format Indonesia (Rp 1.000.000)
            );

            // Menampilkan diskon (jika ada)
            if (response.data.discount) {
                $("#diskon-order span").text(response.data.discount);
            } else {
                $("#diskon-order span").text("No Discount");
            }

            // Menampilkan modal
            $("#editPesanan-modal").removeClass("hidden");
        },
        error: (xhr, status, error) => {
            console.log("Error mendapatkan data pesanan", xhr.responseText);
            alert("Terjadi kesalahan saat mengambil data pesanan.");
        },
    });
};

const getUserDetail = (id) => {
    jQuery.ajax({
        url: "/profile/" + id,
        type: "get",
        success: (response) => {
            $("#nama-user").val(response.data.name);
            $("#email-user").val(response.data.email);
            $("#telepon-user").val(response.data.nomor_telepon);
            $("#gender-user").val(response.data.jenis_kelamin);
            $("#tanggal-lahir-user").val(response.data.tanggal_lahir);
            $("#alamat-user").val(response.data.alamat);
            $("#previewImageUser").attr(
                "src",
                "/assets/uploaded/" + response.data.image
            );
            $("#image-user").val(response.data.image);
        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const createProduct = () => {
    jQuery("#form-create-produk").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        jQuery.ajax({
            url: "/admin/create-product",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Produk baru telah disimpan!",
                    icon: "success",
                });
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
                getProduct();
            },
            error: (xhr, status, error) => {
                console.log("Error: ", error);
                alert("Terjadi kesalahan saat menambahkan produk.");
            },
        });
    });
};

const createCategory = () => {
    jQuery("#form-create-category").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        jQuery.ajax({
            url: "/admin/create-category",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Kategori baru telah disimpan!",
                    icon: "success",
                });
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
                getCategory();
            },
            error: (xhr, status, error) => {
                console.log("Error: ", error);
                alert("Terjadi kesalahan saat menambahkan kategori.");
            },
        });
    });
};

const createVoucher = () => {
    jQuery("#form-create-voucher").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        jQuery.ajax({
            url: "/admin/create-voucher",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Voucher baru telah disimpan!",
                    icon: "success",
                });
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
                getVoucher();
            },
            error: (xhr, status, error) => {
                console.error("Error:", error);
                console.error("Status:", status);
                console.error("Response Text:", xhr.responseText); // Tambahan ini
                alert(
                    "Terjadi kesalahan saat menambahkan voucher:\n" +
                        xhr.responseText
                );
            },
        });
    });
};

const editProduct = () => {
    jQuery("#form-edit-produk").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-product",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Produk berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Produk telah diupdate!",
                    icon: "success",
                });
                getProduct();
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate produk.");
            },
        });
    });
};

const editCategory = () => {
    jQuery("#form-edit-kategori").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-category",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Kategori berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Kategori telah diupdate!",
                    icon: "success",
                });
                getProduct();
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate Kategori.");
            },
        });
    });
};

const editVoucher = () => {
    jQuery("#form-edit-voucher").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-voucher",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Voucher berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Voucher telah diupdate!",
                    icon: "success",
                });
                getVoucher();
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate voucher.");
            },
        });
    });
};

const editOrder = () => {
    jQuery("#form-edit-order").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-order", // Sesuaikan dengan route edit pesanan
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Pesanan berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Pesanan telah diupdate!",
                    icon: "success",
                });
                // Refresh data pesanan atau tutup modal
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate pesanan.");
            },
        });
    });
};

const editUser = () => {
    jQuery("#form-edit-user").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/profile/edit",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (response) => {
                console.log("Profile berhasil diupdate", response);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Profile telah diupdate!",
                    icon: "success",
                });

                $("#edit-user-id").val(response.data.id);
                $("#nama-user").val(response.data.name);
                $("#email-user").val(response.data.email);
                $("#telepon-user").val(response.data.nomor_telepon);
                $("#gender-user").val(response.data.jenis_kelamin);
                $("#tanggal-lahir-user").val(response.data.tanggal_lahir);
                $("#alamat-user").val(response.data.alamat);
                $("#previewImageUser").attr(
                    "src",
                    "/assets/uploaded/" + response.data.image
                );
                $("#image-user").val(response.data.image);
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate profile.");
            },
        });
    });
};

const deleteProduct = (id) => {
    jQuery("#deleteProductId").val(id);
};

const deleteCategory = (id) => {
    jQuery("#deleteKategoriId").val(id);
};

const deleteVoucher = (id) => {
    jQuery("#deleteVoucherId").val(id);
};

const deleteRecipe = (id) => {
    jQuery("#deleteRecipeId").val(id);
};

const deleteOrder = (id) => {
    jQuery("#deleteOrderId").val(id);
};

const confirmDeleteProduct = () => {
    const id = jQuery("#deleteProductId").val();
    jQuery.ajax({
        url: `/admin/delete-product/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Produk telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus produk.");
        },
    });
};

const confirmDeleteCategory = () => {
    const id = jQuery("#deleteKategoriId").val();
    jQuery.ajax({
        url: `/admin/delete-category/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Kategori telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus Kategori.");
        },
    });
};

const confirmDeleteVoucher = () => {
    const id = jQuery("#deleteVoucherId").val();
    jQuery.ajax({
        url: `/admin/delete-voucher/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Voucher telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus voucher.");
        },
    });
};

const confirmDeleteRecipe = () => {
    const id = jQuery("#deleteRecipeId").val();
    jQuery.ajax({
        url: `/admin/delete-recipe/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Resep telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus resep.");
        },
    });
};

const confirmDeleteOrder = () => {
    const id = jQuery("#deleteOrderId").val();
    jQuery.ajax({
        url: `/admin/delete-order/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Pesanan telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus Pesanan.");
        },
    });
};

jQuery(document).ready(() => {
    jQuery.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });
    getProduct();
    getCategory();
    getVoucher();
    getResep();
    getOrder();
    createProduct();
    createCategory();
    createVoucher();
    editProduct();
    editCategory();
    editVoucher();
    editOrder();
    editUser();

    jQuery("#btn-modal-product").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/categories",
            type: "get",
            dataType: "json",
            success: (response) => {
                const selectBox = jQuery("#input-add-category");
                selectBox.empty();
                selectBox.append(
                    "<option selected disabled>Pilih kategori</option>"
                );
                response.data.forEach((item) => {
                    selectBox.append(
                        `<option value="${item.id}">${item.name}</option>`
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("gagal mendapat kategori");
            },
        });
    });
});
