@extends('layout/pkk',[
"InfoPage" => [
"Navbar" => '/pkk/keahlian'
]
])
@section('title', 'Data Keahlian Warga Perempuan')

@section('container')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DATA DETAIL KEAHLIAN WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Keahlian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Filter Data Keahlian</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('red_rw/keahlian') }}">
                            <div class="row"> 
                                
                            <div class="col-md-3">
                                    <label for="">RT</label>
                                    <div class="form-group">
                                        <select name="no_rt" class="select form-control">
                                            <option value=""></option>
                                            @foreach($md_rt as $data)
                                            <option value="{{$data->kd_rt}}" <?= ($_SESSION['no_rt'] == $data->kd_rt) ? "selected" : ""?>>{{$data->kd_rt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Keahlian</label>
                                    <div class="form-group">
                                        <select name="keahlian" class="select form-control">
                                            <option value=""></option>
                                            @foreach($ahli as $data)
                                            <option value="{{$data->kd_keahlian}}" <?= ($_SESSION['keahlian'] == $data->kd_keahlian) ? "selected" : ""?>>{{$data->nama_keahlian}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Level</label>
                                    <div class="form-group">
                                        <select name="level" class="select form-control">
                                            <option value=""></option>
                                            @foreach($level as $data)
                                            <option value="{{$data->level_sertifikat}}" <?= ($_SESSION['level'] == $data->level_sertifikat) ? "selected" : ""?>>
                                                {{ $data->level_sertifikat }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <br>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Filter</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            <!-- </div> -->


            <div class="row justify-content-md-center">

                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> Keahlian </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <script>
                                    var xValues = <?= $label ?>;
                                    var yValues = <?= $values ?>;
                                    var barColors = [
                                    "#adc3ae",
                                    "#00aba9",
                                    "#2b5797",
                                    "#7A4B00",
                                    "#005B4A",
                                    "#E790BF",
                                    "#58083C",
                                    // slices: {
                                    // 0: { color: '#00AC94' },
                                    // 1: { color: '#E790BF' },
                                    // 2: { color: '#58083C' },
                                    // 3: { color: '#005B4A' },
                                    // 4: { color: '#7A4B00' },
                                    
                                    // }
                                    ];

                                    new Chart("myChart", {
                                    type: "pie",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues,
                                        labels: yValues
                                        }]
                                    },
                                    options: {
                                        
                                    }
                                    });
                                </script>
                        
                    </div>
                </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Keahlian Warga</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                        <th>No</th>
                                        <th>No. KK</th>
                                        <th>NIK</th>
                                        <th>RT</th>
                                        <th>Nama</th>
                                        <th>Panggilan</th>
                                        <th>Keahlian</th>
                                        <th>Level Sertifikat</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($keahlian as $result => $k)
                                    <tr>
                                        <td>{{ $result + $keahlian->firstitem() }}</td>
                                        <td>{{$k->no_kk}}</td>
                                        <td>{{$k->no_ktp}}</td>
                                        <td>{{$k->kd_rt}}</td>
                                        <td>{{$k->nama}}</td>
                                        <td>{{$k->nm_panggilan}}</td>
                                        <td>{{$k->nama_keahlian}}</td>
                                        <td>{{$k->level_sertifikat}}</td>
                                        <td>{{$k->deskripsi_sertifikat}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $keahlian->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->






@endsection