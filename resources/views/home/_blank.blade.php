@extends('layouts.frontbase')

@section('title','About Us | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))



@section('content')


@endsection
