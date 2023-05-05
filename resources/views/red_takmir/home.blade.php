@extends('red_takmir/layout',[
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
                        <p>Data Warga Muslim RW 1 Dusun Sanggrahan</p>
                        <hr> 
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="card">
                                                <a href="{{ url('red_takmir/warga') }}">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media d-flex">
                                                                <div class="align-self-center">
                                                                    <i class="fa fa-users fa-2x font-large-2 float-left" style="color: #E3BE20"></i>
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
                                                <a href="{{ url('red_takmir/datakk') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="fa fa-database fa-2x font-large-2 float-left" style="color: #2BE3D4"></i>
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
                                                <a href="{{ url('red_takmir/datakk') }}">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media d-flex">
                                                                <div class="align-self-center">
                                                                    <i class="fa fa-home fa-2x font-large-2 float-left" style="color: #E37E4D"></i>
                                                                </div>
                                                                <div class="media-body text-right">
                                                                    <h3 class="success" style="color: #E37E4D">{{$rumah}}</h3>
                                                                    <span style="color: black">Rumah</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="row">



                                        <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="card-title"> Perbandingan Usia </div> 
                        
                                                <canvas id="myChart2" style="width:100px;"></canvas>
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
                                                    <hr>
                                                    <a href="{{ url('red_takmir/warga') }}">Lihat semua</a>
                                            </div>  
                                        </div>
                                        </div>

                                        


                                        <div class="col-md-6">
                                            <div class="card">
                                                
                                            <div class="card-body">
                                                <div class="card-title"> Ibadah </div> 
                                                
                                                    <canvas id="ibadah" style="width:100px;"></canvas>
                                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

                                                    <script>
                                                        var xValues = ['Sholat 5 Waktu', 'Sholat Berjamaah', 'Zakat Fitrah', 'Zakat Mal', 'Qurban', 'Haji', 'Umrah'];
                                                        var yValues = <?= $valuesibadah ?>;
                                                        var barColors = [
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769",
                                                        "#498769"
                                                       
                                                        ];

                                                        new Chart("ibadah", {
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
                                                                tooltip: {
                                                                    callbacks: {
                                                                        beforeTitle: function(context){
                                                                            return 'Jumlah warga yang melakukan';
                                                                        },

                                                                    },
                                                                },
                                                                datalabels : {
                                                                    color: '#498769',
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
                                                                    text: 'Jumlah Warga yang Melakukan Ibadah (orang)'
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
                                                       // plugins: [ChartDataLabels],
                                                        });
                                                    </script>
                                                <hr>
                                                <a href="{{ url('red_takmir/agama') }}">Lihat semua</a>
                                            </div> 
                                            </div>
                                        </div>


                                    </div>
                                    

                                    


                                    <div class="row">

                                    <div class="col-md-4">
                                            <div class="card">
                                                
                                            <div class="card-body">
                                            <div class="card-title"> Kemampuan Baca Qur'an </div> 
                                            
                                                <canvas id="chartbaca" style="width:100px;"></canvas>
                                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                                                
                                                <script>
                                                    var xValues = ['Latin', 'Hijaiyah', 'Iqra', 'Quran'];
                                                    var yValues = <?= $valuesbaca ?>;
                                                    var barColors = [
                                                    "#DFBA4E",
                                                    "#DFBA4E",
                                                    "#DFBA4E",
                                                    "#DFBA4E",
                                                    ];

                                                    new Chart("chartbaca", {
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
                                                            tooltip: {
                                                                    callbacks: {
                                                                        beforeTitle: function(context){
                                                                            return 'Jumlah warga yang menguasai';
                                                                        },

                                                                    },
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
                                                <hr>
                                                <a href="{{ url('red_takmir/baca') }}">Lihat semua</a>
                                            </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">

                                                <div class="card-body">
                                                    <div class="card-title"> Golongan Darah </div> 
                                                    
                                                    <!-- <div class="chartagm" style="width:50%;"> -->
                                                        <canvas id="goldar" style="width:100px;"></canvas>
                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                        <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script> -->

                                                        
                                                        <script>
                                                            var xValues = ['-', 'A', 'AB', 'B', 'O'];
                                                            var yValues = <?= $valuesgoldar ?>;
                                                            var barColors = [
                                                            '#4E73DF',
                                                            '#DF4EBB',
                                                            '#DFBA4E',
                                                            '#4EDF72'
                                                        
                                                           
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
                                                                plugins: {
                                                                    datalabels : {
                                                                        color: 'white',
                                                                        // render: 'label',
                                                                        // precision:1,
                                                                        // arc:false,
                                                                        // position: 'border',
                                                                        //fontSize: 40,
                                                                        // fontColor: ['#ffffe0','#ffffe0','#ffffe0','#ffffe0',],
                                                                    },
                                                            },
                                                            },
                                                            
                                                            //plugins: [ChartDataLabels],
                                                            });
                                                        </script>
                                                    <!-- </div> -->
                                                    <hr>
                                                    <a href="{{ url('red_takmir/gol_darah') }}">Lihat semua</a>
                                                </div>
                                                  
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-4">
                                            <div class="card">

                                                <div class="card-body">
                                                <div class="card-title"> Level Ekonomi </div> 
                                                
                                                    <canvas id="ekonomi" style="width:100px;"></canvas>
                                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>                                                    
                                                    
                                                    <script>
                                                        var xValues = ['Menengah ke Atas', 'Menengah', 'Menengah ke Bawah'];
                                                        var yValues = <?= $valuesekonomi ?>;
                                                        
                                                        var barColors = [
                                                        "#4E73DF",
                                                        "#DF4EBB",
                                                        "#DFBA4E",
                                                        "#4EDF72",
                                                        
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
                                                    <a href="{{ url('red_takmir/ekonomi') }}">Lihat semua</a>
                                                </div>  
    
                                            </div>
                                        </div>


                                    </div>





                                    <div class="row">   
                                    
                                    
                                        <div class="col-md-6">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="card-title"> Pendidikan </div> 
                                                
                                                    <canvas id="chartpendidikan" style="width:100px;"></canvas>
                                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
                                                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
                                                    
                                                    <script>
                                                        var xValues = <?= $labelpdd ?>;
                                                        var yValues = <?= $valuespdd ?>;
                                                        var barColors = [
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
                                                        "#4EBBDF",
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
                                                <a href="{{ url('red_takmir/pendidikan') }}">Lihat semua</a>
                                                                            
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
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
                                                            "#4EBBDF",
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