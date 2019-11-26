@extends('admin.public.main')
@section('cnt')
<title>管理员列表</title>

<nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i>
	首页 <span class="c-gray en">&gt;</span>
	角色管理 <span class="c-gray en">&gt;</span>
	角色列表
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
		<i class="Hui-iconfont">&#xe68f;</i>
	</a>
</nav>

<div class="page-container">
	<form>
		<div class="text-c">
			<input value="{{request()->get('kw')}}" type="text" class="input-text" style="width:250px" placeholder="请输入角色名或ID" name="kw">
			<button type="submit" class="btn btn-success" id="" name="">
				<i class="Hui-iconfont">&#xe665;</i> 搜索
			</button>
		</div>
	</form>
	@include('admin.public.msg')
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="{{route('admin.node.create')}}" class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 添加权限
			</a>
		</span>
	</div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">角色列表</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th width="150">节点名称</th>
				<th width="150">路由别名</th>
				<th width="150">是否菜单</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data as $item)
			<tr class="text-c">
				<td>{{$item->id}}</td>
				<td>{{$item->name}}</td>
				<td>{{$item->route_name}}</td>
				<td>{{$item->is_menu}}</td>
				<td class="tb-manage">
					<a href="##" class="label label-secondary radius">修改</a>
					<a data-href="##" class="label label-danger deluser">删除</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection
@section('js')
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
<script>

</script>
@endsection


