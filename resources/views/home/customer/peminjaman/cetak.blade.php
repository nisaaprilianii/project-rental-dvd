<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi Peminjaman</title>
</head>
<body onload="window.print()">
    <h2>Laporan Transaksi Peminjaman</h2>
    <table id="dataTable" class="table table-hover" border="1">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Customer</th>
                                    <th>Nama Admin</th>
                                    <th>Judul</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Status Peminjaman</th>
                                    <th>Jumlah Pinjam</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->customer->nama }}</td>
                                    <td>{{ $u->user->name }}</td>
                                    <td>{{ $u->barang->judul }}</td>
                                    <td>{{ $u->tgl_peminjaman }}</td>
                                    <td>{{ $u->tgl_pengembalian }}</td>
                                    <td>{{ $u->status_peminjaman }}</td>
                                    <td>{{ $u->jumlah_pinjam }}</td>
                                    <td>{{ $u->total_harga }}</td>
                                    <td>
                                        <a href="/peminjaman/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/peminjaman/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Akan dihapus??')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
          </tbody>
    </table>
</body>
</html>