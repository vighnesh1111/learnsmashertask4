<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('phone');
        document.cookie = "phone=" + data;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            .main{
                padding-top: 200px;
                font-size: 20px;
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
                <li onclick="location.href='index.php'">Home</li>
                <li>About&nbsp;us</li>
                <li>Contact&nbsp;us</li>
            </ul>
        </nav>
    </div>

    <div class="main">
        <center>
            Name: 
        <?php
        if (isset($_POST['fname'])) {
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);

            if (!$con) {
                die("connection failed" . mysqli_connect_error());
            }

            $phone = $_COOKIE['phone'];

            $query = "SELECT * FROM `obsw`.`ordered` WHERE phone = $phone";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["fname"];
                    echo $row["lname"];
                }
            }else{
                echo "No record found";
            }
            $con->close();
        }
        ?>
                <!-- <?php
        // if (isset($_POST['fname'])) {
        //     $server1 = "localhost";
        //     $username1 = "root";
        //     $password1 = "";

        //     $con = mysqli_connect($server1, $username1, $password1);

        //     if (!$con) {
        //         die("connection failed" . mysqli_connect_error());
        //     }

        //     $phone = $_COOKIE['phone'];

        //     $query = "SELECT * FROM `obsw`.`ordered` WHERE phone = $phone";
        //     $result = mysqli_query($con, $query);
        //     $count = mysqli_num_rows($result);
        //     if (mysqli_num_rows($result) > 0) {
        //         while ($row = mysqli_fetch_assoc($result)) {
        //             echo $row["fname"];
        //             echo $row["lname"];
        //             echo $row["bname"];
        //             echo $row["price"];
        //         }
        //     }
        //     $con->close();
        // }
        ?> -->
        <br> <br><br><br>
        Name of book:
                <?php
        if (isset($_POST['fname'])) {
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);

            if (!$con) {
                die("connection failed" . mysqli_connect_error());
            }

            $phone = $_COOKIE['phone'];

            $query = "SELECT * FROM `obsw`.`ordered` WHERE phone = $phone";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["bname"];
                }
            }
            else{
                echo "No record found";
            }
            $con->close();
        }
        ?> <br> <br><br><br>
        Price: 
                <?php
        if (isset($_POST['fname'])) {
            $server1 = "localhost";
            $username1 = "root";
            $password1 = "";

            $con = mysqli_connect($server1, $username1, $password1);

            if (!$con) {
                die("connection failed" . mysqli_connect_error());
            }

            $phone = $_COOKIE['phone'];

            $query = "SELECT * FROM `obsw`.`ordered` WHERE phone = $phone";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row["price"];
                }
            }
            else{
                echo "No record found";
            }
            $con->close();
        }
        ?>
        </center>
    </div>
</body>

</html>