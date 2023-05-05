@extends('takmir/layout',[
'InfoPage' => [
'Navbar' => '/takmir/gol_darah'
]])
@section('title', 'Golongan Darah')

@section('container')


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>TABEL DETAIL DATA GOLONGAN DARAH WARGA</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="#">Tampilkan Data</a></li>
                            <li class="active">Data Golongan Darah</li>
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
                        <strong class="card-title">Filter Data Golongan Darah</strong>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('takmir/gol_darah') }}">
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
                                <div class="col-md-3">
                                    <label for="">Gol Darah</label>
                                    <div class="form-group">
                                        <select name="gol_darah" class="select form-control">
                                            <option value=""></option>
                                            @foreach($gol_darah_filter as $data)
                                            <option value="{{$data->gol_darah}}" <?= ($_SESSION['gol_darah'] == $data->gol_darah) ? "selected" : ""?>>
                                                @if ($data->gol_darah == 1)
                                                    A
                                                @elseif ($data->gol_darah == 2)
                                                    B
                                                @elseif ($data->gol_darah == 3)
                                                    O
                                                @else
                                                    AB
                                                @endif
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
                        <div class="card-title"> Golongan Darah </div> 
                        
                            <canvas id="myChart" style="width:100px;"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                            <script>
                                var xValues = <?= $label ?>;
                                var yValues = <?= $values ?>;
                                var barColors = [
                                '#6a9252',
                                '#8a9e3a',
                                '#007d79',
                                '#58988c',
                                '#985864'
                                // "#11371c",
                                // "#5f6c6a",
                                // "#1A657F",
                                // "#820000",
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
                                    title: {
                                    display: true,
                                    text: ""
                                    }
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
                            <strong class="card-title">Tabel Golongan Darah Warga</strong>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>No. Rumah</th>
                                        <th>Nama</th>
                                        <th>Panggilan</th>
                                        <th>Golongan Darah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table as $result => $gd)
                                    <tr>
                                        <td>{{ $result + $table->firstitem() }}</td>
                                        <td>{{$gd->no_rt}}</td>
                                        <td>{{$gd->no_rw}}</td>
                                        <td>{{$gd->kd_rumah}}</td>
                                        <td>{{$gd->nama}}</td>
                                        <td>{{$gd->nm_panggilan}}</td>
                                        <td>
                                            @php
                                                if($gd->gol_darah == 'A'){
                                                    echo 'A';
                                                }elseif($gd->gol_darah == 'B'){
                                                    echo 'B';
                                                }elseif($gd->gol_darah == 'O'){
                                                    echo 'O';
                                                }else{
                                                    echo 'AB';
                                                }
                                            @endphp
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $table->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->






@endsection

