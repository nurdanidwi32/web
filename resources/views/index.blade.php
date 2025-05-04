<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            position: fixed;
            width: 240px;
            padding-top: 20px;
        }
        .sidebar h4 {
            padding-left: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 240px;
            padding: 20px;
        }
        .topbar {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="mb-4">Perpustakaan</h4>
        <a href="dashboard.blade.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-users"></i> Data Pegawai</a>
        <a href="#"><i class="fas fa-book"></i> Data Buku</a>
        <a href="#"><i class="fas fa-user-cog"></i> Pengguna</a>
        <a href="#"><i class="fas fa-exchange-alt"></i> Transaksi</a>
    </div>

    <div class="content">
        <div class="topbar">
            <span>Hai, Admin</span>
            <div>
                <span>24-Apr-2025</span>
                <a href="#" class="btn btn-danger btn-sm ml-3">Logout</a>
            </div>
        </div>

        <div class="mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Data Pegawai</h2>
                <a href="/pegawai/tambah" class="btn btn-success">+ Tambah Pegawai Baru</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->pegawai_nama }}</td>
                                <td>{{ $p->pegawai_jabatan }}</td>
                                <td>{{ $p->pegawai_umur }}</td>
                                <td>{{ $p->pegawai_alamat }}</td>
                                <td>
                                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
