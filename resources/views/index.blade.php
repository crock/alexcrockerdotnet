@extends('layouts.master')

@section('title', 'home')

@section('header')
    @parent

@endsection

@section('content')
    <router-view></router-view>
@endsection