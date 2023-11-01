<?php
	$koneksi = mysqli_init();
	$koneksi->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
	$koneksi->real_connect("aws.connect.psdb.cloud", "zlnm6pskkpyusc7rvoth", "pscale_pw_CX780klkZxrF6kkalLUNRb78HmJc33psOdBmrkva6rT", "ahp");
	// $mysqli->close();

	if (!$koneksi)
	{
		echo "Tidak dapat terkoneksi dengan server";
		exit();
	}

	if(!mysqli_select_db($koneksi, "ahp"))
	{
		echo "Tidak dapat menemukan database";
		exit();
	}
?>