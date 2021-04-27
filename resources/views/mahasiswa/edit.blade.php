@extends('layout.utama')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" style="color: #F0FFF0;">Form Ubah Data Mahasiswa</h1>
          <div class="review-tab-pro-inner">
            <form method="post" action="/mahasiswa/{{$mahasiswa->id}}/update">
                @csrf
           
                <div class="form-group">
                    <label style="color: #F0FFF0;" for="Nama">Nama</label>
                    <i class="icon nalika-user" aria-hidden="true"></i>
                    <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama"
                        placeholder="Masukkan Nama" name="Nama" value="{{$mahasiswa->Nama}}">
                    @error('Nama')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
               
                <div class="form-group">
                    <label style="color: #F0FFF0;" for="Nim">Nim</label>
                    <input type="text" class="form-control @error('Nim') is-invalid @enderror" id="Nim"
                        placeholder="Masukkan Nim" name="Nim" value="{{$mahasiswa->Nim}}">
                    @error('NIM')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label style="color: #F0FFF0;" for="id_prodi">Prodi</label>
                    <select name="id_prodi" class="form-control">
                        <option value="">---pilih---</option>
                        @foreach($prodi as $prodi)
                        <option value="{{$prodi->nama}}" selected>{{$prodi->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label style="color: #F0FFF0;" for="Semester">Semester</label>
                    <input type="text" class="form-control @error('Semester') is-invalid @enderror" id="Semester"
                        placeholder="Masukkan Semester" name="Semester" value="{{$mahasiswa->Semester}}">
                    @error('Semester')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label style="color: #F0FFF0;" for="Status">Status</label>
                    <input type="text" class="form-control @error('Status') is-invalid @enderror" id="Status"
                        placeholder="Masukkan Status" name="Status" value="{{$mahasiswa->Status}}">
                    @error('Status')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="sumbit" class="btn btn-primary my-3">Ubah Data</button>
                <a href="/mahasiswa" class="btn btn-danger">Batal</a>
            </form>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection