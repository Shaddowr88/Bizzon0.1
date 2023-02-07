@extends('layouts/dash')
@section('dash')

    <div class="row">
        <div class="col-12 mb-2 ">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total fond</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
{{--                                <label class="btn btn-sm btn-primary btn-simple active" id="0">--}}
{{--                                    <input type="radio" name="options" checked="">--}}
{{--                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>--}}
{{--                                    <span class="d-block d-sm-none">--}}
{{--                          <i class="tim-icons icon-single-02"></i>--}}
{{--                        </span>--}}
{{--                                </label>--}}
{{--                                <label class="btn btn-sm btn-primary btn-simple" id="1">--}}
{{--                                    <input type="radio" class="d-none d-sm-none" name="options">--}}
{{--                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>--}}
{{--                                    <span class="d-block d-sm-none">--}}
{{--                          <i class="tim-icons icon-gift-2"></i>--}}
{{--                        </span>--}}
{{--                                </label>--}}
{{--                                <label class="btn btn-sm btn-primary btn-simple" id="2">--}}
{{--                                    <input type="radio" class="d-none" name="options">--}}
{{--                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>--}}
{{--                                    <span class="d-block d-sm-none">--}}
{{--                          <i class="tim-icons icon-tap-02"></i>--}}
{{--                        </span>--}}
{{--                                </label>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="chartBig1" width="2540" height="440" class="chartjs-render-monitor" style="display: block; height: 220px; width: 1270px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-warning">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Prestataire</p>
                                <h3 class="card-title">15</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-primary">
                                <i class="tim-icons icon-shape-star"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">intervention</p>
                                <h3 class="card-title">45</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Due</p>
                                <h3 class="card-title">150</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-danger">
                                <i class="tim-icons icon-molecule-40"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category"> Année </p>
                                <h3 class="card-title">12</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


<script src={{asset("./js/core/jquery.min.js")}}></script>
<script src={{asset("./js/core/popper.min.js")}}></script>
<script src={{asset("./js/core/bootstrap.min.js")}}></script>
<script src={{asset("./js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
<script src={{asset("./js/plugins/moment.min.js")}}></script>


<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-46172202-12');
</script>

<script>
    $(document).ready(function() {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'CreativeTim'
                }
            },
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html'
        });



        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }


        //
        //
        //

    });
</script>

<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>

<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();

    });
</script>

<div class="jvectormap-tip"></div>
