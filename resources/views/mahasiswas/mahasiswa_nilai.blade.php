@extends('mahasiswas.layout')
@section('content')
    <div class="text-center  ">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        <h1>KARTU HASIL STUDI(KRS)</h1>
    </div>

    <p><strong>Nama</strong>:{{ $mahasiswa->Nama }}</p>
    <p><strong>NIM</strong>:{{ $mahasiswa->Nim }}</p>
    <p><strong>Kelas</strong>:{{ $mahasiswa->Kelas->nama_kelas }}</p>

    <table class="table">
        <thead>
            <tr>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa->mahasiswa_matakuliah as $nilai)
                <tr>
                    <td>{{ $nilai->matakuliah->nama_matkul }}</td>
                    <td>{{ $nilai->matakuliah->sks }}</td>
                    <td>{{ $nilai->matakuliah->semester }}</td>
                    <td>{{ $nilai->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
