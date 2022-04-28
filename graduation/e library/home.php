<!-- this is the connection  -->
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="library";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){

        die("conn is failed" . mysqli_connect_error());
    }
    else{
    // echo "the connection succssed";
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        $name =$_POST["name"];
        $password =$_POST["password"];
        $email =$_POST["email"];
        }
    $sql="INSERT INTO login (name , password, email) VALUES ('$name','$password', '$email')";

    if (mysqli_query($conn,$sql)){
    // echo "done";

    }else{
        echo"error";
    }
    mysqli_close($conn);
?>
<!-- this is the html code -->
<!DOCTYPE html>
<html>
<head>
    <meta charset= "utf-8">
    <title>Homepage E-LIBRARY</title>
    <link rel="stylesheet" href="homepage.css" type="text/css">
    <!-- <style>
    figure{display: inline-block}
    li{ list-style-type: none;}
    </style> -->
</head>

<body >

    <div class="first">
            <h1 class="h" >WELCOME TO OUR E-LIBRERY 
                    <?php echo $name=$_POST["name"] ;?>
                : 
            </h1>
            <!-- the first choice -->
            <div class="lists">
                            
                    <a href="#"class="menu">BOOKS</a>
                        <div class="menuDrop">
                            <ul class = "menulist">
                                <li>
                                    <a href ="computerscience.php" class ="menulink" target="_blank" > computer science</a>
                                </li>

                                <li>
                                    <a href ="biology.php" class ="menulink" target="_blank" >Biology</a>
                                </li>

                                <li>
                                    <a href ="math.php" class ="menulink" target="_blank">Mathematics</a>
                                </li>

                                <li>
                                    <a href ="physics.php" class ="menulink" target="_blank">Physics</a>
                                </li>
                                    
                            </ul>
                        </div>    
            </div>

            <!-- the second choice -->

            <div class="lists">
                        <a href="#" class="menu">RESEARCH</a>  
                        <div class="menuDrop">
                            <ul class = "menulist">
                                <li>
                                    <a href ="computerscience.php" class ="menulink" target="_blank" > computer science</a>
                                </li>

                                <li>
                                    <a href ="biology.php" class ="menulink" target="_blank" >Biology</a>
                                </li>

                                <li>
                                    <a href ="math.php" class ="menulink" target="_blank">Mathematics</a>
                                </li>

                                <li>
                                    <a href ="physics.php" class ="menulink" target="_blank">Physics</a>
                                </li>
                                    
                            </ul>
                        </div>    
            </div>

            <!-- the third choice -->

            <div class="lists">
                        <a href="#" class="menu">NEWSPAPERS</a>
                            <div class="menuDrop">
                                <ul class = "menulist">
                                    <li>
                                        <a href ="computerscience.php" class ="menulink" target="_blank" > computer science</a>
                                    </li>

                                    <li>
                                        <a href ="biology.php" class ="menulink" target="_blank" >Biology</a>
                                    </li>

                                    <li>
                                        <a href ="math.php" class ="menulink" target="_blank">Mathematics</a>
                                    </li>

                                    <li>
                                        <a href ="physics.php" class ="menulink" target="_blank">Physics</a>
                                    </li>
                                        
                                </ul>
                            </div>    
            </div>
    </div>

<!-- the body of the page and the photo -->

    <div class="middle">

            <img class src="e-library.jpg">

                <div class="word">
                    <div>
                        The E-Library offers many of online resources that you can access anytime, anywhere. Download E-Books and digital magazines, newspapers, even learn a new language or skill. scroll down to find all books in our e library
                    </div>
                </div>
    </div>

            <!-- the books down -->

    <div class="ss">
                <a href="#" class="boo">
                    <h1>BOOKS</h1>
                </a>
                        <div class="slider-wrapper">
                            <div class="inner-wrapper">
                            <input checked type="radio" name="slide" class="control" id="Slide1"/>
                            <label for="Slide1" id="s1"></label>
                            <input type="radio" name="slide" class="control" id="Slide2"/>
                            <label for="Slide2" id="s2"></label>
                            <input type="radio" name="slide" class="control" id="Slide3"/>
                            <label for="Slide3" id="s3"></label>


                <div class="overflow-wrapper">



        <a href=" ">

                                <div class="slide">
                                        <img src="page_1_thumb_large.jpg">
                                            <form class="button" action="book1.php" >
                                                                <input  type="submit" value="click here" 
                                style="background-color: #07770c; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div> 
        </a>

        <a href="https://edutechlearners.com/download/Introduction_to_algorithms-3rd%20Edition.pdf">

                                <div class="slide"> 
                                        <img src="algorithm.jpg" > 
                                            <form class="button" action="book2.php"  >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #d41010; border-radius: 5px;color: rgb(0, 0, 0);padding: 10px 20px; outline: none;" > 
                                            </form> 
                                </div> 

        </a>
        <a href="">

                                <div class="slide">
                                        <img src="cs.jpg">
                                            <form class="button" action="book3.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #380777; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>
        </a>

        <a href="">
                                <div class="slide">
                                        <img src="c.jpg">
                                            <form class="button" action="book4.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #e6ff07; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>

        </a>
        <a href="">
                                <div class="slide">
                                        <img src="php.jpg">
                                            <form class="button" action="book1.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #5fb419; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>
        </a>

        

    
        <a href="">
                                <div class="slide">
                                        <img src="humanbody.jpg">
                                            <form class="button" action="book1.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #e6ff07; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>

        </a>

        <a href="">
                                <div class="slide">
                                        <img src="bookcover.jpg">
                                            <form class="button" action="book1.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #e6ff07; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>

        </a>
        <a href="">
                                <div class="slide">
                                        <img src="math.jpg">
                                            <form class="button" action="book1.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #e6ff07; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>

        </a>
        <a href="">
                                <div class="slide">
                                        <img src="math-physics.jpg">
                                            <form class="button" action="book1.php" >
                                                            <input  type="submit" value="click here" 
                                style="background-color: #e6ff07; border-radius: 5px;color: rgb(0, 1, 2);padding: 10px 20px; outline: none;">
                                            </form>
                                </div>

        </a>
                
                
                <div class="slide"><img src="mind.jpg"></div>
                <div class="slide"><img src="nuclear.jpg"></div>
                <div class="slide"><img src="phsical-chem.jpeg"></div>
                <div class="slide"><img src="physics.jpg"></div>
</div>
            


</div>
        </div>
    </div>

    <div class="footer">
            <ul class="list">TERMS & CONDITIONS <br><br>
                <li><a href="" class="list-line">Privacy Policy</a></li>
                <li><a href="" class="list-line">Terms of Use</a></li>
                <li><a href="" class="list-line">Delivery & Shipment Policy</a></li>
                <li><a href="" class="list-line">Refund & Exchange Policy</a></li>
            </ul>
            <ul class="list">INFORMATION <br><br>
                <li><a href="" class="list-line">About Us</a></li>
                <li><a href="" class="list-line">Contact Us</a></li>
            </ul>
            <ul class="list">CONTACT US <br><br>
                <li></li>
                <li></li>
            </ul>
    </div> 
</body>
    </html>