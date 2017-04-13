<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php  echo base_url();?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>首页</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <?php $this->load->view('include/head.php');?>

</head>

<body class="no-skin">

<?php $this->load->view('include/navbar.php');?>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <?php $this->load->view('include/sidebar.php');?>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">
            <!-- #section:basics/content.breadcrumbs -->

            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li class="active">
                        <i class="ace-icon fa fa-home home-icon"></i>主页
                    </li>
                </ul><!-- /.breadcrumb -->

                <!-- /section:basics/content.searchbox -->
            </div>


            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">

                <?php $this->load->view('include/setting.php');?>
                <!-- /section:settings.box -->

                <!-- /section:settings.box -->
                <div class="page-header">
                    <h1>
                        Dashboard
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            overview &amp; stats
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>

                            <i class="ace-icon fa fa-check green"></i>

                            Welcome to
                            <strong class="green">
                                Ace
                                <small>(v1.3.2)</small>
                            </strong>,the lightweight, feature-rich and easy to use admin template.
                        </div>

                        <div class="row">
                            <div class="space-6"></div>

                            <div class="col-sm-7 infobox-container">
                                <!-- #section:pages/dashboard.infobox -->
                                <div class="infobox infobox-green">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-comments"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">32</span>
                                        <div class="infobox-content">comments + 2 reviews</div>
                                    </div>

                                    <!-- #section:pages/dashboard.infobox.stat -->
                                    <div class="stat stat-success">8%</div>

                                    <!-- /section:pages/dashboard.infobox.stat -->
                                </div>

                                <div class="infobox infobox-blue">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-twitter"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">11</span>
                                        <div class="infobox-content">new followers</div>
                                    </div>

                                    <div class="badge badge-success">
                                        +32%
                                        <i class="ace-icon fa fa-arrow-up"></i>
                                    </div>
                                </div>

                                <div class="infobox infobox-pink">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-shopping-cart"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">8</span>
                                        <div class="infobox-content">new orders</div>
                                    </div>
                                    <div class="stat stat-important">4%</div>
                                </div>

                                <div class="infobox infobox-red">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-flask"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">7</span>
                                        <div class="infobox-content">experiments</div>
                                    </div>
                                </div>

                                <div class="infobox infobox-orange2">
                                    <!-- #section:pages/dashboard.infobox.sparkline -->
                                    <div class="infobox-chart">
                                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                    </div>

                                    <!-- /section:pages/dashboard.infobox.sparkline -->
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">6,251</span>
                                        <div class="infobox-content">pageviews</div>
                                    </div>

                                    <div class="badge badge-success">
                                        7.2%
                                        <i class="ace-icon fa fa-arrow-up"></i>
                                    </div>
                                </div>

                                <div class="infobox infobox-blue2">
                                    <div class="infobox-progress">
                                        <!-- #section:pages/dashboard.infobox.easypiechart -->
                                        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                            <span class="percent">42</span>%
                                        </div>

                                        <!-- /section:pages/dashboard.infobox.easypiechart -->
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-text">traffic used</span>

                                        <div class="infobox-content">
                                            <span class="bigger-110">~</span>
                                            58GB remaining
                                        </div>
                                    </div>
                                </div>

                                <!-- /section:pages/dashboard.infobox -->
                                <div class="space-6"></div>

                                <!-- #section:pages/dashboard.infobox.dark -->
                                <div class="infobox infobox-green infobox-small infobox-dark">
                                    <div class="infobox-progress">
                                        <!-- #section:pages/dashboard.infobox.easypiechart -->
                                        <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                            <span class="percent">61</span>%
                                        </div>

                                        <!-- /section:pages/dashboard.infobox.easypiechart -->
                                    </div>

                                    <div class="infobox-data">
                                        <div class="infobox-content">Task</div>
                                        <div class="infobox-content">Completion</div>
                                    </div>
                                </div>

                                <div class="infobox infobox-blue infobox-small infobox-dark">
                                    <!-- #section:pages/dashboard.infobox.sparkline -->
                                    <div class="infobox-chart">
                                        <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                    </div>

                                    <!-- /section:pages/dashboard.infobox.sparkline -->
                                    <div class="infobox-data">
                                        <div class="infobox-content">Earnings</div>
                                        <div class="infobox-content">$32,000</div>
                                    </div>
                                </div>

                                <div class="infobox infobox-grey infobox-small infobox-dark">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-download"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <div class="infobox-content">Downloads</div>
                                        <div class="infobox-content">1,205</div>
                                    </div>
                                </div>

                                <!-- /section:pages/dashboard.infobox.dark -->
                            </div>

                            <div class="vspace-12-sm"></div>

                            <div class="col-sm-5">
                                <div class="widget-box">
                                    <div class="widget-header widget-header-flat widget-header-small">
                                        <h5 class="widget-title">
                                            <i class="ace-icon fa fa-signal"></i>
                                            Traffic Sources
                                        </h5>

                                        <div class="widget-toolbar no-border">
                                            <div class="inline dropdown-hover">
                                                <button class="btn btn-minier btn-primary">
                                                    This Week
                                                    <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                                    <li class="active">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                            This Week
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                            Last Week
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                            This Month
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                            Last Month
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <!-- #section:plugins/charts.flotchart -->
                                            <div id="piechart-placeholder"></div>

                                            <!-- /section:plugins/charts.flotchart -->
                                            <div class="hr hr8 hr-double"></div>

                                            <div class="clearfix">
                                                <!-- #section:custom/extra.grid -->
                                                <div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
																&nbsp; likes
															</span>
                                                    <h4 class="bigger pull-right">1,255</h4>
                                                </div>

                                                <div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
																&nbsp; tweets
															</span>
                                                    <h4 class="bigger pull-right">941</h4>
                                                </div>

                                                <div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
																&nbsp; pins
															</span>
                                                    <h4 class="bigger pull-right">1,050</h4>
                                                </div>

                                                <!-- /section:custom/extra.grid -->
                                            </div>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.widget-box -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- #section:custom/extra.hr -->
                        <div class="hr hr32 hr-dotted"></div>

                        <!-- /section:custom/extra.hr -->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-flat">
                                        <h4 class="widget-title lighter">
                                            <i class="ace-icon fa fa-star orange"></i>
                                            Popular Domains
                                        </h4>

                                        <div class="widget-toolbar">
                                            <a href="#" data-action="collapse">
                                                <i class="ace-icon fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <table class="table table-bordered table-striped">
                                                <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <i class="ace-icon fa fa-caret-right blue"></i>name
                                                    </th>

                                                    <th>
                                                        <i class="ace-icon fa fa-caret-right blue"></i>price
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="ace-icon fa fa-caret-right blue"></i>status
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>internet.com</td>

                                                    <td>
                                                        <small>
                                                            <s class="red">$29.99</s>
                                                        </small>
                                                        <b class="green">$19.99</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>online.com</td>

                                                    <td>
                                                        <b class="blue">$16.45</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>newnet.com</td>

                                                    <td>
                                                        <b class="blue">$15.00</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-danger arrowed">pending</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>web.com</td>

                                                    <td>
                                                        <small>
                                                            <s class="red">$24.99</s>
                                                        </small>
                                                        <b class="green">$19.95</b>
                                                    </td>

                                                    <td class="hidden-480">
																	<span class="label arrowed">
																		<s>out of stock</s>
																	</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>domain.com</td>

                                                    <td>
                                                        <b class="blue">$12.00</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.widget-box -->
                            </div><!-- /.col -->

                            <div class="col-sm-7">
                                <div class="widget-box transparent">
                                    <div class="widget-header widget-header-flat">
                                        <h4 class="widget-title lighter">
                                            <i class="ace-icon fa fa-signal"></i>
                                            Sale Stats
                                        </h4>

                                        <div class="widget-toolbar">
                                            <a href="#" data-action="collapse">
                                                <i class="ace-icon fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main padding-4">
                                            <div id="sales-charts"></div>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.widget-box -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="hr hr32 hr-dotted"></div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php $this->load->view('include/footer.php');?>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<?php $this->load->view('include/foot.php');?>
<script src="public/lib/ace/assets/js/jquery.easypiechart.js"></script>
<script src="public/lib/ace/assets/js/jquery.sparkline.js"></script>
<script src="public/lib/ace/assets/js/flot/jquery.flot.js"></script>
<script src="public/lib/ace/assets/js/flot/jquery.flot.pie.js"></script>
<script src="public/lib/ace/assets/js/flot/jquery.flot.resize.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        $('.easy-pie-chart.percentage').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html',
                {
                    tagValuesAttribute:'data-values',
                    type: 'bar',
                    barColor: barColor ,
                    chartRangeMin:$(this).data('min') || 0
                });
        });


        //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
        //but sometimes it brings up errors with normal resize event handlers
        $.resize.throttleWindow = false;

        var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
        var data = [
            { label: "social networks",  data: 38.7, color: "#68BC31"},
            { label: "search engines",  data: 24.5, color: "#2091CF"},
            { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
            { label: "direct traffic",  data: 18.6, color: "#DA5430"},
            { label: "other",  data: 10, color: "#FEE074"}
        ]
        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt:0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin:[-30,15]
                }
                ,
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }
        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);


        //pie chart tooltip example
        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
            if(item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent']+'%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });

        /////////////////////////////////////
        $(document).one('ajaxloadstart.page', function(e) {
            $tooltip.remove();
        });




        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "Domains", data: d1 },
            { label: "Hosting", data: d2 },
            { label: "Services", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }

        $('.dialogs,.comments').ace_scroll({
            size: 300
        });
    })
</script>
</body>
</html>
