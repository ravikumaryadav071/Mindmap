@extends('layouts.base')

@section('css')
<link href="{{ asset('css/our_clients.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-12">
  <div class="row article background-teal text-white">
    @foreach($data as $logo)
    <div class="col-md-3 col-sm-4 logo-container">
      <div class="logo shadow-right">
        <img src="{{ asset($logo->image) }}">
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
