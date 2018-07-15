@extends('layouts.base')

@section('css')
<link href="{{ asset('css/our_excellence.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-12">
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[0]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[0]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[0]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[1]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[1]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[1]->title }}</p>
    </div>
  </div>
</div>
@endsection
