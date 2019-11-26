@extends('admin.public.main')
@section('cnt')

	<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i>
		首页 <span class="c-gray en">&gt;</span>
		用户中心 <span class="c-gray en">&gt;</span>
		添加用户
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	</nav>

<article class="page-container">
{{--	错误信息--}}
	@include('admin.public.msg')

	<form action="{{route('admin.role.store')}}" method="post" class="form form-horizontal" id="form-admin-add">
		@csrf
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" value="{{old('name')}}" class="input-text" name="name">
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">

			</div>
		</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="添加新角色">
		</div>
	</div>
	</form>
</article>
@endsection

