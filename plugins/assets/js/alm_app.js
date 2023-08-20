$( document ).ready(function() {
	//untuk memanggil plugin select2
    $('#provinsi').select2({
	  	placeholder: 'Pilih Provinsi',
	  	language: "id"
	});
	$('#kota').select2({
	  	placeholder: 'Pilih Kota/Kabupaten',
	  	language: "id"
	});

	//saat pilihan provinsi di pilih maka mengambil data di data-wilayah menggunakan ajax
	$("#provinsi").change(function(){
	      $("img#load1").show();
	      var id_provinces = $(this).val(); 
	      $.ajax({
	         type: "POST",
	         dataType: "html",
	         url: "../plugins/configurasi/data-wilayah.php?jenis=kota",
	         data: "id_provinces="+id_provinces,
	         success: function(msg){
	            $("select#kota").html(msg);                                                       
	            $("img#load1").hide();
	            getAjaxKota();                                                        
	         }
	      });                    
     }); 
});










