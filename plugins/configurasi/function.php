<?php
// Koneksi to databases
//......................
$tahun = date('Y');

$conn = mysqli_connect("localhost", "root", "", "u5363348_sim_lipmb_2021");
// $conn = mysqli_connect("lipmb.umbulukumba.ac.id", "u5363348_lipmb", "lipmb.umbulukumba", "u5363348_sim_lipmb_2021");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// query
function dcmb($ambil)
{
	global $conn;
	$result = mysqli_query($conn, $ambil);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//ambil data admin yang login
if (isset($proses_adm)) {
	session_start();
	if (isset($_SESSION["idmn"])) {
		$fid = $_SESSION["idmn"];
		$fadmin = dcmb("SELECT * FROM akun_admin WHERE id=$fid")[0];
	}
}

// tambah data registrasi
//............................
function tambah1($data)
{
	global $conn;

	//penentuan gelombang pendaftaran (dcmb adalah function query bukan data camaba)		
	$value = dcmb("SELECT * FROM konfigurasi_web_b")[0];
	$dhs = strtotime(date('d-m-Y'));

	$dwg1 = strtotime($value['awal_gel_1']);
	$dwg2 = strtotime($value['awal_gel_2']);
	$dwg3 = strtotime($value['awal_gel_3']);
	$dkg1 = strtotime($value['akhir_gel_1']);
	$dkg2 = strtotime($value['akhir_gel_2']);
	$dkg3 = strtotime($value['akhir_gel_3']);

	//di copy dari 'no-peserta'
	if ($dhs >= $dwg1 && $dhs <= $dkg1) {
		$bisaMendaftar = true;
	} elseif ($dhs >= $dwg2 && $dhs <= $dkg2) {
		$bisaMendaftar = true;
	} elseif ($dhs >= $dwg3 && $dhs <= $dkg3) {
		$bisaMendaftar = true;
	}


	if (!isset($bisaMendaftar)) {
		echo "
    			<script>
    				alert('Mohon Maaf, Pendaftaran belum tersedia. Silahkan hubungi panita pendaftaran !')			
    			</script>
			";
		return false;
		exit;
	}
	if ($dhs > $dkg3) {
		echo "
    			<script>
    				alert('Mohon Maaf, Pendaftaran telah berakhir. Silahkan hubungi panita pendaftaran !')			
    			</script>
			";
		return false;
		exit;
	}

	$ktp = htmlspecialchars($data["ktp"]);
	$nama = htmlspecialchars(strtoupper($data["nama"]));
	$jk = htmlspecialchars($data["jk"]);
	$tempat = htmlspecialchars(ucwords($data["tempat"]));
	$tgl = explode('-', $data["tanggal"]);
	$tanggalL = $tgl[2] . '-' . $tgl[1] . '-' . $tgl[0];
	$Y_lahir = $tgl[0]; //untuk tampilkan data tahun pada chart
	$agama = htmlspecialchars($data["agama"]);
	$telpon = htmlspecialchars($data["telpon"]);
	$provinsi = htmlspecialchars($data["provinsi"]);
	$kota = htmlspecialchars($data["kota"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$alamatemail = htmlspecialchars($data["alamatemail"]);

	$namaayah = htmlspecialchars(strtoupper($data["namaayah"]));
	$namaibu = htmlspecialchars(strtoupper($data["namaibu"]));
	$pkayah = htmlspecialchars($data["pkayah"]);
	$pkibu = htmlspecialchars($data["pkibu"]);
	$noayah = htmlspecialchars($data["noayah"]);
	$noibu = htmlspecialchars($data["noibu"]);

	$gajiayah = htmlspecialchars($data["gajiayah"]);
	$gajiibu = htmlspecialchars($data["gajiibu"]);
	$saudara = htmlspecialchars($data["saudara"]);
	$ke = htmlspecialchars($data["ke"]);

	$nisn = htmlspecialchars($data["nisn"]);
	$namasekolah = htmlspecialchars($data["namasekolah"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$t_lulus = htmlspecialchars($data["t_lulus"]);
	$pk = htmlspecialchars($data["pilihan_kuliah"]);
	$prodi1 = htmlspecialchars($data["prodi1"]);
	$prodi2 = htmlspecialchars($data["prodi2"]);
	$waktu = date("H:i:s");
	$tanggal = date('d-m-Y');

	$query = "INSERT INTO datacamaba VALUES (
					'', '$waktu', '$tanggal', '', '', '', '$ktp', '$nama', '$jk', '$tempat', '$tanggalL', '$Y_lahir', '$agama', '$telpon', '$provinsi', '$kota', '$alamat', '$alamatemail', '$namaayah', '$namaibu', '$pkayah', '$pkibu', '$noayah', '$noibu', '$gajiibu', '$ke', '$gajiayah', '$saudara', '$nisn', '$namasekolah', '$jurusan', '$t_lulus', '', '', '$prodi1', '$prodi2', '$pk', '', '','', '', '', '', '', '', '', ''
					)";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// tambah data pendaftaran
//.........................
function tambah2($data)
{
	global $conn;

	//penentuan gelombang pendaftaran (dcmb adalah function query bukan data camaba)		
	$value = dcmb("SELECT * FROM konfigurasi_web_b")[0];
	include "noPesertaDanPenentuanGel.php";

	//$bisaMendaftar ada no_peserta
	if (!isset($bisaMendaftar)) {
		echo "
    			<script>
    				alert('Mohon Maaf, Pendaftaran belum tersedia. Silahkan hubungi panita pendaftaran !')			
    			</script>
			";
		return false;
		exit;
	}
	if ($dhs > $dkg3) {
		echo "
    			<script>
    				alert('Mohon Maaf, Pendaftaran telah berakhir. Silahkan hubungi panita pendaftaran !')			
    			</script>
			";
		return false;
		exit;
	}

	$id = $data["id"];

	//cek keberadaan foto
	if (!isset($data["file1b"])) {
		echo "
			<script>
				alert('Unggah foto terlebih dahulu')				
			</script>
			";
		return false;
		exit;
	}

	//ulangi jika memilih prodi sama
	$nama = $data["nama"];
	$prodi1 = htmlspecialchars($data["prodi1"]);
	$prodi2 = htmlspecialchars($data["prodi2"]);
	if ($prodi1 == $prodi2) {
		echo "
			<script>
				alert('Jangan pilih prodi yang sama')				
			</script>
			";
		return false;
		exit;
	}


	$pilihan_kuliah = htmlspecialchars($data["pilihan_kuliah"]);

	$no_peserta = $no_psr;
	$gel = explode('-', $no_peserta);
	$gel = end($gel);

	$file1b = $data["file1b"];

	//function ada dibawah
	$file8 = upload($nama);
	if (!$file8) {
		return false;
		exit;
	}

	$alasan = htmlspecialchars($data["alasan"]);
	$waktu = date("H:i:s");
	$tgl = date('d-m-Y');

	$query = "UPDATE datacamaba SET	
					gelombang = '$gel',
					waktu_fix = '$waktu',
					tgl_fix = '$tgl',						
					pilihan_1 = '$prodi1',
					pilihan_2 = '$prodi2',
					pilihan_kuliah = '$pilihan_kuliah',
					no_peserta = '$no_psr',
					file_1 = '$file1b',
					id_file4 = '$id_file4',
					file_4 = '$gedung',
					file_8 = '$file8',
					alasan = '$alasan'

					WHERE id = $id
				";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// Function upload
//......................
function upload($nama)
{
	$namaFile = $_FILES['file8']['name'];
	$ukuranFile = $_FILES['file8']['size'];
	$error = $_FILES['file8']['error'];
	$tmpName = $_FILES['file8']['tmp_name'];

	// cek apakah tidak ada Photo di upload
	if ($error === 4) {
		echo "<script>
				alert('Anda tidak mengunggah raport, ok!');
				</script>";
		$namaFile = "no_raport.pdf";
	}

	// cek yang diapload adalah Raport
	// strtolower ==> mengecilkan huruf kapital pada format file || end ==> mengambil format file
	$ekstensiPhotoValid = ['pdf'];
	$ekstensiPhoto = explode('.', $namaFile);
	$ekstensiPhoto = strtolower(end($ekstensiPhoto));
	if (!in_array($ekstensiPhoto, $ekstensiPhotoValid)) {
		echo "<script>
				alert('format raport harus PDF');
				</script>";
		return false;
		exit;
	}


	// cek jka ukurannya terlalu besar, 1000000 BYT ==> 1MB
	if ($ukuranFile > 2500000) {
		echo "<script>
				alert('Max file Raport 2 MB');
				</script>";
		return false;
		exit;
	}

	// jika lolos pengecekan, photo siap di upload
	// Generet nama photo baru
	$namaFileBaru = uniqid($nama);
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiPhoto;
	move_uploaded_file($tmpName, '../inputan-user/raport-peserta/' . $namaFileBaru);

	return $namaFileBaru;
}

// Function set-akun peserta
//...........................
function registrasi($data)
{
	global $conn;

	// strtolower == > memaksa menjadi huruf kecil dari huruf kapital
	// stripcslashes ==> membersihakn krakter  input
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password1"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT user_name FROM datacamaba WHERE user_name = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
					alert('WARNING ! username ini sudah dipakai ');
				</script>";
		return false;
	}

	// cek komfirmasi pasword
	if ($password !== $password2) {
		echo "<script>
					alert('komfirmasi password tidak sesuai');
				</script>";
		return false;
	}

	$id = $data["id"];
	global $fadmin;
	$fadm = $fadmin["nama"];

	// update user baru ke database
	$query = "UPDATE datacamaba SET 
					user_name = '$username',
					paswoard = '$password',
					file_5 = '$fadm'

					WHERE id = $id
				";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// Function hapus data
//.....................
function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM datacamaba WHERE id = $id");

	return mysqli_affected_rows($conn);
}

// Function hapus admin
//.....................
function hapusa($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM akun_admin WHERE id = $id");

	return mysqli_affected_rows($conn);
}

// edit data camaba
//.........................
function Edit_data_camaba($data)
{
	global $conn;
	$id = $data["id"];

	$ktp = $data["ktp"];
	$nama = $data["nama"];
	$jk = $data["jk"];
	$tempat = $data["tempat"];
	$tgl = explode('-', $data["tanggal"]);
	$tanggal = $tgl[2] . '-' . $tgl[1] . '-' . $tgl[0];
	$Y_lahir = $tgl[0]; //untuk tampilkan data tahun pada chart
	$agama = $data["agama"];
	$telpon = $data["telpon"];
	$provinsi = $data["provinsi"];
	$kota = $data["kota"];
	$alamat = $data["alamat"];
	$alamatemail = $data["alamatemail"];

	$namaayah = $data["namaayah"];
	$namaibu = $data["namaibu"];
	$pekerjaanayah = $data["pkayah"];
	$pekerjaanibu = $data["pkibu"];
	$hpayah = $data["noayah"];
	$hpibu = $data["noibu"];
	$gajiayah = $data["gaji_ayah"];
	$gajiibu = $data["gaji_ibu"];

	$ke = $data["ke"];
	$saudara = $data["saudara"];

	$nisn = $data["nisn"];
	$namasekolah = $data["namasekolah"];
	$jurusan = $data["jurusan"];
	$t_lulus = $data["t_lulus"];

	//ulangi jika memilih prodi sama
	$prodi1 = $data["prodi1"];
	$prodi2 = $data["prodi2"];
	if ($prodi1 == $prodi2 && $prodi1 != '') {
		echo "
			<script>
				alert('Jangan pilih prodi yang sama')				
			</script>
			";
		return false;
		exit;
	}

	$no_peserta = $data["noPeserta"];

	if ($prodi1 == '' && $prodi2 == '') {
		$no_peserta = '';
	}

	$pilihan_kuliah = $data["pilihan_kuliah"];

	if (isset($data["file1b"])) {
		$photo = $data["file1b"];
	} else {
		$photo = $data["potolama"];
	}

	$alasan = $data["alasan"];
	$tgl = date('d-m-Y');

	global $fadmin;
	$fadm = $fadmin["nama"];

	// update user baru ke database
	$query = "UPDATE datacamaba SET	
					no_ktp = '$ktp',
					nama_lengkap = '$nama',
					jenis_kelamin = '$jk',
					tempat_lahir = '$tempat',
					tanggal_lahir = '$tanggal',
					y_lahir = '$Y_lahir',
					agama = '$agama',
					no_hp = '$telpon',
					provinsi = '$provinsi',
					kabupaten = '$kota',
					alamat = '$alamat',
					alamat_email = '$alamatemail',

					nama_ayah = '$namaayah',
					nama_ibu  = '$namaibu',
					pekerjaan_ayah = '$pekerjaanayah',
					pekerjaan_ibu = '$pekerjaanibu',
					hp_ayah = '$hpayah',
					hp_ibu = '$hpibu',

					gaji_ibu = '$gajiibu',
					anak_ke = '$ke',
					gaji_ayah = '$gajiayah',
					saudara = '$saudara',

					nisn = '$nisn',
					nama_sekolah = '$namasekolah',
					jurusan = '$jurusan',
					tahun_lulus = '$t_lulus',
					tgl_fix = tgl_fix,
					pilihan_1 = '$prodi1',
					pilihan_2 = '$prodi2',
					pilihan_kuliah = '$pilihan_kuliah',
					no_peserta = '$no_peserta',
					no_peserta = no_peserta,
					file_1 = '$photo',
					file_6 = '$fadm',
					alasan = '$alasan'

					WHERE id = $id
				";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// Function set pengumuman kelulusan
//...........................
function pengumuman($data)
{
	global $conn;
	$x = count($data) - 1; //jumlah looping (jumlah prodi yg diset)

	$y = implode('-', $data);
	$yy = explode('-', $y);

	global $fadmin; //untuk catat admin yg set
	$fadm = $fadmin["nama"];

	for ($i = 1; $i < $x; $i = $i + 2) {
		$p_lulus = $yy[$i];
		$id = $yy[$i + 1];

		// update user baru ke database
		$query = "UPDATE datacamaba SET	
						file_3 = '$p_lulus',
						file_7 = '$fadm' 
						WHERE id = $id							
					";
		mysqli_query($conn, $query);

		if ($x - $i == 2) {
			return mysqli_affected_rows($conn);
		}
	}
}

// Function web set ruangan
//...........................
function webkonf_a($data)
{
	global $conn;

	$imp = implode('|', $data);
	$exp = explode('|', $imp);

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_a VALUES
					('', '$exp[2]', '$exp[3]', '$exp[4]', '$exp[5]', '$exp[6]', '$exp[7]', '$exp[8]', '$exp[9]', '$exp[10]', '$exp[11]', '$exp[12]', '$exp[13]', '$exp[14]', '$exp[15]', '$exp[16]', '$exp[17]', '$exp[18]', '$exp[19]', '$exp[20]', '$exp[21]', '$exp[0]', '$exp[1]', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_a";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// Function web set tahapan
//...........................
function webkonf_b($data)
{
	global $conn;

	for ($j = 1; $j < 4; $j++) {
		$tahapan = ['', 'awal' . $j, 'akhir' . $j, 'ujian' . $j, 'pengumuman' . $j];

		for ($i = 1; $i < 5; $i++) {
			$tahapan[$i] = explode('T', $data[$tahapan[$i]]);
			$wkt[] = $tahapan[$i][1];
			$tahapan[$i] = explode('-', $tahapan[$i][0]);
			$tgl[] = $tahapan[$i][2] . '-' . $tahapan[$i][1] . '-' . $tahapan[$i][0];
		}
	}

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_b VALUES
					('', '$tgl[0]', '$wkt[0]', '$tgl[1]', '$wkt[1]', '$tgl[2]', '$wkt[2]', '$tgl[3]', '$wkt[3]', '$tgl[4]', '$wkt[4]', '$tgl[5]', '$wkt[5]', '$tgl[6]', '$wkt[6]', '$tgl[7]', '$wkt[7]', '$tgl[8]', '$wkt[8]', '$tgl[9]', '$wkt[9]', '$tgl[10]', '$wkt[10]', '$tgl[11]', '$wkt[11]', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_b";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


// Function web set file_pengumuman
//...........................
function webkonf_c($data)
{
	global $conn;

	$nama = $data['nama'];
	$no_sk = $data['no_sk'];
	$ditetapkan = $data['ditetapkan'];
	$pada = $data['pada'];
	$nbm = $data['nbm'];
	//$sk = $data['sk'];

	$sk = uploadsk();
	if (!$sk) {
		return false;
		exit;
	}

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_c VALUES
					('', '$nama', '$no_sk', '$ditetapkan', '$pada', '$sk', '$nbm', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_c";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// Function upload
//......................
function uploadsk()
{
	$namaFile = $_FILES['sk']['name'];
	$ukuranFile = $_FILES['sk']['size'];
	$error = $_FILES['sk']['error'];
	$tmpName = $_FILES['sk']['tmp_name'];

	// cek apakah tidak ada Photo di upload
	if ($error === 4) {
		echo "<script>
				alert('unggah raport terlebih dahulu');
				</script>";
		return false;
		exit;
	}

	// cek yang diapload adalah pdf
	// strtolower ==> mengecilkan huruf kapital pada format file || end ==> mengambil format file
	$ekstensiPhotoValid = ['pdf'];
	$ekstensiPhoto = explode('.', $namaFile);
	$ekstensiPhoto = strtolower(end($ekstensiPhoto));
	if (!in_array($ekstensiPhoto, $ekstensiPhotoValid)) {
		echo "<script>
				alert('format SK-R harus PDF');
				</script>";
		return false;
		exit;
	}

	// cek jka ukurannya terlalu besar, 1000000 BYT ==> 1MB
	if ($ukuranFile > 2005000) {
		echo "<script>
				alert('Max file SK-R 2 MB');
				</script>";
		return false;
		exit;
	}

	// jika lolos pengecekan, photo siap di upload
	// Generet nama photo baru
	$namaFileBaru = 'SK-Rektor Pengumuman';
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiPhoto;
	move_uploaded_file($tmpName, '../inputan-user/sk-rektor/' . $namaFileBaru);

	return $namaFileBaru;
}

// Function web set admin penerimaan camaba
//...........................
function webkonf_d($data)
{
	global $conn;

	$nama = $data['nama'];
	$devisi = $data['devisi'];
	$nik = $data['nik'];
	$wa = $data['wa'];
	$biaya = $data['biaya'];
	$terbilang = $data['terbilang'];

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_d VALUES
					('', '$nama', '$devisi', '$nik', '$wa', '$biaya', '$terbilang', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_d";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// Function web set tahapan ujian penerimaan camaba
//...........................
function webkonf_e($data)
{
	global $conn;

	$sv = $data['start_validasi'];
	$fv = $data['finis_validasi'];
	$su = $data['start_ujian'];
	$fu = $data['finis_ujian'];
	$sw = $data['start_wawancara'];
	$fw = $data['finis_wawancara'];

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_e VALUES
					('', '$sv', '$fv', '$su', '$fu', '$sw', '$fw', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_e";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// SPP
//...........................
function webkonf_f($data)
{
	global $conn;

	$spp = $data['spp'];

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_f VALUES
					('', '$spp', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_f";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// BP
//...........................
function webkonf_g($data)
{
	global $conn;

	$bpp1 = $data['bpp1'];
	$spp1 = $data['spp1'];
	$ak1 = $data['ak1'];
	$ik1 = $data['ik1'];
	$bpp2 = $data['bpp2'];
	$spp2 = $data['spp2'];
	$ak2 = $data['ak2'];
	$ik2 = $data['ik2'];
	$bpp3 = $data['bpp3'];
	$spp3 = $data['spp3'];
	$ak3 = $data['ak3'];
	$ik3 = $data['ik3'];
	$bpp4 = $data['bpp4'];
	$spp4 = $data['spp4'];
	$ak4 = $data['ak4'];
	$ik4 = $data['ik4'];
	$bpp5 = $data['bpp5'];
	$spp5 = $data['spp5'];
	$ak5 = $data['ak5'];
	$ik5 = $data['ik5'];
	$bpp6 = $data['bpp6'];
	$spp6 = $data['spp6'];
	$ak6 = $data['ak6'];
	$ik6 = $data['ik6'];
	$bpp7 = $data['bpp7'];
	$spp7 = $data['spp7'];
	$ak7 = $data['ak7'];
	$ik7 = $data['ik7'];
	$bpp8 = $data['bpp8'];
	$spp8 = $data['spp8'];
	$ak8 = $data['ak8'];
	$ik8 = $data['ik8'];

	global $fadmin;
	$fadm = $fadmin["nama"];

	$query = "INSERT INTO konfigurasi_web_g VALUES
					('', '$bpp1', '$bpp2', '$bpp3', '$bpp4', '$bpp5', '$bpp6', '$bpp7', '$bpp8', '$spp1', '$spp2', '$spp3', '$spp4', '$spp5', '$spp6', '$spp7', '$spp8', '$ak1', '$ak2', '$ak3', '$ak4', '$ak5', '$ak6', '$ak7', '$ak8', '$ik1', '$ik2', '$ik3', '$ik4', '$ik5', '$ik6', '$ik7', '$ik8', '$fadm')
					";

	$del = "DELETE FROM konfigurasi_web_g";

	mysqli_query($conn, $del);
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// Function tambah admin
//...........................
function tambah_admin($data)
{
	global $conn;

	$nama = $data['nama'];
	$nik = $data['nik'];
	$wa = $data['wa'];
	$devisi = $data['devisi'];
	$jk = $data['jk'];
	$a = $data['a'];
	$fotob = $data['fotob'];

	// strtolower == memaksa menjadi huruf kecil dari huruf kapital
	// stripcslashes == membersihakn krakter input
	$email = strtolower(stripcslashes($data["email"]));
	$password1 = mysqli_real_escape_string($conn, $data["password1"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT email FROM akun_admin WHERE email = '$email'");

	if (mysqli_fetch_assoc($result)) {
		echo "
				<script>
					alert('WARNING ! email ini sudah dipakai ');
				</script>
				";
		return false;
	}

	// cek komfirmasi pasword
	if ($password1 !== $password2) {
		echo "
				<script>
					alert('Komfirmasi password tidak sesuai');
				</script>";
		return false;
	}

	// enkripsi password
	$password_baru = password_hash($password1, PASSWORD_DEFAULT);

	$query = "INSERT INTO akun_admin VALUES
					('', '$nama', '$nik', '$wa', '$devisi', '$email', '$password_baru', '$jk', '$a', '$fotob')
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
