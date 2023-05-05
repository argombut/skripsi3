@extends('red_rw/layout',[
"InfoPage" => [
"Navbar" => '/home'
]
])
@section('title', 'Dashboard')

@section('container')

<div class="content">
    <div class="animated fadeIn">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <!-- <div class="card">
                    <div class="card-body card-block"> -->
                        <h2><strong>Dashboard</strong></h2>
                        <p>Data Warga RW 1 Dusun Sanggrahan</p>
                        <hr>   
                                    {{--  JUMLAH DATA  --}}
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 col-12"> 
                                            <div class="card">
                                                <a href="{{ url('red_rw/warga') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="bi bi-people primary font-large-2 float-left">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16" style="color: #E3BE20">
                                                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                                                    </svg>
                                                                </i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 class="primary" style="color: #E3BE20">{{ $warga }}</h3>   
                                                                <span style="color: black">Jumlah Warga</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="card">
                                                <a href="{{ url('red_rw/datakk') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="bi bi-book warning font-large-2 float-left" style="color: #2BE3D4">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                                                    </svg>
                                                                </i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 class="warning" style="color: #2BE3D4"> {{$data_kk}} </h3>
                                                                <span style="color: black">Data Kartu Keluarga</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="card">
                                                <a href="{{ url('red_rw/datakk') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="bi bi-house-door success font-large-2 float-left" style="color: #E37E4D">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                                                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                                                                    </svg>
                                                                </i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 style="color: #E37E4D">{{$rumah}}</h3>
                                                                <span style="color: black">Rumah</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  JUMLAH DATA  --}}
                                    
                                    {{--  CHART  --}}
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
                                                            
                                                        var labelU =  ['Manula (55th>)','Dewasa (30-55th)','Remaja (16-30th)','Anak-anak (7-16th)'];
                                                        const data = {
                                                            labels: labelU,
                                                            datasets: [{
                                                            label: 'Laki-laki',
                                                            backgroundColor: '#3490DC',
                                                            data: <?= $laki ?>,
                                                            }, {
                                                            label: 'Perempuan',
                                                            backgroundColor: '#E39F36',
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
                                                    <hr>
                                                    <a href="{{ url('red_rw/warga') }}">Lihat semua</a>        
                                                </div>  
                                            </div>
                                        </div>
 

                                        <div class="col-md-6">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="card-title"> Agama </div>
                                                <!-- <div class="chartagm" style="width:50%;"> -->
                                                    <canvas id="agama" style="width:100px;"></canvas>
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script> -->
                                                            
                                                            <script>
                                                                var xValues = <?= $labelagama ?>;
                                                                var yValues = <?= $valuesagama ?>;
                                                                var barColors = [
                                                                '#3539DB',
                                                                '#3490DC',
                                                                '#36E3D5',
                                                                '#2FFA77',
                                                                '#61F02E',
                                                                '#ffa600'
                                                            
                                                                ];

                                                                new Chart("agama", {
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
                                                                    //maintainAspectRatio: false,
                                                                },
                                                                //plugins: [ChartDataLabels],
                                                                });
                                                            </script>
                                                <!-- </div> -->
                                                <hr>
                                                <a href="{{ url('red_rw/agama') }}">Lihat semua</a>
                                            </div>

                                            </div>
                                        </div>

                                    </div>
                                    

                                    


                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="card">


                                            <div class="card-body" style="width:100%;">
                                                <div class="card-title"> Status Mukim </div>

                                                <canvas id="mukim" style="width:100px;"></canvas>
                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                                                        <script>
                                                            var xValues = <?= $labelmukim ?>;
                                                            var yValues = <?= $valuesmukim ?>;
                                                            var barColors = [
                                                                '#3539DB',
                                                                '#3490DC',
                                                                '#36E3D5',
                                                                '#2FFA77',
                                                                '#61F02E',
                                                                '#ffa600'
                                                            ];

                                                            new Chart("mukim", {
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
                                                                plugins: [ChartDataLabels],
                                                            },
                                                            
                                                            });
                                                        </script>
                                                <hr>
                                                <a href="{{ url('red_rw/warga') }}">Lihat semua</a>
                                            </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">


                                            <div class="card-body" style="width:100%;">
                                                    <div class="card-title"> Golongan Darah </div>
                                                    
                                                    <canvas id="goldar" style="width:100px;"></canvas>
                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                        <script>
                                                            var xValues = ['-', 'A', 'AB', 'B', 'O'];
                                                            var yValues = <?= $valuesgoldar ?>;
                                                            var barColors = [
                                                                '#3539DB',
                                                                '#3490DC',
                                                                '#36E3D5',
                                                                '#2FFA77',
                                                                '#61F02E',
                                                                '#ffa600'
                                                           
                                                            ];

                                                            new Chart("goldar", {
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
                                                    <hr>
                                                    <a href="{{ url('red_rw/gol_darah') }}">Lihat semua</a>
                                                </div>
                                                
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="card">
 

                                                <div class="card-body">
                                                <div class="card-title"> Level Ekonomi </div> 
                                                
                                                    <canvas id="ekonomi" style="width:100px;"></canvas>
                                                    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                                                    
                                                    <script>
                                                        var xValues = ['Menengah ke Atas', 'Menengah', 'Menengah ke Bawah'];
                                                        var yValues = <?= $valuesekonomi ?>;
                                                        
                                                        var barColors = [
                                                        "#3490DC",
                                                        "#36E3D5",
                                                        "#2BE36C",
                                                        "#84a595",
                                                        
                                                        ];

                                                        new Chart("ekonomi", {
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
                                                                    color: '#84a595',
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
                                                                    text: 'Jumlah Warga (orang)'
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

                                          
                                                    <hr>
                                                    <a href="{{ url('red_rw/ekonomi') }}">Lihat semua</a>
                                                </div>  

                                            </div>
                                        </div>

                                    
                                        
                                    </div>



                                    <div class="row">


                                        
                                    <div class="col-md-6">
                                            <div class="card">

                                            <div class="card-body" style="width:100%;">
                                                <div class="card-title"> Pendidikan </div>
                                                <canvas id="chartpendidikan" style="width:100px;"></canvas>
                                                    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
                                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                                                    
                                                    <script>
                                                        var xValues = <?= $labelpdd ?>;
                                                        var yValues = <?= $valuespdd ?>;
                                                        var barColors = [
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        "#E39F36",
                                                        ];

                                                        new Chart("chartpendidikan", {
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
                                                                    color: '#007d79',
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
                                                                    text: 'Jumlah Warga (orang)'
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
                                                <hr>
                                                <a href="{{ url('red_rw/pendidikan') }}">Lihat semua</a>
                                            </div>
                                                
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                        <div class="card">
                                                
                                            
                                        <div class="card-body" style="width:100%;">
                                                <div class="card-title"> Pekerjaan </div>
                                                <canvas id="chartpekerjaan" style="width:100px;"></canvas>
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                        <script>
                                                            var yValues = <?= $labelpkj ?>;
                                                            var xValues = <?= $valuespkj ?>;

                                                            var barColors = [
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            "#E39F36",
                                                            ];

                                                            new Chart("chartpekerjaan", {
                                                            type: "horizontalBar",
                                                            data: {
                                                                labels: yValues,
                                                                datasets: [{
                                                                backgroundColor: barColors,
                                                                data: xValues,
                                                                labels: xValues
                                                                }]
                                                            },
                                                            options: {
                                                                indexAxis: 'y',
                                                                legend: {
                                                                    display: false
                                                                },
                                                        
                                                                scales: {
                                                                    xAxes: [{
                                                                    scaleLabel: {
                                                                        display: true,
                                                                        labelString: 'Jumlah Warga (orang)'
                                                                    }
                                                                    }],
                                                                }
                                                            }
                                                            });

                                                        </script>
                                                <hr>
                                                <a href="{{ url('red_rw/pekerjaan') }}">Lihat semua</a>
                                            </div>
                                            
                                            
                                        </div>
                                        </div>




                                    </div>
                                    

                                <!-- </div> -->
                            <!-- </section> -->
                        <!-- </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


<!-- script buffer rainbow -->
@section('customscript')
<script>
    (function($) {
        $.fn.countTo = function(options) {
            options = options || {};

            return $(this).each(function() {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0, // the number the element should start at
            to: 0, // the number the element should end at
            speed: 1000, // how long it should take to count between the target numbers
            refreshInterval: 100, // how often the element should be updated
            decimals: 0, // the number of decimal places to show
            formatter: formatter, // handler for formatting the value before rendering
            onUpdate: null, // callback method for every time the element is updated
            onComplete: null // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function(value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
@endsection