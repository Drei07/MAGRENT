

<?php
	try {

		// localhost
		// $pdoConnect = new PDO("mysql:host=localhost;dbname=magrent", "root", "");

		// Live
		$pdoConnect = new PDO("mysql:host=localhost;dbname=u297724503_magrent", "u297724503_magrent", "Magrent2023");
		$pdoConnect->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

	}
	catch (PDOException $exc){
		echo $exc -> getMessage();
	}
    catch (PDOException $exc){
        echo $exc -> getMessage();
    exit();
    }
?>