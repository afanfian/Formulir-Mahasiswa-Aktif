<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Keterangan Mahasiswa Aktif ITS</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- Font Style --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
</head>
    <body style="font-family: Poppins; font-family: fw-semibold; color:black; background-color: white ">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <p style="text-align: center"><img src="/img/lambang-its.png" alt="Logo ITS" width="100px"></p>
                            <h3 style="text-align: center; margin-bottom: 10%; font-weight: bold;">Formulir Keterangan Mahasiswa Aktif ITS</h3>
                            <table class="table table-bordered table-striped" style="font-size: 1.2em">
                                <tr>
                                    <td style="width:150px">Nama</td>
                                    <td>{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">NRP</td>
                                    <td>{{ $data->nrp }}</td>
                                </tr>
                                <tr>
                                    <td style="width:200px">Jenis Kelamin (L/P)</td>
                                    <td>{{ $data->jeniskelamin}}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">Departemen</td>
                                    <td>{{ $data->departemen }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">Angkatan</td>
                                    <td>{{ $data->angkatan }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">IPS</td>
                                    <td>{{ $data->ips }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">IPK</td>
                                    <td>{{ $data->ipk }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px">KTM</td>
                                    <td><img src="{{ $data->ktm }}" alt="" width="200px"></td>
                                </tr>
                            </table>
                            <p style="text-align: center"><a href="/main" class="btn btn-primary" style="text-align: center" >Kembali</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@include('sweetalert::alert')
</html> 