<main role="main" class="container-fluid pt-3 mb-0">
  <section class="jumbotron text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Database Biodata Lengkap</h1>
      <p class="lead text-muted">Calon Mahasiswa baru oleh Lembaga Informasi Penerimaan Mahasiswa Baru (LIPMB) Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
      <p>        
        <a href="?dtb=detail_data&gel=1" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='1') {echo "active";} ?> btn-outline-success my-2">Gel. 1</a>
        <a href="?dtb=detail_data&gel=2" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='2') {echo "active";} ?> btn-outline-success my-2">Gel. 2</a>
        <a href="?dtb=detail_data&gel=3" class="btn <?php if (isset($_GET['gel']) && $_GET['gel']=='3') {echo "active";} ?> btn-outline-success my-2">Gel. 3</a>
        <a href="?dtb=detail_data" class="btn <?php if (!isset($_GET['gel'])) {echo "active";} ?> btn-outline-primary my-2">Semua Gel.</a>
      </p> 
    </div>
  </section>

  <section>
    <table id="example" class="table table-striped table-bordered display nowrap" style="width:100%">
      <thead>
        <tr>
            <th>NO</th>
            <th>Aksi</th>
            <th>Foto</th>           
            <th>Tgl Registrasi</th>
            <th>Tgl Pendaftaran</th>
            <th>Nama Lengkap</th>
            <th>No Peserta</th>        
            <th>NO KTP (NIK)</th>
            <th>Jenis Kelamin</th>
            <th>Tempat / Tanggal Lahir</th>
            <th>Agama</th>
            <th>No HP (WA)</th>
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
            <th>Alasan</th>
            <th>Username</th>
            <th>Pasword</th>
            <th>Ket</th>
        </tr>
      </thead>

      <tbody>
        <?php 
          $No=1; 					
          foreach( $datacamaba_pendaftaran as 	$dtcmb ) :
        ?>
        <tr>
          <td><?=$No; ?></td>
          <td>
            <a href="?cv=peserta&id=<?=$dtcmb["id"]; ?>" class="btn btn-info btn-sm" >Lihat cv</a>
            <a href="?edit=data&id=<?= $dtcmb["id"]; ?>" class="btn btn-primary btn-sm <?php if($admin['a'] == "Pemantau"){echo 'disabled';}?>">Edit</a>
          </td>
          <td><img src="../plugins/inputan-user/foto-peserta/<?=$dtcmb['file_1']; ?>" height="90" alt="<?=$dtcmb['file_1']; ?>"></td>
          <td><?=$dtcmb["waktu_fix"]; ?> | <?=$dtcmb["tgl_daftar"]; ?></td>
          <td><?=$dtcmb["waktu_fix"]; ?> | <?=$dtcmb["tgl_fix"]; ?></td>
          <td><?=strtoupper($dtcmb["nama_lengkap"]); ?></td> 
          <td><?=$dtcmb["no_peserta"]; ?></td>
          <td><?=$dtcmb["no_ktp"]; ?></td>
          <td><?=$dtcmb["jenis_kelamin"]; ?></td>
          <td><?=$dtcmb["tempat_lahir"]; ?>/ <?=$dtcmb["tanggal_lahir"]; ?></td>        
          <td><?=$dtcmb["agama"]; ?></td>    
          <td><?=$dtcmb["no_hp"]; ?></td>
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
          <td><?=$dtcmb["alasan"]; ?></td>
        <td><?=$dtcmb["user_name"]; ?></td>
        <td><?=$dtcmb["paswoard"]; ?> </td>  
          <td><?=$dtcmb["file_6"]; ?></td>
        </tr>
        <?php 
          $No++;
          endforeach; 
        ?>
      </tbody>
    </table>

    <a href="../plugins/struktur-html/export/excel/exp_detail_data.php<?php if(isset($_GET['gel'])){echo "?gel=".$_GET['gel'];};?>" class="btn btn-success btn-lg shadow mb-3 mt-4" ><b>Export Excel</b></a>
  </section>
</main>