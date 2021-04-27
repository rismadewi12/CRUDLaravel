@extends('layout/utama')

@section('title', 'Form Tambah Data Mahasiswa ')

@section('container')
<div class="container">
    <div class="row">
    <div>
        <div class="col-10">
            <h1 style="color: #F0FFF0;" class="mt-3">Form Data Mahasiswa Teknik Informatika</h1>

            <form method="post" action="/mahasiswa">
                @csrf
                <div class="form-group">
                    <label style="color: #F0FFF0;" for="NIM">Nama</label><br>
                    <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama"
                        placeholder="Masukkan Nama" name="Nama" value="{{old('Nama')}}">
                    @error('Nama')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label style="color: #F0FFF0;" for="NIM">Nim</label><br>
                    <input type="number" class="form-control @error('Nim') is-invalid @enderror" id="Nim"
                        placeholder="Masukkan Nim" name="Nim" value="{{old('Nim')}}">
                    @error('Nim')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label style="color: #F0FFF0;" for="NIM">Prodi</label>
                    <select name="id_prodi" class="form-control">
                        <option value="">---pilih---</option>
                        @foreach($prodi as $prodi)
                        <option value="{{$prodi->nama}}">{{$prodi->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label style="color: #F0FFF0;" for="Nama">Semester</label><br>
                    <input type="text" class="form-control @error('Semester') is-invalid @enderror" id="Semester"
                        placeholder="Masukkan Semester" name="Semester" value="{{old('Semester')}}">
                    @error('Semester')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label  style="color: #F0FFF0;" for="Nama">Status</label><br>
                    <input type="text" class="form-control @error('Status') is-invalid @enderror" id="Status"
                        placeholder="Masukkan Status" name="Status" value="{{old('Status')}}">
                    @error('Status')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="sumbit" class="btn btn-info my-3">Tambah Data</button>
                <a href="/mahasiswa" class="btn btn-warning">Batal</a>
            </form>

        </div>
    </div>
    </div>
</div>
@endsection