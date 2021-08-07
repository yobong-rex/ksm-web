@extends('layout.admin')

@section('content')
<div class="container-fluid">
    
</div>
    <div class="row">
        @if(session('status'))
            <div class="alert alert-danger" id="status">
                {{session('status')}}
            </div>
        @endif

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <select name="" id="" class="select-divisi">
                        <option value="" selected disabled>-- Pilih Divisi --</option>
                        <option value="1">BPH</option>
                        <option value="5">Information</option>
                        <option value="3">Internal</option>
                        <option value="4">Eksternal</option>
                        <option value="2">Operational</option>
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
    </script>
@endsection