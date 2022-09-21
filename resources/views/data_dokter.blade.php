<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Seeder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-4">Data Dokter</h1>
    <div class="container">
        <button type="button" class="btn btn-success">Add Data +</button>
        <div class="row">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Spesialis</th>
                        <th>Pengalaman</th>
                        <th>Usia</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $sata)
                    <tr>
                        <td>{{$sata->id}}</td>
                        <td>{{$sata->nama}}</td>
                        <td>Dokter {{$sata->spesialis}}</td>
                        <td>{{$sata->exp}} Tahun</td>
                        <td>{{$sata->usia}} Tahun</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>