<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>


    <div class="container-fluid" style="background-color:rgb(14, 51, 85);width:100%;height:35%">
        <section>

            <nav class="navbar navbar-expand-lg bg-opacity-10" width="100%">
                <div class="container-fluid">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-1">
                        <a class="navbar-brand" href="index.html">
                            <img src="./img/Travel World-logos_transparent.png" width="200%" height="200%">

                    </div>
                    <div class="col-sm-3" <b><span style="color:rgb(101, 254, 249);font-size: 40px;">  Travel</span><span style="color:rgb(248, 255, 45);font-size: 40px;">World</span></b>
                        </a>
                        <br>
                        <p style="color:darkgray"> Get ready to explore world</p>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                       
                      </button>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">

                    </div>
                </div>
            </nav>

           
        </section>
    </div>
    <section>
        <div class="container">

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">


                    <form action="userinfo.php" name="myForm" onsubmit="return validateForm()" method="post">
                        <div class='form-group' id="name">
                            <input type="text" class="form" name="username" placeholder="Username " style="width:100%;height:40px;border-radius:10px;border:1px solid grey;float:left;margin-top: 10%; " required><span class="formerror" style="margin-left:2%;margin-top:-3%;color:red"></span>

                        </div>


                        <div class='form-group' id="email">
                            <input type='email' name="email" placeholder="Email Addres " style="width:100%;height:40px;border-radius:10px;border:1px solid grey; margin-top:4%;" required><span class="formerror" style="margin-left:2%;margin-top: -3%;color:red"></span>
                        </div>
                        <div class='form-group' id="password">
                            <input type="password " name="password" placeholder="Set Password " style="width:100%;height:40px;border-radius:10px;border:1px solid grey; " required><span class="formerror" style="margin-left:2%;margin-top: -3%;color:red"></span>
                        </div>
                        <div class='form-group' id="confirm">
                            <input type="password " name="confirm" placeholder="Conform Password " style="width:100%;height:40px;border-radius:10px;border:1px solid grey; " required><span class="formerror" style="margin-left:2%;margin-top: -3%;color:red"></span>
                        </div>

                        <button id="submit " name='submit' type="submit " style="width:60%;margin-left:20%;background-color: rgb(113, 113, 201);border-radius:10px;border:none;color:white;margin-bottom:30px; ">Sign Up</button>

                    </form>

                    <p>Already have a account <a href="account.php ">Log In</a></p>

                </div>
                <div class="col-sm-3 "></div>
            </div>
    </section>
    <section>
        <div class="container-fluid " style="margin-top:50px;background-color: rgb(232, 245, 255); ">


            <div class="row " style="padding-bottom:5% ">
                <div class="col-sm-2 ">
                    <div style="margin-left:35%; ">
                        <span style="font-size:28px;margin-bottom:3px; ">About Us</span><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin: bottom 4px; "> About Travel World</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Why Book with Us</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Hotels and Resorts</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Careers</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Awards</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Brouchers</span></a><br>
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div style="margin-left:40%; ">
                        <span style="font-size:28px;margin-bottom:3px; "> Account</span><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Log In</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Sign Up</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Offers & Reward</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Advance Booking</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; "> Find Travel Guide</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Credits</span></a><br>
                    </div>
                </div>
                <div class="col-sm-4 " style="text-align:center ">
                    <span style="font-size:28px;margin-bottom:20px;padding-top:20% "> Subscribe to Receive Exclusive Deals</span><br>
                    <form>
                        <input type="text " placeholder=" Enter your Email " style="background-color:white;width:60%;height:8%;border-radius:3px;border-color:black;margin-top:3%;font-size:small ">
                    </form>
                    <a href=" "><button style="margin-top:3%;height:14%;width:50%;border-radius:16px;background-color: rgb(0, 55, 104); "><span style="text-transform:bold;color:white ">Subscribe</span></button></a><br>
                    <span style="font-size:15px;color:rgb(151, 153, 155) "><a href=" " style="text-decoration: none; ">www.TravelWorld.com</a><br>
                    TravelWorld@gmail.com<br>
                    01-735-942-0201    
                    </span><br>
                    <div style="display:inline-block;margin-top:12px ">
                        <a href=" " style="text-decoration:none;color:black; "> <i href=" " class="fa fa-facebook " style="font-size:30px;margin-left:15px "></i></a>
                        <a href=" " style="text-decoration:none;color:black; "> <i href=" " class="fa fa-twitter " style="font-size:30px;margin-left:15px "></i></a>
                        <a href=" " style="text-decoration:none;color:black; "> <i href=" " class="fa fa-instagram " style="font-size:30px;margin-left:15px "></i></a>
                        <a href=" " style="text-decoration:none;color:black; "> <i href=" " class="fa fa-youtube " style="font-size:30px;margin-left:15px "></i></a>
                        <a href=" " style="text-decoration:none;color:black; "> <i href=" " class="fa fa-envelope " style="font-size:30px;margin-left:15px "></i></a>
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div style="margin-right:39%; ">
                        <span style="font-size:28px;margin-bottom:3px; "> Policies</span><br>
                        <a class="bb " href=" "><span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Travel Policies</span></a><br>
                        <a class="bb " href=" "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; "> Buggage Policies</span></a><br>
                        <a class="bb " href=" "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Privancy Policies</span></a><br>
                        <a class="bb " href=" "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Terms & Conditions</span></a><br>
                        <a class="bb " href=" "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">COVID-19 Policies</span></a><br>

                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div style="margin-right:40%; ">
                        <span style="font-size:28px;margin-bottom:3px; ">Support</span><br>
                        <a class="bb " href=" "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:3px; ">Contact Us</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; "> Live Chat</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">FAQs</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; ">Payment Options</span></a><br>
                        <a class="bb " href=" " style="text-decoration:none "> <span style="font-size:17px;color:rgb(56, 55, 55);margin-bottom:4px; "> Travel Agents</span></a><br>

                    </div>
                </div>

            </div>
            <div class="row " style="text-align:center ">
                <p class="mb-0 ">
                    &copy; Copyright | Travel World <span id="copyrightYear "></span>. All Right Reserved. Website designed by
                    <a target="_blank " href=" " title="Bepoj Technology ">Chetan Singh</a>
                </p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="index2.js" rel="stylesheet"></script>

</html>