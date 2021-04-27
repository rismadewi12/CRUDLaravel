@extends('layout/utama')

@section('title','Daftar Mahasiswa' )

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3 color-white" style="color: #F0FFF0"><b>Data Mahasiswa Teknik Informatika<b></h1><br>
                
                
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-sm-7 col-xs-5">
                        <a href="/mahasiswa/create" class="btn btn-warning">Tambah Data</a><br>
                    </div>

                    <div class="col-lg-7 col-md-5 col-sm-7 col-xs-5">
                    <div class="breadcome-heading">
                            <form role="search"  method="GET" action="/mahasiswa">
                            <input type="text" name="cari"  placeholder="Cari dengan nama...." class="form-control">
                            <a ><i class="fa fa-search" ></i></a>
                            </form>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="breadcome-menu">
                        <button type="submit" class="btn btn-custon-four btn-primary primary-btn-cl">
                        <a href="/mahasiswa" style="color: #F0FFF0">Previous</a></button>
                        </ul>
                    </div>
                </div>

                @if (session('status'))
                <div class="alert alert-success ms-3">
              {{ session('status') }}
             </div>
                @endif 
        
            </div>     
            </div>
        </div>
        
    </div>
    <div >
        <table class="table" style="color: #F0FFF0; background-color:gray;">
                        <thead class="breadcom-ctn" style="background-color:Black">
                        <tr>
                            <th scope ="col">No</th>
                            <th scope ="col">Nama</th>
                            <th scope ="col">Nim</th>
                            <th scope ="col">Prodi</th>
                            <th scope ="col">Semester</th>
                            <th scope ="col">Status</th>
                            <th scope ="col">Aksi</th>
                        </tr>
                        </thead>    
                        <tbody>
                        @foreach($mahasiswa as $mhs)
                        <tr class="table-info">
                            <th scope ="row" >{{ $loop->iteration }}</th>
                            <td>{{ $mhs->Nama }}</td>
                            <td>{{ $mhs->Nim }}</td>
                            <td>{{ $mhs->id_prodi }}</td>
                            <td>{{ $mhs->Semester }}</td>
                            <td>{{ $mhs->Status }}</td> 
                            <td>
                            <a href="/mahasiswa/{{$mhs->id}}/edit" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="True"></i></i>Edit</a>
                            <a href="/mahasiswa/{{$mhs->id}}/delete" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" aria-hidden="True"></i></i>Delete</a>
                            </td>                
                    
                        </tr>
                        @endforeach
                         </tbody>
             </table>
             
            <!-- footer dinamis -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-30">
                        <div class="footer-copy-right">
                            <p>Teknik Informatika © TI <a href="https://colorlib.com/wp/templates/"></a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <body>
            <marquee behavior='alternate' direction='right' bgcolor='#191970' style='color:gold; font-weight:bold;'>Welcome to website Teknik Informatika.Go Teknology! Welcome to website Teknik Informatika.Go Teknology! Welcome to website Teknik Informatika.Go Teknology!</marquee>
         </body>

        </div>
@endsection