@extends('mahasiswas.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="nim">nim</label><br>
                            <input type="text" name="nim" class="formcontrol" id="nim" aria-describedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label><br>
                            <input type="email" name="email" class="formcontrol" id="email" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="nama">nama</label><br>
                            <input type="text" name="nama" class="formcontrol" id="nama" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="kelas">kelas</label><br>
                            <select class = "form-control" name="kelas_id" id="kelas">
                                @foreach($kelas as $kls)
                                    <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label><br>
                            <input type="text" name="jurusan" class="formcontrol" id="jurusan"
                                aria-describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">no_handphone</label><br>
                            <input type="text" name="no_handphone" class="formcontrol" id="no_handphone"
                                aria-describedby="no_handphone">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">tanggal_lahir</label><br>
                            <input type="date" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir"
                                aria-describedby="tanggal_lahir">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
