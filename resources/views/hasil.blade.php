<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Keterangan Mahasiswa Aktif</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 style="text-align: center">Formulir Keterangan Mahasiswa Aktif</h3>
                        <h4 class="my-4">Data Yang Sudah Di Input : </h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">NRP</td>
                                <td>{{ $data->nrp }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Jenis Kelamin</td>
                                <td>{{ $data->jeniskelamin}}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Departemen</td>
                                <td>{{ $data->departemen }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Angkatan</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">IPK</td>
                                <td>{{ $data->ipk }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">IPS</td>
                                <td>{{ $data->ips }}</td>
                            </tr>
                        </table>
                        <a href="/main" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 