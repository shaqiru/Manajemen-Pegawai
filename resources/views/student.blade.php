<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Pendataan Pegawai Kerja</title>
</head>
<body>
@include("navbar")




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Pendataan Pegawai Kerja</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://images8.alphacoders.com/100/thumb-1920-1003525.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Masukkan Informasi Pegawai</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>KODE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Masukkan Kode Pekerjaan">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Masukkan Nama Lengkap">
                            </div>

                            
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Masukkan Nomor Telepon">
                            </div>
                            
                            <div class="form-group">
                                <label>Usia</label>
                                <input name="age" type="text" class="form-control"  placeholder="Masukkan Usia">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Masukkan Jabatan">
                            </div>
                            <input type="submit" class="btn btn-info" value="Beres?">
                            <input type="reset" class="btn btn-warning" value="Ulang dari awal?">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Perbarui Infromasi Pegawai</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Usia</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>