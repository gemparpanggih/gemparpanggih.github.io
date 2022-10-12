<html lang="en">
	<head>
		<title>Gempar Code</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="SHORTCUT ICON" href="img/logo/colokan.png">
        <style>
            table{
                color: white;
                font-size: 20px;
            }
            
            table tr th{
                
                color: white;
                border: 0px solid black;
            }
            
            table tr td{
               
                border: 0px solid black;
                padding-top: 20px;
                padding-right: 60px;
            }
        </style>
	</head>
	<body>
		<div class="form-cont">
			<div class="portofolio">
				<h2>Terima Kasih Telah Memberi Masukan</h2>
				<div class="form-input">
                    <table border="0" cellpadding="2" cellspacing="4">
                        <?php
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $nomor = $_POST['nomor'];
                        $tanggal = $_POST['tanggal'];
                        $komentar = $_POST['komentar'];
                        ?>
                            <tr>
                                <td><?php echo 'Nama'?></td>
                                <td><?php echo $nama;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Email'?></td>
                                <td><?php echo $email;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Nomor'?></td>
                                <td><?php echo $nomor;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Tanggal Komentar';?></td>
                                <td><?php echo $tanggal;?></td>
                            </tr>
                            <tr>
                                <td><?php echo 'Komentar';?></td>
                                <td><?php echo $komentar;?></td>
                            </tr>
                    </table>
				</div>
			</div>
		</div>
		<footer class="container-3 mode" id="contact">
			<div class="head-container-3">PT Listrik Biru</div>
			<div class="foo-cont">
				<div class="alamat">
					<h4 class="mode">Location</h4>
					<p class="mode">Camelot Kingdom, Great Britain<br>gemparxsaber@gmail.com<br>Phone: +628 2252 940003</p>
				</div>
				<div class="sosmed">
					<h4 class="mode">Find Us On</h4>
					<div class="circle-container">
						<div class="circle ig">
							<a href="https://www.instagram.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/instagram.png" alt=""></a>
						</div>
						<div class="circle fb">
							<a href="https://www.facebook.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/facebook.png" alt=""></a>
						</div>
						<div class="circle wa">
							<a href="https://www.whatsapp.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/whatsapp.png" alt=""></a>
						</div>
						<div class="circle tw">
							<a href="https://www.twitter.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/twitter.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
	
			<div class="footer-copyright">
				<div class="copyright">© 2022 <a href="https://instagram.com/gmpar_p/">Gempar Panggih D. Putra</a>. All rights reserved.</div>
			</div>
		</footer>
	</body>
</html>