@extends('mytemp')
@section('title','view')
@section('mainarea')
<table class="table table-hover w-100 bg-primary" border="1" >
	 <thead class="thead-dark">
	 	<tr>
		 	<th style="width:25%">Id</th>
		 	<th style="width:25%">Name</th>
		 	<th style="width:25%">Class</th>
		 	<th style="width:25%">Action</th>
	 	</tr>
	 </thead>
	 <tbody>
        @foreach($data as $dt)
	 	<tr>
	 		<td>{{$dt['id']}}</td>
	 		<td>{{$dt['name']}}</td>
	 		<td>{{$dt['class']}}</td>
	 		<td><a href="/students/update/{{$dt['id']}}" class="btn btn-warning">Edit</a> <a href="/students/delete/{{$dt['id']}}"class="btn btn-danger">Delete</a></td>
	 	</tr> 
       @endforeach
	 </tbody>
</table>
@endsection