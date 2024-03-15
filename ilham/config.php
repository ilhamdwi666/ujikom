	<?php
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $username,$password);
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
    ?>