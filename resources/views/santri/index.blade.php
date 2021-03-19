<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santri</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php $no = 1 ?>
    <tbody>
    @foreach ($santri as $val)
        <tr>
            <td><?= $no++ ?></td>
            <td>{{ $val->nama }}</td>
            <td>{{ $val->divisi }}</td>
            <td>{{ $val->alamat }}</td>
            <td><a href="{{ $val->id }}"><button>edit</button></a></td>
            <td>
                <form action="/santri/delete/{{ $val->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>