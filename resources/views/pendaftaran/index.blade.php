@extends('header.header')

@section('content')

@if(session('status'))
            <div class="alert alert-success" id="status">
                {{session('status')}}
            </div>
@endif
<div class="respo" style="padding-top:10px">
    <h4 class="animated fadeInDown delay-07s" style="text-align:center">STUDI EKSKURSI 2021</h4>
    <p class="animated fadeInDown delay-07s" style="text-align:center font-size: 120; padding: 0vh 10vw 0vh 10vw;">Hari, tanggal : Jumat, 09 Juli 2021 - Sabtu, 10 Juli 2021 <br>
Waktu : 09.00 - 16.10 WIB <br>
Tempat : Zoom <br> <br>

Jika ada kendala atau pertanyaan bisa menghubungi : <br>
No Hp: 082248641747 / Line: kikyfadhilah (Kiky)  <br>
atau <br>
No Hp: 081235655927 / Line: andrewjuangta (Andrew) <br> <br>

Mohon mengisi formulir ini dengan benar untuk menghindari kesalahan pendataan peserta dan pembuatan sertifikat. Terimakasih 🙏🏻</p> <br>
</div>

<div class="respo" style="padding: 0vh 10vw 0vh 10vw;">
<form method='post' action='/pendaftaran/ok'>
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama lengkap*</label>
        <input type="text" name='nama' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap" required>
   <!-- <div id="namaLengkap" class="form-text">masukan nama lengkap</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email*</label>
        <input type="email" name='email' class="form-control" id="exampleInputPassword1" placeholder="Masukkan email dengan benar" required>
    <!--<div id="emailHelp" class="form-text">masukan email dengan benar</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NRP/NIP*</label>
        <input type="text" name='nrp' class="form-control" id="exampleInputPassword1" placeholder="Masukkan NRP/NIP dengan benar" required>
    <!-- <div id="emailHelp" class="form-text">Khusus mahasiswa UBAYA</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jurusan*</label>
        <div class="form-check">
            <input class="form-check-input jurusan" type="radio" name="jurusan" id="informatika" value="informatika" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                Informatika
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input jurusan" type="radio" name="jurusan" id="multimedia" value="multimedia" >
            <label class="form-check-label" for="flexRadioDefault2">
                Multimedia
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input jurusan" type="radio" name="jurusan" id="sib" value="sib">
            <label class="form-check-label" for="flexRadioDefault2">
                Sistem Informasi Bisnis
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jurusan" id="otherJurusan" onclick="jurusan()" >
            <label class="form-check-label" for="flexRadioDefault2">
                other
            </label>
        </div>
        <br>
        <div id="textJurusan"></div>
        <!-- <input type="text" name="jurusanOther" class="form-control" id="otherText" placeholder="masukan jurusanmu"> -->
        <!-- <div id="emailHelp" class="form-text">masukan jurusanmu</div> -->
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Angkatan*</label>
        <div class="form-check">
            <input class="form-check-input angkatan" type="radio" name="angkatan" id="2017" value="2017" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                2017
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input angkatan" type="radio" name="angkatan" id="2018" value="2018" >
            <label class="form-check-label" for="flexRadioDefault2">
                2018
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input angkatan" type="radio" name="angkatan" id="2019" value="2019" >
            <label class="form-check-label" for="flexRadioDefault2">
                2019
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input angkatan" type="radio" name="angkatan" id="2020" value="2020" >
            <label class="form-check-label" for="flexRadioDefault2">
                2020
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="angkatan" id="otherAngkatan" onclick="angkatan()" >
            <label class="form-check-label" for="flexRadioDefault2">
                other
            </label>
        </div>
        <br>
        <div id="textAngkatan"></div>
        <!-- <input type="text" name="angkatanOther" class="form-control" id="otherText" placeholder="masukan angkatanmu"> -->
        <!-- <div id="emailHelp" class="form-text">masukan angkatanmu</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No HP/WhatsApp*</label>
    <input type="text" name='whatsapp' class="form-control" id="exampleInputPassword1" placeholder="081xxxxx" required>
    <!-- <div id="emailHelp" class="form-text">masukan No HP/WhatsApp yang aktif</div> -->
  </div><br><br>
  <div class="mb-3" style="margin:center">
    <center><button type="submit" name='daftar' class="btn btn-primary" >DAFTAR</button></center>
  </div>
</form>
</div>



<!-- footer -->
<footer class="footer">
	<div class="container">
		<div class="footer-logo">
			<a href="#header"><img src="{{asset( '/assets/img/ksm-putih.png' ) }}" alt=""></a>
		</div>
		<div class="credits">
			<h2 style="color: #fff;"><span id="estrig">We Not Me!</span></h2>
			<p class="text-center" id="esteg" style="color: #888; font-size: 0.7em;"> :)</p>
		</div>
	</div>
</footer>
<!-- /footer -->

@if(session('status'))
<!-- Modal -->
<div class="modal fade" id="modalWa" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>Silahkan untuk join group Whatsapp pada link atau QR code berikut untuk mendapatkan informasi seputar kegiatan Studi Ekskursi 2021</p>
                    <div>
                    <p></p><a href="https://chat.whatsapp.com/I3wicDLhFwB25wPDmuHQnq">https://chat.whatsapp.com</a></p>
                    </div>
                    <br> <br>
                    <img src="{{asset( '/assets/img/qr.jpg' ) }}" alt="">
                    

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>

            <script type="text/javascript">
                    $(document).ready(function() {
                        $('#modalWa').modal('show');
                    });
            </script>
@endif

<script>
    $(document).on('click','#otherAngkatan',function(){
        $('div#textAngkatan').html('<input type="text" name="angkatanOther" class="form-control" id="otherText" placeholder="Masukkan angkatanmu*" required>')
    });

    $(document).on('click','.angkatan',function(){
        $('div#textAngkatan').html('')
    });

    $(document).on('click','#otherJurusan',function(){
        $('div#textJurusan').html('<input type="text" name="jurusanOther" class="form-control" id="otherText" placeholder="Masukkan jurusanmu*" required>')
    });

    $(document).on('click','.jurusan',function(){
        $('div#textJurusan').html('')
    });

</script>
@endsection