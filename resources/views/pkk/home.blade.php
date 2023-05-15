@extends('layout/pkk',[
"InfoPage" => [
"Navbar" => '/home'
]
])
@section('title', 'Dashboard')

@section('container')

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div class="card">
                    <div class="card-body card-block"> -->
                        <h2><strong>Dashboard</strong></h2>
                        <p>Data Warga Perempuan dan Ibu PKK/KWT Dusun Sanggrahan</p>
                        <hr>
                                    {{--  JUMLAH DATA  --}}
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 col-12"> 
                                            <div class="card">
                                                <a href="{{ url('pkk/warga') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="fa fa-female fa-2x danger font-large-2 float-left" style="color: #E3BE20"></i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 class="danger" style="color: #E3BE20">{{$countperempuan}}</h3> 
                                                                <span style="color: black">Jumlah Warga Perempuan</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="card">
                                                <a href="{{ url('pkk/warga') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="fa fa-users fa-2x primary font-large-2 float-left" style="color: #2BE3D4"></i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 class="primary" style="color: #2BE3D4"> 0 </h3>
                                                                <span style="color: black">Anggota PKK/KWT</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6 col-12">
                                            <div class="card">
                                                <a href="{{ url('red_rw/keahlian') }}">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <i class="fa fa-suitcase fa-2x primary font-large-2 float-left" style="color: #E37E4D"></i>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h3 class="warning" style="color: #E37E4D">{{$countkeahlian}}</h3>
                                                                <span style="color : black">Data Keahlian</span>
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
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                <div class="card-title"> Keahlian </div> 
                                                    <canvas id="myChart" style="width:100px;"></canvas>
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                        <script>
                                                            var xValues = <?= $label ?>;
                                                            var yValues = <?= $values ?>;
                                                            var barColors = [
                                                            "#007d79",
                                                            "#E790BF",
                                                            "#00AC94",
                                                            "#005B4A",
                                                            "#7A4B00",
                                                            "#58083C",
                                                            // slices: {
                                                            // 0: { color: '#00AC94' },
                                                            // 1: { color: '#E790BF' },
                                                            // 2: { color: '#58083C' },
                                                            // 3: { color: '#005B4A' },
                                                            // 4: { color: '#7A4B00' },
                                                            
                                                            // }
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
                                                    <hr><a href="{{ url('pkk/keahlian') }}">Lihat semua</a>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                    {{--  CHART  --}}


                                    
                                </div>
                            </section>
                        </div>

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