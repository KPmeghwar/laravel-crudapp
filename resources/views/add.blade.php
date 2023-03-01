@extends('mytemp')
@section('title','add')
@section('mainarea')
    <h1>Add Students</h1>
    <form method="POST" action="/students/add">
    	@csrf()
    	 Name:<input type="text" name="name" placeholder="Enter Name"><br>
    	 Class:<input type="text" name="class" placeholder="Enter Class"><br><br>
    	 <input type="submit" name="submit" value="Sumbit"><br>
    </form>
@endsection