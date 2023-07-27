<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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
            width: 40%;
            /* overflow: hidden; */
            /* min-width: 500px; */
        }

        .nav li {
            display: inline;
            font-size: 20px;
            margin-left: 60px;
            /* min-width: 400px; */
        }

        .track{
            float: right;
            width: 30%;
            /* background-color: red; */
            height: 55px;
            padding-top: 25px;
        }
.track button{
    width: 40%;
            height: 30px;
            background-color: #5bad24;
            font-size: 20px;
            border-style: none;
            color: white;
}

        .dis {
            height: 625px;
        }

        .gap {
            height: 30px;
        }

        .intro {
            width: 100%;
            background-image: url("img/book1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            text-align: center;
            float: left;
        }

        .desc {
            margin: auto;
            background: rgba(0, 0, 0, .8);
            max-width: fit-content;
            color: white;
            font-size: 40px;
            padding: 20px;
            margin-top: 250px;
        }

        .main1 {
            border-top: 2px solid black;
            height: 620px;
            text-align: center;
        }

        .intro2 {
            text-align: left;
            font-size: 35px;
        }

        .name1 {
            font-size: 35px;
            height: 100px;
        }

        .book1 {
            margin-top: 10px;
            height: 400px;
        }

        .b1 {
            height: 435px;
            width: 26%;
            margin-left: 10%;
            float: left;
            text-align: center;
        }

        .b2 {
            height: 435px;
            width: 26%;
            margin-right: 10%;
            float: right;
            text-align: center;
        }

        .b3 {
            height: 435px;
            width: 26%;
            margin: auto;
            text-align: center;
        }

        .bi1 {
            height: 350px;
            background-image: url("img/book2.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 75px;
        }

        .bn1 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi2 {
            height: 350px;
            background-image: url("img/book4.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 90px;
        }

        .bn2 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi3 {
            height: 350px;
            background-image: url("img/book3.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 85px;
        }

        .bn3 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .main2 {
            height: 550px;
            text-align: center;
            padding-top: 100px;
        }

        .name2 {
            font-size: 35px;
            height: 100px;
        }

        .book2 {
            margin-top: 10px;
            height: 400px;
        }

        .b4 {
            height: 435px;
            width: 26%;
            margin-left: 10%;
            float: left;
            text-align: center;
        }

        .b5 {
            height: 435px;
            width: 26%;
            margin-right: 10%;
            float: right;
            text-align: center;
        }

        .b6 {
            height: 435px;
            width: 26%;
            margin: auto;
            text-align: center;
        }

        .bi4 {
            height: 350px;
            background-image: url("img/book5.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 75px;
        }

        .bn4 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi5 {
            height: 350px;
            background-image: url("img/book7.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 90px;
        }

        .bn5 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi6 {
            height: 350px;
            background-image: url("img/book6.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 100px;
        }

        .bn6 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }


        .main3 {
            height: 550px;
            text-align: center;
            padding-top: 100px;
        }

        .name3 {
            font-size: 35px;
            height: 100px;
        }

        .book3 {
            margin-top: 10px;
            height: 400px;
        }

        .b7 {
            height: 435px;
            width: 26%;
            margin-left: 10%;
            float: left;
            text-align: center;
        }

        .b8 {
            height: 435px;
            width: 26%;
            margin-right: 10%;
            float: right;
            text-align: center;
        }

        .b9 {
            height: 435px;
            width: 26%;
            margin: auto;
            text-align: center;
        }

        .bi7 {
            height: 350px;
            background-image: url("img/book8.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 75px;
        }

        .bn7 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi8 {
            height: 350px;
            background-image: url("img/book9.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 90px;
        }

        .bn8 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi9 {
            height: 350px;
            background-image: url("img/book10.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 100px;
        }

        .bn9 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }


        .main4 {
            height: 620px;
            text-align: center;
            padding-top: 100px;
        }

        .name4 {
            font-size: 35px;
            height: 100px;
        }

        .book4 {
            margin-top: 10px;
            height: 400px;
        }

        .b10 {
            height: 435px;
            width: 26%;
            margin-left: 10%;
            float: left;
            text-align: center;
        }

        .b11 {
            height: 435px;
            width: 26%;
            margin-right: 10%;
            float: right;
            text-align: center;
        }

        .b12 {
            height: 435px;
            width: 26%;
            margin: auto;
            text-align: center;
        }

        .bi10 {
            height: 350px;
            background-image: url("img/book11.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 75px;
        }

        .bn10 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi11 {
            height: 350px;
            background-image: url("img/book12.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 90px;
        }

        .bn11 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi12 {
            height: 350px;
            background-image: url("img/book13.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 100px;
        }

        .bn12 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }



        .main5 {
            height: 620px;
            text-align: center;
            padding-top: 100px;
        }

        .name5 {
            font-size: 35px;
            height: 100px;
        }

        .book5 {
            margin-top: 10px;
            height: 400px;
        }

        .b13 {
            height: 435px;
            width: 26%;
            margin-left: 10%;
            float: left;
            text-align: center;
            /* margin: auto; */
        }

        .b14 {
            height: 435px;
            width: 26%;
            margin-right: 10%;
            float: right;
            text-align: center;
        }

        .b15 {
            height: 435px;
            width: 26%;
            margin: auto;
            text-align: center;
        }

        .bi13 {
            height: 350px;
            background-image: url("img/book14.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 75px;
        }

        .bn13 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi14 {
            height: 350px;
            background-image: url("img/book15.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 90px;
        }

        .bn14 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        .bi15 {
            height: 350px;
            background-image: url("img/book16.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            text-align: center;
            margin-left: 100px;
        }

        .bn15 {
            height: 75px;
            font-size: 25px;
            padding-top: 10px;
        }

        footer {
            text-align: center;
            font-size: 20px;
            height: 100px;
            background-color: #5bad24;
            color: white;
        }

        .dropbtn {
            background-color: white;
            padding: 16px;
            font-size: 17.5px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="cname">
            Online&nbsp;book<br>Store
        </div>
        <div class="track">
            <center>
            <button onclick="location.href='track.php'">Order&nbsp;details</button>
            </center>
        </div>
        <nav>
            <ul>
                <li>Home</li>
                <li>About&nbsp;us</li>
                <li>Contact&nbsp;us</li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Categories</button>
                        <div class="dropdown-content">
                            <a href="#main1">Autobiography</a>
                            <a href="#main2">Science Fiction</a>
                            <a href="#main3">Adventure</a>
                            <a href="#main4">Horror Fiction</a>
                            <a href="#main5">Mystery</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="gap">

    </div>
    <div class="dis">
        <div class="intro">
            <div class="desc">
                "Books" <br> ---The ultimate pursuit for knowledge.
            </div>
        </div>
    </div>

    <div class="main1" id="main1">
        <br><br>
        <div class="intro2">
            Some of the book categories are as follows:
        </div>
        <div class="name1">
            <br>
            Autobiography&nbsp;Books
        </div>
        <div class="book1">
            <div class="b1" onclick="val(1)">
                <div class="bi1"></div>
                <div class="bn1">The Diary of<br> Young Girl</div>
            </div>
            <div class="b2" onclick="val(2)">
                <div class="bi2"></div>
                <div class="bn2"> The<br> Golden Years</div>
            </div>
            <div class="b3" onclick="val(3)">
                <div class="bi3"></div>
                <div class="bn3">Wings of<br>Fire</div>
            </div>
        </div>
    </div>

    <div class="main2" id="main2">
        <div class="name2">
            <br>
            Science&nbsp;fiction&nbsp;Books
        </div>
        <div class="book2">
            <div class="b4" onclick="val(4)">
                <div class="bi4"></div>
                <div class="bn4">Dune</div>
            </div>
            <div class="b5" onclick="val(5)">
                <div class="bi5"></div>
                <div class="bn5"> The Martian</div>
            </div>
            <div class="b6" onclick="val(6)">
                <div class="bi6"></div>
                <div class="bn6">Nineteen Eighty-Four</div>
            </div>
        </div>
    </div>

    <div class="main3" id="main3">
        <div class="name3">
            <br>
            Adventure&nbsp;Books
        </div>
        <div class="book3">
            <div class="b7" onclick="val(7)">
                <div class="bi7"></div>
                <div class="bn7">Treasure <br> island
                </div>
            </div>
            <div class="b8" onclick="val(8)">
                <div class="bi8"></div>
                <div class="bn8"> Moby-Dick </div>
            </div>
            <div class="b9" onclick="val(9)">
                <div class="bi9"></div>
                <div class="bn9">Into the <br> Wild</div>
            </div>
        </div>
    </div>

    <div class="main4" id="main4">
        <div class="name4">
            <br>
            Horror&nbsp;Fiction&nbsp;Books
        </div>
        <div class="book4">
            <div class="b10" onclick="val(10)">
                <div class="bi10"></div>
                <div class="bn10">Ghost Story
                </div>
            </div>
            <div class="b11" onclick="val(11)">
                <div class="bi11"></div>
                <div class="bn11">It </div>
            </div>
            <div class="b12" onclick="val(12)">
                <div class="bi12"></div>
                <div class="bn12">The <br> Exorcists</div>
            </div>
        </div>
    </div>


    <div class="main5" id="main5">
        <div class="name5">
            <br>
            Mystery&nbsp;Books
        </div>
        <div class="book5">
            <div class="b13" onclick="val(13)">
                <div class="bi13"></div>
                <div class="bn13">The<br> Silent Patient
                </div>
            </div>
            <div class="b14" onclick="val(14)">
                <div class="bi14"></div>
                <div class="bn14">Gone Girl
                </div>
            </div>
            <div class="b15" onclick="val(15)">
                <div class="bi15"></div>
                <div class="bn15">One of Us<br> Is Lying</div>
            </div>
        </div>
    </div>

    <footer>
        <br>
        © 2020 Copyright: 
        <br>
        Online book store
    </footer>
</body>

<script>
    function val(val){
        sessionStorage.setItem('data', val)
            window.location.href="books.php";   
    }
</script>

</html>