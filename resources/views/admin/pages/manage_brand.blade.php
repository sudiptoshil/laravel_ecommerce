@extends('admin.admin_master')
@section('title')
manage brand
@endsection
@section('main_content')
 <div class="row-fluid">
<div class="span12">
<!-- BEGIN BASIC PORTLET-->
<div class="widget orange">
<div class="widget-title">

    <h4><i class="icon-reorder"></i> manage brand</h4>
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
            <th><i>brand name</i></th>
            <!-- <th class="hidden-phone"><i class="icon-question-sign"></i>category publication status</th> -->
            <!-- <th><i class="icon-bookmark"></i> Profit</th> -->
            <th><i>brand publication status</i></th>
            <th><b><i>action</i></b></th>
            <th></th>
        </tr>
        </thead>
        
        <tbody>

        @foreach($brand as $v_brand)
        <tr>
            <td>{{$v_brand->brand_name}}</td>
            <!-- <td class="hidden-phone">Lorem Ipsum dorolo imit</td> -->
            <!-- <td>12120.00$ </td> -->
            @if($v_brand->publication_status==1)
            <td><span class="label label-important label-mini">published</span></td>
            @else
            <td><span class="label label-danger label-mini">unpublished</span></td>
            @endif
            <td>
                
                <a href="{{route('edit-brand',['id'=>$v_brand->id])}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                <a href="{{route('delete-brand',['id'=>$v_brand->id])}}" class="btn btn-danger"><i class="icon-trash "></i></a>
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
