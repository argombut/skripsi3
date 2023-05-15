@extends('layout/kt',[
"InfoPage" => [
"Navbar" => '/kt/warga'
]
])
@section('title', 'Data Pemuda')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>DATA PEMUDA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Warga</a></li>
                            <li class="active">Warga Pemuda</li>
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
                        <strong class="card-title">Filter Data Pemuda</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('kt/warga') }}">
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

                                    
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label for="">Status Kawin</label>
                                            <select name="skawin" class="select form-control">
                                                <option value=""></option>
                                                <option value="Belum Kawin" <?= ($_SESSION['skawin'] == "Belum Kawin") ? "selected" : ""?>>Belum Kawin</option>
                                                <option value="Kawin" <?= ($_SESSION['skawin'] == "Kawin") ? "selected" : ""?>>Kawin</option>
                                                <option value="Cerai" <?= ($_SESSION['skawin'] == "Cerai") ? "selected" : ""?>>Cerai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                    <br>
                                        <button class='btn btn-primary'>Filter</button>
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
                        <div class="card-title"> Jenis Kelamin </div>

                        <canvas id="myChart2" style="width:100px;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                var xValues = <?= $labelgender ?>;
                                var yValues = <?= $valuesgender ?>;
                                var barColors = [
                                "#1A657F",
                                "#AA84A7",
                                "#74B4D0",
                                "#820000",
                                ];

                                new Chart("myChart2", {
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
                            <div class="card-title"> Status Kawin </div>

                            <canvas id="myChart" style="width:100px;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                var xValues = <?= $labelkawin ?>;
                                var yValues = <?= $valueskawin ?>;
                                var barColors = [
                                //"#F2962F",
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




            </div>

            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Pemuda</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align:center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Kartu Keluarga</th>
                                    <th>Kode Warga</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status Kawin</th>
                                    <th>Anggota Karang Taruna</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $data_induk as $result => $w )
                                <tr>
                                    <td>{{$result + 1}}</td>
                                    <td>{{$w->kode_kk}}</td>
                                    <td>{{$w->kd_induk}}</td>
                                    <td>{{$w->no_rw}}</td>
                                    <td>{{$w->no_rt}}</td>
                                    <td>{{$w->nm_panggilan}}</td>
                                    <td>{{$w->usia}}</td>
                                    <td>{{$w->j_kelamin}}</td>
                                    <td>{{$w->status_kawin}}</td>
                                    <td>{{$w->is_kt}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            </div>

        </div>

    </div><!-- .animated -->
</div><!-- .content -->
@endsection
