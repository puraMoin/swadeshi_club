@extends('layouts.app')

@section('content')

<section class="section">
	<div class="container-fluid">
		 <!-- BreathCrum -->
     @include('partials.breadcrumb')
     <!-- ========== Middle Content-wrapper start ========== -->    
     <!-- Add New Button -->

    <!-- For Start Here -->
   <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">  
  <div class="card-style mt-20">
      <!-- <div class="create_update">Created: <span>Andria Dsouza On 09/05/2023</span>   |   Last updated: <span>Andria Dsouza On 09/05/2023</span></div> -->
      <!-- Form Start Here -->
       @method('PUT')
       @csrf
      <div class="row mt-15">
          <!-- Id -->  
         <input type="hidden" name="id" value="{{ $product->id }}"  />

         <div class="row mt-15">
        <!-- Name -->
        <div class="col-sm-4">
            <div class="input-style-1">
            <label>Name<span class="mandatory">*</span></label>
            <input type="text"  name="name" placeholder="Name" value="{{ $product->name }}" required="true" />
            </div>   
         </div>
         <!-- Product Code -->
        <div class="col-sm-4">
            <div class="input-style-1">
            <label>Product Code<span class="mandatory">*</span></label>
            <input type="text"  name="product_code" placeholder="Product Code" value="{{ $product->product_code }}" required="true" />
            </div>   
         </div>
         <!-- Category Name -->
         <div class="col-sm-4">
            <div class="select-style-1">
               <label>Category</label>
               <div class="select-position select-sm">
               <select class="jSelectbox" id="actionDropdown" name="category_id">
                  <option value="{{ $category->name }}">{{ $category->name }}</option> 
                  @foreach ($categories as $categories)
                     <option value="{{ $categories->name }}">{{ $categories->name }}</option>
                  @endforeach
               </select>
               </div>
            </div>
         </div>
          <!-- Sub Category Name -->
         <div class="col-sm-4">
            <div class="select-style-1">
               <label>SubCategory</label>
               <div class="select-position select-sm">
               <select class="jSelectbox" id="actionDropdown" name="sub_category_id">
                  <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option> 
                  @foreach ($subcategories as $subcategories)
                     <option value="{{ $subcategories->name }}">{{ $subcategories->name }}</option>
                  @endforeach
               </select>
               </div>
            </div>
         </div>
         <!--Product Type -->
         <div class="col-sm-4">
         <div class="select-style-1">
               <label>Product Type</label>
               <div class="select-position select-sm">
               <select class="jSelectbox" id="actionDropdown" name="product_type_id" required>
                  <option value="{{ $producttype->name }}">{{ $producttype->name }}</option>  
                      @foreach ($producttypes as $producttypes)
                     <option value="{{ $producttypes->name }}">{{ $producttypes->name }}</option>
                      @endforeach
               </select>
               </div>
            </div>
         </div>
          <!--Brand -->
         <div class="col-sm-4">
         <div class="select-style-1">
               <label>Brand</label>
               <div class="select-position select-sm">
               <select class="jSelectbox" id="actionDropdown" name="brand_id" required>
                  <option value="{{ $brand->name }}">{{ $brand->name }}</option>  
                      @foreach ($brands as $brand)
                     <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                      @endforeach
               </select>
               </div>
            </div>
         </div>
      </div>  
      <hr>

       <div class="row mt-15">
       <div class="col-sm-4">
            <div class="input-style-1">
            <label>Page Title</label>
            <input type="text"  name="page_title" placeholder="Page Title" value="{{ $product->page_title }}" />
            </div>   
         </div>
         <div class="col-sm-4">
            <div class="input-style-1">
            <label>Page Slug <span class="mandatory">*</span></label>
            <input type="text"  name="page_slug" placeholder="Page Slug" value="{{ $product->page_slug }}"   required/>
            </div>   
         </div>
         <div class="col-sm-4">
            <div class="input-style-1">
            <label>Canonical Url</label>
            <input type="url"  name="canonical_url" placeholder="Page URL" value="{{ $product->canonical_url }}"  readonly/>
            </div>   
         </div>
      </div> 
      <hr> 
      <!-- Description -->
      <div class="row mt-15">
        <div class="col-sm-12">
            <div class="input-style-1">
               <label>Description <span class="mandatory">*</span></label>
               <textarea name="description" rows="3" class="rich-editor">{{ $product->description }}</textarea>
            </div>   
         </div>
     </div>
     <hr>
    <!-- Specification -->
     <div class="row mt-15">
        <div class="col-sm-12">
            <div class="input-style-1">
               <label>Specification <span class="mandatory">*</span></label>
               <textarea name="spefication" rows="3">{{ $product->spefication }}</textarea>
            </div>   
         </div>
     </div>
     <hr>

     <div class="row mt-15">

<!-- Apply Tax --> 
<div class="col-sm-3">
     <label>Apply Tax</label><br> 
     <label class="radio-inline">
     <input type="radio" name="apply_tax" class="radio-inline" value="1" {{ $producttype->apply_tax == 1 ? 'checked' : '' }}> Yes
     </label>
     <label class="radio-inline">
     <input type="radio" name="apply_tax" class="radio-inline" value="0" {{ $producttype->apply_tax == 0 ? 'checked' : '' }}> No
     </label>
</div>

<div class="col-sm-3">
     <label>In Stock</label><br> 
     <label class="radio-inline">
     <input type="radio" name="in_stock" class="radio-inline" value="1" {{ $producttype->in_stock == 1 ? 'checked' : '' }}> Yes
     </label>
     <label class="radio-inline">
     <input type="radio" name="in_stock" class="radio-inline" value="0" {{ $producttype->in_stock == 0 ? 'checked' : '' }}> No
     </label>
</div>

<div class="col-sm-3">
     <label>Is Offer Applicable</label><br> 
     <label class="radio-inline">
     <input type="radio" name="is_offer_applicable" class="radio-inline" value="1" {{ $producttype->is_offer_applicable == 1 ? 'checked' : '' }}> Yes
     </label>
     <label class="radio-inline">
     <input type="radio" name="is_offer_applicable" class="radio-inline" value="0" {{ $producttype->is_offer_applicable == 0 ? 'checked' : '' }}> No
     </label>
</div>

<!-- Display Code --> 
<div class="col-sm-3">
     <label>DispHome*</label><br> 
     <label class="radio-inline">
     <input type="radio" name="display_home_page" class="radio-inline" value="1" {{ $producttype->display_home_page == 1 ? 'checked' : '' }}> Yes
     </label>
     <label class="radio-inline">
     <input type="radio" name="display_home_page" class="radio-inline" value="0" {{ $producttype->display_home_page == 0 ? 'checked' : '' }}> No
     </label>
</div>
</div>
<hr>
    <div class="row mt-15">
            <!-- Active Code --> 
            <div class="col-sm-3">
                  <label>Active</label><br> 
                  <label class="radio-inline">
                  <input type="radio" name="active" class="radio-inline" value="1" {{ $producttype->active == 1 ? 'checked' : '' }}> Yes
                  </label>
                  <label class="radio-inline">
                  <input type="radio" name="active" class="radio-inline" value="0" {{ $producttype->active == 0 ? 'checked' : '' }}> No
                  </label>
            </div>

            <div class="col-sm-4">
               <div class="input-style-1">
               <label>Price</label>
               <input type="text"  name="price" value="{{ $product->price }}" placeholder="Price"/>
               </div>   
            </div>

            <div class="col-sm-4">
               <div class="input-style-1">
               <label>Tax Value</label>
               <input type="text"  name="tax_value" value="{{ $product->tax_value }}" placeholder="Tax Value"/>
               </div>   
            </div>
         </div>
         <hr>
     <div class="row mt-15">
         <div class="col-sm-4">
            <div class="input-style-1">
            <label>Meta Title <span class="mandatory">*</span></label>
            <input type="text"  name="meta_title" placeholder="Meta Title" value="{{ $product->meta_title }}"/>
            </div>   
         </div>
        <div class="col-sm-8">
           <div class="input-style-1">
               <label>Meta Description</label>
               <!-- <input type="text"  name="header_text" placeholder="Header Text" /> -->
               <textarea name="meta_description" rows="10">{{ $product->meta_description }}</textarea>
            </div>  
        </div>
     </div>
     <hr>
     <!--  Image -->
     <div class="row mt-15">            
        <div class="col-sm-4">
         <label>Image</label>
          <div id="imageBox">
         <img id="selectedImage" src="{{ $product->image_file ? asset('images/product/image_file/' . $product->id . '/' . $product->image_file) : asset('images/no-iblogmage.png') }}" alt="Selected Image">
         </div>
         <input type="file" name="image_file" id="image" onchange="displayImage(this)" > 
          <span id="iconImage">{{ $product->image_file }}</span>
        </div>
      </div> 
     <hr>
      <div class="row mt-15">
       <div class="col-sm-3">  
        <button type="submit" class="main-btn primary-btn btn-hover btn-sm">Save</button>
        <button type="reset" class="main-btn primary-btn-outline btn-hover btn-sm">Reset</button>
        </div>
      </div>  

	</div>
</form>
</section>	
@endsection



