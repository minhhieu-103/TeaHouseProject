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
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                    </li>
                    <li><strong><span>Edit</span></strong></li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="add"style="padding: 12px">
    <button class="btn btn-warning" title="add news"><a href="{{URL::to('/admin/category')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></button>
</div>
<h1>{{ (session('message') ? session('message') : " ") }}</h1>
<div class="error">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<form method="post" action="{{ route('admin.category.update', ['id' => $category->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1 ">Name</label>
        <input type="text" value="{{$category->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
    </div>
    <button type="submit" class="btn btn-primary margin-left-3px">Update</button>
</form>
@endsection
