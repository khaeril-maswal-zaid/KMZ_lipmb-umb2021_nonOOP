<form class="form-signin" action="../plugins/configurasi/proses-user.php"	 method="post">
  <div class="text-center mb-4">
    <img class="mb-4 mt-1" src="../plugins/assets/image/umb.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login Calon Mahasiswa Baru</h1>
    <p>Silahkan login menggunakan akun yang <br>
     telah diberikan oleh panitia <code>
    <br> Belum mendapatkan akun??</code> <a href="https://api.whatsapp.com/send?phone=<?=$valuea['wa'] ?>&text=Assalamualaikum%20Warahmatullahi%20Wabaraqatuh.%0A%0ASaya%20calon%20mahasiswa%20baru%20*Universitas%20Muhammadiyah%20Bulukumba*%20mau%20melakukan%20komfirmasi%20pembayaran%20pendaftaran%20sebesar%20*<?=$valuea['biaya']?>*.%0A%0A_Dengan%20identitas%20:_%0ANama%20%20%20:%20(Ketik%20nama%20anda)%0ANIK%20%20%20%20%20%20%20:%20(Ketik%20NIK%20anda)%0ANo%20Hp%20%20:%20(Ketik%20No%20Hp%20anda)%0A%0A@LIPMB-Team"> Klik disini!</a></p>
  </div>

  <div class="form-label-group">
    <input type="" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Username</label>
  </div>

  <div class="form-label-group" id="psw">
    <input type="password" id="inputPassword" name="password" class="form-control pasword-lihat" required>
    <label for="inputPassword">Password</label>

    <a href="#">
      <svg width="2.3em" viewBox="0 0 16 16" id="lihat" class="bi bi-eye eyep" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
        <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
      </svg>

      <svg width="2.3em" viewBox="0 0 16 16" id="sembunyi" class="bi bi-eye-slash eyep" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
        <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z"/>
        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
      </svg>
    </a>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button name="loginuser" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></p>
</form>