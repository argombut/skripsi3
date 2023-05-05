@extends('takmir/layout',[
'InfoPage' => [
'Navbar' => '/takmir/baca'
]])
@section('title', 'Kemampuan Baca')

@section('container')


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA KEMAMPUAN BACA WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Kemampuan Baca</li>
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
                        <strong class="card-title">Filter Data Kemampuan Baca</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('takmir/baca') }}">
                            <div class="row"> 
                                
                            <div class="col-md-1">
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
                                        <label for="">Latin</label>
                                        <div class="form-group">
                                            <select name="latin" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['latin'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['latin'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Hijaiyah</label>
                                        <div class="form-group">
                                            <select name="hijaiyah" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['hijaiyah'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['hijaiyah'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Iqra</label>
                                        <div class="form-group">
                                            <select name="iqra" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['iqra'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['iqra'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Quran</label>
                                        <div class="form-group">
                                            <select name="quran" class="select form-control">
                                                <option value=""></option>
                                                <option value="Ya" <?= ($_SESSION['quran'] == 'Ya') ? "selected" : ""?>>Ya</option>
                                                <option value="Tidak" <?= ($_SESSION['quran'] == 'Tidak') ? "selected" : ""?>>Tidak</option>
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
                        <div class="card-title"> Kemampuan Baca Qur'an </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                            
                            <script>
                                var xValues = ['Latin', 'Hijaiyah', 'Iqra', 'Quran'];
                                var yValues = <?= $values ?>;
                                var barColors = [
                                    "#aba923",
                                    "#aba923",
                                    "#aba923",
                                    "#aba923",
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
                                                color: '#aba923',
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
                                            text: 'Jumlah Warga yang Menguasai Bacaan (orang)'
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
                                        <th>Kode KK</th>
                                        <th>Kode Warga</th>
                                        <th>RW</th>
                                        <th>RT</th>
                                        <th>Nama</th>
                                        <th>Panggilan</th>
                                        <th>Baca Latin</th>
                                        <th>Baca Hijaiyah</th>
                                        <th>Baca Iqra</th>
                                        <th>Baca Quran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $pd as $result => $pda )
                                    <tr>
                                        <td>{{ $result + $pd->firstitem() }}</td>
                                        <td>{{$pda->kode_kk}}</td>
                                        <td>{{$pda->kd_induk}}</td>
                                        <td>{{$pda->no_rw}}</td>
                                        <td>{{$pda->no_rt}}</td>
                                        <td>{{$pda->nama}}</td>
                                        <td>{{$pda->nm_panggilan}}</td>
                                        <td>{{$pda->is_latin}}</td>
                                        <td>{{$pda->is_hijaiyah}}</td>
                                        <td>{{$pda->is_iqra}}</td>
                                        <td>{{$pda->is_quran}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pd->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->




@endsection