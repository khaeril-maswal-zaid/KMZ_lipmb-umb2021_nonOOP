<div class="container rounded my-4 py-3 bg-white" style="width: 97%;">
  <div class="text-center mb-4">
    <img class="mb-4 mt-1" src="../plugins/assets/image/umb.png" alt="" width="72" height="72">
    <h1 class="h3 mb-2 font-weight-normal">Sign-up Admin SIM-LIPMB</h1>
    <h5>Universitas Muhammadiyah Bulukumba </h5>
  </div>
    
   <div class="row">       
    <div class="col-md-12">
      
      <form class="needs-validation" novalidate action="../plugins/configurasi/proses-admin.php"	 method="post">
        <div class="row">
          <div class="col-md-7 mb-3">
            <label for="firstName">Nama lengkap</label>
            <input type="text" class="form-control" id="firstName" name="nama" autocomplete="off" required>
            
            <div class="invalid-feedback">
              Nama lengkap wajib diisi.
            </div>
          </div>
          
       			<div class="col-md-5 mb-3">
         		<label for="lastName">NIK</label>
           		<input type="text" class="form-control" id="lastName" name="nik" autocomplete="off" required maxlength="16">
          	 <div class="invalid-feedback">
              NIK wajib diisi.
          	 </div>
          </div>
        </div> <!-- End Row -->
        
        <div class="row">
        <div class="col-md-5 mb-3">
        	<label for="wa">No HP / WA</label>
          <input type="" class="form-control" id="wa" name="wa" autocomplete="off" required maxlength="16">
          <div class="invalid-feedback">
            No HP / WA wajib diisi.
          </div>          
        </div>
        
        <div class="col-md-7 mb-3">
         <label for="devisi">Devisi</label>
          <input type="" class="form-control" id="devisi" name="devisi" autocomplete="off" required>
          <div class="invalid-feedback">
            Devisi wajib diisi.
          </div> 
        </div>
       </div>
        
       <div class="row">						
        <div class="col-md-7 p-0">
        	<div class="col-md-12 mb-3">
        	<label for="email">Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" id="email" value="@email" name="email" 
            autocomplete="off" required>
            <div class="invalid-feedback" style="width: 100%;">
              Email lengkap wajib diisi.
            </div>
          </div>
        	</div>
        	
        	<div class="col-md-12 mb-3">
          <label for="password1">Password</label>
          <input type="password" class="form-control" id="password1" placeholder="Tentukan password" name="password1" autocomplete="off" required minlength="8">
          <div class="invalid-feedback">
            Minimal 8 karakter.
          </div>
        </div>
       
        <div class="col-md-12 mb-3">
          <label for="password2">Verifikasi Password</label>
          <input type="password" class="form-control" id="password2" placeholder="Verifikasi password" name="password2" autocomplete="off" required minlength="8">
          <div class="invalid-feedback">
            Minimal 8 karakter.
          </div>
         </div>
        </div>
        
      		<div class="col-md-5 p-0">
      	  	<div class="col-md-12 mb-3">
          <label for="file1">Foto Admin 1:1</label>
          <input type="file" class="form-control p-1" id="foto_admin" name="foto" autocomplete="off" required>
          <div class="invalid-feedback">
            Unggah foto.
          </div>
         </div>
         	<div class="col-md-10 mb-3 offset-sm-1 text-center" id="uploaded_admin">
         		<img src="../plugins/assets/image/df1.jpg" height="145" class="border border-warning">
         	</div>
      	 </div>
      	  
       </div> <!--End Row -->
       
       <div class="row">
       <div class="col-md-6 mb-3">
          <label for="jk">Jenis kelamin</label>
          <select class="form-control" id="jk" name="jk" autocomplete="off" required>
        <option value="">Pilih</option>
        <option>Laki-laki</option>
        <option>Perempuan</option>       
          </select>
          <div class="invalid-feedback">
            Jenis kelamin wajib diisi.
          </div>
        </div>
       
        <div class="col-md-6 mb-3">
          <label for="a">Pengelolaan admin</label>
            <select class="form-control" id="a" name="a" autocomplete="off" required>
              <option value="">Pilih</option>
              <option>Prodi</option>
              <option>Pengelola data</option>
              <option>Pengembang</option>       
            </select>
          <div class="invalid-feedback">
            Pengelolaan admin wajib diisi.
          </div>
        </div>
       </div>
                
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="tambah-admin">Registrasi</button>
        
      </form>
      
      </div>
      </div>
    </div> <!--End Container -->
  
 