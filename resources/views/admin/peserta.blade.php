@extends('layout-admin.layout')

@section('content')

@if(session('status'))
            <div class="alert alert-danger" id="status">
                {{session('status')}}
            </div>
@endif

<div class="row">
        <div class="col-md-12">
            <!-- <div><a href="/csv" class="btn btn-primary" id="export" onclick="exportTasks(event.target);">Export as CSV</a></div> -->
            <div class="card">
                <div class="card-header card-header-success">
                    <h4 class="card-title h3 fw-bold m-0" id="judul">Studi Ekskursi</h4>
                </div>
                <div class="card-body" style="text-align: center">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-success">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NRP</th>
                                <th>Jurusan</th>
                                <th>Angkatan</th>
                                <th>No HP/ Whatsapp</th>
                                <th>Waktu Daftar</th>
                            </thead>
                            <tbody>
                                @php($x=1);
                                @foreach($pendaftar as $p)
                                    <tr>
                                    <td>{{$x}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->nrp}}</td>
                                    <td>{{$p->jurusan}}</td>
                                    <td>{{$p->angkatan}}</td>
                                    <td>{{$p->nohp_whatsapp}}</td>
                                    <td>{{$p->waktu}}</td>
                                    <form action="/admin/hapus" method="post">
                                    @csrf
                                        <td><button id="hapus" value="{{$p->id}}" name="hapus" class="btn btn-danger">Hapus</button></td>
                                    </form>
                                    </tr>
                                    @php($x++);
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@section('Javascript')
<script>
 $(document).ready(function() {
            $('#cek-pendaftaran').addClass("active");
        });
//  function exportTasks(_this) {
//       let _url = $(_this).data('href');
//       window.location.href = _url;
//    }
</script>
@endsection
