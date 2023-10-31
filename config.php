<?php
	$koneksi = mysqli_init();
	$koneksi->ssl_set(NULL, NULL, "/etc/pki/tls/certs/ca-bundle.crt", NULL, NULL);
	$koneksi->real_connect("aws.connect.psdb.cloud", "piso5jah08z4je5u8xg0", "pscale_pw_6fgJNzP76qDzr5wt9wDK4GyFJqxemYxA9KeIPYH7Gnk", "ahp");
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