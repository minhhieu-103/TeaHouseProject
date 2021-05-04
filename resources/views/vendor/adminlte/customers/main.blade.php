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


    <div class="add"style="padding: 12px">
        <button class="btn btn-success" title="add news"><a href="{{URL::to('/admin/customers/create')}}"><i class="fas fa-plus"></i> Add Products</a></button>
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
                @foreach($ct->orders as $c)
                <th class="stt" scope="row">{{ $stt }}</th>
                <td>{{$ct->name }}<br>
                        {{ $ct->email }}<br>
                        {{ $ct->address }}<br>
                        {{ $ct->phone }}

                </td>

                <td>{{number_format($c->total)}} đ</td>

                <td><span class="label label-default" style="text-transform: uppercase">
                        {{$c->status}}
                    </span></td>
                <td>{{$ct->created_at}}</td>
                <td>

{{--                <td>{{number_format($orderDetail->total)}}</td>--}}

                    <button class="btn  btn-info js-preview"><a href="{{ route('admin.customers.show', ['id' => $ct->id]) }}" style="color: white;text-decoration: none"><i class="fas fa-eye" style="color: white"></i> View</a></button>
{{--                    <button class="btn btn-info"><a href="{{ route('admin.customers.show', ['id' => $ct->id]) }}"><i class="fas fa-eye" style="color: white"></i></a></button>--}}
                    <form class="btn" action="{{ route('admin.customers.destroy', ['id' => $ct->id]) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            <i class="fas fa-trash-alt" style="color: white"> Xóa</i>
                        </button>
                    </form>
                    <form name="frmSearch" id="addsubmit" action="{{route('admin.customers.update' ,['id' => $ct->id])}}" method="put" >
                        @csrf
                        <select name="level" id="changer" class="input-sm select2" >
                            @foreach($inventory as $key => $val)
                                <option {{\Request::get('get') == $key ? "selected" : ""}} value="{{ $key }}">{{ __('trạng thái') }} - {{ $val }}</option>
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

