@extends('admin.admin_master')
@section('title')
EDIT PRODUCT
@endsection
@section('main_content')
<div class="row-fluid">
<div class="span12">
    <!-- BEGIN SAMPLE FORMPORTLET-->
<div class="widget green">
    <div class="widget-title">
    <h4><i class="icon-reorder"></i> EDIT PRODUCT</h4>
    <span class="tools">
    <a href="javascript:;" class="icon-chevron-down"></a>
    <a href="javascript:;" class="icon-remove"></a>
    </span>
</div>
<div class="widget-body">
    <!-- BEGIN FORM-->
 
<form action="{{route('update-product')}}" method="post" enctype="multipart/form-data" name="editproductform" class="form-horizontal">
    @csrf
    <div class="control-group">
      <label class="control-label">product name</label>
        <div class="controls">
          <input type="text" name="product_name" value="{{$product->product_name}}" class="input-xlarge"/>
          <input type="hidden" name="id" value="{{$product->id}}" class="input-xlarge"/> 
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
            <textarea class="input-xlarge" name="product_short_description" rows="3">{{$product->product_short_description}}</textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">product long description</label>
        <div class="controls">
            <textarea class="input-xxlarge" name="product_long_description" rows="3">{{$product->product_long_description}}</textarea>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">product image</label>
        <div class="controls">
           <input type="file"  name="product_image" >
           <br/>
           <img src="{{asset($product->product_image)}}" width="150" height="150">
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
        <a href="{{route('manage-product')}}" class="btn"><i class=" icon-remove"></i> Cancel</a>
    </div>
</form>
<!-- END FORM-->
</div>
</div>
<!-- END SAMPLE FORM PORTLET-->
</div>
</div>
<script type="text/javascript">
    document.forms['editproductform'].elements['category_id'].value="{{$product->category_id}}";

</script>


@endsection