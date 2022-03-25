<?php
    session_start();
    $con = mysqli_connect('localhost','root','','kraft_ladies');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kraft Lady | Crafts</title>
    <link rel="icon" href="images/360rf.png" type="image/icon type" />
    <link rel="stylesheet" href="./css/Craft.css" />
    <link rel="stylesheet" href="./css/cart.css" />

    <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
    <style type="text/css">
        @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    </style>
</head>

<body>
    <div class="banner">
        <img src="./images/banner.jpeg" alt="360 Research Foundation">
    </div>

    <header>
        <div class="navigation-bar">
            <ul>

                <li class="eles" style="flex-grow: 1"><a href="http://www.360rf.in/" target="_blank">HOME</a></li>
                <li class="dropdown" style="flex-grow: 1">
                    <span class="drop-btn">ABOUT</span>
                    <div class="drop-content">
                        <a href="http://www.360rf.in/article/about-us" target="_blank">About Us</a>
                        <a href="http://www.360rf.in/article/mission-vision" target="_blank">Mission & Vision</a>
                        <a href="http://www.360rf.in/article/why-choose-360" target="_blank">Why to choose 360?</a>
                        <a href="http://www.360rf.in/article/about-founder" target="_blank">About Founder</a>
                    </div>
                </li>
                <li class="dropdown" style="flex-grow: 1">
                    <span class="drop-btn">BODY</span>
                    <div class="drop-content drop-content-extra">
                        <a href="http://www.360rf.in/body/general" target="_blank">General</a>
                        <a href="http://www.360rf.in/body/governing" target="_blank">Governing</a>
                    </div>`
                </li>
                <li class="dropdown" style="flex-grow: 1.3">
                    <span class="drop-btn">DEPARTMENTS</span>
                    <div class="drop-content">
                        <div class="divide col-1">
                            <a href="http://www.360rf.in/department/agriculture" target="_blank">Agriculture</a>
                            <a href="http://www.360rf.in/department/data-management-analysis" target="_blank">Data Management & Analysis</a>
                            <a href="http://www.360rf.in/department/department-rural-development" target="_blank">Department of Rural Development</a>
                            <a href="http://www.360rf.in/department/sustainable-development-goals-sdgs" target="_blank">Development Goals</a>
                            <a href="http://www.360rf.in/department/energy" target="_blank">Energy</a>
                            <a href="http://www.360rf.in/department/environment-natural-resources" target="_blank">Environment & Natural Resources</a>
                        </div>
                        <div class="divide col-2">
                            <a href="http://www.360rf.in/department/financial-resources" target="_blank">Financial Resources</a>
                            <a href="http://www.360rf.in/department/health" target="_blank">Health</a>
                            <a href="http://www.360rf.in/department/human-resources-development" target="_blank">Human Resources Development</a>
                            <a href="http://www.360rf.in/department/industries" target="_blank">Industries</a>
                            <a href="http://www.360rf.in/department/project-management-appraisal" target="_blank">Project Management & Appraisal</a>
                            <a href="http://www.360rf.in/department/public-private-partnerships" target="_blank">Public-Private Partnerships</a>
                        </div>
                        <div class="divide col-3">
                            <a href="http://www.360rf.in/department/science-technology" target="_blank">Science & Technology</a>
                            <a href="http://www.360rf.in/department/skill-development-employment" target="_blank">Skill Development & Employment</a>
                            <a href="http://www.360rf.in/department/social-justice-empowerment">Social Justice & Empowerment</a>
                            <a href="http://www.360rf.in/department/urban-development target=" _blank"">Urban Development</a>
                            <a href="http://www.360rf.in/department/voluntary-action-cell">Voluntary Action Cell</a>
                            <a href="http://www.360rf.in/department/water-land-resources" target="_blank">Water & Land Resources</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown" style="flex-grow: 1.3">
                    <span class="drop-btn">INSTITUTIONS</span>
                    <div class="drop-content">
                        <a href="http://www.360rf.in/institution/first-aid" target="_blank">First Aid</a>
                        <a href="http://www.360rf.in/institution/team" target="_blank">TEAM A</a>
                        <a href="http://www.360rf.in/institution/360-rig" target="_blank">360 Research and Innovation Group</a>
                        <a href="#" target="_blank">THE KRAFT LADY</a>
                        <a href="http://www.360rf.in/institution/life-savers" target="_blank">The Life Savers</a>
                        <a href="http://www.360rf.in/institution/master-english-classes-mec" target="_blank">Master English Classes (MEC)</a>
                        <a href="http://www.360rf.in/institution/gurukul-coaching-center" target="_blank">Gurukul Coaching Center</a>
                    </div>
                </li>
                <li class="dropdown" style="flex-grow: 1.3">
                    <span class="drop-btn">MEMBERSHIP</span>
                    <div class="drop-content drop-content-extra">
                        <a href="http://www.360rf.in/article/join-us" target="_blank">Join Us</a>
                    </div>
                </li>
                <li class="eles" style="flex-grow: 1"><a href="http://www.360rf.in/contact-us" target="_blank">CONTACT US</a></li>
            </ul>
        </div>
        <div id="mySidepanel" class="sidepanel">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <div class="vertical-menu">
                <a href="#" class="active">HOME</a>

                <a href="#" class="active">ABOUT</a>

                <a href="http://www.360rf.in/article/about-us" target="_blank">About Us</a>
                <a href="http://www.360rf.in/article/mission-vision" target="_blank">Mission & Vision</a>
                <a href="http://www.360rf.in/article/why-choose-360" target="_blank">Why to Choose 360?</a>
                <a href="http://www.360rf.in/article/about-founder" target="_blank">About Founder</a>
                <a href="#" class="active">BODY</a>
                <a href="http://www.360rf.in/body/general" target="_blank">General</a>
                <a href="http://www.360rf.in/body/governing" target="_blank">Governing</a>
                <a href="#" class="active">DEPARTMENTS</a>
                <a href="http://www.360rf.in/department/agriculture" target="_blank">Agriculture</a>
                <a href="http://www.360rf.in/department/data-management-analysis" target="_blank">Data Management & Analysis</a>
                <a href="http://www.360rf.in/department/department-rural-development" target="_blank">Department of Rural Development</a>
                <a href="http://www.360rf.in/department/sustainable-development-goals-sdgs" target="_blank">Development Goals</a>
                <a href="http://www.360rf.in/department/energy" target="_blank">Energy</a>
                <a href="http://www.360rf.in/department/environment-natural-resources" target="_blank">Environment & Natural Resources</a>

                <a href="http://www.360rf.in/department/financial-resources" target="_blank">Financial Resources</a>
                <a href="http://www.360rf.in/department/health" target="_blank">Health</a>
                <a href="http://www.360rf.in/department/human-resources-development" target="_blank">Human Resources Development</a>
                <a href="http://www.360rf.in/department/industries" target="_blank">Industries</a>
                <a href="http://www.360rf.in/department/project-management-appraisal" target="_blank">Project Management & Appraisal</a>
                <a href="http://www.360rf.in/department/public-private-partnerships" target="_blank">Public-Private Partnerships</a>
                <a href="http://www.360rf.in/department/science-technology" target="_blank">Science & Technology</a>
                <a href="http://www.360rf.in/department/skill-development-employment" target="_blank">Skill Development & Employment</a>
                <a href="http://www.360rf.in/department/social-justice-empowerment" target="_blank">Social Justice & Empowerment</a>
                <a href="http://www.360rf.in/department/urban-development" target="_blank">Urban Development</a>
                <a href="http://www.360rf.in/department/voluntary-action-cell" target="_blank">Voluntary Action Cell</a>
                <a href="http://www.360rf.in/department/water-land-resources" target="_blank">Water & Land Resources</a>


                <a href="#" class="active">INSTITUTIONS</a>

                <a href="http://www.360rf.in/institution/first-aid" target="_blank">First Aid</a>
                <a href="http://www.360rf.in/institution/team" target="_blank">TEAM A</a>
                <a href="http://www.360rf.in/institution/360-rig" target="_blank">360 Research and Innovation Group</a>
                <a href="#" target="_blank">THE KRAFT LADY</a>
                <a href="http://www.360rf.in/institution/life-savers" target="_blank">The Life Savers</a>
                <a href="http://www.360rf.in/institution/master-english-classes-mec" target="_blank">Master English Classes (MEC)</a>
                <a href="http://www.360rf.in/institution/gurukul-coaching-center" target="_blank">Gurukul Coaching Center</a>

                <a href="#" class="active">MEMBERSHIP</a>
                <a href="http://www.360rf.in/article/join-us" target="_blank">Join Us</a>
                <a href="http://www.360rf.in/contact-us" class="active" target="_blank">CONTACT US</a>
            </div>
        </div>

        <button class="openbtn" onclick="openNav()">☰ </button>


        <script>
            function openNav() {
                document.getElementById("mySidepanel").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
            }
        </script>
    </header>

    <?php 
        $result = mysqli_query($con,"SELECT * FROM `customers_list` WHERE Email='" .$_SESSION['email']. "'");
                while($row = mysqli_fetch_array($result))
                {
                    echo "<p class='welcome'>Welcome " . $row["FirstName"] . " !!</p><br>";
                }
                
                mysqli_close($con);
    ?>

    
    <style>
    .welcome{
        position: relative;
        font-size: 50px;
        color: green;
        border:1px solid #000;
        background: #ccc;
        padding: 10px;
        margin: 0px 15px;
        text-align: center;
    }
    </style>


    <a href="logout.php">LOG OUT</a>

    <div class="cart-logo">
        <h1><i class="fa fa-shopping-cart" onclick="showCart()"></i></h1>
    </div>

    <div class="card-wrapper">
        <div class="card">
            <img src="./images/1.jpg" alt="">
            <h2>Swan Bird</h2>
            <p class="product">-3D DIY paper craft kit toy (2 pack of Swan)</p>
            <p>Price: ₹200</p>
            <button class="btn">Buy now</button>
            <span></span>
            <button class="btn" onclick="addItem('Swan Bird',200)">Add to cart</button>
        </div>
        <div class="card">
            <img src="./images/2.jpg" alt="">
            <h2>Elephant</h2>
            <p class="product">-3D DIY paper craft kit toy (2 pack of Elephant)</p>
            <p>Price: ₹250</p>
            <button class="btn">Buy now</button>
            <span></span>
            <button class="btn" onclick="addItem('Elephant',250)">Add to cart</button>
        </div>
        <div class="card">
            <img src="./images/3.jpg" alt="">
            <h2>Saree</h2>
            <p class="product">-Bhopal craft printed Saree</p>
            <p>Price: ₹200</p>
            <button class="btn">Buy now</button>
            <span></span>
            <button class="btn" onclick="addItem('Saree',200)">Add to cart</button>
        </div>
        <div class="card">
            <img src="./images/4.jpg" alt="">
            <h2>NK teddy bear</h2>
            <p class="product">-NK Teddy bear toy for Girls birthday/Home decor</p>
            <p>Price: ₹900</p>
            <button class="btn">Buy now</button>
            <span></span>
            <button class="btn" onclick="addItem('NK teddy bear',900)">Add to cart</button>
        </div>
        <div class="card">
            <img src="./images/5.jpg" alt="">
            <h2>PVL Teddy bear </h2>
            <p class="product">-PVL winters softy teddy bear blush toy</p>
            <p>Price: ₹1,000</p>
            <button class="btn">Buy now</button>
            <span></span>
            <button class="btn" onclick="addItem('PVL Teddy bear',1000)">Add to cart</button>
        </div>
        <div class="card">
            <img src="./images/6.jpg" alt="">
            <h2>Room Carpet</h2>
            <p class="product">-Sikkim weaved branded carpet</p>
            <p>Price: ₹1200</p>
            <button class="btn">Buy now</button>
            <span></span>
            <button class="btn" onclick="addItem('Room Carpet',1200)">Add to cart</button>
        </div>
    </div>
    <div class="select">

    </div>

    <footer>
        <img src="./images/360rf.png" alt="" height="100px">
        <p class="disable-select">Copyright © 2021 All rights reserved</p>
        <div class="contact">
            <a href="" target="_blank"><i class="fa fa-phone fa-x"></i>&nbsp+91-9471040714</a>
            <br><br>
            <a href="mailto: contact@360rf.in"><i class="fa fa-envelope fa-x"></i>&nbspcontact@360rf.in</a>
            <br><br>
            <a href="mailto: hod@360rf.in"><i class="fa fa-envelope fa-x"></i>&nbsphod@360rf.in</a>
        </div>
        <div class="social">
            <a href="" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            <br><br>
            <a href="" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <br><br>
            <a href="" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a>
        </div>
    </footer>


    <script type="text/javascript">
        var noti = document.querySelector('h1');
        var select = document.querySelector('.select');
        var button = document.getElementsByTagName('button');
        for (but of button) {

            but.addEventListener('click', (e) => {
                noti.classList.add('zero');

                var parent = e.target.parentNode;
                var clone = parent.cloneNode(true);
                select.appendChild(clone);
                clone.lastElementChild.innerText = "Buy-now";
                if (clone) {
                    noti.onclick = () => {
                        select.classList.toggle('display');
                    }
                }
            })
        }
    </script>
    <script src="cart.js"></script>
</body>

</html>