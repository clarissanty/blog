<html>
	<head>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	</head>
	<body>
	<script src="dist/sweetalert.min.js"></script>
	<script language="javascript">
	swal({
	title: "Berhasil!",
	type: "success",
	text: "Data Berhasil dihapus.",
	timer: 2000,
	showConfirmButton: false });
	setTimeout("location.href='kategori.php'", 2000);
	</script>
	</body>
</html>

