<main class="container-fluid pt-4 mb-4">
	<h2 class="text-center">Setting Biaya Kuliah<br> Calon Mahasiswa Baru Tahun <?=date('Y')?></h2>
	<h5 class="text-center">Universitas Muhammadiyah Bulukumba</h5>
		 
	<form action="../plugins/configurasi/proses-admin.php" method="post">	
		<div class="bg-white my-3 p-2 border border-warning rounded-top"> 
		 	<div class="alert alert-primary"> 
				<strong>Ketikkan Biaya Kuliah</strong>
            </div> 
            
            <table class="table table-bordered b-kuliah">
                <thead>
                    <tr class="table-warning">
                        <th scope="col" rowspan="2" class="align-middle">No</th>
                        <th scope="col" rowspan="2" class="align-middle">Program Studi</th>
                        <th scope="col" rowspan="2" class="align-middle">BPP *<br> (A)</th>
                        <th scope="col" rowspan="2" class="align-middle">SPP **<br> (B)</th>
                        <th scope="col" colspan="3">Biaya Tambahan <br> (C)</th>
                        <th scope="col" rowspan="2" class="align-middle">Jumlah <br>(A + B + C)</th>
                    </tr>
                    <tr class="table-warning">
                        <th scope="col">Infaq dan KRU ***</th>
                        <th scope="col">Almamater dan KTM ****</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $jurusan = [1=>'Pend. Bhs. Inggris', 'Pend. Bhs. Indonesia', 'Pend. Biologi', 'Pend. Non Formal', 'Ilmu Aktuaria', 'Kimia', 'Peternakan', 'PWK'];

                        for ($i=1; $i < 9; $i++) :
                    ?>

                    <tr class="table-info">
                        <td scope="col"><?=$i; ?></td>
                        <td scope="col" class="text-left"><?=$jurusan[$i]; ?></td>
                        <td scope="col">
                            <div class="form-group">
                                <input name="bpp<?=$i; ?>" class="form-control" required value="<?=$valuebp['bpp'.$i]?>">
                            </div>
                        </td>
                        <td scope="col"><div class="form-group">
                                <input name="spp<?=$i; ?>" class="form-control" required value="<?=$valuebp['spp'.$i]?>">
                            </div></td>
                        <td scope="col"><div class="form-group">
                                <input name="ik<?=$i; ?>" class="form-control" required value="<?=$valuebp['ik'.$i]?>">
                            </div></td>
                        <td scope="col"><div class="form-group">
                                <input name="ak<?=$i; ?>" class="form-control" required value="<?=$valuebp['ak'.$i]?>">
                            </div></td>
                        <td scope="col"><?=rupiah($valuebp['ik'.$i]+$valuebp['ak'.$i])?></td>
                        <td scope="col"><?=rupiah($valuebp['bpp'.$i]+$valuebp['spp'.$i]+($valuebp['ik'.$i]+$valuebp['ak'.$i]))?></td>
                    </tr>

                    <?php
                        endfor;
                    ?>
            </table>
		 			
		</div> <!-- /Gairs Kuning -->
							 
        <div class="row"> 
            <div class="offset-sm-1 col-sm-11">
                <button type="submit" name="sbp" class="btn btn-success"><strong>SET !</strong></button>

                <div class="btn btn-outline-secondary float-right">Last edited by <?=$valuebp['edited']?></div>
            </div>
        </div>

	</form>
</main> <!-- End Container -->
		 
 
 
 
		 			
		 			
		 			
		 			
		 			
		 			
		 			