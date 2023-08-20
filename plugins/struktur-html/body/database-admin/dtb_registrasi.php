<main role="main" class="container-fluid pt-3 mb-0">
  <section class="jumbotron text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Database Registrasi</h1>
      <p class="lead text-muted">Calon Mahasiswa baru oleh Lembaga Informasi Penerimaan Mahasiswa Baru (LIPMB) Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
    </div>
  </section>

  <section>
    <table id="example" class="table table-striped table-bordered display nowrap" style="width:100%">
    <thead>
      <tr>
        <th>NO</th>
        <th>Aksi</th>
        <th>Waktu Registrasi</th>          
        <th>Nama Lengkap</th>
        <th>NO Hp</th>
        <th>Tempat/ Tgl Lahir</th>                                                                                       
        <th>Username</th>
        <th>Pasword</th>
             
        <th>Jenis Kelamin</th>
        <th>NO KTP (NIK)</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Alamat Email</th>
        <th>Nama Ayah</th>
        <th>Nama Ibu</th>
        <th>Pekerjaan Ayah</th>
        <th>Pekerjaan Ibu</th>
        <th>NO HP Ayah</th>
        
        <th>NO HP Ibu</th>
        <th>Gaji Ayah</th>
        <th>Gaji Ibu</th>
        <th>Jumlah Saudara</th>
        <th>Anak ke</th>
        <th>NISN</th>
        <th>Nama Sekolah</th>
        <th>Jurusan</th>
        <th>Tahun Lulus</th>
        <th>Pilihan Kuliah</th>
        <th>Pil. Prodi 1</th>
        <th>Pil. Prodi 2</th>
        <th>Ket</th>
      </tr>
    </thead>

    <tbody>
      <?php 
        $No=1;
        foreach( $datacamaba as 	$dtcmb ) :
            
        if($dtcmb["user_name"] && $dtcmb["paswoard"]){
          $btn = 'warning';
        }	else {
          $btn = 'info';
        }	
      ?>
      
      <tr>
        <td><?=$No; ?></td>
        <td>	
          <a href="?set=akun&id=<?=$dtcmb["id"]; ?>" class="btn btn-<?=$btn; ?> btn-sm <?php if($admin['a'] == "Pemantau"){echo 'disabled';}?>">Set Akun</a>                                    		                                  
          <a href="../plugins/configurasi/proses-admin.php?delete=data&id=<?=$dtcmb["id"]; ?>" class="btn btn-danger btn-sm <?php if($admin['a'] == "Pemantau"){echo 'disabled';}?>" onclick="return confirm('Yakin ingin menghapus?')" >Hapus</a>
        </td>
                                                
        <td><?=$dtcmb["waktu_daftar"]; ?> | <?=$dtcmb["tgl_daftar"]; ?></td>
        <td><?=strtoupper($dtcmb["nama_lengkap"]); ?></td>
        <td><?=$dtcmb["no_hp"]; ?></td>
        <td><?=ucwords($dtcmb["tempat_lahir"]); ?>/ <?=$dtcmb["tanggal_lahir"]; ?> </td>     
        <td><?=$dtcmb["user_name"]; ?></td>
        <td><?=$dtcmb["paswoard"]; ?> </td>                                  
        <td><?=$dtcmb["jenis_kelamin"]; ?></td>      
        <td><?=$dtcmb["no_ktp"]; ?></td>
        <td><?=$dtcmb["agama"]; ?></td>  
        <td><?=$dtcmb["alamat"];
            echo ', &nbsp Kab. ';
            echo $dtcmb["kabupaten"];
            echo ', &nbsp Prov. ';
            echo $dtcmb["provinsi"];?>
        </td>
        <td><?=$dtcmb["alamat_email"]; ?></td> 
        <td><?=$dtcmb["nama_ayah"]; ?></td> 
        <td><?=$dtcmb["nama_ibu"]; ?></td>
        <td><?=$dtcmb["pekerjaan_ayah"]; ?></td> 
        <td><?=$dtcmb["pekerjaan_ibu"]; ?></td>
        <td><?=$dtcmb["hp_ayah"]; ?></td> 
        <td><?=$dtcmb["hp_ibu"]; ?></td> 
        <td><?=$dtcmb["gaji_ayah"]; ?></td> 
        <td><?=$dtcmb["gaji_ibu"]; ?></td> 
        <td><?=$dtcmb["saudara"]; ?></td> 
        <td><?=$dtcmb["anak_ke"]; ?></td> 
        <td><?=$dtcmb["nisn"]; ?></td>   
        <td><?=$dtcmb["nama_sekolah"]; ?></td>
        <td><?=$dtcmb["jurusan"]; ?></td>
        <td><?=$dtcmb["tahun_lulus"]; ?></td>
        <td><?=$dtcmb["pilihan_kuliah"]; ?></td>
        <td><?=$dtcmb["pilihan_1"]; ?></td> 
        <td><?=$dtcmb["pilihan_2"]; ?></td>
        <td><?=$dtcmb["file_5"]; ?></td>
      </tr>
                                                            
      <?php 
        $No++;
        endforeach;
      ?>
      </tbody>
    </table>
  </section>

  <a href="../plugins/struktur-html/export/excel/exp_registrasi.php<?php if(isset($_GET['gel'])){echo "?gel=".$_GET['gel'];};?>" class="btn btn-success btn-lg shadow mb-3 mt-4" ><b>Export Excel</b></a>

</main>


