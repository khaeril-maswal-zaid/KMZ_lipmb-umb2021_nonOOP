<?php
	include '../../../configurasi/query_for_export.php';
	header("Content-disposition: attachment; filename = Registrasi_".$x);
?>

<!doctype html>
<html lang="en">
    <head>
    </head>

    <body>
        <h2>
            DATABASES REGISTRASI CALON MAHASISWA BARU<br>
            UNIVERSITAS MUHAMMADIYAH BULUKUMBA <br>
            TAHUN 2021
        </h2>
        
        <table border="1" style="width : 6000px">
            <tr>
                <th>NO</th>
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
                                   
            <?php 
                $No=1;		
                foreach( $datacamaba_registrasi as 	$dtcmb ) :
            ?>

            <tr>
                <td><?=$No; ?></td>
                <td><?=$dtcmb["waktu_daftar"]; ?> | <?=$dtcmb["tgl_daftar"]; ?></td>
                <td><?=strtoupper($dtcmb["nama_lengkap"]); ?></td>
                <td><?=$dtcmb["no_hp"]; ?></td>
                <td><?=ucwords($dtcmb["tempat_lahir"]); ?>/ <?=$dtcmb["tanggal_lahir"]; ?> </td>     
                <td><?=$dtcmb["user_name"]; ?></td>
                <td><?=$dtcmb["paswoard"]; ?> </td>                                  
                <td><?=$dtcmb["jenis_kelamin"]; ?></td>      
                <td>'<?=$dtcmb["no_ktp"]; ?></td>
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
                <td></td>                                                                                   
            </tr>	

            <?php 
                $No++;
                endforeach; 
            ?>                                                                 
        </table>
    </body>
</html>

