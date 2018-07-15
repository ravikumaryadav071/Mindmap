@extends('layouts.base')

@section('css')
<link href="{{ asset('css/our_team.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-12">
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <img src="{{ asset($data[0]->image) }}">
      <p>{{ $data[0]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink zero-padding">
      <img src="{{ asset($data[0]->image) }}">
      <p>{{ $data[0]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[0]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <img src="{{ asset($data[1]->image) }}">
      <p>{{ $data[1]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[1]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo zero-padding">
      <img src="{{ asset($data[1]->image) }}">
      <p>{{ $data[1]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <img src="{{ asset($data[2]->image) }}">
      <p>{{ $data[2]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink zero-padding">
      <img src="{{ asset($data[2]->image) }}">
      <p>{{ $data[2]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[2]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <img src="{{ asset($data[3]->image) }}">
      <p>{{ $data[3]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[3]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo zero-padding">
      <img src="{{ asset($data[3]->image) }}">
      <p>{{ $data[3]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <img src="{{ asset($data[4]->image) }}">
      <p>{{ $data[4]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink zero-padding">
      <img src="{{ asset($data[4]->image) }}">
      <p>{{ $data[4]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[4]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <img src="{{ asset($data[5]->image) }}">
      <p>{{ $data[5]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[5]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo zero-padding">
      <img src="{{ asset($data[5]->image) }}">
      <p>{{ $data[5]->title }}</p>
    </div>
  </div>
</div>
@endsection
