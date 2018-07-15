@extends('layouts.base')

@section('css')
<link href="{{ asset('css/contact_us.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-12">
  <div class="row article background-teal text-white">
    <div class="col-md-6">
      <div class="article-head-styled">
        MindMap Advance Research Pvt. Ltd.
      </div>
      <div class="article-content">
        <div>
          <p><i class="fas fa-address-card"></i> Address</p>
        </div>
        <p>389/209- II nd floor South Ex</p>
        <p>Tower – Masjid moth, South Extn.- part-II ,</p>
        <p>New Delhi -110049. INDIA</p>
      </div>
      <div class="article-content">
        <div>
          <p><i class="fas fa-phone-square"></i> Call Us</p>
        </div>
        <p>+91 9958591400, +91 9911822313</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="article-head-styled">
        Drop your contact info
      </div>
      <div class="contact-us-form">
        <form method="POST" action="">
          {{ csrf_field() }}
          <div class="form-field">
            <input id="name" name="name" type="text" placeholder="Name*" value="{{ $name }}">
            @if( isset($errors) && $errors->has('name') )
              <div class="error">{{ $errors->first('name') }}</div>
            @endif
          </div>
          <div class="form-field">
            <textarea id="address" name="address" type="text" placeholder="Address">{{ $address }}</textarea>
            @if( isset($errors) && $errors->has('address') )
              <div class="error">{{ $errors->first('address') }}</div>
            @endif
          </div>
          <div class="form-field">
            <input id="phone" name="phone" type="text" placeholder="Phone*" value="{{ $phone }}">
            @if( isset($errors) && $errors->has('phone') )
              <div class="error">{{ $errors->first('phone') }}</div>
            @endif
          </div>
          <div class="form-field">
            <input id="email" name="email" type="email" placeholder="Email*" value="{{ $email }}">
            @if( isset($errors) && $errors->has('email') )
              <div class="error">{{ $errors->first('email') }}</div>
            @endif
          </div>
          <div class="form-field">
            <input id="company" name="company" type="text" placeholder="Company" value="{{ $company }}">
            @if( isset($errors) && $errors->has('company') )
              <div class="error">{{ $errors->first('company') }}</div>
            @endif
          </div>
          <div class="form-field">
            <textarea id="comments" name="comments" type="text" placeholder="Comments">{{ $comments }}</textarea>
            @if( isset($errors) && $errors->has('comments') )
              <div class="error">{{ $errors->first('comments') }}</div>
            @endif
          </div>
          <div class="form-field">
            <input type="submit" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
