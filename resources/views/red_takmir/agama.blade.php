@extends('red_takmir/layout',[
"InfoPage" => [
"Navbar" => '/red_takmir/agama'
]
])
@section('title', 'Data Ibadah Warga')

@section('container')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA IBADAH WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Ibadah</li>
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
                        <strong class="card-title">Filter Data Ibadah</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('red_takmir/agama') }}">
                            <div class="row"> 
                                
                                    <div class="col-md-1">
                                        
                                        <div class="form-group">
                                            <label>RT</label>
                                            <select name="no_rt" class="select form-control">
                                                <option value=""></option>
                                                @foreach($md_rt as $data)
                                                <option value="{{$data->no_rt}}" <?= ($_SESSION['no_rt'] == $data->no_rt) ? "selected" : ""?>>{{$data->no_rt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
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
                                    <!-- <div class="col-md-6"></div> -->
                                    <div class="col-md-2">
                                        <label for="">5 Waktu</label>
                                        <div class="form-group">
                                            <select name="waktu" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['waktu'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['waktu'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Jamaah</label>
                                        <div class="form-group">
                                            <select name="jamaah" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['jamaah'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['jamaah'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Zakat Fitrah</label>
                                        <div class="form-group">
                                            <select name="fitrah" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['fitrah'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['fitrah'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Zakat Mal</label>
                                        <div class="form-group">
                                            <select name="mal" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['mal'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['mal'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Qurban</label>
                                        <div class="form-group">
                                            <select name="qurban" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['qurban'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['qurban'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Haji</label>
                                        <div class="form-group">
                                            <select name="haji" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['haji'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['haji'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Umrah</label>
                                        <div class="form-group">
                                            <select name="umrah" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['umrah'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['umrah'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
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


            <div class="row justify-content-md-center">

                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> Ibadah </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                            
                            <script>
                                var xValues = ['Sholat 5 Waktu', 'Sholat Berjamaah', 'Zakat Fitrah', 'Zakat Mal', 'Qurban', 'Haji', 'Umrah'];
                                var yValues = <?= $values ?>;
                                var barColors = [
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
                                    "#007d79",
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
                                            text: 'Jumlah Warga yang Melakukan Ibadah (orang)'
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
                            <strong class="card-title">Tabel Ibadah Warga</strong>
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
                                        <th>Agama</th>
                                        <th>5 Waktu</th>
                                        <th>Berjamaah</th>
                                        <th>Zakat Fitrah</th>
                                        <th>Zakat Mal</th>
                                        <th>Kurban</th>
                                        <th>Haji</th>
                                        <th>Umrah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $agama as $result => $w )
                                    <tr>
                                        <td>{{ $result + $agama->firstitem() }}</td>
                                        <td>{{$w->kode_kk}}</td>
                                        <td>{{$w->kd_induk}}</td>
                                        <td>{{$w->no_rw}}</td>
                                        <td>{{$w->no_rt}}</td>
                                        <td>{{$w->nama}}</td>
                                        <td>{{$w->nm_panggilan}}</td>
                                        <td>{{$w->nama_agama}}</td>
                                        <td>{{$w->is_5waktu}}</td>
                                        <td>{{$w->is_jamaah}}</td>
                                        <td>{{$w->is_zakat_fitrah}}</td>
                                        <td>{{$w->is_zakat_mal}}</td>
                                        <td>{{$w->is_qurban}}</td>
                                        <td>{{$w->is_haji}}</td>
                                        <td>{{$w->is_umrah}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $agama->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->


@endsection