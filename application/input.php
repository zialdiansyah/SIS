<head>
<link type="text/css" rel="stylesheet" href="../layout/images/CoolWater.css" media="screen">
<title>Input User</title>
</head>
<body>
			<form method="post" action="input_user.php" style="width:300px; margin: 0 auto;">
			<label>Username : </label><br />
			<input type="text" name="username" class="big"/>
			<br />
			<br />
			<select name="status">
				<option value="mahasiswa">Mahasiswa</option>
				<option value="dosen">Dosen</option>
				<option value="kordinator">Kordinator Skripsi</option>
				<option value="kaprodi">Kaprodi</option>
			</select>
			<br />
			<br />
				<input type="submit" value="Daftar" class="tombol"/>
			</form>
</body>