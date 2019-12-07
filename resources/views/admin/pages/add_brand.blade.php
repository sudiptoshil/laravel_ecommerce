@extends('admin.admin_master')
@section('title')
ADD BRAND
@endsection
@section('main_content')
 <div class="row-fluid">
    <div class="span12">
<!-- BEGIN SAMPLE FORMPORTLET-->
<div class="widget green">
<div class="widget-title">
<h4><i class="icon-reorder"></i>ADD BRAND</h4>
<span class="tools">
<a href="javascript:;" class="icon-chevron-down"></a>
<a href="javascript:;" class="icon-remove"></a>
</span>
</div>
<div class="widget-body">
<!-- BEGIN FORM-->
<h2 style="color:green">{{Session::get('message')}}</h2> 
<form action="{{route('save-brand')}}" method="post" class="form-horizontal">
    @csrf
    <div class="control-group">
        <label class="control-label">brand name</label>
        <div class="controls">
            <input type="text"  name='brand_name' placeholder="" class="input-large" />
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
