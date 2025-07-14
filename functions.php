<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bank");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
function registrasi($data)
{
	global $conn;
	$no = mysqli_query($conn, "SELECT * FROM users ORDER BY idUser DESC");
	$noArr = mysqli_fetch_array($no);
	$row = $noArr[0];
	$takeId = substr($row, -3);
	$lastId = (int) $takeId;
	$newId = $lastId + 1;
	$hitung = (string) $newId;
	if (strlen($hitung) == 1) {
		$format = "USR" . "00" . $hitung;
	} else if (strlen($hitung) == 2) {
		$format = "USR" . "0" . $hitung;
	} else {
		$format = "USR" . $hitung;
	}
	$namalengkap = (stripslashes($data["nama"]));
	$nik = (stripslashes($data["nik"]));
	$alamat = (stripslashes($data["alamat"]));
	$telepon = (stripslashes($data["telepon"]));
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);
	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Akun anda sudah terdaftar!');
				</script>";
		return false;
	}
	// untuk mengatasi username kosong
	if (empty(trim($username))) {
		echo "<script>
				alert('Dimohon untuk mengisi username');
				</script>";
		return false;
	}
	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert ('Konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}
	// cek apakah user milih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarlama;
	} else {
		$gambar = uploadGambar();
	}
	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('$format', '$namalengkap', '$gambar','$nik', '$alamat', '$telepon', '$username', '$password')");
	return mysqli_affected_rows($conn);
}
// pengajuan tabungan
function tabungan($data)
{
	global $conn;
	$no = mysqli_query($conn, "SELECT * FROM proses_pengajuan ORDER BY id_pengajuan");
	$noArr = mysqli_fetch_array($no);
	$row = $noArr[0];
	$takeId = substr($row, -3);
	$lastId = (int) $takeId;
	$newId = $lastId + 1;
		$hitung = (string) $newId;
	if (strlen($hitung) == 1) {
		$format = "USR" . "00" . $hitung;
	} else if (strlen($hitung) == 2) {
		$format = "USR" . "0" . $hitung;
	} else {
		$format = "USR" . $hitung;
	}
	$nama_lengkap = (stripslashes($data["nama_lengkap"]));
	$nik = stripslashes($data["nik"]);
	$ktp = stripslashes($data["ktp"]);
	$nama_ibu_kandung = stripslashes($data["nama_ibu_kandung"]);
	$alamat = stripslashes($data["alamat"]);
	$telepon = stripslashes($data["telepon"]);
	$jenis_tabungan = stripslashes($data["jenis_tabungan"]);
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$gambarLama = htmlspecialchars($data["gambarlama"]);
	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Akun anda sudah terdaftar!');
				</script>";
		return false;
	}
	// untuk mengatasi username kosong
	if (empty(trim($username))) {
		echo "<script>
				alert('Dimohon untuk mengisi username');
				</script>";
		return false;
	}
	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert ('Konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}
	
if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama; // gunakan gambar lama
} else {
    $gambar = uploadGambartabungan();
    if (!$gambar) {
        return false; // jika upload gagal
    }
}

	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('$format','$nama_lengkap', '$gambar','$nik', '$ktp', '$alamat', '$telepon','$nama_ibu_kandung','$jenis_tabungan', '$username', '$password','$password2')");
	return mysqli_affected_rows($conn);
}

function uploadGambartabungan()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
        return false;
    }

    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = strtolower(pathinfo($namafile, PATHINFO_EXTENSION));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "<script>alert('Yang Anda upload bukan gambar');</script>";
        return false;
    }

    if ($ukuranfile > 1000000) {
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }

    $namafilebaru = uniqid() . '.' . $ekstensigambar;
    move_uploaded_file($tmpname, 'img/tbg/' . $namafilebaru);

    return $namafilebaru;
}



function tambahberita($data)
{
	global $conn;

	$no = mysqli_query($conn, "SELECT * FROM berita ORDER BY idBerita DESC");
	$noArr = mysqli_fetch_array($no);
	if ($noArr == null) {
		$row = 000;
	} else {
		$row = $noArr[0];
	}
	$takeId = substr($row, -3);
	$lastId = (int) $takeId;
	$newId = $lastId + 1;
	$hitung = (string) $newId;

	if (strlen($hitung) == 1) {
		$format = "BRT" . "00" . $hitung;
	} else if (strlen($hitung) == 2) {
		$format = "BRT" . "0" . $hitung;
	} else {
		$format = "BRT" . $hitung;
	}

	$judul = (stripslashes($data["judul"]));
	$isi = (stripslashes($data["isi"]));
	$sumber = (stripslashes($data["sumber"]));
	$gambar = uploadberita();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO berita
		   VALUES
	   ('$format', '$judul', '$isi', '$gambar', '$sumber')
	   ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function uploadberita()
{

	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error == 4) {
		echo "<script>
				alert('Pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	//cek apakah yang diupload gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'jfif'];
	$ekstensigambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensigambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
 				alert('Yang anda upload bukan gambar!');
 			  </script>";
		return false;
	}

	//cek jika ukurannya terlalu besar
	if ($ukuranFile > 2000000) {
		echo "<script>
				alert('Ukuran gambar terlaliu besar!');
			  </script>";
		return false;
	}

	//lolos penngecekan gambar, siap diupload
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/berita/' . $namaFileBaru);
	return $namaFileBaru;
}

function uploadGambar()
{
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	// cek apaakadah  ada gambar yg di upload
	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu');
				</script>
				";
	}
	// cek apakah yang di uypload gambar
	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));
	if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
		echo "<script>
				alert('yang anda upload bukan gambar');
				</script>
				";
		return false;
	}

	// cek ukuran gambar
	if ($ukuranfile > 1000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar');
				</script>
				";
		return false;
	}
	// generate nama file
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;
	// lolos pengecekan semua
	move_uploaded_file($tmpname, 'img/user/' . $namafilebaru);

	return $namafilebaru;
}
function ubah($data)
{

	global $conn;

	$idUser = $_GET["idUser"];
	$namaUser = htmlspecialchars($data["nama"]);
	$nik = htmlspecialchars($data["nik"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$telepon = htmlspecialchars($data["telepon"]);
	$username = htmlspecialchars($data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);
	// cek apakah user milih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarlama;
	} else {
		$gambar = uploadGambar();
	}

	if ($password !== $password2) {
		echo "<script>
				alert ('Konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}

	$query = "UPDATE users SET
				namaUser = '$namaUser',
				gambar = '$gambar',
				nik = '$nik',
				alamat = '$alamat',
				telepon = '$telepon',
				username = '$username',
				passwordUser = '$password',
			WHERE idUser = '$idUser'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function ubahAdmin($data)
{

	global $conn;

	$idAdmin = $_GET["IdAdmin"];
	$namaAdmin = htmlspecialchars($data["nama"]);
	$username = htmlspecialchars($data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	if ($password !== $password2) {
		echo "<script>
				alert ('Konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}

	$query = "UPDATE admins SET
				namaAdmin = '$namaAdmin',
				usernameAdmin = '$username',
				passwordAdmin = '$password'
			WHERE IdAdmin = '$idAdmin'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function editPengguna($data)
{

	global $conn;

	$idUser = $_GET["idUser"];
	$namaUser = htmlspecialchars($data["nama"]);
	$nik = htmlspecialchars($data["nik"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$telepon = htmlspecialchars($data["telepon"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);
	// cek apakah user milih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarlama;
	} else {
		$gambar = uploadGambar();
	}

	$query = "UPDATE users SET
				namaUser = '$namaUser',
				gambar = '$gambar',
				nik = '$nik',
				alamat = '$alamat',
				telepon = '$telepon',
			WHERE idUser = '$idUser'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function editBerita($data)
{
	global $conn;
	$idBerita = $_GET["idBerita"];
	$judul = htmlspecialchars($data["judul"]);
	$isi = htmlspecialchars($data["isi"]);
	$sumber = htmlspecialchars($data["sumber"]);
	$gambar = uploadberita();
	if (!$gambar) {
		return false;
	}

	$query = "UPDATE berita SET
				judul = '$judul',
				isi = '$isi',
				gambar = '$gambar',
				sumber = '$sumber'
			WHERE idBerita = '$idBerita'
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus7($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM berita WHERE idBerita = '$id'");
	return mysqli_affected_rows($conn);
}
