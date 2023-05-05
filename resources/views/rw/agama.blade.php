@extends('rw/layout',[
"InfoPage" => [
"Navbar" => '/rw/agama'
]
])
@section('title', 'Data Agama Warga')


@section('container')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA AGAMA WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Agama</li>
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
                        <strong class="card-title">Filter Data Agama</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('rw/agama') }}">
                            <div class="row"> 
                                
                                    <div class="col-md-3">
                                        
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
                                    <!-- <div class="col-md-6"></div> -->
                                    <div class="col-md-3">
                                        <label for="">Agama</label>
                                        <div class="form-group">
                                            <select name="agama" class="select form-control">
                                                <option value=""></option>
                                                @foreach($agm as $data)
                                                <option value="{{$data->kd_agama}}" <?= ($_SESSION['agama'] == $data->kd_agama) ? "selected" : ""?>>
                                                    {{ $data->nama_agama }}
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


            <div class="row justify-content-md-center">

                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> Agama </div> 
                        
                        <canvas id="myChart2" style="width:80%;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                var xValues = <?= $label ?>;
                                
                                var yValues = <?= $values ?>;
                                
                                var barColors = [
                                "#3490DC",
                                "#B048FA",
                                "#E35C4D",
                                "#FAC048",
                                "#B5F046",
                                "#e11d48",
                                "#4d7c0f",
                                
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
                            <strong class="card-title">Tabel Agama Warga</strong>
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