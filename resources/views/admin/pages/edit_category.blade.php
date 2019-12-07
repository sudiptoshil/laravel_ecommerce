@extends('admin.admin_master')
@section('title')
EDIT CATEGORY
@endsection
@section('main_content')
 <div class="row-fluid">
    <div class="span12">
<!-- BEGIN SAMPLE FORMPORTLET-->
<div class="widget green">
<div class="widget-title">
<h4><i class="icon-reorder"></i>EDIT CATEGORY</h4>
<span class="tools">
<a href="javascript:;" class="icon-chevron-down"></a>
<a href="javascript:;" class="icon-remove"></a>
</span>
</div>
<div class="widget-body">
<!-- BEGIN FORM-->

<form action="{{route('update-category')}}" method="post" class="form-horizontal">
    @csrf

    <div class="control-group">
        <label class="control-label">category name</label>
        <div class="controls">
            <input type="text" name="category_name" value="{{$category->category_name}}" placeholder="type your category name" class="input-large" />
            <input type="hidden" name="id" value="{{$category->id}}"  class="input-large" />
        </div>
    </div>

     <div class="control-group">
    <label class="control-label">publication status</label>
    <div class="controls">
        <select class="input-small m-wrap" name="publication_status" tabindex="1">
            
            <option value="1">published</option>
            
            <option value="0">unpublished</option>

        </select>
    </div>
</div>
    

   <!--  <div class="control-group">
        <label class="control-label" >publication status</label>
        <div class="controls" name="publication_status">
            <label class="radio">
               <input type="radio"  value="1" checked />
               published
            </label>
            <label class="radio">
                <input type="radio" value="0"  />
               unpublished
            </label>
        </div>
    </div> -->
    
    <div class="form-actions">
        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
        <button type="reset" class="btn"><i class=" icon-remove"></i> Cancel</button>
    </div>
</form>
<!-- END FORM-->
</div>
</div>
<!-- END SAMPLE FORM PORTLET-->
</div>
</div>
@endsection
