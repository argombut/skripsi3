@extends('red_rw/layout',[
"InfoPage" => [
"Navbar" => '/red_rw/datakk'
]
])
@section('title', 'Data Kartu Keluarga')



@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DATA KARTU KELUARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Kartu Keluarga</li>
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
                        <strong class="card-title">Filter Data Kartu Keluarga</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('red_rw/datakk') }}">
                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">RT</label>
                                        <select name="no_rt" class="select form-control">
                                            <option value=""></option>
                                            @foreach($md_rt as $data)
                                            <option value="{{$data->no_rt}}" <?= ($_SESSION['no_rt'] == $data->no_rt) ? "selected" : ""?>>{{$data->no_rt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">RW</label>
                                        <select name="no_rw" class="select form-control">
                                            <option value=""></option>
                                            @foreach($md_rw as $data)
                                            <option value="{{$data->no_rw}}" <?= ($_SESSION['no_rw'] == $data->no_rw) ? "selected" : ""?>>{{$data->no_rw}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Level Ekonomi</label>
                                        <select name="level_ekonomi" class="select form-control">
                                            <option value=""></option>
                                            @foreach($level_ekonomi as $data)
                                            <option value="{{$data->kd_level_ekonomi}}" <?= ($_SESSION['level_ekonomi'] == $data->kd_level_ekonomi && $_SESSION['level_ekonomi'] != 0) ? "selected" : ""?>>
                                                {{ $data->nama_level }}
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
                        <div class="card-title"> Level Ekonomi </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                            
                            <script>
                                var xValues = ['Menengah ke Atas', 'Menengah', 'Menengah ke Bawah'];
                                var yValues = <?= $values ?>;
                                var barColors = [
                                "#3490dc",
                                "#3490dc",
                                "#3490dc",
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
                                            color: '#3490dc',
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
                                            text: 'Jumlah Kepala Keluarga (orang)'
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
                            <strong class="card-title">Tabel Data Kartu Keluarga</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kartu Keluarga</th>
                                        <th>Nama Kepala Keluarga</th>
                                        <th>RW</th>
                                        <th>RT</th>
                                        <th>No. Rumah</th>
                                        <th>Jumlah Anggota</th>
                                        <th>Level Ekonomi</th>
                                        <th>Status KK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kk as $result => $dkk)
                                    <tr>
                                        <td>{{ $result + $kk->firstitem() }}</td>
                                        <td>{{$dkk->kode_kk}}</td>
                                        <td>{{$dkk->nm_kk}}</td>
                                        <td>{{$dkk->no_rw}}</td>
                                        <td>{{$dkk->no_rt}}</td>
                                        <td>{{$dkk->kd_rumah}}</td>
                                        <td>{{$dkk->jml_anggota}}</td>
                                        <td>{{$dkk->nama_level}}</td>
                                        <td>{{$status['nokk']['statuskk']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $kk->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->
@endsection
<!-- Right Panel -->

<!-- Scripts -->
@section('container')
</body>
@endsection('container')

</html>