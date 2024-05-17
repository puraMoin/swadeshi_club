@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container-fluid">
		 <!-- BreathCrum -->
     @include('partials.breadcrumb')
     <!-- ========== Middle Content-wrapper start ========== -->    
     <!-- Add New Button -->
     <div class="right-mob-left">
        <!-- <button type="button" class="main-btn primary-btn-outline btn-hover btn-xs">Import</button>  -->
      </div>
	</div>
   <div class="container-fluid">
      <div class="card-style mt-20">
         <!-- <div class="create_update">Last updated: <span>Andria Dsouza On 09/05/2023</span></div> -->
         <!-- Search Panel -->
         <div class="row"></div>
         <div class="table-wrapper table-responsive mt-10">
            <table class="table striped-table">
               <thead>
               <tr>
                  <th><h6>User</h6></th>
                  <th><h6>Product</h6></th>
                  <th class="text-center"><h6>Action</h6></th> 
               </tr>
               </thead>
               <tbody>

                @foreach ($wishlists as $wishlist) 
                <tr>
                  <td><p> {{ $wishlist->users->name }} </p></td>
                  <td><p> {{ $wishlist->products->name }} </p></td>
                  <td class="text-center">
                  <a href="{{ route('wishlists.show',$wishlist->id) }}"><i class="lni lni-list"></i></a>
                  </td>

                 </tr> 
                 @endforeach
               </tbody> 
            </table>
         </div>
      </div>
   </div>
</section>	
@endsection