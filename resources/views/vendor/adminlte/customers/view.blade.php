@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Customer Detail
@endsection

@section('main-content')
    <section class="bread-crumb">
        <span class="crumb-border">
        </span>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="{{URL::to('/admin')}}"><span>Admin</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li>
                            <a class="changeurl" href="{{URL::to('/admin/customers')}}"><span>CÁC SẢN PHẨM CỦA </span></a>

                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="add"style="padding: 12px">
        <button class="btn btn-warning" title="add news"><a href="{{URL::to('/admin/customers')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></button>
        {{--        <button class="btn btn-primary"><a href="{{route('product.edit',['id'=>$pr->id])}}"><i class="fas fa-pencil-alt " style="color: white"></i></a>Edit</button>--}}
        {{--        <button class="btn btn-danger"><a href="{{ route('product.destroy', ['id' => $pr->id]) }}"><i class="fas fa-trash-alt" style="color: white"></i></a>Delete</button>--}}

    </div>
    <section class="content">
        <div class="box-body table-responsive no-padding">
            <table class="table table-striped custab">
                <thead>
{{--                <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>--}}
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>

                    <th>Ngày đặt</th>
{{--                    <th class="text-center">Action</th>--}}
                </tr>
                </thead>
                <tr>
                    <?php  $stt = 1;?>


                    @foreach($products as $item)
                        <?php $detail= \App\Model\OrderDetail::where('product_id', $item->id)->first();

                            ?>
                    <td>{{$stt}}</td>
                    <td>{{$item->name}}</td>
                     <td><img  width="100"  src="{{ asset('storage'. str_replace('public', '', $item->image))}}"></td>
                            <td>{{number_format($detail ->price)}} đ</td>


                        <td>{{$detail->quantity}}</td>

                    <td>{{$detail ->created_at}}</td>
{{--                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>--}}
                </tr>
                <?php $stt++;?>
                @endforeach
                    <tr>
                        <th colspan="5">
                            Tổng giá
                        </th>
                        <td class="text-center text-danger">
                            {{number_format($orderDetail->total)}} đ
                        </td>

                    </tr>
            </table>
{{--                <div class="payment" style="text-align: right">--}}
{{--                       tr--}}

{{--                </div>--}}
        </div>
    </section>
@endsection
