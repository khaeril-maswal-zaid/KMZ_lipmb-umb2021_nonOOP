<figure class="highcharts-figure">
    <div id="prodi2"></div>
    <p class="highcharts-description">
        Grafik colums2 menunjukkan jumlah pendaftar calon mahasiswa baru berdasarkan pilihan prodi kedua (cadangan) kemudian dikelompokkan kembali dalam pilihan kuliah Reguluer dan Kuliah Non Reguler.
    </p>
</figure>


		<script type="text/javascript">
Highcharts.chart('prodi2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Universitas Muhammadiyah Bulukumba'
    },
    subtitle: {
        text: 'LIPMB team'
    },
    colors: ['#228B22', '#0000CD'],
    xAxis: {
        categories: ['Bhs. Inggris', 'Bhs. Indonesia', 'Biologi', 'PNF', 'Aktuaria', 'Peternakan', 'PWK', 'Kimia']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah pendaftar Pilihan 2'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'red'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Reguler',
        data: [<?php
        $y = 0;
    	while ($y < 8) {    		
    	
    	$pil_1 = ["FAK. FKIP : Pend. Bahasa Inggris",
    	"FAK. FKIP : Pend. Bahasa Indonesia",
   	  "FAK. FKIP : Pend. Biologi",    	 
    	 "FAK. FKIP : Pend. Non Formal", 
    	 "FAK. MIPA : Aktuaria",
    	 "FAK. MIPA : Peternakan",
    	 "FAK. Tekhnik : Perencanaan Wilayah dan Kota",
    		"FAK. MIPA : Kimia"];
    	
    	$x = $pil_1[$y];
    	
 				$date1 = mysqli_query($conn, "SELECT pilihan_2 FROM datacamaba WHERE pilihan_2 = '$x' && pilihan_kuliah = 'Kuliah Reguler'");
 					
 					
 				$rows1 = mysqli_num_rows($date1);	
	echo "$rows1,";
	
	$y++;
	}
 ?>]
    }, {
        name: 'Non Reguler',
        data: [<?php
        $y = 0;
    	while ($y < 8) {    		
    	
    	$pil_1 = ["FAK. FKIP : Pend. Bahasa Inggris",
    	"FAK. FKIP : Pend. Bahasa Indonesia",
   	  "FAK. FKIP : Pend. Biologi",    	 
    	 "FAK. FKIP : Pend. Non Formal", 
    	 "FAK. MIPA : Aktuaria",
    	 "FAK. MIPA : Peternakan",
    	 "FAK. Tekhnik : Perencanaan Wilayah dan Kota",
    		"FAK. MIPA : Kimia"];
    	
    	$x = $pil_1[$y];
    	
 				$date1 = mysqli_query($conn, "SELECT pilihan_2 FROM datacamaba WHERE pilihan_2 = '$x' && pilihan_kuliah = 'Kuliah Non Reguler'");
 					
 					
 				$rows1 = mysqli_num_rows($date1);	
	echo "$rows1,";
	
	$y++;
	}
 ?>]
    }]
});
		</script>










