
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2018/05/09/22/40/career-3386334_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Daftar Nama Pegawai</h5>
        <p class="card-text">Kenalan sama pegawai dimari om</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Usia</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Ada yang salah, bos?</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






