@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <section class="content-header">
        <h1> Trang chủ
            <small>Bảng điều khiển</small>
            <small></small></h1>
    </section>
    <section class="content" style="height: auto !important; min-height: 0px !important;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php ?>
                        <h3>{{$viewData['totalUser']}}</h3>

                        <p>Người dùng</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <a href="admin/customers" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{$viewData['totalProducts']}}</h3>

                        <p>Tổng sản phẩm</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <a href="admin/products" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$viewData['totalOrders']}}</h3>

                        <p>Số lượng mua</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-check-alt"></i></div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{number_format($viewData['totalPrice'])}} vnđ</h3>

                        <p>Tổng doanh thu tạm tính</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <a href="/admin/customers" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- right col -->

        <!-- /.row (main row) -->

    </section>

    <div class="row">
        <div class="col-sm-8">
            <figure class="highcharts-figure">
                <div id="container2" data-day="{{$viewData['listDay']}}"></div>

            </figure>
        </div>
        <div class="col-sm-4">
            <figure class="highcharts-figure">
                <div id="container" data-json="{{$viewData['statusChart']}}"></div>

            </figure>

        </div>
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
                                        <td>{{$ct->created_at}}</td>
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
                    <a href="javascript:void(0)" class="btn btn-sm btn-danger btn-flat pull-right">Xem tất cả đơn hàng</a>
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
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
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
                    name: 'Tiếp Cận',
                    marker: {
                        symbol: 'square'
                    },
                    data: [7.0, 6.9, 9.5, 14., 4, 4, {
                        y: 26.5,
                        marker: {
                            symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                        }
                    }, 23.3, 18.3, 13.9, 9.6]

                }, {
                    name: 'Vận Chuyển',
                    marker: {
                        symbol: 'square'
                    },
                    data: [7.0, 6.9, 9.5, 14., 4, 55.34, 5, 4, 9, 9, 99, {
                        y: 26.5,
                        marker: {
                            symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                        }
                    }, 23.3, 18.3, 13.9, 9.6]

                },
                    {
                        name: 'Hủy',
                        marker: {
                            symbol: 'square'
                        },
                        data: [0, 3, 9.5, 14., 4, 23.34, 5, 4, {
                            y: 26.5,
                            marker: {
                                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                            }
                        }, 23.3, 18.3, 13.9, 9.6]

                    },
                    {
                        name: 'Đã hoàn thành',
                        marker: {
                            symbol: 'square'
                        },
                        data: [0, 3, 9.5, 14., 4, 23.34, 5, 4, 65.4, 44, 4, {
                            y: 26.5,
                            marker: {
                                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                            }
                        }, 23.3, 18.3, 13.9, 9.6]

                    }],
            });
        </script>

        }
@endsection
