@extends('layouts.base')

@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-12 zero-padding">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid carousel-image" src="{{ asset($data[0]->image) }}" alt="Los Angeles">
        <div class="carousel-caption caption-black">
          <h3>{{ $data[0]->title }}</h3>
          <p>{{ $data[0]->text_content }}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid carousel-image" src="{{ asset($data[1]->image) }}" alt="Chicago">
        <div class="carousel-caption">
          <h3>{{ $data[1]->title }}</h3>
          <p>{{ $data[1]->text_content }}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid carousel-image" src="{{ asset($data[2]->image) }}" alt="New York">
        <div class="carousel-caption caption-black">
          <h3>{{ $data[2]->title }}</h3>
          <p>{{ $data[2]->text_content }}</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>

<div class="col-md-12 zero-padding background-teal text-white" id="">
  <div class="row story-card">
    <div class="col-md-6">
      <div class="title">{{ $data[3]->title }}</div>
    </div>
    <div class="col-md-6">
      <div class="head">{{ $data[3]->subtitle }}</div>
      <div class="content">
        <?php echo $data[3]->text_content ?>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 zero-padding background-indigo text-white">
  <div class="row story-card">
    <div class="col-md-6 title-left">
      <div class="title">{{ $data[4]->title }}</div>
    </div>
    <div class="col-md-6">
      <div class="head">{{ $data[4]->subtitle }}</div>
      <div class="content">
        <?php echo $data[4]->text_content ?>
      </div>
    </div>
    <div class="col-md-6 title-right">
      <div class="title">{{ $data[4]->title }}</div>
    </div>
  </div>
</div>

<div class="col-md-12 zero-padding background-pink text-white">
  <div class="row story-card">
    <div class="col-md-6">
      <div class="title">{{ $data[5]->title }}</div>
    </div>
    <div class="col-md-6">
      <div class="head">{{ $data[5]->subtitle }}</div>
      <div class="content">
        <?php echo $data[5]->text_content ?>
      </div>
    </div>
  </div>
</div>
@endsection
