<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data');
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
<?php
if (isset($_POST['fname'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);

    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $code = $_COOKIE['selected_item'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `obsw`.`ordered` (`fname`, `lname`, `code`, `phone`, `address`, `email`) VALUES ('$fname', '$lname', '$code', '$phone', '$address', '$email');";

    if ($con->query($sql) == true) {
        header("location:booked.php");
    } else {
        echo "error: $sql <br> $con->error";
        echo "<script>ops</script>";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place order</title>
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

        .main {
            margin: auto;
            text-align: center;
        }

        form {
            font-size: 20px;
        }

        input {
            font-size: 17px;
            text-align: center;
            width: 400px;
            height: 35px;
        }

        textarea {
            font-size: 17px;
            text-align: center;
            width: 400px;
            height: 100px;
        }

        #but {
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
    <div class="main">
        <br>
        <h1>Order your Book</h1><br><br>
        <form action="" method="post">
            <input type="text" name="fname" id="fname" placeholder="Enter your first name"> &nbsp; &nbsp;
            <input type="text" name="lname" id="lname" placeholder="Enter your last name"><br><br>
            Name of book:
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
            <br><br>
            price:
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
            ?>
            <br><br>
            <textarea rows="3" cols="30" name="address" id="address"
                placeholder="Enter your address"></textarea><br><br>
            <input type="number" name="phone" id="phone" placeholder="Enter your phone number"><br><br>
            <input type="email" name="email" id="email" placeholder="Enter your e-mail"><br><br>
            Mode of payment: Cash on Delivery.
            <br><br><br><br>
            <button type="submit" id="but">Buy</button>
        </form>
    </div>
</body>

</html>