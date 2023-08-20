<div class="print nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    
    <a class="nav-link <?php if($_GET['dtb']=="home"){echo "active";} ?>" href="?dtb=home">Hm databases</a>
    
    <a class="nav-link <?php if($_GET['dtb']=="registrasi"){echo "active";} ?>" href="?dtb=registrasi">
      Dtb registrasi
      <span class="badge badge-light bg-warning align-text-bottom">
      	<?php
      	//query for hitung jumlah keseluruhan peserta registrasi      
    			echo $total_pesertas;
    			?>
    		</span>
    </a>
    
    <a class="nav-link <?php if($_GET['dtb']=="profil"||$_GET['dtb']=="pendaftaran"){echo "active";} ?>" href="?dtb=profil">Album peserta</a>
    
    <a class="nav-link <?php if($_GET['dtb']=="detail_data"){echo "active";} ?>" href="?dtb=detail_data">Dtb Biodata lengkap</a>
    
   </nav>  
</div>




