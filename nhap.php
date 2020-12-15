<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Bán Sữa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="all">
        <div id="banner">
            <img src="images/hang_sua_01.gif">
        </div>
        <div id="menu">
            <ul>
                <li><a href="sanpham.php">Trang chủ</a></li>
                <li><a href="sanpham.php">Giới thiệu</a></li>
                <li><a href="sanpham.php">Tin tức</a></li>
                <li><a href="sanpham.php">Dịch vụ</a></li>
                <li><a href="sanpham.php">Khách hàng</a></li>
                <li><a href="sanpham.php">Liên hệ</a></li>
            </ul>
        </div>
        <div class="content">
            <div id="left">
                <ul>
                    <li><a href="nhap.php">Hãng sữa</a></li>
                    <li><a href="nhap.php">Loại sữa</a></li>
                    <li><a href="nhap.php">Sữa</a></li>
                    <li><a href="nhap.php">Khách hàng</a></li>
                    <li><a href="nhap.php">Hóa đơn</a></li>
                </ul>
                <img src="images/hang_sua_07.gif">
                <img src="images/hang_sua_08.gif">
                <img src="images/hang_sua_09.gif">
                <img src="images/hang_sua_10.gif">
                <img src="images/hang_sua_11.gif">
            </div>
            <div id="center">
                <?php 
                    $conn=mysqli_connect('localhost','root','','web sua')or die ('Notconnect'); 			 	
                    mysqli_query($conn,'set names "utf8"');
                ?>
                 <form method="post" enctype="multipart/form-data">
                    <table border="1" style="width: 385px;">
                        <tr>
                            <td>Mã hàng</td>
                            <td><input type="text" name="mahang"></td>
                        </tr>
                        <tr>
                            <td>Tên hàng</td>
                            <td><input type="text" name="tenhang"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="number" name="dienthoai"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="ok" value="nhập"></td>
                        </tr>
                    </table> 
                 </form>
                 <?php 
                    $conn=mysqli_connect('localhost','root','','web sua')or die ('Notconnect'); 			 	
                    mysqli_query($conn,'set names "utf8"');
                    if(isset($_POST['ok']));
                    {
                        $mahang=$_POST['mahang'];
                        $tenhang=$_POST['tenhang'];
                        $diachi=$_POST['diachi'];
                        $dienthoai=$_POST['dienthoai'];
                        $sql = "insert into hienthi(mahang,tenhang,diachi,dienthoai) values('$mahang','$tenhang','$diachi','$dienthoai')";
                        $tt = mysqli_query($conn,$sql);
                    if(!$tt){
                        echo "Thành công";        
                        }
                    }
                 ?>
            </div>
            <div id="right">
                <img src="images/hs1.png" style="width: 107px; height: auto;">
                <img src="images/hs2.png" style="width: 107px; height: auto;">
                <img src="images/hs3.png" style="width: 107px; height: auto;">
                <img src="images/hs4.png" style="width: 107px; height: auto;">
            </div>
        </div>
        <div id="clr"></div>
        <div id="footer">
                <span >  
                    Công ty sữa Vinamilk<br>
                    Website: www.vinamilk.com
                </span>
                <span>  
                    Điện thoại: (024)93124568<br>
                    Fax (024)55674326
                </span>
        </div>
    </div>
</body>
</html>