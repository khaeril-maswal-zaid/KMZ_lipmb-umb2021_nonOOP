<?php
				$tl1 = mysqli_query($conn, "SELECT kabupaten FROM datacamaba WHERE pilihan_kuliah != ''");       
						
					$rows = [];
					while( $row = mysqli_fetch_assoc($tl1) ) {				
							$rows[] = $row["kabupaten"];
					}	     
     
     $xx = array_count_values($rows);    
     $impxx = implode("-", $xx);
     $expxx = explode("-", $impxx);
     
     $xy = array_unique($rows);
     $impxy = implode("-", $xy);
     $expxy = explode("-", $impxy);
     
     $yy = count($expxy)-1; //variabel di LOOPING-FOR (jumlah pengulangan array)
                 
   ?>
   
<figure class="highcharts-figure">
    <div id="jk"></div>
    <p class="highcharts-description">
    Grafik ful lingkaran ini menampilkan informasi kabupaten asal calon mahasiswa baru yang telah disusun dengan format persentase pie chart from heightchart.com
    </p>
</figure>



		<script type="text/javascript">
Highcharts.chart('jk', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Universitas Muhammadiyah Bulukumba'
    },
    subtitle: {
        text: 'LIPMB team'
    },
   
    tooltip: {
        pointFormat: '{point.y}  Orang <br/>(<b>{point.percentage:.1f}%)</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
   <?php 
    for($a = 0; $a <= $yy; $a++) :
   ?>
    { name: '<?= $expxy["$a"]; ?>', y: <?= $expxx["$a"];?> },
    
    
  <?php    	
    	endfor;
  ?>
      ]
    }]
});
		</script>
		
		
		
		
		
		
		
		
		
		
		
		