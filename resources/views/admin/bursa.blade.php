@extends('layout.admin')

@section('content')
    <div class="row">
        @if(session('status'))
            <div class="alert alert-danger" id="status">
                {{session('status')}}
            </div>
        @endif

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/bursa-soal/update" method="post">
                    @csrf
                    @foreach ($bursa as $b)
                    <label for="link_soal">
                        Link Soal:
                        <input type="text" value="{{$b->link_soal}}" name='link_soal' id='link_soal' class="form-control">
                    </label>
                    <label for="link_kuesioner">
                        Link kuesioner:
                        <input type="text" value="{{$b->link_kuisioner}}" name='link_kuesioner' id='link_kuesioner' class="form-control">
                    </label>
                    @endforeach
                    <button type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection