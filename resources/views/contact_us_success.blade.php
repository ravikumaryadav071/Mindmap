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
        Thanks for contacting us!! We will get back to you, soon.
      </div>
    </div>
  </div>
</div>
@endsection
