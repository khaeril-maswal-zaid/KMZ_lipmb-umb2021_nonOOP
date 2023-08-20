<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link <?php if($_GET['user']=="interface"){echo "active";} ?>" href="?user=interface">Hm Set-interface</a>
    
    <a class="nav-link <?php if($_GET['user']=="bp"){echo "active";} ?>" href="?user=bp">Biaya Kuliah</a>
    
    <a class="nav-link <?php if($_GET['user']=="spp"){echo "active";} ?>" href="?user=spp">Syarat & prosedur pendaftran</a>  
    
    <a class="nav-link <?php if($_GET['user']=="belum"){echo "active";} ?>" href="#">Prosedur pendafataran ulang</a>       
   </nav>  
</div>
