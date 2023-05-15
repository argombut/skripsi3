@extends('layout/kt',[
"InfoPage" => [
"Navbar" => '/kt/laki'
]
])
@section('title', 'Data Pemuda Laki-laki')

@section('container')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>DATA PEMUDA LAKI-LAKI</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Data Warga</a></li>
                            <li class="active">Pemuda Laki-laki</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header"> Chart </div>
                                                <div class="card-body">
                                                <canvas class="chart" width="400" height="200"></canvas>
                                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                <script type="text/javascript">
                                                    google.charts.load("current", {packages:['corechart']});
                                                    google.charts.setOnLoadCallback(drawChart);
                                                    function drawChart() {
                                                    var data = google.visualization.arrayToDataTable([
                                                        ["Element", "Density", { role: "style" } ],
                                                        ["Copper", 8.94, "#b87333"],
                                                        ["Silver", 10.49, "silver"],
                                                        ["Gold", 19.30, "gold"],
                                                        ["Platinum", 21.45, "color: #e5e4e2"]
                                                    ]);

                                                    var view = new google.visualization.DataView(data);
                                                    view.setColumns([0, 1,
                                                                    { calc: "stringify",
                                                                        sourceColumn: 1,
                                                                        type: "string",
                                                                        role: "annotation" },
                                                                    2]);

                                                    var options = {
                                                        title: "Density of Precious Metals, in g/cm^3",
                                                        width: 400,
                                                        height: 200,
                                                        bar: {groupWidth: "95%"},
                                                        legend: { position: "none" },
                                                    };
                                                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                                                    chart.draw(view, options);
                                                }
                                                </script>
                                                <div id="columnchart_values" style="width: 400px; height: 200px;"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header"> Chart </div>
                                                
                                                <div class="card-body">
                                                    <canvas class="chart" width="400" height="200"></canvas>
                                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                    <script type="text/javascript">
                                                    google.charts.load('current', {'packages':['corechart']});
                                                    google.charts.setOnLoadCallback(drawChart);

                                                    function drawChart() {

                                                    var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['Work',     11],
                                                    ['Eat',      2],
                                                    ['Commute',  2],
                                                    ['Watch TV', 2],
                                                    ['Sleep',    7]
                                                    ]);

                                                    var options = {
                                                    title: 'My Daily Activities'
                                                    };

                                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                    chart.draw(data, options);
                                                    }
                                                    </script>
                                                    <div id="piechart" style="width: 300px; height: 200px;"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </div> -->




<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Pemuda Laki-laki</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Kartu Keluarga</th>
                                    <th>Kode Warga</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    {{-- <th>Anggota Karang Taruna</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_induk as $result => $p )
                                <tr>
                                    <td>{{$result + 1}}</td>
                                    <td>{{$p->kode_kk}}</td>
                                    <td>{{$p->kd_induk}}</td>
                                    <td>{{$p->no_rw}}</td>
                                    <td>{{$p->no_rt}}</td>
                                    <td>{{$p->nm_panggilan}}</td>
                                    {{-- <td>{{$p->is_kt}}</td> --}}
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->
@endsection