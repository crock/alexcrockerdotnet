@extends('layouts.master')

@section('title', 'Blog')

@section('header')
    @parent

@endsection

@section('content')
    <router-view></router-view>
@endsection