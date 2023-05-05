@extends('red_takmir/layout',[
"InfoPage" => [
"Navbar" => '/red_takmir/warga'
]
])
@section('title', 'Data Warga')

@section('container')

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Warga</li>
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
                        <form method="GET" action="{{ url('red_takmir/warga') }}">
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
                                        <label for="">Jenis Kelamin</label>
                                        <div class="form-group">
                                            <select name="kelamin" class="select form-control">
                                                <option value=""></option>
                                                <option value="Laki-laki" <?= ($_SESSION['kelamin'] == "Laki-laki") ? "selected" : ""?>>Laki-laki</option>
                                                <option value="Perempuan" <?= ($_SESSION['kelamin'] == "Perempuan") ? "selected" : ""?>>Perempuan</option>
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
                        <div class="card-title"> Perbandingan Usia </div> 
                        
                            <canvas id="myChart2" style="width:100px;"></canvas>
                            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

                            <script>
                                var xValues = <?= $laki ?>;
                                var yValues = <?= $pr ?>;
                                var barColors = [
                                    "#f472b6",
                                    "#00aba9",
                                    "#f472b6",
                                    "#00aba9",
                                ];

                                var labelU =  ['Manula (55th>)','Dewasa (30-55th)','Remaja (16-30th)','Anak-anak (7-16th)'];
                                const data = {
                                    labels: labelU,
                                    datasets: [{
                                    label: 'Laki-laki',
                                    backgroundColor: '#4E73DF',
                                    data: <?= $laki ?>,
                                    }, {
                                    label: 'Perempuan',
                                    backgroundColor: '#DFBA4E',
                                    data: <?= $pr ?>,
                                    }]
                                };
                                const config = {
                                    type: 'bar',
                                    data: data,
                                    
                                    options: {
                                        plugins: {
                                                datalabels: {
                                                    color: 'white',
                                                    anchor: 'end',
                                                    align: 'start',
                                                    
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
                                                    text: 'Kategori Rentang Usia (tahun)'
                                                }
                                                },
                                                
                                            },
                                    },

                                    //plugins: [ChartDataLabels],
                                    
                                };
                                const myChart = new Chart(
                                    document.getElementById('myChart2'),
                                    config
                                );
                            </script>
                        
                    </div>
                </div>
                </div>


                <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"> Status Mukim </div> 
                        
                            <canvas id="myChart" style="width:80%;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                var xValues = <?= $label ?>;
                                var yValues = <?= $values ?>;
                                var barColors = [
                                    '#2c8a82',
                                    '#4E73DF',
                                    '#DF4EBB',
                                    '#DFBA4E',
                                    '#4EDF72',
                                    
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
                            <strong class="card-title">Tabel Data Warga</strong>
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
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status Hubungan</th>
                                    <th>Status Mukim</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $warga as $result => $w)
                                <tr>
                                    <td>{{ $result + $warga->firstitem() }}</td>
                                    <td>{{$w->kode_kk}}</td>
                                    <td>{{$w->kd_induk}}</td>
                                    <td>{{$w->no_rw}}</td>
                                    <td>{{$w->kd_rt}}</td>
                                    <td>{{$w->nama}}</td>
                                    <td>{{$w->nm_panggilan}}</td>
                                    <td>{{$w->tmp_lahir}}, {{$w->tgl_lahir}}</td>
                                    <td>{{$w->j_kelamin}}</td>
                                    <td>{{$w->status_hub_kk}}</td>
                                    <td>{{$w->status_mukim}}</td>
                                    <td>{{$w->status}}</td>
                                    {{--  <td>{{$nilai[$w->kd_induk]}}</td>  --}}
                                </tr>
                                @endforeach

                            </tbody>
                            
                        </table>
                        {{ $warga->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->



@endsection

@section('customscript')

@endsection