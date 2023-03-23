@extends('mahasiswas.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
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
                    <form method="post" action="{{ route('mahasiswas.update', $mahasiswa->nim) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">nim</label><br>
                            <input type="text" name="nim" class="formcontrol" id="nim"
                                value="{{ $mahasiswa->nim }}" ariadescribedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">nama</label><br>
                            <input type="text" name="nama" class="formcontrol" id="nama"
                                value="{{ $mahasiswa->nama }}" ariadescribedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="kelas">kelas</label><br>
                            <select name="kelas" id="" class="form-control">
                                @foreach($kelas as $kls)
                                <option value="{{$kls->id}}"{{$mahasiswa->kelas_id == $kls->id ? 'selected':''}}>{{$kls->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label><br>
                            <input type="jurusan" name="jurusan" class="formcontrol" id="jurusan"
                                value="{{ $mahasiswa->jurusan }}" ariadescribedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">no_handphone</label><br>
                            <input type="no_handphone" name="no_handphone" class="formcontrol" id="no_handphone"
                                value="{{ $mahasiswa->no_handphone }}" ariadescribedby="no_handphone">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">tanggal_lahir</label><br><br>
                            <input type="date" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir"
                                aria-describedby="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label><br>
                            <input type="email" name="email" class="formcontrol" id="email"
                                value="{{ $mahasiswa->email }}" ariadescribedby="email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
