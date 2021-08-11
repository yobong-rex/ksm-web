@extends('layout.client')

@section('content')

<section>
<div class="container" id="introduction">
    <div class="introduction-wrapper mt-3 mt-sm-3 mt-md-4 pt-5 pb-3 pb-sm-3 pb-md-5 h4 text-white">
            <div class="row mt-4">
                <div class="col-12 ">
                    <div class="display-3 mb-2 mb-sm-2 mb-md-3 header-beranda text-center">Pendaftaran {{$data[0]->nama}}</div>
                    <input type="hidden" id="id_acara" value="{{$data[0]->id}}">
                    <form action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama lengkap*</label>
                        <input type="text" name='nama' class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="NRP" class="form-label">NRP*</label>
                        <input type="text" name='NRP' class="form-control" id="NRP" aria-describedby="emailHelp" placeholder="Masukkan NRP" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan*</label>
                        <input type="text" name='jurusan' class="form-control" id="jurusan" aria-describedby="emailHelp" placeholder="Masukkan Jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No HP/WA*</label>
                        <input type="text" name='no_hp' class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="Masukkan No HP/WA" required>
                    </div>
                    </form>
                    <div class="mb-3" style="margin:center">
                        <center><button type="button" name='daftar' class="btn btn-primary" onclick=daftar() data-toggle="modal" data-target="#modalInformasi" >DAFTAR</button></center>
                    </div>
                    
                    
                </div>
            </div>
    </div>
</div>
        
    </section>

    <div class="modal fade" id="modalInformasi" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Informasi</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-body" id="body_konfirmasi">
                        Lengkapi data diri terlebih dahulu
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
            </div>
        </div>
    </div>

    <script>
        function daftar(){
            var nama = $('#nama').val();
            var nrp = $('#NRP').val();
            var email = $('#email').val();
            var jurusan = $('#jurusan').val();
            var no_hp = $('#no_hp').val();
            var id_acara = $("#id_acara").val();

            $.ajax({
				type: 'POST',
				url:'{{ route("pendaftaran-ok") }}',
				data: {
					'_token':'<?php echo csrf_token() ?>',
                    'nrp': nrp,
                    'nama':nama,
                    'email':email,
                    'jurusan':jurusan,
                    'no_hp':no_hp,
                    'id_acara':id_acara,
				},
				success: function(data){
                        $('#body_konfirmasi').html(data.msg);					
				}
			});
        }
    </script>
@endsection