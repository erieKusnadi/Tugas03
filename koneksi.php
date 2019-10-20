<?php
    try {
        // buat koneksi dgn database
        $koneksi = new PDO('mysql:host=localhost;dbname=web2',
        "root","");

        // set error mode
        $koneksi->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        
	    }
	    catch (PDOException $e) {
	        // tampilkan pesan kesalahan jika koneksi gagal
	        print "Koneksi atau query bermasalah: ". $e->getMessage() . "<br/>";
	        die();
	    }
?>