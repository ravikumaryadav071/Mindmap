@extends('layouts.base')

@section('css')
<link href="{{ asset('css/our_excellence.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-12">
  <div class="row article background-teal text-white">
    <div class="col-md-12">
      <strong>{{ $data[0]->title }}</strong>
    </div>
    <div class="col-md-12">
      <?php echo $data[0]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[1]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[1]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[1]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[2]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[2]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[2]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[3]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[3]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[3]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[4]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[4]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[4]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[5]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[5]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[5]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[6]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[6]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[6]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[7]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[7]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[7]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[8]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[8]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[8]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[9]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[9]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[9]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[10]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[10]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[10]->title }}</p>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[11]->title }}</p>
    </div>
    <div class="col-md-3 article-head-styled shadow-right background-pink">
      <p>{{ $data[11]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[11]->text_content; ?>
    </div>
  </div>
  <div class="row article background-teal text-white">
    <div class="col-md-3 article-head">
      <p>{{ $data[12]->title }}</p>
    </div>
    <div class="col-md-9 article-content">
      <?php echo $data[12]->text_content; ?>
    </div>
    <div class="col-md-3 article-head-styled shadow-left right background-indigo">
      <p>{{ $data[12]->title }}</p>
    </div>
  </div>
</div>
@endsection
