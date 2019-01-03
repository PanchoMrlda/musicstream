@extends('layouts.app')

@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, itaque? Perferendis modi quaerat iste repellat ipsam consequuntur, architecto, neque et nesciunt ratione illum nihil nisi officia laboriosam voluptatum in eveniet.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection