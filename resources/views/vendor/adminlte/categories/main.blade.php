@extends('adminlte::layouts.app')
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
                            <a class="changeurl" href="{{URL::to('/admin/category')}}"><span>Category</span></a>
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
{{--    <div class="add"style="padding: 12px">--}}
{{--        <button class="btn btn-success" title="add news"><a  class="create" href=""><i class="fas fa-plus"></i> Add Category</a></button>--}}
{{--    </div>--}}
    <table class="table">
        <a href="{{URL::to('/admin/category/create')}}" class="btn btn-success pull-right"><b>+</b> Add new categories</a>


        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        @forelse($categories as $c)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a>{{$c->name }}</a></td>
                <td>
                    {{--                    <button class="btn btn-info"><a href="{{ route('category.show', ['id' => $c->id]) }}"><i class="fas fa-eye" style="color: white"></i></a></button>--}}
                    <button class="btn btn-primary"><a href="{{route('admin.category.edit',['id'=>$c->id])}}"><i class="fas fa-pencil-alt " style="color: white"></i></a></button>
                    <form  class="btn" action="{{ route('admin.category.destroy', ['id' => $c->id]) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            <i class="fas fa-trash-alt" style="color: white"></i>
                        </button>
                    </form>

                </td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>

@endsection
