<figure class="highcharts-figure">
    <div id="tmt"></div>
    <p class="highcharts-description">
        Grafik colums atau balok ini menampilkan informasi tahun tamat peserta di SLTA yang telah disusun mulai dari dalam 10 tahun terkhir
    </p>
</figure>


		<script type="text/javascript">
Highcharts.chart('tmt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Universitas Muhammadiyah Bulukumba'
    },
    subtitle: {
        text: 'LIPMB team'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Tahun tamat peserta di SLTA'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Pendaftar tamat SLTA di Tahun ini : <b>{point.y:1f} Orang</b>'
    },
    series: [{
        name: 'Tahun Tamat',
        data: [
        <?php
        for ($i=2011; $i < 2022; $i++) {
       	$tt = mysqli_query($conn, "SELECT tahun_lulus FROM datacamaba WHERE tahun_lulus = '$i' && pilihan_kuliah != ''");
       	
       	$rows1 = mysqli_num_rows($tt);	
	echo "['$i', $rows1],";
      }
      ?>
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
		</script>
		
		
		
		
		
		
		
		
		
		
		