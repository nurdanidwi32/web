<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-radius: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            border-radius: 12px;
        }
        .btn-secondary {
            border-radius: 12px;
        }
        label {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="mb-4">
            <a href="/pegawai" class="btn btn-outline-secondary">&larr; Kembali</a>
        </div>

        <div class="card p-4">
            <h3 class="mb-4 text-primary">Edit Data Pegawai</h3>
            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required value="{{ $p->pegawai_nama }}">
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" required value="{{ $p->pegawai_jabatan }}">
                </div>

                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" required value="{{ $p->pegawai_umur }}">
                </div>

                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $p->pegawai_alamat }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
            </form>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
