@extends('layouts.success')

@section('title')
Checkout Success
@endsection

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{url('frontend/images/ic_mail.png')}}" alt="succes_mail">
        <h1>Yeay!Success</h1>
        <p>We've sent you email for trip confirmation<br>Please read it as well</p>
        <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5">
          Homepage
        </a>
      </div>
    </div>
  </main>
@endsection

