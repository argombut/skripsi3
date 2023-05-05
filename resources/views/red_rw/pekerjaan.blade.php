@extends('red_rw/layout',[
"InfoPage" => [
"Navbar" => '/red_rw/pekerjaan'
]
])
@section('title', 'Data Pekerjaan Warga')

@section('container')


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA PEKERJAAN WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Pekerjaan</li>
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
                        <strong class="card-title">Filter Data Pekerjaan</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('red_rw/pekerjaan') }}">
                            <div class="row"> 
                                
                            <div class="col-md-2">
                                    <label for="">RT</label>
                                    <div class="form-group">
                                        <select name="no_rt" class="select form-controll">
                                            <option value=""></option>
                                            @foreach($md_rt as $data)
                                            <option value="{{$data->no_rt}}" <?= ($_SESSION['no_rt'] == $data->no_rt) ? "selected" : ""?>>{{$data->no_rt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                    <label for="">Pekerjaan</label>
                                    <div class="form-group">
                                        <select name="pekerjaan" class="select form-control">
                                            <option value=""></option>
                                            @foreach($kerja as $data)
                                            <option value="{{$data->nama_pekerjaan}}" <?= ($_SESSION['pekerjaan'] == $data->nama_pekerjaan) ? "selected" : ""?>>
                                                {{ $data->nama_pekerjaan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Level Ekonomi</label>
                                    <div class="form-group">
                                        <select name="level_ekonomi" class="select form-control">
                                            <option value=""></option>
                                            @foreach($level as $data)
                                            <option value="{{ $data->kd_level_ekonomi }}" <?= ($_SESSION['level_ekonomi'] == $data->kd_level_ekonomi && $_SESSION['level_ekonomi'] != 0) ? "selected" : ""?>>
                                                {{ $data->nama_level }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
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


            <div class="row">

                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> Pekerjaan </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <script>
                                    var yValues = <?= $label ?>;
                                    var xValues = <?= $values ?>;

                                    var yValues2 = <?= $label2 ?>;
                                    var xValues2 = <?= $values2 ?>;

                                    var barColors = [
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    "#3490dc",
                                    ];

                                    new Chart("myChart", {
                                    type: "horizontalBar",
                                    data: {
                                        labels: yValues,
                                        datasets: [{
                                        backgroundColor: barColors,
                                        data: xValues,
                                        labels: xValues
                                        }]
                                    },
                                    options: {
                                        indexAxis: 'y',
                                        legend: {
                                            display: false
                                        },
                                   
                                        scales: {
                                            xAxes: [{
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Jumlah Warga (orang)'
                                                }
                                                }],
                                        }
                                    }
                                    });

                                </script>
                        
                    </div>
                </div>
                </div>


                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> level ekonomi </div> 
                        
                            <canvas id="myChart2" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>    
                                
                                <script>
                                    var yValues2 = ['Menengah ke Atas', 'Menengah', 'Menengah ke Bawah'];
                                    var xValues2 = <?= $values2 ?>;

                                    var barColors = [
                                    "#DC8034",
                                    "#DC8034",
                                    "#DC8034",
                                    
                                    
                                    ];

                                    new Chart("myChart2", {
                                    type: "bar",
                                    data: {
                                        labels: yValues2,
                                        datasets: [{
                                        backgroundColor: barColors,
                                        data: xValues2,
                                        labels: xValues2
                                        }]
                                    },
                                    options: {
                                        indexAxis: 'y',

                                        plugins: {
                                            legend: {
                                                    display: false
                                                },
                                            datalabels : {
                                                color: '#84a595',
                                                anchor: 'end',
                                                align: 'left',

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
                                    
                                   // plugins: [ChartDataLabels],
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
                            <strong class="card-title">Tabel Pekerjaan Warga</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Kartu Keluarga</th>
                                        <th>NIK</th>
                                        <th>RW</th>
                                        <th>RT</th>
                                        <th>Nama</th>
                                        <th>Panggilan</th>
                                        <th>Pekerjaan</th>
                                        <th>Level Ekonomi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $pekerjaan as $result => $w )
                                    <tr>
                                        <td>{{ $result + $pekerjaan->firstitem() }}</td>
                                        <td>{{$w->kode_kk}}</td>
                                        <td>{{$w->kd_induk}}</td>
                                        <td>{{$w->no_rw}}</td>
                                        <td>{{$w->no_rt}}</td>
                                        <td>{{$w->nama}}</td>
                                        <td>{{$w->nm_panggilan}}</td>
                                        <td>{{$w->nama_pekerjaan}}</td>
                                        <td>{{$w->nama_level}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pekerjaan->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->


@endsection