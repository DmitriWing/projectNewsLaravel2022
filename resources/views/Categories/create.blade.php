@extends('layouts.app')
@section('content')

<div class="col-xl-6 col-lg-6 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Category Manager - ADD</h6>
      <a href="categorylist" class="btn btn-primary btn-icon-split">
				<span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
        <span class="text">Back to categories</span>
      </a>
    </div>

    <!-- <div class="table-responsive"> -->
    	<!-- display validations errors -->
    	@include('common.errors')
		<div class="card h-100">
      <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
      </div> -->
      <div class="card-body">
        <form action="{{url('addcategory')}}" method="POST">
        	{{csrf_field()}}
		      <input class="form-control  mb-3" type="text" name="name" placeholder="Category name">

		      <!-- <button type="submit" class="btn btn-primary">
		      	<span class="icon text-white-50">
		      		<i class="fas fa-check"></i>
	      		</span><span class="text">Add category</span></button> -->

		    	<button class="btn btn-success btn-icon-split" type="submit">
			      <span class="icon text-white-50"><i class="fas fa-check"></i></span>
			      <span class="text">Add category</span>
			    </button>
        </form>
      </div>
    </div>

    <!-- </div> -->

    <!-- <div class="card-footer"></div> -->
  </div>
</div>

@endsection

