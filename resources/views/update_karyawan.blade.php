<!DOCTYPE html>
<html>
<head>
    <title>Update Karyawan</title>
    <style>
        /* Add your CSS styles here */
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
            background-color: #83088a;
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

        .back-button {
            background-color: #333;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Karyawan</h1>

        <form method="POST" action="{{ route('karyawan.update', $karyawan->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" value="{{ $karyawan->nik }}">
                @error('nik')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $karyawan->nama_lengkap }}">
                @error('nama_lengkap')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ $karyawan->pendidikan_terakhir }}">
                @error('pendidikan_terakhir')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jabatan_posisi">Jabatan/Posisi:</label>
                <input type="text" id="jabatan_posisi" name="jabatan_posisi" value="{{ $karyawan->jabatan_posisi }}">
                @error('jabatan_posisi')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <input type="hidden" name="_method" value="PUT">

            <button class="submit-button" type="submit">Perbaharui</button>
            <a href="{{ route('karyawan.index') }}" class="back-button">Kembali</a>
        </form>
    </div>
</body>
</html>
