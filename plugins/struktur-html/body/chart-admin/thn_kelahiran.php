<?php
				$tl1 = mysqli_query($conn, "SELECT y_lahir FROM datacamaba WHERE pilihan_kuliah != ''");       
						
					$rows = [];
					while( $row = mysqli_fetch_assoc($tl1) ) {				
							$rows[] = $row["y_lahir"];
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
    <div id="klh"></div>
    <p class="highcharts-description">
        Grafik dengan lingkaran 180 derajat ini menampilkan informasi tahun kelahiran peserta, juga telah ditampilkan dalam format persentase.
    </p>
</figure>



		<script type="text/javascript">
Highcharts.chart('klh', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: '<b>Tahun <br> <b> kelahiran <br> <b>peserta</b>',
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },
    tooltip: {
        pointFormat: '{series.name}: {point.y} Orang <b> ({point.percentage:.1f}%)</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Lahir ditahun ini',
        innerSize: '50%',
        data: [
      <?php
        for ($a = 0; $a <= $yy; $a++) {
       $i = $expxy["$a"];
       $j = $expxx["$a"];
       
	echo "['$i', $j],";
      }
      ?>
       ]
    }]
});

		</script>
		
		
		
		
		
		
		
		
		
		
		
		
		