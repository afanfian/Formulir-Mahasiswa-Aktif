<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Keterangan Mahasiswa Aktif</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- Font Style --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body style="font-family: Poppins; font-family: fw-semibold; color:black; background-color: white ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body" style="background-color: #37e287; border-radius: 30px; box-shadow: 10px 10px rgb(48, 47, 47);">
                            <p style="text-align: center"><img src="/img/lambang-its.png" alt="Logo ITS" width="100px"></p>
                            <h3 class="text-center">Formulir Keterangan Mahasiswa Aktif ITS</h3>
                            <br/>
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            <br/>
                             <!-- form hasil -->
                            <form action="/hasil" method="post" enctype="multipart/form-data" style="font-size: 1.2em">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nrp">NRP</label>
                                    <input class="form-control" type="text" name="nrp" value="{{ old('nrp') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jeniskelamin">Jenis Kelamin (L/P)</label>
                                    <input class="form-control" type="text" name="jeniskelamin" value="{{ old('jeniskelamin') }}">
                                </div>
                                <div class="form-group">
                                    <label for="departemen">Departemen</label>
                                    <input class="form-control" type="text" name="departemen" value="{{ old('departemen') }}">
                                </div>
                                <div class="form-group">
                                    <label for="angkatan">Angkatan</label>
                                    <input class="form-control" type="text" name="angkatan" value="{{ old('angkatan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ips">IPS</label>
                                    <input class="form-control" type="text" name="ips" value="{{ old('ips') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ipk">IPK</label>
                                    <input class="form-control" type="text" name="ipk" value="{{ old('ipk') }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto">KTM</label>
                                    <input type="file" class="form-control-file" id="ktm" name="ktm" accept="image/png">
                                </div>
                                <div class="form-group" style="text-align: center">
                                    <input class="btn btn-primary" type="submit" value="Kirim" >
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>