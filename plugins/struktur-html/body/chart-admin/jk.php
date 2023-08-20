<figure class="highcharts-figure">
    <div id="gel"></div>
    <p class="highcharts-description">
        Grafik Pie dengan tampilan 3D menampilkan jumlah pendaftar calon mahasiswa baru berdasarkan Jenis Kelamin yang telah disusun dengan format persentase.
    </p>
</figure>


		<script type="text/javascript">
Highcharts.chart('gel', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    colors: ['#90EC7D', '#7CB5EC'],    
    title: {
        text: 'Universitas Muhammadiyah Bulukumba'
    },
    subtitle: {
        text: 'LIPMB team'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    
    tooltip: {
        pointFormat: '{point.y}  Orang <br/>(<b>{point.percentage:.1f}%)</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        data: [
            ['Perempuan', 
   <?php
 				$jk = mysqli_query($conn, "SELECT jenis_kelamin FROM datacamaba WHERE jenis_kelamin = 'Perempuan' && pilihan_kuliah != '' ");	
 				 		
 				$rows_jk = mysqli_num_rows($jk);	
	echo "$rows_jk";
            
            ?>],
            {
                name: 'Laki-Laki',
                y: <?php
 				$jk = mysqli_query($conn, "SELECT jenis_kelamin FROM datacamaba WHERE jenis_kelamin = 'Laki-Laki' && pilihan_kuliah != '' ");	
 				 		
 				$rows_jk = mysqli_num_rows($jk);	
	echo "$rows_jk,";
            
            ?>
                sliced: true,
                selected: true,                
            }          
        ]
    }]
});
		</script>
		
		
		
		
		
		
		
		
		
		
		
		