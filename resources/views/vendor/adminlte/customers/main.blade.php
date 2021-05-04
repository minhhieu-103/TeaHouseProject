@extends('adminlte::layouts.app')
@section('main-content')
    @include('flash-message')
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
                            <a class="changeurl" href="{{URL::to('/admin/customers')}}"><span>Customer</span></a>
                            {{--                        <span class="mr_lr">&nbsp;/&nbsp;</span>--}}
                        </li>
                        {{--                    <li><strong><span>Trà Phúc bồn tử</span></strong></li>--}}
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="add" style="padding: 12px">
        <button class="btn btn-success" title="add news"><a href="{{URL::to('/admin/customers/create')}}"><i
                    class="fas fa-plus"></i> Add Products</a></button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Info</th>
            <th scope="col">Money</th>
            <th scope="col">Status</th>
            <th scope="col">Time</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        {{--        @if() @endif--}}
        <?php  $stt = 1;?>

        @forelse($customers as $ct)

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
                    <td>

                        {{--                <td>{{number_format($orderDetail->total)}}</td>--}}

                        <button class="btn  btn-info js-preview"><a
                                href="{{ route('admin.customers.show', ['id' => $ct->id]) }}"
                                style="color: white;text-decoration: none"><i class="fas fa-eye"
                                                                              style="color: white"></i> View</a>
                        </button>
                        {{--                    <button class="btn btn-info"><a href="{{ route('admin.customers.show', ['id' => $ct->id]) }}"><i class="fas fa-eye" style="color: white"></i></a></button>--}}
                        <form class="btn" action="{{ route('admin.customers.destroy', ['id' => $ct->id]) }}"
                              method="post">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt" style="color: white"> Xóa</i>
                            </button>
                        </form>
                        <form name="frmSearch" id="addsubmit"
                              action="{{URL::to('customers/action' ,['id' => $o->id])}}" method="get">

                            <select name="status" id="changer" class="input-sm select2 changer">
                                <option value="0" hidden>Chọn trạng thái</option>
                                @foreach($inventory as $key => $val)
                                    <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </select>
                        </form>
                    </td>


            </tr>
            <?php $stt++;?>
            @endforeach
        @empty
        @endforelse


        </tbody>

    </table>
    <div class="section pagenav">
        <nav class="nav_pagi">
            {!! $customers->render() !!}
        </nav>
    </div>
    <style>
        form {
            float: left;
            margin-right: 6px;
        }

    </style>


@endsection

