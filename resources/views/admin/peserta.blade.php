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
                    <!-- <h4 class="card-title h3 fw-bold m-0" id="judul">Studi Ekskursi</h4> -->
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


</script>
@endsection
