@extends('layouts.app')

@section('content')


        @include('users.tabs',['users'=>$user])
        
        @include('users.users',['users'=>$users])
        
@endsection