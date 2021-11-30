
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylepw.css">
    </style>        
    <body>
        <table border="0" width="100%" cellpadding="0" cellspacing="0" >
    <tr>
        <td height="5">
            <table border="0" background="bg.png">
                <tr>
                    <td width="30%"></td>
                    <td><func class="a b" ><strong>Prii Computer |</strong></td>
                    <td><font face="arial" size="4">&nbsp;</td></font>
                    <td><func class="a b" >&nbsp;<img src="krj.png" height="11" align="bottom"><a href="ad.php">Beranda</a></td>
                    <td><func class="a b" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="bendera indonesia.jpg" height="11" align="bottom"><a href="#">Indonesia</a></td>
                    <td><func class="a b" >&nbsp;&nbsp;<img src="cs.png" height="11" align="bottom">
                        <a href="contactus.php">Contact us</a></td>
                        <td><func class="a b" >&nbsp;&nbsp;<img src="ab.jpg" height="11" align="bottom">
                        <a href="aboutus.php">About us</a></td>
                    <td><func class="a b" >&nbsp;&nbsp;<img src="ac.jpg" height="11" align="bottom"><a href="homeuser.php">My Account</a></td>
                        <td><func class="a b" >&nbsp;&nbsp;<img src="login.png" height="11" align="bottom">
                        <a href="sessionLogout.php">Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    

    <tr height="100px" background="bg.png">
        <td width="10%" height="80" background="bg.png">
            <table border="0" background="bg.png">
                <tr background="bg.png">
                    <td width="130"></td>
                    <td><img src="pri.png" width="150" height="80"></td>
                    <td width="50"></td>
                    <td><func class ="a b"><b><a href=" cpu.html">CPU</a></b></td></func>
                    <td>|</td>
                    <td><func class ="a b"><b><a href=" laptop.html">Laptop</a></b></td></func>
                    <td>|</td>
                    <td><func class ="a b"><b><a href=" ketboard.html">Keyboard</a></b></td></func>
                    <td>|</td>
                    <td><func class ="a b"><b><a href="mouse.html">Mouse</a></b></td></func>
                    <td>|</td>
                    <td background="bg.png"><func class ="a b"><b><a href="ram.html">Ram</a></b></td></func>
                    <td width="50" background="bg.png"></td>
                    <td background="bg.png"><form><input type="text" name="Search" placeholder="Search" ></form></td>
                    <td background="bg.png"><input type="image" src="cari.png" width="30" height="30" alt="submit button" name=""></td> 
                    <td><font size="6">|</font></td>
                    <td background="bg.png"><input background="bg.png" type="image" src="icon.png" width="30" height="30" alt="submit button" name=""></td>
                </tr>
            </table>
        </td>
    </tr>
    <?php 
                include "koneksi.php";
                session_start();
                $aku = $_SESSION['user'];
                $query="SELECT * FROM log WHERE nama='$aku' "; 
                $result=mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
        <td background="bg.png"><img src="banner.png" width="100%" height="70"></td>
    </tr>
        <header>
        <div class="loginbox">
            <img class="avatar">
            <h1>Ubah Password</h1>
            <form action="ubahpw.php" method="post">
                
                <p>Password lama</p>
                <input type="password" name="passwordlama" placeholder="password lama">
                <p>Password Baru</p>
                <input type="password" name="passwordbaru" placeholder="password baru">
                <input type="submit" name="kirim" value="Update">
                <?php    
                if(isset($_GET['page'])){
                echo "<p>Password tidak sesuai</p>";
                }
                ?>
            </form>
        </div>
        <?php
                    }
                }
                else {
                    echo "0 results";
                }
            ?>
            
    </head>

</body>

</html>