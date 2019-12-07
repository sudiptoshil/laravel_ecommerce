@extends('admin.admin_master')
@section('title')
manage product
@endsection
@section('main_content')
 <div class="row-fluid">
<div class="span12">
<!-- BEGIN BASIC PORTLET-->
<div class="widget orange">
<div class="widget-title">
<h4><i class="icon-reorder"></i> Advanced Table</h4>
<span class="tools">
<a href="javascript:;" class="icon-chevron-down"></a>
<a href="javascript:;" class="icon-remove"></a>
</span>
</div>
<h2 style="color:green" align="center">{{Session::get('message')}}</h2> 
<div class="widget-body">
<table class="table table-striped table-bordered table-advance table-hover">
<thead>
<tr>
<th><i class="icon-bullhorn"></i> product name</th>
<th class="hidden-phone"><i class="icon-question-sign"></i> category name</th>
<th><i class="icon-bookmark"></i> brand name</th>
<th><i class="icon-bookmark"></i> product image</th>
<th><i class=" icon-edit"></i> Status</th>
<th></th>
</tr>
</thead>
<tbody>
    @foreach($product as $V_product)
<tr>
<td>{{$V_product->product_name}}</td>
<td class="hidden-phone">{{$V_product->category_name}}</td>
<td>{{$V_product->brand_name}}</td>
<td><img src="{{asset($V_product->product_image)}}" width="100px" height="80px"></td>
@if($V_product->publication_status == 1)
<td><span class="label label-important label-mini">published</span></td>
<td>
    @else
    <td><span class="label label-important label-mini">unpublished</span></td>
<td>
    @endif

    
    <a href="{{route('edit-product',['id' =>$V_product->id])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
    <a href="{{route('delete-product',['id' =>$V_product->id])}}" class="btn btn-danger"><i class="icon-trash "></i></a>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
<!-- END BASIC PORTLET-->
</div>
</div>

@endsection
