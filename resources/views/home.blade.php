@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolore earum minus animi, harum fuga temporibus qui cum reprehenderit! Maiores libero itaque commodi, enim suscipit id illum provident quisquam repellat!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection