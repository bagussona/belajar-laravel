<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="/santri/update/{{$santri['id']}}" method="post"> -->
    <form action="{{route('update-santri', $santri['id'])}}" method="post">
    @method('PUT')
    @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $santri['nama']) }}">

        <label for="divisi">Divisi:</label>
        <input type="text" name="divisi" id="divisi" value="{{ old('divisi', $santri['divisi']) }}">
    
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $santri['alamat']) }}">

        <input type="submit" name="submit" value="edit">

    </form>

</body>
</html>