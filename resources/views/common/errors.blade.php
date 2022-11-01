@if(count($errors)>0)
<!-- list of errors ion form -->
<div class="alert alert-danger"><strong>Oooops!!! Something went wrong</strong>
	<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif