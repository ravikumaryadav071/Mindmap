@extends('layouts.base')

@section('css')
<link href="{{ asset('css/edit.css') }}" rel="stylesheet">
@endsection

@section('content')
  <?php $index = 0; ?>
    <form method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="col-md-12">
        @foreach($data as $content)
          <div class="row edit-div">
            <input class="col-md-2" type="text" name="title[{{$index}}]" value="{{ $content->title }}">
            <input class="col-md-2" type="text" name="subtitle[{{$index}}]" value="{{ $content->subtitle }}">
            <input class="col-md-2" type="file" name="file[{{$index}}]">
            <image class="col-md-2" src="{{ asset($content->image) }}">
            <textarea class="col-md-4" name="text_content[{{$index}}]">{{ $content->text_content }}</textarea>
            <input type="hidden" name="block_index[{{$index}}]" value="{{ $index }}">
            <input type="hidden" name="block_id[{{$index}}]" value="{{ $content->id }}">
          </div>
          <?php $index++; ?>
        @endforeach
      </div>
      <button type="submit" class="col-md-12 button btn-primary">
        Submit
      </button>
    </form>
@endsection
