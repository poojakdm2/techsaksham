<?php

try {
    $db=new mysqli("localhost","root","","contact");
}
catch (Exception $exc){
    echo $exc->getTraceAsString();


}
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['message']))
{
    $fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];


$is_insert=$db->query("INSERT INTO `contactdata`( `fname`, `lname`, `mobile`,  `message`, `email`) VALUES ('$fname','$lname','$mobile','$message','$email')");
if($is_insert== TRUE)
{
    // echo "<h2>thank you for contacting us</h2>";
    echo '<script>alert("Thank You For contacting us")</script>';
    exit();
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://kit.fontawesome.com/f634e3c3e4.js" crossorigin="anonymous"></script>
    
</head>




<header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Cyber Booster</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="fapps.php">Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                  </li>
                  
                </ul>
                <button class="btn btn-success text-dark"  onclick="document.location='signin.php'">Sign In</button>
               
              </div>
            </div>
          </nav>
          
         
    
        
    </header>
   
   

<body>
    <div class="circle"></div>  
    <div class="contactus">
        <div class="title">
            <!-- <h2>Get in Touch</h2> -->
        </div>
        <div class="box">

            <!-- contact info -->
           

            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infobox">
                <div>
                    <span><i class="fas fa-map-marker-alt"></i>
                    </span>
                    <p>Government College of Engineering and Research, Avasari</p>
                </div>
                <div>
                    <span><i class="fas fa-envelope-square"></i>
                    </span>
                    <a href="mailto:kadam.mpooja008@gmail.com">Cyberbooster@gmail.com</a>
                </div>

                <div>
                    <span><i class="fas fa-phone-square-alt"></i></span> 
                      
                    <a href="+919156397169">+91 956 635 9566</a>
                </div>
                <!-- social media links -->

                <ul class="sci">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i> </a></li>
                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>

                </ul>

                </div>
            </div>



            <!-- <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.716587522322!2d73.9613034147276!3d18.988119959663557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1639018501630!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div> -->


        <div class="contact form">
            <h3>Send a Message</h3>
            <form action="" method="POST" >
                <div class="formbox">
                    <div class="row50">
                        <div class="inputbox">
                            <spam><i class="fas fa-user"></i> First Name</spam>
                            <input type="text" placeholder="john" name="fname"required>
                        </div>
                        <div class="inputbox">
                            <spam><i class="fas fa-user"></i>  Last Name</spam>
                            <input type="text" placeholder="Doe" name="lname" required>
                        </div>
                    </div>
                

                <div class="row50">
                    <div class="inputbox">
                        <spam><i class="fas fa-envelope-square"></i> Email Address</spam>
                        <input type="email" placeholder="john@gmail.com" name="email" required>
                    </div>
                    <div class="inputbox">
                        <spam><i class="fas fa-phone-square-alt"></i> Mobile</spam>
                        <input type="tel" placeholder="+91 XXX XXX XXXX" name="mobile">
                    </div>
                </div>

                <div class="row100">
                    <div class="inputbox">
                        <spam><i class="fas fa-comments"></i> Message</spam>
                        <textarea placeholder="write your message here" name="message" required ></textarea>
                    </div>
                    </div>
                    <div class="row100">
                        <div class="inputbox">
                            <input type="submit"  value="SEND">
                        </div>
                        </div>

            </form>


        </div>
      

        
        </div>
    </div>
    <script>
        $(document).ready(function(){
          $('.btn').click(function(){
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
          });
        });
     </script>
     <script type="text/javascript">
        const pos = document.documentElement;
        pos.addEventListener('mousemove', e => {
            pos.style.setProperty('--x', e.clientX + 'px');
            pos.style.setProperty('--y', e.clientY + 'px');
        })
      </script>  
    
</body>
</html>



