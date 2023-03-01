@extends('mytemp')
@section('title','update')
@section('mainarea')
    <h1>Add Students</h1>
    <form method="POST" action="/students/update">
    	@csrf()
    	 <input type="text" name="id" value="{{$data['id']}}" hidden><br>
         Name:<input type="text" name="name" value="{{$data['name']}}"><br>
    	 Class:<input type="text" name="class" value="{{$data['class']}}"><br><br>
    	 <input type="submit" name="submit" value="Sumbit"><br>
    </form>
@endsection