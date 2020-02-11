@extends('admin.admin_master')
@section('title')
ADD PRODUCT
@endsection
@section('main_content')
<div class="row-fluid">
<div class="span12">
    <!-- BEGIN SAMPLE FORMPORTLET-->
<div class="widget green">
    <div class="widget-title">
    <h4><i class="icon-reorder"></i> Form Layouts</h4>
    <span class="tools">
    <a href="javascript:;" class="icon-chevron-down"></a>
    <a href="javascript:;" class="icon-remove"></a>
    </span>
</div>
<div class="widget-body">
    <!-- BEGIN FORM-->
  <h2 style="color:green">{{Session::get('message')}}</h2> 
<form action="{{route('save-product')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <div class="control-group">
      <label class="control-label">product name</label>
        <div class="controls">
          <input type="text" name="product_name" placeholder="" class="input-xlarge" /> 
        </div>
    </div>

    <div class="control-group">
    <label class="control-label">category name</label>
    <div class="controls">
        <select class="input-large m-wrap" name='category_id' tabindex="1">
            @foreach($categories as $v_categories)
            <option value="{{$v_categories->id}}"  >{{$v_categories->category_name}}</option>
            @endforeach
        </select>
    </div>
   </div>

	<div class="control-group">
	    <label class="control-label">brand name</label>
	    <div class="controls">
	        <select class="input-large m-wrap" name='brand_id' tabindex="1">
                @foreach($brands as $v_brand)
            <option value="{{$v_brand->id}}">{{$v_brand->brand_name}}</option>
                @endforeach
	        </select>
	    </div>
	</div>
    
    <div class="control-group">
        <label class="control-label">product short description</label>
        <div class="controls">
            <textarea class="input-xlarge" name="product_short_description" rows="3"></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">product price</label>
        <div class="controls">
            <textarea class="input-xlarge" name="product_price" rows="3"></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">product long description</label>
        <div class="controls">
            <textarea class="input-xxlarge" name="product_long_description" rows="3"></textarea>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">product image</label>
        <div class="controls">
           <input type="file"  name="product_image" >
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