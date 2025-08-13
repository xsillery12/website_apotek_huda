<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Invoice Pembelian Apotek Huda - {{ $order->tag }}</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ public_path('assets/img/logo.png') }}" style="width: 100%; max-width: 300px" />
                            </td>

                            <td>
                                Nomor Order: {{ $order->tag }}<br />
                                Order Dibuat: {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}<br />
                                Jumlah Barang: {{ $order->jumlah }} item
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{ $order->user->name }}<br />
                                {{ $order->user->alamat }}<br />
                                {{ $order->user->nomor_telepon }}
                            </td>

                            <td>
                                {{ $order->user->email }}<br />
                                Metode Pengiriman: <strong>{{ ucfirst($order->shipping_method) }}</strong><br />
                                Ongkos Kirim: <strong>Rp{{ number_format($order->delivery_cost, 0, ',', '.') }}</strong>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Metode Pembayaran</td>
                <td>Platform</td>
            </tr>

            <tr class="details">
                <td>Midtrans</td>
                <td>Online</td>
            </tr>

            <tr class="heading">
                <td>Item</td>
                <td>Harga</td>
            </tr>

            @foreach ($order->items as $item)
                <tr class="item">
                    <td>{{ $item->product->name }} ({{ $item->jumlah }}x)</td>
                    <td>Rp{{ number_format($item->harga * $item->jumlah, 0, ',', '.') }}</td>
                </tr>
            @endforeach

            @php
                $subtotal = 0;
                $tax = 2500;
                $delivery = $order->delivery_cost ?? 0;

                foreach ($order->items as $item) {
                    $subtotal += $item->harga * $item->jumlah;
                }

                $total = $subtotal + $delivery + $tax;
            @endphp

            <tr class="item">
                <td>Subtotal</td>
                <td>Rp{{ number_format($subtotal, 0, ',', '.') }}</td>
            </tr>

            <tr class="item">
                <td>Pajak</td>
                <td>Rp{{ number_format($tax, 0, ',', '.') }}</td>
            </tr>

            <tr class="item">
                <td>Ongkos Kirim</td>
                <td>Rp{{ number_format($delivery, 0, ',', '.') }}</td>
            </tr>

            <tr class="total">
                <td>Total</td>
                <td>Rp{{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
