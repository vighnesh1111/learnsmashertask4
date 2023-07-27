<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data')
        document.cookie = "selected_item=" + data;
        if (data) {
            console.log(data)
        }
    });

    window.onload = function () {
        if (!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Book Store</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .nav {
            height: 80px;
            border-bottom: 2px solid black;
        }

        .nav .cname {
            padding-top: 10px;
            width: 30%;
            text-align: center;
            font-size: 30px;
            float: left;
        }

        .nav nav {
            padding-top: 25px;
            margin: auto;
            width: 70%;
            /* overflow: hidden; */
            /* min-width: 500px; */
        }

        .nav li {
            display: inline;
            font-size: 20px;
            margin-left: 60px;
            /* min-width: 400px; */
        }

        .name {
            padding-top: 50px;
            text-align: center;
            font-size: 50px;
            /* background-color: red; */
            padding-bottom: 30px;
        }

        .part1{
            float: left;
            width: 50%;
            /* background-color: yellow; */
            height: 580px;
        }
.part11{
    background-image: url("<?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";

        $con = mysqli_connect($server1, $username1, $password1);
        $num = $_COOKIE["selected_item"];
        // $num = 3;
        $query = "select img from `obsw`.`obsw` where num=$num";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["img"];
            }
        }
        $con->close();
        ?>");
        background-repeat: no-repeat;
        background-size: contain;
        margin: auto;
        height: 500px;
        margin-left: 200px;
        margin-top: 40px;
        margin-bottom: 40px;
}
        .part2{
            float: right;
            width: 50%;
            /* background-color: pink; */
            height: 500px;
            padding-top: 150px;
            font-size: 20px;
        }

        #but{
            width: 20%;
            height: 30px;
            background-color: #5bad24;
            font-size: 20px;
            border-style: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="cname">
            Online&nbsp;book<br>Store
        </div>
        <nav>
            <ul>
                <li>Home</li>
                <li>About&nbsp;us</li>
                <li>Contact&nbsp;us</li>
            </ul>
        </nav>
    </div>
    <div class="name" id="name">
        <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";

        $con = mysqli_connect($server1, $username1, $password1);
        $num = $_COOKIE["selected_item"];
        // $num = 3;
        $query = "select book from `obsw`.`obsw` where num=$num";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["book"];
            }
        }
        $con->close();
        ?>
    </div>

    <div class="main5">
    <div class="part1">
<div class="part11"></div>
    </div>
    <div class="part2">
        &nbsp; &nbsp; &nbsp; &nbsp; 
    <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";

        $con = mysqli_connect($server1, $username1, $password1);
        $num = $_COOKIE["selected_item"];
        // $num = 3;
        $query = "select descript from `obsw`.`obsw` where num=$num";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["descript"];
            }
        }
        $con->close();
        ?>
        <br><br><br>
        <center>

        <h2>Price: 
            <div id="price">
        <?php
        $server1 = "localhost";
        $username1 = "root";
        $password1 = "";

        $con = mysqli_connect($server1, $username1, $password1);
        $num = $_COOKIE["selected_item"];
        // $num = 3;
        $query = "select price from `obsw`.`obsw` where num=$num";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["price"];
            }
        }
        $con->close();
        ?></div> Rs </h2>
        </center>
        <br><br><br><br><center>
        <button onclick="location.href='order.php'" id="but">Buy&nbsp;now</button></center>
    </div>
    </div>
</body>
<script>
const name =document.getElementById('name').innerHTML
    console.log(name)
    const price =document.getElementById('price').innerHTML
    console.log(price)
    sessionStorage.setItem('bname', name)
    sessionStorage.setItem('price', price)
</script>
</html>