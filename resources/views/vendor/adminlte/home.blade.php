@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <section class="content" style="height: auto !important; min-height: 0px !important;">

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fas fa-cogs"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Products</span>
                        <span class="info-box-number">{{$viewData['totalProducts']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fas fa-money-check-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Revenue</span>
                        <span class="info-box-number">{{number_format($viewData['totalPrice'])}} vnđ</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">{{$viewData['totalOrders']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">{{$viewData['totalUser']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- right col -->

        <!-- /.row (main row) -->

    </section>

        <div class="col-sm-8 col-lg-8">
            <figure class="highcharts-figure">
                <div id="container2" data-day="{{$viewData['listDay']}}" data-money="{{$viewData['arrRevenueProduct']}}" data-money-default="{{$viewData['arrRevenueProductDefault']}}"</div>

            </figure>
        </div>
        <div class="col-sm-4 col-lg-4">
            <figure class="highcharts-figure">
                <div id="container" data-json="{{$viewData['statusChart']}}"></div>

            </figure>

        </div>

    {{--    </div>--}}
    <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Latest Orders</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Info</th>
                                <th>Money</th>
                                <th>Status</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $stt = 1;?>

                            @forelse($viewData['listCustomer'] as $ct)

                                <tr>
                                    @foreach($ct->orders as $o)
                                        <th class="stt" scope="row">{{ $stt }}</th>
                                        <td>{{$ct->name }}<br>
                                            {{ $ct->email }}<br>
                                            {{ $ct->address }}<br>
                                            {{ $ct->phone }}

                                        </td>
                                        <td>{{number_format($o->total)}} đ</td>

                                        <td>
                                            @if($o->status == 1)
                                                <span class="label label-primary">Tiếp nhận</span>
                                            @elseif($o->status == 2 )
                                                <span class="label label-info">Đang vận chuyện</span>
                                            @elseif($o->status == 3 )
                                                <span class="label label-success">Đã bàn giao</span>
                                            @else
                                                <span class="label label-danger">Hủy</span>
                                            @endif
                                        </td>
                                        <td>{{$ct->created_at->diffForHumans()}}</td>
                                </tr>


                                <?php $stt++;?>
                                @endforeach
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
{{--                    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>--}}
                    <a href="admin/customers" class="btn btn-sm btn-danger btn-flat pull-right">Xem tất cả đơn hàng</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Recently Added Products</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="box-body">
                    @foreach($viewData['topProducts'] as $pro)
                        <ul class="products-list product-list-in-box">


                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ asset('storage'. str_replace('public', '', $pro->image))}}"
                                         alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">{{$pro->name}}
                                        <span class="label label-success pull-right">{{$pro->price}}đ</span></a>
                                    <span class="product-description">
                          {{$pro->desc}}
                        </span>
                                </div>
                            </li>
                            <!-- /.item -->
                        </ul>
                    @endforeach
                </div>

                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="admin/products" class="uppercase">View All Products</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.col -->
        </div>
        <style>
            @import 'https://code.highcharts.com/css/highcharts.css';

            .highcharts-pie-series .highcharts-point {
                stroke: #EDE;
                stroke-width: 2px;
            }

            .highcharts-pie-series .highcharts-data-label-connector {
                stroke: silver;
                stroke-dasharray: 2, 2;
                stroke-width: 2px;
            }

            .highcharts-figure, .highcharts-data-table table {
                min-width: 320px;
                max-width: 600px;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #EBEBEB;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

            #container2 {
                height: 400px;
                width: 600px;
            }

        </style>

        @endsection

        @section('scripts'){
        <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>

        <script type="text/javascript">
            var StatusChart = document.getElementById("container").getAttribute('data-json');
            // console.log("Statuss", StatusChart);
            StatusChart = JSON.parse(StatusChart)
            Highcharts.chart('container', {

                chart: {
                    styledMode: true
                },

                title: {
                    text: 'Thống kê trạng thái đơn hàng'
                },

                xAxis: {
                    categories: StatusChart
                },

                series: [{
                    type: 'pie',
                    allowPointSelect: true,
                    keys: ['name', 'y', 'selected', 'sliced'],
                    data: StatusChart,
                    showInLegend: true
                }]
            });

            var ChartProduct = document.getElementById("container2").getAttribute('data-day');
            ChartProduct = JSON.parse(ChartProduct)
            var listMoneyMonth = document.getElementById("container2").getAttribute('data-money');
            listMoneyMonth = JSON.parse(listMoneyMonth)
            var listMoneyMonthDefault = document.getElementById("container2").getAttribute('data-money-default');
            listMoneyMonthDefault = JSON.parse(listMoneyMonthDefault)
            Highcharts.chart('container2', {
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Thống kê doanh thu tháng '
                },

                xAxis: {
                    categories: ChartProduct
                },
                yAxis: {
                    title: {
                        text: 'Temperature'
                    },
                    labels: {
                        formatter: function () {
                            return this.value + '°';
                        }
                    }
                },
                tooltip: {
                    crosshairs: true,
                    shared: true
                },
                plotOptions: {
                    spline: {
                        marker: {
                            radius: 4,
                            lineColor: '#666666',
                            lineWidth: 1
                        }
                    }
                },
                series: [{
                    name: 'Đã thanh toán',
                    marker: {
                        symbol: 'square'
                    },
                    data: listMoneyMonth

                },{
                    name: 'Đang vận chuyển',
                    marker: {
                        symbol: 'square'
                    },
                    data: listMoneyMonthDefault

                }
                ],
            });
        </script>

        }
@endsection
