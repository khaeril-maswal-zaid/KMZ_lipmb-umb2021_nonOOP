<figure class="highcharts-figure">
    <div id="idx"></div>
    <p class="highcharts-description">
        Grafik line menunjukkan jumlah pendaftar calon mahasiswa baru dalam sepuluh hari terakhir yang dikelompokkan dalam pilihan kuliah Reguluer dan Kuliah Non Reguler.
    </p>
</figure>

		<script type="text/javascript">
Highcharts.chart('idx', {
    chart: {
        type: 'line'
    },
    colors: ['#228B22', '#0000CD'],    
    title: {
        text: 'Universitas Muhammadiyah Bulukumba'
    },
    subtitle: {
        text: 'LIPMB team'
    },
    xAxis: { categories: [
       
    		<?php 
    		
    			for ($i = 0; $i < 9; $i++) {    					    			    				
    				$ts = date('d-m-Y', time()-60*60*24*(9-$i));
    				echo "'$ts',";
    				  			   				
    				}
    				
    		?>'Hari ini']
                 												 							 							     
    },
    yAxis: {
        title: {
            text: 'Jumlah pendaftar'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Registrasi',
        data: [
   <?php
    for ($i = 0; $i <= 9; $i++) {
 			$ts = date('d-m-Y', time()-60*60*24*(9-$i));
 		
 				$date1 = mysqli_query($conn, "SELECT tgl_daftar FROM datacamaba WHERE tgl_daftar='$ts'");	
 				 		
 				$rows1 = mysqli_num_rows($date1);
	echo "$rows1,";
 		
 	}
        
 ?>]
    }, {
        name: 'Pendaftaran',
        data: [
    <?php
    for ($i = 0; $i <= 9; $i++) {
 				
 				$ts = date('d-m-Y', time()-60*60*24*(9-$i));
 		
 				$date1 = mysqli_query($conn, "SELECT tgl_daftar FROM datacamaba WHERE tgl_fix='$ts'");
 		
 				$rows1 = mysqli_num_rows($date1);	
	echo "$rows1,";
 		
 	}
        
 ?>]
    }]
});
		</script>

