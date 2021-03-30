<?php
include "config/koneksi.php";
error_reporting(0);

if(isset($_POST['simpan'])){
	$sql = "INSERT INTO data_siswa VALUES ('$_POST[no_pendaftaran]','$_POST[penerimaan]', '$_POST[nama_lengkap]', '$_POST[jk]', '$_POST[tempat_lahir]', '$_POST[tanggal_lahir]', '$_POST[agama]', '$_POST[alamat]', '$_POST[no_telp]', '$_POST[email]', '$_POST[nama_ayah]', '$_POST[nama_ibu]', '$_POST[nama_wali]');";
	$eksekusi = mysqli_query($konek, $sql);
	echo "<script>alert('Selamat, anda telah terdaftar');document.location.href='index.php'</script>";
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
	<head>
		<title>SMK Wikrama 1 Garut</title>
        <link rel="shortcut icon" href="image/logo.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				var date_input=$('input[name="date"]'); //our date input has the name "date"
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				date_input.datepicker({
					format: 'mm/dd/yyyy',
					container: container,
					todayHighlight: true,
					autoclose: true,
				})
			})
		</script>
		<!-- Include jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Include Date Range Picker -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		<style>
			body{
				background-image: url(https://bit.ly/2KhEw1d);
				background-position-x: center;
				background-position-y: center;
				background-size: cover;
				background-repeat-x: no-repeat;
				background-repeat-y: no-repeat;
				background-attachment: fixed;
				background-origin: initial;
				background-clip: initial;
				background-color: #c2fcfc;
			}
			.top-buffer-1 { margin-top:20px; }
			.top-buffer { margin-top:2px; }
			fieldset.scheduler-border {
				border: 1px groove #ddd !important;
				padding: 0 1.4em 1.4em 1.4em !important;
				margin: 0 0 1.5em 0 !important;
				-webkit-box-shadow:  0px 0px 0px 0px #000;
						box-shadow:  0px 0px 0px 0px #000;
			}

				legend.scheduler-border {
					font-size: 1.2em !important;
					font-weight: bold !important;
					text-align: left !important;
					width:auto;
					padding:0 1px;
					border-bottom:none;
				}
			.login-wrapper {
				width: 100%;
				height: 100%;
				position: absolute;
				display: table;
				z-index: 2;
			}
			.note
			{
				text-align: center;
				height: 80px;
				background: -webkit-linear-gradient(left, #03d3fc, #0373fc);
				color: #fff;
				font-weight: bold;
				line-height: 80px;
			}
			.note p{ font-size:30px; }
			.form-content
			{
				padding: 5%;
				border: 1px solid #ced4da;
				margin-bottom: 2%;
			}
			.form-control{
				border-radius:1.5rem;
			}
			.bk{
				background-color: white;
			}
			@media print {
				body * {
					visibility: visible;
				  }
				  #section-to-print, #section-to-print * {
					visibility: hidden;
				  }
				  #section-to-print {
					position: absolute;
					left: 0;
					top: 0;
				  }
			   .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
					float: left;
			   }
			   .col-sm-12 {
					width: 100%;
			   }
			   .col-sm-11 {
					width: 91.66666667%;
			   }
			   .col-sm-10 {
					width: 83.33333333%;
			   }
			   .col-sm-9 {
					width: 75%;
			   }
			   .col-sm-8 {
					width: 66.66666667%;
			   }
			   .col-sm-7 {
					width: 58.33333333%;
			   }
			   .col-sm-6 {
					width: 50%;
			   }
			   .col-sm-5 {
					width: 41.66666667%;
			   }
			   .col-sm-4 {
					width: 33.33333333%;
			   }
			   .col-sm-3 {
					width: 25%;
			   }
			   .col-sm-2 {
					width: 16.66666667%;
			   }
			   .col-sm-1 {
					width: 8.33333333%;
			   }
			}
		</style>


	</head>
	<body>
		<div class="container register-form top-buffer-1">
		  <div class="form">
			  <div class="note">
				<p>PPDB SMK Wikrama 1 Garut</p>
			  </div>
		 <div class="form-content bk">
				<form action="#" method="POST">
				<!-- Jalur Penerimaan -->
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Jalur Penerimaan</legend>
                        <div class="row top-buffer">
                            <div class="col">
                            <label for="penerimaan">Jalur Penerimaan</label></br>
								<div class="radio-inline"><label><input type="radio" name="penerimaan" value="Reguler" checked>Reguler</label></div>
								<div class="radio-inline"><label><input type="radio" name="penerimaan" value="Unggulan">Unggulan</label></div>
                            </div>
                        </div>
                    </fieldset>
				<!-- Jalur Penerimaan --> 
				<!-- Data Calon Murid -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Data Calon Murid</legend>
						<div class="row">
							<div class="col">
							  <label for="nama_lengkap">Nama Lengkap</label>
							  <input type="name" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" required>
							</div>
							<div class="col-SM-5">
							  <label for="nama_panggilan">Nama Panggilan</label>
							  <input type="name" class="form-control" id="nama_panggilan" placeholder="Nama Panggilan" name="nama_panggilan" required>
							</div>
						</div>
						<div class="section-to-print" id="section-to-print">
						<div class="row top-buffer">
                            <div class="col-sm-3">
							  <label for="jk">Jenis Kelamin</label></br>
								<div class="radio-inline"><label><input type="radio" name="jk" value="Laki-laki" checked>Laki-laki</label></div>
								<div class="radio-inline"><label><input type="radio" name="jk" value="Perempuan">Perempuan</label></div>
							</div>
							<div class="col-sm-3">
							  <label for="tempat_lahir">Tempat Lahir</label>
							  <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" required>
							</div>
							<div class="col-sm-3">
							  <label for="tanggal_lahir">Tanggal Lahir</label>
							  <input name="tanggal_lahir" class="form-control" id="tanggal_lahir" type="date">
							</div>
							<div class="col-sm-3">
							  <label for="agama">Agama</label>
							  <input name="agama" class="form-control" id="agama" type="text" required>
							</div>
						</div>
						<div class="row top-buffer">
							  <div class="col-sm-4">
								<label for="cita_cita">Cita-cita</label>
								<input type="text" class="form-control" id="cita_cita" name="cita_cita" placeholder="Cita-cita" required>
							  </div>
							  <div class="col-sm-4">
								<label for="hobi">Hobby</label>
								<input type="text" class="form-control" id="hobi" name="hobi" placeholder="Hobby" required>
							  </div>
                              <div class="col-sm-4">
                                <label for="anak_ke">Anak ke</label>
                                <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak ke" required>
                              </div>
						</div>
						<br>
						<label>Jumlah Saudara</label>
						<div class="row top-buffer">
							<div class="col-sm-4">
								<input type="number" class="form-control" id="kandung" name="kandung" placeholder="Saudara Kandung" required>
							</div>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="tiri" name="tiri" placeholder="Saudara Tiri" required>
							</div>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="angkat" name="angkat" placeholder="Saudara Angkat" required>
							</div>
						</div>
						</div>
					</fieldset>
					<!-- Data Calon Murid --> 
					<!-- Keterangan Tempat Tinggal -->
					
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Keterangan Tempat Tinggal</legend>
						<div class="row">
							<div class="col-sm-12">
								<label for="alamat">Alamat Rumah</label>
								<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat, RT/RW" required>
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-2">
							  <label for="kelurahan">Kelurahan</label>
							  <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan" name="kelurahan" required>
							</div>
							<div class="col-sm-2">
							  <label for="kecamatan">Kecamatan</label>
							  <input name="kecamatan" class="form-control" id="kecamatan" type="text" placeholder="Kecamatan"required>
							</div>
							<div class="col-sm-2">
							  <label for="kota_kab">Kota / Kabupaten</label>
							  <input name="kota_kab" class="form-control" id="kota_kab" type="text" placeholder="Kota/Kabupaten"required>
							</div>
							<div class="col-sm-2">
								<label for="propinsi">Provinsi</label>
								<input type="text" class="form-control" id="propinsi" name="propinsi" placeholder="Propinsi" required>
							</div>
							<div class="col-sm-2">
								<label for="kodepos">Kode Pos</label>
								<input type="number" class="form-control" id="kodepos" name="kodepos" placeholder="Kode Pos" required>
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-5">
								<label for="no_telp">No. Telpon</label>
								<input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telpon" required>
							</div>
							<div class="col-sm-5">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col">
							<label for="tinggal">Tinggal dengan</label>
                            <select id="tinggal" class="form-control" required>
                                <option>Pilihan</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Asrama">Asrama</option>
								<option value="Saudara">Saudara</option>
                            </select>
                            </div>
						</div>
					</fieldset>
					<!--Keterangan Tempat Tinggal -->
					<!-- Keterangan Kesehatan -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Keterangan Kesehatan</legend>
						<label>1. Penyakit yang pernah diderita</label>
						<div class="row top-buffer">
							<div class="col-sm-6">
								<select id="penyakit" class="form-control" required>
									<option>Pilihan</option>
									<option value="TBC">TBC</option>
									<option value="Malaria">Malaria</option>
									<option value="Chotipa">Chotipa</option>
									<option value="Cacar">Cacar</option>
									<option value="Lainnya">Lainnya</option>
								</select>
							</div>
							<div class="col-sm-6">
								<label for="tgl_penyakit">Tanggal Kejadian</label>
								<input type="date" class="form-control" id="tgl_penyakit" name="tgl_penyakit">
							</div>
						</div>
						<br>
						<div class="row top-buffer">
							<div class="col-sm-4">
								<label for="jasmani">2. Kelainan Jasmani/Lainnya</label>
								<input type="text" class="form-control" id="jasmani" placeholder="" name="jasmani">
							</div>
						</div>
					</fieldset>
					<!-- Keterangan Kesehatan -->
					<!-- Data Orangtua/wali -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Data Orangtua/Wali</legend>
						<label>1. Ayah</label>
						<div class="row top-buffer">
							<div class="col-sm-4">
							<label for="nama_ayah">Nama Ayah</label>
							<input type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah" name="nama_ayah">
							</div>
							<div class="col-sm-4">
							<label for="tl">Tempat Lahir</label>
							<input type="text" class="form-control" id="tl" placeholder="Tempat Lahir" name="tl">
							</div>
							<div class="col-sm-4">
							<label for="tanggal">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tanggal" placeholder="Tanggal Lahir" name="tanggal">
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-2">
							<label for="pekerjaan_ayah">Pekerjaan</label>
							<input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah">
							</div>
							<div class="col-sm-2">
							<label for="pendidikan">Pendidikan terakhir</label>
							<input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan Terakhir" name="pendidikan">
							</div>
							<div class="col-sm-2">
							<label for="kewarganegaraan">Kewarganegaraan</label>
							<input type="text" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan" name="kewarganegaraan">
							</div>
							<div class="col-sm-2">
							<label for="agama_ayah">Agama</label>
							<input type="text" class="form-control" id="agama_ayah" placeholder="Agama" name="agama_ayah">
							</div>
							<div class="col-sm-2">
							<label for="no_hp">No HP / WA</label>
							<input type="number" class="form-control" id="no_hp" placeholder="No HP/WA" name="no_hp">
							</div>
						</div>
						<br>
						<label>2. Ibu</label>
						<div class="row top-buffer">
							<div class="col-sm-4">
							<label for="nama_ibu">Nama Ibu</label>
							<input type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu" name="nama_ibu">
							</div>
							<div class="col-sm-4">
							<label for="tl_ibu">Tempat Lahir</label>
							<input type="text" class="form-control" id="tl_ibu" placeholder="Tempat Lahir" name="tl_ibu">
							</div>
							<div class="col-sm-4">
							<label for="tanggal_ibu">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tanggal_ibu" placeholder="Tanggal Lahir" name="tanggal_ibu">
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-2">
							<label for="pekerjaan_ibu">Pekerjaan</label>
							<input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu">
							</div>
							<div class="col-sm-2">
							<label for="pendidikan_ibu">Pendidikan terakhir</label>
							<input type="text" class="form-control" id="pendidikan_ibu" placeholder="Pendidikan Terakhir" name="pendidikan_ibu">
							</div>
							<div class="col-sm-2">
							<label for="kewarganegaraan_ibu">Kewarganegaraan</label>
							<input type="text" class="form-control" id="kewarganegaraan_ibu" placeholder="Kewarganegaraan" name="kewarganegaraan_ibu">
							</div>
							<div class="col-sm-2">
							<label for="agama_ibu">Agama</label>
							<input type="text" class="form-control" id="agama_ibu" placeholder="Agama" name="agama_ibu">
							</div>
							<div class="col-sm-2">
							<label for="no_ibu">No HP / WA</label>
							<input type="number" class="form-control" id="no_ibu" placeholder="No HP/WA" name="no_ibu">
							</div>
						</div>
						<br>
						<label>3. Wali</label>
						<div class="row top-buffer">
							<div class="col-sm-4">
							<label for="nama_wali">Nama Wali</label>
							<input type="text" class="form-control" id="nama_wali" placeholder="Nama Wali" name="nama_wali">
							</div>
							<div class="col-sm-4">
							<label for="tl_wali">Tempat Lahir</label>
							<input type="text" class="form-control" id="tl_wali" placeholder="Tempat Lahir" name="tl_wali">
							</div>
							<div class="col-sm-4">
							<label for="tgl_wali">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tgl_wali" placeholder="Tanggal Lahir" name="tgl_wali">
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-3">
							<label for="pekerjaan_wali">Pekerjaan</label>
							<input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali" name="pekerjaan_wali">
							</div>
							<div class="col-sm-3">
							<label for="pendidikan_wali">Pendidikan terakhir</label>
							<input type="text" class="form-control" id="pendidikan_wali" placeholder="Pendidikan Terakhir" name="pendidikan_wali">
							</div>
							<div class="col-sm-3">
							<label for="hubungan">Hubungan dengan murid</label>
							<input type="text" class="form-control" id="hubungan" placeholder="Hubungan dengan murid" name="hubungan">
							</div>
							<div class="col-sm-3">
							<label for="kewarganegaraan_wali">Kewarganegaraan</label>
							<input type="text" class="form-control" id="kewarganegaraan_wali" placeholder="Kewarganegaraan" name="kewarganegaraan_wali">
							</div>
						</div>
						<div class="row top-buffer">
							<div class="col-sm-4">
							<label for="agama_wali">Agama</label>
							<input type="text" class="form-control" id="agama_wali" placeholder="Agama" name="agama_wali">
							</div>
							<div class="col-sm-4">
							<label for="no_wali">No HP / WA</label>
							<input type="number" class="form-control" id="no_wali" placeholder="No HP/WA" name="no_wali">
							</div>
							<div class="col-sm-4">
							<label for="email_wali">Alamat E-mail</label>
							<input type="email" class="form-control" id="email_wali" placeholder="Alamat E-mail" name="email_wali">
							</div>
						</div>
					</fieldset>
					<!-- Data Orangtua/wali -->
					<!-- Nilai Rapor -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Nilai Rapor</legend>
						<label>1. Pendidikan Agama</label>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<input type="number" class="form-control" id="agama_1" placeholder="Semester 1" name="agama_1">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="agama_2" placeholder="Semester 2" name="agama_2">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="agama_3" placeholder="Semester 3" name="agama_3">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="agama_4" placeholder="Semester 4" name="agama_4">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="agama_5" placeholder="Semester 5" name="agama_5">
							</div>
						</div>
						<br>
						<label>2. Bahasa Indonesia</label>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<input type="number" class="form-control" id="indo_1" placeholder="Semester 1" name="indo_1">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="indo_2" placeholder="Semester 2" name="indo_2">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="indo_3" placeholder="Semester 3" name="indo_3">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="indo_4" placeholder="Semester 4" name="indo_4">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="indo_5" placeholder="Semester 5" name="indo_5">
							</div>
						</div>
						<br>
						<label>3. Bahasa Inggris</label>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<input type="number" class="form-control" id="inggris_1" placeholder="Semester 1" name="inggris_1">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="inggris_2" placeholder="Semester 2" name="inggris_2">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="inggris_3" placeholder="Semester 3" name="inggris_3">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="inggris_4" placeholder="Semester 4" name="inggris_4">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="inggris_5" placeholder="Semester 5" name="inggris_5">
							</div>
						</div>
						<br>
						<label>4. Matematika</label>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<input type="number" class="form-control" id="mtk_1" placeholder="Semester 1" name="mtk_1">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="mtk_2" placeholder="Semester 2" name="mtk_2">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="mtk_3" placeholder="Semester 3" name="mtk_3">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="mtk_4" placeholder="Semester 4" name="mtk_4">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="mtk_5" placeholder="Semester 5" name="mtk_5">
							</div>
						</div>
						<br>
						<label>5. IPA</label>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ipa_1" placeholder="Semester 1" name="ipa_1">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ipa_2" placeholder="Semester 2" name="ipa_2">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ipa_3" placeholder="Semester 3" name="ipa_3">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ipa_4" placeholder="Semester 4" name="ipa_4">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ipa_5" placeholder="Semester 5" name="ipa_5">
							</div>
						</div>
						<br>
						<label>6. IPS</label>
						<div class="row top-buffer">
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ips_1" placeholder="Semester 1" name="ips_1">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ips_2" placeholder="Semester 2" name="ips_2">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ips_3" placeholder="Semester 3" name="ips_3">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ips_4" placeholder="Semester 4" name="ips_4">
							</div>
							<div class="col-sm-2">
								<input type="number" class="form-control" id="ips_5" placeholder="Semester 5" name="ips_5">
							</div>
						</div>
						<br>
						<div class="row top-buffer">
							<div class="col-sm-12">
								<label for="prestasi">Prestasi yang pernah diraih</label>
								<input type="text" class="form-control" id="prestasi" placeholder="Prestasi" name="prestasi">
							</div>
						</div>
					</fieldset>
					<!-- Nilai Rapor -->  
					
					<!-- Informasi SMK Wikrama 1 Garut --> 
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Informasi SMK Wikrama 1 Garut dari</legend>
						<div class="col">
							<select id="informasi" class="form-control">
                                <option>Pilihan</option>
                                <option value="Keluarga">Keluarga</option>
                                <option value="Teman">Teman</option>
								<option value="Sekolah SMP">Sekolah SMP</option>
								<option value="Karyawan/Guru">Karyawan/Guru</option>
								<option value="Website">Website</option>
								<option value="Brosur">Brosur</option>
								<option value="Facebook">Facebook</option>
								
                            </select>
						</div>
					</fieldset>
					<!-- Informasi SMK Wikrama 1 Garut --> 
					<button onclick="window.print();return false;" class="btn btn-primary">Print </button>
					<button type="submit" name="simpan" class="btn btn-success">Submit </button>
				</form>
			</div>
		  </div>
		  </div>
	</body>
</html>