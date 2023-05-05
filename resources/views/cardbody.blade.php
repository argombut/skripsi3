<style>

    a:link {
        text-decoration: none;
      }
      
      a:visited {
        text-decoration: none;
      }
      
      a:hover {
        text-decoration: none;
      }
      
      a:active {
        text-decoration: none;
      }
      
    .counter {
        background-color: #e6e6e6;
        padding: 20px 0;
        border-radius: 5px;
    }

    .count-title {
        font-size: 40px;
        font-weight: normal;
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center;
    }

    .content {
        height: 950px;
    }


    .card-body {
        height: 500px;
    }

    .count-text {
        font-size: 14px;
        font-weight: normal;
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center;
    }

    .fa-2x {
        size: 80px;
        margin: 0 auto;
        float: none;
        display: table;
        color: #00c3ff;
    }
</style>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                        <h4>Selamat Datang, Admin</h4>
                        <hr> <br>
                        <div class="row justify-content-md-center">
                            <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                                <div class="container">
                                    <div class="row">
                                        <br />
                                        <div class="col text-center">
                                            <h3><strong>Menu Akses</strong></h3>
                                            <p>Fitur untuk Mengakses ke Halaman Pengguna</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col">
                                            <a href="{{ url('/red_rw') }}">
                                                <div class="counter" style="height : 125px">
                                                    <i class="fa fa-users fa-2x"> <br></i>
                                                    <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                                                    <p class="count-text ">Halaman RW</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <a href="{{ url('/red_pkk') }}">
                                            <div class="counter" style="height : 125px">
                                                <i class="fa fa-female fa-2x"> <br></i>
                                                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                                                <p class="count-text ">Halaman PKK/KWT</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ url('/red_kt') }}">
                                            <div class="counter" style="height : 125px">
                                                <i class="fa fa-child fa-2x"> <br></i>
                                                <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                                                <p class="count-text ">Halaman Karang Taruna</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ url('/red_takmir') }}">
                                            <div class="counter" style="height : 125px">
                                                <i class="fa fa-child fa-2x"> <br></i>
                                                <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                                                <p class="count-text ">Halaman Takmir</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>