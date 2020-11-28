<?php

$connection = mysqli_connect('localhost', 'root', '', 'unicorn');
//check if the database not connected
if (!$connection) {
    echo "database connection error";
}

//CREATE Legends Table in the Database

// mysqli_query($connection, "CREATE TABLE legends(
// 		id INT NOT NULL AUTO_INCREMENT,
// 		PRIMARY KEY(id),
// 		name VARCHAR(100) NOT NULL,
// 		title VARCHAR(100) NOT NULL,
// 		description TEXT NOT NULL
// 		)");

?>


<!DOCTYPE html>

<html lang="en">
<meta charest="UTF-8">

<head>
    <title>UNICORN</title>
    <link rel="stylesheet" href="style.css">
    <script language="JavaScript">
        function showClickTime() {
            var Digital = new Date()
            var hours = Digital.getHours()
            var minutes = Digital.getMinutes()
            var seconds = Digital.getSeconds()
            var clockd = "AM"


            if (hours > 12) {
                clockd = "PM"
                hours = hours - 12
            }
            if (hours == 0)
                hours = 12
            if (minutes <= 9)
                minutes = "0" + minutes
            if (seconds <= 9)
                seconds = "0" + seconds
            var clocktime = hours + ":" + minutes + ":" + seconds + " " + clockd
            clockSpan.innerHTML = "<b style='font-size:12;color:white;'>" + clocktime + "</b>"
            setTimeout("showClickTime()", 1000)
        }
        window.onload = showClickTime;
    </script>
</head>

<body background="https://www.ralentirtravaux.com/images/mercure-confiant-bacchus.jpg">

    <center><img Src="https://logo-maker-api.s3.us-west-2.amazonaws.com/projects/5fbc470caf08f00d75728786/thumbnail.png?AWSAccessKeyId=AKIA6LFXYJ6BXG4EKM6A&Expires=1606509888&Signature=dNUm0GqFy4Mpu8PdpzitJ7n36UQ%3D" height="150" width="150" alt="logo"></center>
    <span style="text-align:center" id=clockSpan></span>

    <div class="container">

        <form target="_blank" method='GET' action="http://www.google.com/search">
            <input TYPE=text name=q size=22 maxlength=255 value="">
            <input type=hidden name=ie value=windows-1256>
            <input type=hidden name=oe value=windows-1256>
            <input type=submit name=btnG VALUE="Google Search">
        </form>

        <nav style="margin-top:15px">
            <ul>
                <li><a href="add.php">اضافة اساطير</a></li>
                <li><a href="">حول</a></li>

                <li><a href="">الأساطير</a></li>

                <li><a href="home.php">الرئيسية</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="main-text">
            <h2 class="text">اضافة اسطورة جديدة</h2>
        </div>
    </div>
    </div>
    <div style="text-align:center">
        <div class="photo">
            <!-- <img Src="https://www.presstetouan.com/imagesnews/14591586491.JPG" height="250" width="300" alt="الأساطير العربية" class="card-img "> -->
        </div>
        <div class="card">
            <th width="20%">
                <form action="insert.php" method="POST">
                    اسم الاسطورة: <input type="text" name="name"><br><br>
                    العنوان: <input type="text" name="title"><br><br>
                    نبذه عن الاسطورة<textarea name="description" cols="30" rows="10"></textarea><br><br>


                    <input type="submit" name="add" value="اضافة الاسطورة">

                </form>
            </th>
        </div>
    </div>

</body>

</html>