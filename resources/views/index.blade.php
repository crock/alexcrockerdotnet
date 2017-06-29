@extends('layouts.master')

@section('title', $all)

@section('header')
    @parent

@endsection

@section('content')
    <router-view></router-view>
@endsection