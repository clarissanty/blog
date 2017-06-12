<html>
	<head>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	</head>
	<body>
	<script src="dist/sweetalert.min.js"></script>
		<script language="javascript">
			swal({
			title: "Selamat!",
			type: "success",
			text: "Data Berhasil Masuk.",
			timer: 2000,
			showConfirmButton: false });
			setTimeout("location.href='pos.php'", 2000);
		</script>
	</body>
</html>