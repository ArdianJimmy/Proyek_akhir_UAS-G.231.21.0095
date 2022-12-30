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

        <canvas id="myChart" height="100px"></canvas>

            <div class="float-left">
                <h2>CRUD LARAVEL MAHASISWA</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('sisw.create') }}"> Input Siswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>nim</th>
            <th>nama</th>
            <th width="20px"class="text-center">umur</th>
            <th width="280px"class="text-center">Alamat</th>
            <th width="180px"class="text-center">kota</th>
            <th width="180px"class="text-center">kelas</th>
            <th width="280px"class="text-center">jurusan</th>
            <th width="280px"class="text-center">gender</th>
            <th width="380px"class="text-center">Action</th>
        </tr>
        @foreach ($sisw as $siswa)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $siswa->nim }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->umur }}</td>
            <td>{{ $siswa->Alamat }}</td>
            <td>{{ $siswa->kota }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->jurusan }}</td>
            <td>{{ $siswa->gender }}</td>
            <td class="text-center">
                <form action="{{ route('sisw.destroy',$siswa->nim) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->nim) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('sisw.edit',$siswa->nim) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $sisw->links() !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var users =  {{ Js::from($data) }};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };
  
    const config = {
        type: 'line',
        data: data,
        options: {
            scales: {
                y: {
                    title: {
                    display: true,
                    text: 'Value'
                    },
                    min: 0,
                    ticks: {
                    // forces step size to be 50 units
                    stepSize: 1
                    }
                }
            }
        }
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>
@endsection