@extends('layout/rolerw')
@section('title', 'Form')
<style>
    ::placeholder {
        font-size: 0.8rem;
    }

    .font-08 {
        font-size: 0.8rem !important;
    }

    select,
    input {
        font-size: 0.8rem !important;
    }
</style>

<body>
    <aside id="left-panel" class="left-panel"></aside>
    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="home">Dashboard</a></li>
                                    <li><a href="#">Transaksi</a></li>
                                    <li><a href="#">Input Data Kartu Keluarga</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="content">

            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <h2><strong>Detail Warga RT 13</strong></h2>
                                <hr> <br>
                                <div class="default-tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="data-pekerjaan-tab" data-toggle="tab" href="#data-pekerjaan" role="tab" aria-controls="data-pekerjaan" aria-selected="true">PEKERJAAN</a>
                                            <a class="nav-item nav-link" id="data-keahlian-tab" data-toggle="tab" href="#data-keahlian" role="tab" aria-controls="data-keahlian" aria-selected="false">KEAHLIAN</a>
                                            <a class="nav-item nav-link" id="data-ekonomi-tab" data-toggle="tab" href="#data-ekonomi" role="tab" aria-controls="data-ekonomi" aria-selected="false">LEVEL EKONOMI</a>
                                            <a class="nav-item nav-link" id="data-darah-tab" data-toggle="tab" href="#data-darah" role="tab" aria-controls="data-darah" aria-selected="false">GOLONGAN DARAH</a>
                                            <a class="nav-item nav-link" id="data-sholat-tab" data-toggle="tab" href="#data-sholat" role="tab" aria-controls="data-sholat" aria-selected="false">SHOLAT JAMAAH</a>
                                        </div>
                                    </nav>
                                    
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="data-pekerjaan" role="tabpanel" aria-labelledby="data-pekerjaan-tab">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Nomor Kartu Keluarga</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Level Ekonomi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach( $rt13 as $p )
                                                        <tr>
                                                            <td>{{$p->no_kk}}</td>
                                                            <td>{{$p->no_ktp}}</td>
                                                            <td>{{$p->nama}}</td>
                                                            <td>{{$p->nama_pekerjaan}}</td>
                                                            <td>{{$p->nama_level}}</td>
                                                        </tr> 
                                                         @endforeach
                
                                                    </tbody>
                                                </table>   
                           
                                            
                                        </div>



                                        <div class="tab-pane fade" id="data-keahlian" role="tabpanel" aria-labelledby="data-keahlian-tab">
                                            <table id="bootstrap-data-table2" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>NIK</th>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>Nama</th>
                                                        <th>Keahlian</th>
                                                        <th>Sertifikat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $join as $k )
                                                    <tr>
                                                        <td>{{$k->no_ktp}}</td>
                                                        <td>{{$k->no_kk}}</td>
                                                        <td>{{$k->nama}}</td>
                                                        <td>{{$k->nama_keahlian}}</td>
                                                        <td>{{$k->deskripsi_sertifikat}}</td>
                                                    </tr>
                                                    @endforeach
                
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                        <div class="tab-pane fade" id="data-ekonomi" role="tabpanel" aria-labelledby="data-ekonomi-tab">
                                            <table id="bootstrap-data-table3" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>Nama Kepala Keluarga</th>
                                                   
                                                        <th>Level Ekonomi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $lv as $p )
                                                    <tr>
                                                        <td>{{$p->no_kk}}</td>
                                                        <td>{{$p->nm_kk}}</td>
                                                        <td>{{$p->nama_level}}</td>
                                                     
                                                    </tr>
                                                    @endforeach
            
                                                </tbody>
                                            </table>   

                                        </div>


                                        <div class="tab-pane fade" id="data-darah" role="tabpanel" aria-labelledby="data-darah-tab">
                                            
                                            <table id="bootstrap-data-table4" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Golongan Darah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $gd as $gd )
                                                    <tr>
                                                        <td>{{$gd->no_kk}}</td>
                                                        <td>{{$gd->no_ktp}}</td>
                                                        <td>{{$gd->nama}}</td>
                                                        <td>{{$gd->gol_darah}}</td>
                                                    </tr>
                                                    @endforeach
                
                                                </tbody>
                                            </table>   

                                        </div>

                                        <div class="tab-pane fade" id="data-sholat" role="tabpanel" aria-labelledby="data-sholat-tab">
                                            <table id="bootstrap-data-table5" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor KK</th>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Sholat 5 Waktu</th>
                                                        <th>Sholat Jamaah di Masjid</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach( $sh as $sh )
                                                    <tr>
                                                        <td>{{$sh->no_kk}}</td>
                                                        <td>{{$sh->no_ktp}}</td>
                                                        <td>{{$sh->nama}}</td>
                                                        <td>{{$sh->is_5waktu}}</td>
                                                        <td>{{$sh->is_jamaah}}</td>
                                                        
                                                    </tr>
                                                    @endforeach
                
                                                </tbody>
                                            </table>

                                        
                                    
                                        </div>


                                </div>

                                    
                            </div> 
                        </div>
                            
                      
                
                            
                        
                             

                        
                    </div>

                    
                </div>




            </div>

            
        </div>
        <div class="clearfix"></div>




    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    @section('container')


    <div class="clearfix"></div>

</body>
@endsection('container')

</html>