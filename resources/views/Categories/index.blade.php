@extends('layouts.app')
@section('content')
<!-- category list content -->

<div class="col-xl-6 col-lg-6 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Category Manager</h6>
      <a class="m-0 float-right btn btn-primary btn-sm" href="{{url('addcategory')}}">Add category <i class="fas fa-plus-circle"></i></a>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>Category</th>
            <th>Tools</th>
          </tr>
        </thead>
        <tbody>
        	@foreach($categories as $category)
          <tr>
					<td>{{$category->name}}</td>
					<td>
						<!-- form rdirect to the route form deleting -->
						<form action="{{ url('deletecategory/'.$category->id) }}" method="POST">
							{{csrf_field()}}		<!-- this is to protect from injections -->
							{{ method_field('DELETE') }}
							<!-- link to the route 'edit' -->
							<a href="{{url('editcategory/'.$category->id)}}" title="edit" type="button" class="btn btn-success btn-sm edit btn-flat"><i class="far fa-edit"></i> Edit</a>
              
							<button type="submit" class="btn btn-danger btn-sm delete btn-flat"><i class="fas fa-trash-alt"></i> Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
          
        </tbody>
      </table>
    </div>
    <div class="card-footer"></div>
  </div>
</div>

<!-- ---------------------------------------------------------------------------------- -->


@endsection

