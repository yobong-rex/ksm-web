@extends('layout.client')

@section('content')
    <div class="h3 text-white">Link Soal : {{ $bursa->link_soal }}</div>
    <div class="h3 text-white">Link Kuisioner : {{ $bursa->link_kuisioner }}</div>
@endsection