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
                    <a href="admin/customers" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                    <a href="admin/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                        <i class="fas fa-money-check-alt"></i>                    </div>
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
                    <a href="/admin/customers" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Monthly Recap Report</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-wrench"></i></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                            </p>

                            <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" style="height: 180px; width: 816px;" height="225" width="1020"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Goal Completion</strong>
                            </p>

                            <div class="progress-group">
                                <span class="progress-text">Add Products to Cart</span>
                                <span class="progress-number"><b>160</b>/200</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Complete Purchase</span>
                                <span class="progress-number"><b>310</b>/400</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Visit Premium Page</span>
                                <span class="progress-number"><b>480</b>/800</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Send Inquiries</span>
                                <span class="progress-number"><b>250</b>/500</span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                <h5 class="description-header">$35,210.43</h5>
                                <span class="description-text">TOTAL REVENUE</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                <h5 class="description-header">$10,390.90</h5>
                                <span class="description-text">TOTAL COST</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                <h5 class="description-header">$24,813.53</h5>
                                <span class="description-text">TOTAL PROFIT</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block">
                                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-8">
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    This chart shows how symbols and shapes can be used in charts.
                    Highcharts includes several common symbol shapes, such as squares,
                    circles and triangles, but it is also possible to add your own
                    custom symbols. In this chart, custom weather symbols are used on
                    data points to highlight that certain temperatures are warm while
                    others are cold.
                </p>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    Charts can be styled using CSS, such as this example overriding
                    the default styles for a pie chart. This can be done without the
                    use of Javascript, allowing designers and developers to better
                    collaborate on chart design.
                </p>
            </figure>
        </div>
    </div>
   <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
            <!-- MAP & BOX PANE -->

            <!-- /.card -->
            <div class="row">
                <div class="col-md-6">
                    <!-- DIRECT CHAT -->

                    <!--/.direct-chat -->
                </div>
                <!-- /.col -->


                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Danh sách đơn hàng mới nhất</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
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
                            {{--        @if() @endif--}}
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

                            <a href="admin/customers" class="btn btn-xs btn-info">Danh sách đơn hàng</a>
                            </tbody>

                        </table>
                    </div>

                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
            <div class="card">

            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top sản phẩm xem nhiều</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        @foreach($viewData['topProducts'] as $pro)
                        <li class="item">
                            <div class="product-img">
                                <img  width="100px" src="{{ asset('storage'. str_replace('public', '', $pro->image))}}" alt="Product Image" class="">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title" style="text-decoration: none"><i class="fa fa-eye"></i> {{$pro->quantity}} lượt xem
                                    <span class="badge badge-warning float-right">{{number_format($pro->price)}}</span></a>
                                <span class="product-description">
                       {{$pro->name}}
                      </span>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="admin/products" class="uppercase" style=" text-decoration: none !important;" >View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
       <style>
           .highcharts-figure, .highcharts-data-table table {
               min-width: 310px;
               max-width: 800px;
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

       </style>

@endsection

       @section('scripts'){

       <script type="text/javascript">

           Highcharts.chart('container', {
               chart: {
                   type: 'spline'
               },
               title: {
                   text: 'Monthly Average Temperature'
               },
               subtitle: {
                   text: 'Source: WorldClimate.com'
               },
               xAxis: {
                   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                       'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
                   name: 'Tokyo',
                   marker: {
                       symbol: 'square'
                   },
                   data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
                       y: 26.5,
                       marker: {
                           symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                       }
                   }, 23.3, 18.3, 13.9, 9.6]

               }, {
                   name: 'London',
                   marker: {
                       symbol: 'diamond'
                   },
                   data: [{
                       y: 3.9,
                       marker: {
                           symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
                       }
                   }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
               }]
           });

       </script>
       <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css">
       <script src="https://code.highcharts.com/highcharts.js"></script>
       <script src="https://code.highcharts.com/modules/series-label.js"></script>
       <script src="https://code.highcharts.com/modules/exporting.js"></script>
       <script src="https://code.highcharts.com/modules/export-data.js"></script>
       }
@endsection
