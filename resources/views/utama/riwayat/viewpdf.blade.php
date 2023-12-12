<!DOCTYPE html>
<html lang="id">
<head>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .order_details {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            padding: 20px;
            max-width: 800px;
            display: flex;
            justify-content: space-between;
        }

        .details_item {
            flex: 1;
            margin-right: 20px;
            box-sizing: border-box; /* Ensure padding and border are included in the width */
        }

        h4 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        ul.list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul.list li {
            margin-bottom: 5px;
        }

        .order_details_table {
            flex: 1;
            box-sizing: border-box; /* Ensure padding and border are included in the width */
        }

        h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 15px;
        }

        table.table {
            width: 100%;
            border-collapse: collapse;
        }

        table.table th,
        table.table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table.table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        @foreach ($transaksi as $row)
            <center><h3 class="title_confirmation">Terima Kasih Telah Memesan </h3></center>
            <div class="row order_d_inner">
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Pelanggan</h4>
                        <ul class="list">
                            <li><a href="#"><span>Nama</span> : {{ $row->nama_penumpang }}</a></li>
                            <li><a href="#"><span>Gender</span> : {{ $row->gender }}</a></li>
                            <li><a href="#"><span>Telepon</span> : {{ $row->no_telepon }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Informasi Tiket</h4>
                        <ul class="list">
                            <li><a href="#"><span>Kode Tiket</span> : {{ $row->tiket_id }}</a></li>
                            <li><a href="#"><span>Nama Armada</span> : {{ $row->nama_armada }}</a></li>
                            <li><a href="#"><span>Kota Asal</span> : {{ $row->kota_asal }}</a></li>
                            <li><a href="#"><span>Kota Tujuan</span> : {{ $row->kota_tujuan }}</a></li>
                            <li><a href="#"><span>Jam Berangkat</span> : {{ $row->jam_berangkat }}</a></li>
                            <li><a href="#"><span>Jam Sampai</span> : {{ $row->jam_sampai }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Tanggal Pembelian Tiket</h4>
                        <ul class="list">
                            <li><a href="#"><span>Kode Transaksi</span> : {{ $row->id_transaksi }}</a></li>
                            <li><a href="#"><span>tanggal</span> : {{ $row->tanggal }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Detail Pemesanan</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kode Tiket</th>
                                <th scope="col">Jumlah Tiket</th>
                                <th scope="col">Harga Tiket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>{{ $row->tiket_id}}</p>
                                </td>
                                <td>
                                    <h5>x {{ $row->total_tiket }}</h5>
                                </td>
                                <td>
                                    <p>Rp. {{ $row->harga }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <!-- Remove the empty h5 element here if not needed -->
                                </td>
                                <td>
                                    <p>Rp. {{ $row->totalharga }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!--================End Order Details Area =================-->

</body>
</html>
