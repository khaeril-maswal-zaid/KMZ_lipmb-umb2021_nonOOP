<!--Bootstrap=> Popper, Bundle -->
		<script src="<?=$url ?>/plugins/assets/js/popper.min.js"></script> 		
		<script src="<?=$url ?>/plugins/assets/js/bootstrap.min.js"></script>
		<script src="<?=$url ?>/plugins/assets/js/bootstrap.bundle.min.js"></script>    

<!-- Validasi Form -->
  <script src="<?=$url ?>/plugins/assets/js/form-validation.js"></script>
	
<!-- Offcanfas Tmpl Admin -->
  <script src="<?=$url ?>/plugins/assets/js/offcanvas.js"></script>

<!-- Table Style -->    
	<script src="<?=$url ?>/plugins/assets/js/jquery.dataTables.min.js"></script>
	<script src="<?=$url ?>/plugins/assets/js/dataTables.bootstrap4.min.js"></script>      
	<script src="<?=$url ?>/plugins/assets/js/tabelS.js">	</script>		           
				
<!-- JavaScript Unggah Photo -->
	<script src="<?=$url ?>/plugins/assets/js/poto.js"></script> 
	<script src="<?=$url ?>/plugins/assets/js/poto-admin.js"></script>

<!-- JavaScript Lihat sandi -->
	<script src="<?=$url ?>/plugins/assets/js/lihat-psw.js"></script> 

<!-- Menu Toggle Script -->
  <script>
 		$("#menu-toggle").click(function(e) {
    		e.preventDefault();
    		$("#wrapper").toggleClass("toggled");
   		});
  </script>

<!-- Add atribute 'active' in Navcbar -->
	<script type="text/javascript">
		$(document).on('click', 'ul li', function(){
			$(this).addClass('active').siblings().removeClass('active')
		});
		
		<?php 
				if(isset($dtcmb["nama_lengkap"])){
					$namafile = $dtcmb["nama_lengkap"];
				}elseif(isset($_GET['dtb'])&&$_GET['dtb']=='profil'){
					$namafile = 'Profil Peserta';
				}elseif(isset($_GET['pengumuman'])&&$_GET['pengumuman']=='home'){
					$namafile = 'Laporan Pengumuman';
				}elseif(isset($_GET['pengumuman'])&&$_GET['pengumuman']=='file'){
					$namafile = 'File Pengumuman';
				}
			?>

			window.onload = function(){
    			document.getElementById("tbl-exp-pdf").addEventListener("click", ()=>{
					const trg_exp_pdf = this.document.getElementById("trg-exp-pdf");

					var opt = {
						filename:     '<?=$namafile.'.pdf'?>',
						jsPDF:        { unit: 'in', format: 'A4', orientation: 'portrait' }
					};

					html2pdf().set(opt).from(trg_exp_pdf).save();
				});
			}
			
	</script>
	</body> 
</html>