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

            .main {
                margin: auto;
                text-align: center;
                padding-top: 150px;
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

            .main button {
                width: 10%;
                height: 30px;
                background-color: #5bad24;
                font-size: 20px;
                border-style: none;
                color: white;
            }

            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
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
            <form action="last.php" method="post" name="verify">
                <h1>Track&nbsp;order</h1> <br><br><br><br>
                <input type="number" required name="phone" id="phone" placeholder="Enter your phone number">
                <br><br><br><br>
                <button type="submit" onclick = fun()>See&nbsp;details</button>
            </form>
        </center>
    </div>
</body>
<script>
    function fun(){
    const phone = document.forms['verify']['phone'].value
    // alert(phone)
    sessionStorage.setItem('phone', phone)
        }
</script>

</html>