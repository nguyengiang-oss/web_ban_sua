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
                <table border="1" style="width: 385px;">
                    <tr>
                        <td><h3>Mã hàng</h3></td>
                        <td><h3>Tên hàng</h3></td>
                        <td><h3>Địa chỉ</h3></td>
                        <td><h3>Điện thoại</h3></td>
                    </tr>
                     <?php
                    $sql2="select * from hienthi";
                    $thucthi2=mysqli_query ($conn,$sql2);
                    while($row= mysqli_fetch_array($thucthi2))
                    {?>
                    <tr>
                        <td><?php echo $row['mahang'];?></td>
                        <td><?php echo $row['tenhang'];?></td>
                        <td><?php echo $row['diachi'];?></td>
                        <td><?php echo $row['dienthoai'];?></td>
                    </tr>
                    <?php }?>
                </table>
                
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