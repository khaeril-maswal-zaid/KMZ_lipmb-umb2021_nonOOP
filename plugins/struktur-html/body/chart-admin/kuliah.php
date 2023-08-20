<figure class="highcharts-figure">
    <div id="kuliah"></div>
    <p class="highcharts-description">
        Grafik pyramid menunjukkan total pendaftar calon mahasiswa baru yang telah dikelompokkan dalam pilihan kuliah Reguluer dan Kuliah Non Reguler.
    </p>
</figure>

<script type="text/javascript">
	Highcharts.chart('kuliah', {
    chart: {
        type: 'columnpyramid'
    },
    title: {
        text: 'Universitas Muhammadiyah Bulukumba'
    },
    subtitle: {
        text: 'LIPMB team'
    },
    colors: ['#228B22', '#0000CD'],
    xAxis: {
        crosshair: true,
        labels: {
            style: {
                fontSize: '14px'
            }
        },
        type: 'category'
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah pendaftar'
        }
    },
    tooltip: {
        valueSuffix: ' Orang'
    },
    series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: [
            ['Kuliah Reguler (Kuliah Aktif)', 
            <?php
            $reg = mysqli_query($conn, "SELECT pilihan_kuliah FROM datacamaba WHERE pilihan_kuliah = 'Kuliah Reguler'");
            $reg = mysqli_num_rows($reg);	
            echo "$reg"; ?>],
            ['Kuliah Non Reguler (Kuliah Efektif)', 
            <?php
            $noreq = mysqli_query($conn, "SELECT pilihan_kuliah FROM datacamaba WHERE pilihan_kuliah = 'Kuliah Non Reguler'");
 		
$noreq = mysqli_num_rows($noreq);
             echo "$noreq,"; ?>],
        ],
        showInLegend: false
    }]
});
</script>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	