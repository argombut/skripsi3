@extends('layout/pkk',[
"InfoPage" => [
"Navbar" => '/pkk/warga'
]
])
@section('title', 'Data Warga Perempuan')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>DATA WARGA PEREMPUAN</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Lainnya</a></li>
                            <li class="active">Data Warga Perempuan</li>
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
                        <strong class="card-title">Filter Data Warga</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('red_pkk/warga') }}">
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
                                        <label for="">Status Kawin</label>
                                        <div class="form-group">
                                            <select name="kawin" class="select form-control">
                                                <option value=""></option>
                                                <option value="Belum Kawin" <?= ($_SESSION['kawin'] == "Belum Kawin") ? "selected" : ""?>>Belum Kawin</option>
                                                <option value="Kawin" <?= ($_SESSION['kawin'] == "Kawin") ? "selected" : ""?>>Kawin</option>
                                                <option value="Cerai" <?= ($_SESSION['kawin'] == "Cerai") ? "selected" : ""?>>Cerai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Status Hubungan</label>
                                        <div class="form-group">
                                            <select name="hub" class="select form-control">
                                                <option value=""></option>
                                                <option value="Anak" <?= ($_SESSION['hub'] == "Anak") ? "selected" : ""?>>Anak</option>
                                                <option value="Cucu" <?= ($_SESSION['hub'] == "Cucu") ? "selected" : ""?>>Cucu</option>
                                                <option value="Istri" <?= ($_SESSION['hub'] == "Istri") ? "selected" : ""?>>Istri</option>
                                                <option value="Orang Tua" <?= ($_SESSION['hub'] == "Orang Tua") ? "selected" : ""?>>Orang Tua</option>
                                                <option value="Kepala Keluarga" <?= ($_SESSION['hub'] == "Kepala Keluarga") ? "selected" : ""?>>Kepala Keluarga</option>
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
                            <div class="card-title"> Status Kawin </div>

                            <canvas id="myChart" style="width:100px;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                var xValues = <?= $labelkawin ?>;
                                var yValues = <?= $valueskawin ?>;
                                var barColors = [
                                "#aba923",
                                "#007d79",
                                "#74B4D0",
                                "#820000",
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

                

                <div class="col-md-6">
                    <div class="card">

                    <div class="card-body">
                    <div class="card-title"> Status Hubungan </div> 
                    
                        <canvas id="hubungan" style="width:100px;"></canvas>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>                        
                        
                        <script>
                            var xValues = <?= $labelhubungan ?>;
                            var yValues = <?= $valueshubungan ?>;
                            
                            var barColors = [
                            "#007d79",
                            "#007d79",
                            "#007d79",
                            "#007d79",
                            "#007d79",
                            "#007d79",
                            "#007d79",
                            
                            ];

                            new Chart("hubungan", {
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
                                
                            
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    datalabels: {
                                        color: '#007d79',
                                        anchor: 'end',
                                        align: 'top',
                                        
                                    },
                                },

                                scales: {
                                    y: {
                                        title: {
                                        display: true,
                                        text: 'Jumlah Warga (orang)'
                                    }
                                    },
                                    x: {
                                        title: {
                                        display: true,
                                        text: 'Kategori Status Hubungan'
                                    }
                                    },
                                    
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
                        <strong class="card-title">Tabel Warga Perempuan</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor Kartu Keluarga</th>
                                    <th>NIK</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Panggilan</th>
                                    <!-- <th>Usia</th> -->
                                    <th>Status Kawin</th>
                                    <th>Hubungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pk as $p )
                                <tr>
                                    <td>{{$p->no_kk}}</td>
                                    <td>{{$p->no_ktp}}</td>
                                    <td>{{$p->no_rw}}</td>
                                    <td>{{$p->no_rt}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->nm_panggilan}}</td>
                                    <td>{{$p->status_kawin}}</td>
                                    <td>{{$p->status_hub_kk}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div><!-- .animated -->
    </div><!-- .content -->
</div>
@endsection