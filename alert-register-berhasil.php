<html>
	<head>
		<link rel="stlyesheet" type="text/css" href="dist/sweetalert.css">
	</head>
	<body>
		<script src="dist/sweetalert.min.js"></script>
		<script language="javascript">
			swal({
				tittle: "Selamat!",
				type: "success",
				text: "Register Berhasil.",
				timer: 2000,
				showConfirmButton: false
			});
			setTimeout("location.href='admin.php'",2000);
		</script>
	</body>
</html>

