

<?php
	try {

		// localhost
		$pdoConnect = new PDO("mysql:host=localhost;dbname=magrent", "root", "");

		// Live
		// $pdoConnect = new PDO("mysql:host=localhost;dbname=u297724503_magrent2023", "u297724503_magrent2023", "Magrent2023");
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