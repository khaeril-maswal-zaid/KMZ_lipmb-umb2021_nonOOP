<main role="main" class="container-fluid pt-3 mb-0">
	<section class="jumbotron text-center pt-5 pb-3 mb-3">
    <div class="container">
      <h1>Database Admin SIM-LIPMB</h1>
      <p class="lead text-muted"> Universitas Muhammadiyah Bulukumba <?=date('Y')?></p>
    </div>
  </section>

  <section>
    <table id="example" class="table table-striped table-bordered display nowrap" style="width:100%">
      <thead>
        <tr>
          <th>NO</th>
          <th>Aksi</th>          
          <th>Foto</th>
          <th>Nama</th>                   
          <th>Jenis kelamin</th>
          <th>NIK</th>
          <th>Devisi</th>
          <th>Email</th>                                                                                       
          <th>No HP / WA</th>                                            
          <th>Admin</th>
          <th>Idv</th>                                          
        </tr>
      </thead>
      
      <tbody>
        <?php 
          $No=1;
          foreach( $admins as 	$adm ) :
        ?>
        <tr>
          <td><?=$No; ?></td>
          <td>			  
            <a href="?admin=akun&idv=<?=$adm["id"]; ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdropb">View</a>                                 		                                                                                          
            <a href="../plugins/configurasi/proses-admin.php?delete=data&admin=<?=$adm["id"]; ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> 
          </td>
          <td><img src="../plugins/inputan-user/foto-admin/<?=$adm["foto"]; ?>" height="90"></td>                                         
          <td><?=$adm["nama"]; ?></td>
          <td><?=$adm["jk"]; ?></td>
          <td><?=$adm["nik"]; ?></td>
          <td><?=$adm["devisi"]; ?></td>
          <td><?=$adm["email"]; ?></td>                                                                                      
          <td><?=$adm["wa"]; ?></td>
          <td><?=$adm["a"]; ?></td>                                                                                                                                
          <td><?=$adm["id"]; ?></td>                                                                                   
        </tr>																
        <?php 
          $No++;
          endforeach;
        ?>
      </tbody>
    </table>
  </section>
  <a href="?adminf=tambah" class="btn btn-primary btn-lg shadow mb-3 mt-4" ><b>Tambah admin</b></a>
</main>