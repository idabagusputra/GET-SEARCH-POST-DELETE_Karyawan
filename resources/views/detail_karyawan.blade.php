<!DOCTYPE html>
<html>
<head>
    <title>LIST KARYAWAN</title>
    <style>
        /* Add your CSS styles here */
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            font-size: 16px;
        }

        .submit-button {
            background-color: #10820e;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-right: 10px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #820e0e;
        }

        .update-button {
            background-color: #83088a;
        }

        .back-button {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LIST KARYAWAN</h1>

        <table border="1">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Jabatan Posisi</th>
                    <th>Aksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawans as $employee)
                    <tr align="center">
                        <td>{{ $employee->nik }}</td>
                        <td>{{ $employee->nama_lengkap }}</td>
                        <td>{{ $employee->pendidikan_terakhir }}</td>
                        <td>{{ $employee->jabatan_posisi }}</td>
                        <td>
                            <form action="{{ url('/karyawan/'.$employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="delete-button submit-button" type="submit">Hapus</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('karyawan.edit',['id' => $employee->id]) }}" class="update-button submit-button">Perbaharui</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <br>

        <form action="{{ route('karyawan.search') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="search" placeholder="Nama Karyawan">
            </div>
                <button type="submit" class="submit-button">Cari</button>
                <a href="{{ route('karyawan.index') }}" class="back-button submit-button">Kembali</a>
        </form>

        <br>

        <h2>Form Input Data</h2>

        <form method="POST" action="/karyawan">
            @csrf

            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik">
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap">
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir">
            </div>

            <div class="form-group">
                <label for="jabatan_posisi">Jabatan/Posisi:</label>
                <input type="text" id="jabatan_posisi" name="jabatan_posisi">
            </div>

            <button class="submit-button" type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
