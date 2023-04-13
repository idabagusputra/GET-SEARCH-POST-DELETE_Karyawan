<head>
    <title>LIST KARYAWAN</title>
    <style>
        /* Add your CSS styles here */
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<head>
	<title>Submit Button with CSS</title>
	<style>
		.submit-button {
			background-color: #10820e;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>

<head>
	<title>Submit Button with CSS</title>
	<style>
		.delete-button {
			background-color: #820e0e;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>

<table>
    <thead>
        <table border="1" cellpadding="10">
        <tr>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Pendidikan Terakhir</th>
            <th>Jabatan Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $employee)

            <tr align=center>
                <td> {{ $employee->nik }}</td>
                <td>{{ $employee->nama_lengkap }}</td>
                <td>{{ $employee->pendidikan_terakhir }}</td>
                <td>{{ $employee->jabatan_posisi }}</td>
                <td>
                    <form action="{{ url('/karyawan/'.$employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Hapus</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

    <br/>
    <br/>

    <form action="{{ route('karyawan.search') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="search" placeholder="Nama Keryawan">
    <button type="submit" class="submit-button" class="btn btn-primary">Search</button>
    <button href="{{ route('karyawan.index') }}" class="submit-button" class="btn btn-secondary">Kembali</button>
    </div>
    
</form>
 <br/>
    

    <head>
	<title>Form Input Data</title>
	<style>
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		input[type="text"], select {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 300px;
			margin-bottom: 10px;
			font-size: 16px;
		}

		input[type="submit"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #3498db;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
    <form method="POST" action="/karyawan">
    @csrf

    <div>
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik">
    </div>

    <div>
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap">
    </div>

    <div>
        <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
        <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir">
    </div>

    <div>
        <label for="jabatan_posisi">Jabatan/Posisi:</label>
        <input type="text" id="jabatan_posisi" name="jabatan_posisi">
    </div>

    <button class="submit-button" type="submit">Submit</button>
</form>





