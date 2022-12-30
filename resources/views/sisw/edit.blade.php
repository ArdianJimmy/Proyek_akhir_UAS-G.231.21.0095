<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<div class="font-sans antialiased">
    @include('layouts.navigation')

   
</div>
</div>
@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Siswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    <form action="{{ route('sisw.update',$sisw->nim) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>nim:</strong>
                <input type="text" name="nim" class="form-control" placeholder="nim SISWA" value="{{ $sisw->nim }}">
            </div>
            <div class="form-group">
                <strong>nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="nama SISWA" value="{{ $sisw->nama }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>umur:</strong>
                <input type="text" name="umur" value="{{ $sisw->umur }}" class="form-control" placeholder="umur">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $sisw->Alamat }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kota:</strong>
                <input type="text" name="kota" value="{{ $sisw->kota }}" class="form-control" placeholder="kota">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kelas:</strong>
                <input type="text" name="kelas" value="{{ $sisw->kelas }}" class="form-control" placeholder="kelas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jurusan:</strong>
                <input type="text" name="jurusan" value="{{ $sisw->jurusan }}" class="form-control" placeholder="jurusan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gender:</strong>
                <form action="/action_page.php">
            <p>Jenis kelamin:</p>
              <input type="radio" id="gender" name="gender" value="laki-laki">
              <label for="gender">laki-laki</label><br>
              <input type="radio" id="gender" name="gender" value="perempuan">
              <label for="gender">perempuan</label><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection