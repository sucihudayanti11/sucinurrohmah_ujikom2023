<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
        <!-- ICONS -->
	<link rel="icon" type="image/png" href="img/homeicon.ico"/>
	<link rel="icon" type="image/png" sizes="96x96" href="img/homeicon.jpg">
    <title>Aplikasi Pengaduan Masyarakat</title>
    <style type="text/css" media="screen">
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');
        body{
            background: url(img/ss.jpg); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: sans-serif;
            font-size: 10px
        }
        h1{
            font-size:"10px";
            color: white;
        }
        h2{
  padding-top: 1.5rem;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 40px 100px;
    width: 500px;
    background: url(img/polos.jpg); 
    background-size: cover;
    box-shadow: 0 0 20px rgba(255,255,255,.3);
    
}
font{
    font-size: 20px;
    
}
.submit{
    background: purple;
	color: white;
	font-size: 11pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
.reset{
    background: purple;
	color: white;
	font-size: 10pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
.kembali{
    background: purple;
	color: white;
	font-size: 10pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
    </style>
</head>
<body background = "langit.jpg">
<div style="border:0; padding:10px; width:760px; height:auto;">
<form class="container" action="proses.php" method="POST" name="proses">
<h1 align="center">DAFTAR AKUN MASYARAKAT </h1>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width=""> </td>
                <td width=""> </td>
        </tr>
        <tr height="46" >
            <td> </td>
            <td><font color="white">NIK</font></td>
            <td><input type="text" name="nik" size="23" required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td><font color="white">Nama</font></td>
            <td><input type="text" name="nama" size="23"  required/></td>
        </tr>
        
        <tr height="46">
            <td> </td>
            <td><font color="white">Username</font></td>
            <td><input type="text" name="username" size="23"  required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td><font color="white">Password</font></td>
            <td><input id="password" type="password" name="password"  size="23"  required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td><font color="white">No_Telepon</font></td>
            <td><input type="text" name="telp" size="23" required/></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Submit" class="Submit" style="width: 29%;" />&nbsp; <input type="reset" name="reset" value="Reset" class="reset" style="width: 29%;" />
        <a href="index.php"  class="kembali" style="width: 29%;" >Kembali</a>
</tr> 
    </table>
</form>
</div>
</body>
</html>