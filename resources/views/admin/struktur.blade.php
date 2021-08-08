@extends('layout.admin')

@section('content')
<div class="container-fluid">
    
</div>
    <div class="row">
        @if(session('status'))
            <div class="alert alert-success" id="status">
                {{session('status')}}
            </div>
        @endif

        

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-10">
                        <button href="" data-toggle="modal" type="button" class="btn btn-info" data-target="#modaltambahrd" >Tambah Anggota</button><br><br>
                     </div>
                    <select name="" id="" class="select-divisi">
                        <option value="" selected disabled>-- Pilih Divisi --</option>
                        @foreach($divisi as $d){
                            <option value="{{$d->id}}" >{{$d->nama}}</option>
                        }
                        @endforeach
                    </select>
                    <br> <br>
                    <h4 class="header-title" id="title"></h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Jabatan</th>
                                    <th>NRP</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="list">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin::Modal Tambah -->
    <div class="modal fade" id="modaltambahrd" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/struktur/tambah" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Anggota</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                             <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text" class="form-control" id="" name="nrp" required>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="" name="jurusan" required>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select name="divisi" id="tambah-divisi" onchange="ambil_jabatan()">
                                    <option value="" selected disabled>-- Pilih Divisi --</option>
                                    @foreach($divisi as $d){
                                        <option value="{{$d->id}}" >{{$d->nama}}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" id="select-jabatan-tambah" class="select-divisi">
                                    <option value="" selected disabled>-- Pilih Divisi --</option>
    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Profil</label>
                                <input type="file" name="foto-tambah">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- begin:: modal photo -->
    <div class="modal fade" id="modal-photo" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method='POST' action="/admin/acara/tambah">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Anggota</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                             
                            
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).on('change', '.select-divisi', function(){
            var divisi = $(this).val();
            $("#list").html('');
            $.ajax({
				type: 'POST',
				url:'{{ route("ambil-struktur") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
					'divisi': divisi
				},
				success: function(data){
					$.each(data.anggota, function(key,value){
                        $("#list").append(`
                                        <tr>
                                        <td>`+ data.anggota[key].jabatan+`</td>
                                        <td>`+ data.anggota[key].nrp+`</td>
                                        <td>`+ data.anggota[key].nama+`</td>
                                        <td>`+ data.anggota[key].jurusan+`</td>
                                        <td><button type="button" value='`+data.anggota[key].foto_profil+`' class='btn btn-success'> Foto Profile</button></td>
                                        <td><button type="button"  class='btn btn-danger'> Hapus</button></td>
                                        </tr>
                        `);
                    });
				}
			});
        });

        function ambil_jabatan(){
            var divisi = $("#tambah-divisi").val();
            $("#select-jabatan-tambah").html('');
            $.ajax({
				type: 'POST',
				url:'{{ route("ambil-jabatan") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
                    'divisi': divisi
				},
				success: function(data){
					$.each(data.jabatan, function(key,value){
                        $("#select-jabatan-tambah").append(`
                            <option value="`+ data.jabatan[key].id +`" >`+data.jabatan[key].nama+`</option>
                        `);
                    });
				}
			});
        }
    </script>
@endsection