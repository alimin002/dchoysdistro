
<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */?>
<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<?php
						//jika login gagal 
						if(isset($_GET['loginerror'])){
							echo "<p class='text-error'>Maaf login gagal!</p>";
						}	
						?>		
						<form id='form1' action="user/login_action.php"  method="post" class=''>
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">email</label>
									<div class="controls">
										<input type="text" name='email' placeholder="Masukan email" id="email" class="input-xlarge required email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="masukan password" id="password" class="input-xlarge required" name='password' > 
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn-primary" type="submit" value="Sign into your account">
									<hr>
									
								</div>
							</fieldset>
						</form>	
						
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<?php
						//jika login gagal 
						if(isset($_GET['status'])){
							if($_GET['status']==0){
								echo "<p class='text-success'>Proses Registrasi  berhasil, silahkan login!</p>";
							}else {
							echo "<p class='text-error'>Proses Registrasi  gagal!</p>";
							}						}	?>		
						<form action="user/register_action.php"  id='form2' method="post" class="form-horizontal">
							<fieldset>
									<div class="control-group">
		<label class="control-label" for="nama">Nama pelanggan</label>
		<div class="controls">
			<input type="text" name='nama' value='<?php if(isset($data->nama))echo $data->nama; ?>'class='required'>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Jenis kelamin</label>
		<div class="controls">
			<select name='kelamin' >
				<option value='L'>Laki laki</option>
				<option value='P'>Perempuan</option>
			</select>
			
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >email</label>
		<div class="controls">
			<input type="text" name='email' id='email' value='<?php if(isset($data->email)) echo $data->email; ?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Password</label>
		<div class="controls">
			<input type="password" name='password' id='password' value='<?php if(isset($data->password))echo $data->password;?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >telp</label>
		<div class="controls">
			<input type="text" name='telp' id='telp' value='<?php if(isset($data->telp))echo $data->telp; ?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Kota</label>
		<div class="controls">
			<input type="text" name='kota' id='kota' value='<?php if(isset($data->kota))echo $data->kota; ?>' class='required'>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Kode Post</label>
		<div class="controls">
			<input type="text" name='kodepos' id='kodepos' value='<?php if(isset($data->kodepos)) echo isset($data->kodepos) ;?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
		<div class="controls">
			<textarea name='alamat' class="input-xlarge">
					<?php if(isset($data->alamat)) echo trim($data->alamat);?>
				</textarea>
		</div>
	</div>

	
	


	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn-success" name='aksi'value='register'>
				Register
			</button>
			<button id="btn_login_facebook" style="background-color:#3B5998;" type="submit" class="btn-primary fa fa-facebook" name='aksi'value='register'>
				Masuk Dengan Facebook
			</button>
		</div>
	</div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>

<script>
$( "#btn_login_facebook" ).click(function() {
/*
	if(checkNetConnection()==true){
	alert("anda terhubung ke internet");
	}else if(checkNetConnection()==false){
	alert("anda tidak terhubung ke internet, silahkan check koneksi anda!");
	
	}*/
	//alert(checkNetConnection());
	if(checkNetConnection()==true){
	alert("Koneksi internet gagal");
	}else{
	alert("Kami sendang menghubungkan dengan facebook harap tunggu");
	}
});
</script>			