<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
</head>
<body onload="window.print()">
    <table width="400px">
        <tr align="center">
            <td colspan="3"><b>Rental DVD</b></td>
        </tr>
        <tr align="center">
            <td colspan="3">Struk Pembayaran Rental</td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td><b>Nama Customer</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->customer->nama}}</td>
        </tr>
        <tr>
            <td><b>Nama Admin</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->user->name}}</td>
        </tr>
        <tr>
            <td><b>Judul</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->barang->judul}}</td>
        </tr>
        <tr>
            <td><b>Tanggal Peminjaman</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->tgl_peminjaman}}</td>
        </tr>
        <tr>
            <td><b>Tanggal Pengembalian</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->tgl_pengembalian}}</td>
        </tr>
        <tr>
            <td><b>Status Peminjaman</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->status_peminjaman}}</td>
        </tr>
        <tr>
            <td><b>Jumlah Pinjam</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->jumlah_pinjam}}</td>
        </tr>
        <tr>
            <td><b>Total Harga</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->total_harga}}</td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3">
                Note : 
                <br>
                <b>-- Struk Ini Sebagai Bukti Pembayaran --</b>
                <b>-- Harap Simpan dengan Baik --</b>
                <b>-- Terimakasih --</b>
            </td>
        </tr>
    </table>
</body>
</html>