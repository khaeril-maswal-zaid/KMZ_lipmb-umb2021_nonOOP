		<p class="d-inline">
			<?php 				
				foreach( $exspp as 	$sppd ) :
					echo $sppd,"<br>";	
				endforeach; 
			?>
		</p>

		<table class="table table-bordered mt-5" id="JP">
			<thead>
			<tr class="table-warning">
				<th colspan="4"><h6><b>JADWAL PENDAFTARAN</b></h6></th>
			</tr>
			
			<tr class="table-warning"> 
				<th scope="col">PRIODE</th> 
				<th scope="col">PENDAFTARAN</th> 
				<th scope="col">UJIAN</th>
				<th scope="col">PENGUMUMAN</th>  
			</tr> 
		</thead>
			
		<tbody>
			<tr class="table-info"> 
				<td scope="col">Gelombang I</td> 
				<td scope="col"><?=$value["awal_gel_1"]," - ",$value["akhir_gel_1"]?></td> 
				<td scope="col"><?=$value["test_gel_1"]?></td>
				<td scope="col"><?=$value["pengu_gel_1"]?></td>  
			</tr>
			
			<tr class="table-info"> 
				<td scope="col">Gelombang II</td> 
				<td scope="col"><?=$value["awal_gel_2"]," - ",$value["akhir_gel_2"]?></td> 
				<td scope="col"><?=$value["test_gel_2"]?></td>
				<td scope="col"><?=$value["pengu_gel_2"]?></td>  
			</tr>
			
			<tr class="table-info"> 
				<td scope="col">Gelombang III</td> 
				<td scope="col"><?=$value["awal_gel_3"]," - ",$value["akhir_gel_3"]?></td> 
				<td scope="col"><?=$value["test_gel_3"]?></td>
				<td scope="col"><?=$value["pengu_gel_3"]?></td>  
			</tr> 
		</tbody> 
	</table>

</div> <!-- End Container / Buka ada di Kop--> 		