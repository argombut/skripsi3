@extends('red_takmir/layout',[
"InfoPage" => [
"Navbar" => '/red_takmir/pendidikan'
]
])
@section('title', 'Data Pendidikan Warga')

@section('container')


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA PENDIDIKAN WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Pendidikan</li>
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
                        <strong class="card-title">Filter Data Pendidikan</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('red_takmir/pendidikan') }}">
                            <div class="row"> 
                                
                            <div class="col-md-3">
                                    <label for="">RT</label>
                                    <div class="form-group">
                                        <select name="no_rt" class="select form-control">
                                            <option value=""></option>
                                            @foreach($md_rt as $data)
                                            <option value="{{$data->no_rt}}" <?= ($_SESSION['no_rt'] == $data->no_rt) ? "selected" : ""?>>{{$data->no_rt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">RW</label>
                                    <div class="form-group">
                                        <select name="no_rw" class="select form-control">
                                            <option value=""></option>
                                            @foreach($md_rw as $data)
                                            <option value="{{$data->no_rw}}" <?= ($_SESSION['no_rw'] == $data->no_rw) ? "selected" : ""?>>{{$data->no_rw}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Pendidikan</label>
                                    <div class="form-group">
                                        <select name="pendidikan" class="select form-control">
                                            <option value=""></option>
                                            @foreach($didik as $data)
                                            <option value="{{$data->kd_pendidikan}}" <?= ($_SESSION['pendidikan'] == $data->kd_pendidikan) ? "selected" : ""?>>
                                                {{ $data->nama_jenjang }}
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
                        <div class="card-title"> Pendidikan </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                            
                            <script>
                                var xValues = <?= $label ?>;
                                var yValues = <?= $values ?>;
                                var barColors = [
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79',
                                    '#007d79'
                                ];

                                new Chart("myChart", {
                                type: "bar",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues,
                                    labels: yValues
                                    }]
                                },
                                options: {
                                    indexAxis: 'y',

                                    plugins: {
                                        legend: {
                                                display: false
                                            },
                                        datalabels : {
                                            color: '#007d79',
                                            anchor: 'end',
                                            align: 'end',

                                            // position: 'border',
                                            // fontSize: 20,
                                            // fontColor: ['#ffffe0','#ffffe0','#ffffe0','#ffffe0',],
                                        },
                                    },
                                
                                    scales: {
                                        x: {
                                        title: {
                                            display: true,
                                            text: 'Jumlah Warga (orang)'
                                        }
                                        },
                                        // xAxes: [{
                                        // scaleLabel: {
                                        //     display: true,
                                        //     labelString: 'Kategori Rentang Usia'
                                        // }
                                        // }]
                                    },
                                },
                                //plugins: [ChartDataLabels],
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
                            <strong class="card-title">Tabel Pendidikan Warga</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kartu Keluarga</th>
                                        <th>Kode Warga</th>
                                        <th>RW</th>
                                        <th>RT</th>
                                        <th>Nama</th>
                                        <th>Panggilan</th>
                                        <th>Jenjang Pendidikan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $pendidikan as $result => $w )
                                    <tr>
                                        <td>{{ $result + $pendidikan->firstitem() }}</td>
                                        <td>{{$w->kode_kk}}</td>
                                        <td>{{$w->kd_induk}}</td>
                                        <td>{{$w->no_rw}}</td>
                                        <td>{{$w->no_rt}}</td>
                                        <td>{{$w->nama}}</td>
                                        <td>{{$w->nm_panggilan}}</td>
                                        <td>{{$w->nama_jenjang}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pendidikan->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->






@endsection