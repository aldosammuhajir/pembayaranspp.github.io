<?php
session_start();
if ($_SESSION['nama'] == '') {
	header("location:../login.php?pesan=curang");
}
include '../action/koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>SPP Online</title>
	<link rel="stylesheet" type="text/css" href="../this.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/brands.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/solid.css">
</head>

<body>
	<nav>
		<a href="index.php" title="Program Pembayaran SPP Nemtas"><img src="../img/logo_program.png"></a>
		<ul>
			<li><a href="siswa.php">Home</a></li>
			<li><a href="bayarspp.php">Bayar SPP</a></li>
			<li><a href="petunjuk.php">Petunjuk</a></li>
			<li style="border-bottom: solid;"><a href="about.php">Tentang Kami</a></li>
			<li style="background-color: #006EFFBF; border-bottom: solid; border-color: #006EFFBF;"><a href="../action/logout_proses.php"><i class="fas fa-sign-out-alt"></i> Logout | <?php echo $_SESSION['nama']; ?></a></li>
		</ul>
	</nav>
	<div class="about">
		<div class="about_box" align="center">
			<div class="about_me">
				<img class="pp" src="../img/natura.jpg">
				<h2>I'm <span>Aldo Sam Muhajir</span></h2>
				<hr style="width: 250px; margin: 5px;">
				<p>
					Semoga halaman ini dibaca Buk Guru <i class="fas fa-smile-beam"></i><br>
					Ibuk Guru yang saya hormati, ini hasil web saya selama sebulan. Saya tidak menyangka bisa membuat website seperti ini buk... Saya sangat bangga, bisa membuat web seperti ini dengan mandiri saking rasa ingin tau yang berlebihan<i class="fas fa-laugh-wink"></i>. Tiap hari saya bikin website ini sampai begadang. Dan rasanya hasilnya benar-benar bikin saya puas<i class="fas fa-smile-beam"></i>. Bahkan saat web ini selesai, rasanya pingin nangis buk<i class="fas fa-grin-squint"></i>. Ini semua karena berkat Ibu Guru. Rasanya saya tidak sia-sia belajar di RPL ini apalagi diajarin sama ibuk. Buk Guru emang terbaik. Terima kasih telah menuntut saya sampai saya bisa membuat website seperti<i class="fas fa-sad-cry"></i><br>
					Dan iya.. Ini website pertama yang benar-benar saya tuntaskan. Saya janji bakal membuat yang lebih baik. Dan saya akan buat yang lebih baik dari ibuk.<i class="fas fa-grin-squint"></i></i>
				</p>
				<br>
				<a class="social1" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></i></a>
				<a class="social2" href="https://www.instagram.com/aldosammuhajir/"><i class="fab fa-instagram"></i></a>
				<a class="social3" href="mailto:aldosammuhajir00@gmail.com"><i class="fas fa-at"></i></a>
			</div>
		</div>
	</div>
	<div class="contact" align="center" title="Contact Us">
		<img src="../img/costumer.svg" align="center">
		<a href="#" title="Contact Us"><i class="fab fa-whatsapp"></i></a>
		<a href="#"><i class="fas fa-phone-alt"></i></a>
	</div>
	<?php
	include '../footer.php';
	?>
</body>

</html>