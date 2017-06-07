<html>
	<head>
		<link rel="stlyesheet" type="text/css" href="dist/sweetalert.css">
	</head>
	<body>
		<script src="dist/sweetalert.min.js"></script>
		<script language="javascript">
			swal({
				tittle: "Maaf!",
				type: "cancelled",
				text: "Register Gagal.",
				timer: 2000,
				showConfirmButton: false
			});
			setTimeout("location.href='contact.php'",2000);
		</script>
	</body>
</html>

