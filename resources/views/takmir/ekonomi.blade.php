@extends('takmir/layout',[
"InfoPage" => [
"Navbar" => '/takmir/ekonomi'
]
])
@section('title', 'Data Level Ekonomi')

@section('container')


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL LEVEL EKONOMI WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Level Ekonomi</li>
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
                        <strong class="card-title">Filter Data Level Ekonomi</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('takmir/ekonomi') }}">
                            <div class="row"> 
                                
                            <div class="col-md-2">
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
                                    <label for="">Level Ekonomi</label>
                                    <div class="form-group">
                                        <select name="level_ekonomi" class="select form-control">
                                            <option value=""></option>
                                            @foreach($level as $data)
                                            <option value="{{$data->kd_level_ekonomi}}" <?= ($_SESSION['level_ekonomi'] == $data->kd_level_ekonomi && $_SESSION['level_ekonomi'] != 0) ? "selected" : ""?>>
                                                {{ $data->nama_level }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Status Mukim</label>
                                    <div class="form-group">
                                        <select name="mukim" class="select form-control">
                                            <option value=""></option>
                                            <option value="Mukim" <?= ($_SESSION['mukim'] == "Mukim") ? "selected" : ""?>>Mukim</option>
                                            <option value="Tidak Mukim" <?= ($_SESSION['mukim'] == "Tidak Mukim") ? "selected" : ""?>>Tidak Mukim</option>
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
                        <div class="card-title"> Level Ekonomi </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                            
                            <script>
                                var xValues = ['Menengah ke Atas', 'Menengah', 'Menengah ke Bawah'];
                                
                                var yValues = <?= $values ?>;
                                
                                var barColors = [
                                    "#d6e1dc",
                                    "#d6e1dc",
                                    "#d6e1dc",
                                
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
                                            color: '#84a595',
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


                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> Status Mukim </div> 
                        
                            <canvas id="myChart2" style="width:80%;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                
                                var xValues2 = ['Belum Diisi', 'Mukim', 'Tidak', 'Tidak Mukim', 'Tidak (Merantau)'];
                               
                                var yValues2 = <?= $values2 ?>;
                                var barColors = [
                                    '',
                                    '#1AE597',
                                    '#321AE5',
                                    '#E51A68',
                                    '#CDE51A',
                               
                                ];

                                new Chart("myChart2", {
                                type: "pie",
                                data: {
                                    labels: xValues2,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues2,
                                    labels: yValues2
                                    }]
                                },
                                options: {
                                    // legend: {
                                    //         display: false
                                    //     },
                                   
                                    // scales: {
                                    //     y: {
                                    //         beginAtZero: true
                                    //     }
                                    // }
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
                            <strong class="card-title">Tabel Level Ekonomi Warga</strong>
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
                                        <th>Jenis Kelamin</th>
                                        <th>Level Ekonomi</th>
                                        <th>Status Mukim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $ekonomi as $result => $w )
                                    <tr>
                                        <td>{{ $result + $ekonomi->firstitem() }}</td>
                                        <td>{{$w->kode_kk}}</td>
                                        <td>{{$w->kd_induk}}</td>
                                        <td>{{$w->no_rw}}</td>
                                        <td>{{$w->no_rt}}</td>
                                        <td>{{$w->nama}}</td>
                                        <td>{{$w->j_kelamin}}</td>
                                        <td>{{$w->nama_level}}</td>
                                        <td>{{$w->status_mukim}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $ekonomi->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->





@endsection