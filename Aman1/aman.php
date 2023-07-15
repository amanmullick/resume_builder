
<?php
$Name = $_POST["Name"];
$birthday = $_POST["birthday"];
$state = $_POST["state"];
$City = $_POST["City"];
$CollegeName = $_POST["CollegeName"];
$SchoolName = $_POST["SchoolName"];
$SchoolAdd = $_POST["SchoolAdd"];
$Phone = $_POST["Phone"];
$email = $_POST["email"];
$java = $_POST["java"];
$html = $_POST["html"];
$css = $_POST["css"];
$js = $_POST["js"];
$python = $_POST["python"];
$swift = $_POST["swift"];
$education = $_POST["education"];

/*
<?php echo "$Name"; ?>
<?php echo "$birthday"; ?>
<?php echo "$state"; ?>
<?php echo "$City"; ?>
<?php echo "$CollegeName"; ?>
<?php echo "$SchoolName"; ?>
<?php echo "$SchoolAdd"; ?>
<?php echo "$Phone"; ?>
<?php echo "$email"; ?>
<?php echo "$java"; ?>
<?php echo "$html"; ?>
<?php echo "$css"; ?>
<?php echo "$js"; ?>
<?php echo "$swift"; ?>
<?php echo "$python"; ?>
<?php echo "$education"; ?>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">    <!-- Font awesome CDN -->

    <script src="https://cdn.tailwindcss.com"></script> <!-- TAILWIND CSS CDN -->

<link href="Simple-Plain-Bar-Chart-Plugin-With-jQuery-barCharts/jquery.barCharts.css" rel="stylesheet" type="text/css"> <!-- BAR CHART CSS -->

<script type="module" src="animate-dom-scroll-mouse-hover/index.js"></script> <!--animation - css-->

<link rel="stylesheet" href="AmanButton/style.css">
<script src="AmanButton/javascript.js"></script>


<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="jQuery-Progress-Bar-Plugin-LineProgressbar 2/jquery.lineProgressbar.css" rel="stylesheet" type="text/css">

   
<!-- TYPING STYLE -->
<style>
    .animate-typing {
        font-size: 30px;
        font-weight: medium;
        text-align: center;
        padding: 20px;
    }
    .container { margin: 150px auto; max-width: 960px; text-align: center; }
</style>

    <title>Aman </title>
   
    <script>

        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        };
    
      </script>
</head>
<body>
    <main>
        <div  id="myDIV">
        <div class="content flex"  >
            <div class="left bg-black text-white w-72 h-screen fixed">
                    <div class="profile px-16 pt-10">
                        <img class="rounded-full w-32 h-32 "  src="images/Aman.jpg" alt="" srcset="">
                        <br>
                    </div>
                    <div class="name">
                        <p class="px-16	font-semibold "><?php echo "$Name"; ?></p>
                            <br><br>
                    </div>
                <div class="nav px-20 ">
                    <ul>
                        <li class="hover:font-bold cursor-pointer"><i class="fa-solid fa-house pr-2"></i><a href="#home">Home
                            </a>
                        </li>
                        <br>
                        <li class="hover:font-bold cursor-pointer"><i class="fa-solid fa-user pr-2"></i><a href="#about">About
                            </a>
                        </li>
                        <br>
                        <li class="hover:font-bold cursor-pointer"><i class="fa-solid fa-circle-info pr-2"></i>
                            <a href="#resume">Resume</a>
                        </li>
                        <br>
                        <li class="hover:font-bold cursor-pointer"><i class="fa-solid fa-address-book pr-2"></i>
                            <a href="#contact">Contact</a>
                        </li>
                        <br>
                    </ul>
                </div>
                <br><br><br>
                <div class=" social  grid-cols-4 gap-5 flex px-14 ">
                    
                    <div>
                        <i class="fa-brands fa-facebook cursor-pointer"></i>
                    </div>
                    <div>
                             <a href="https://www.instagram.com/aman_mullick/">
                                <i class="fa-brands fa-instagram cursor-pointer"></i>
                            </a>
                    </div>
                    <div>
                        <i class="fa-brands fa-twitter cursor-pointer"></i>
                    </div>
                    <div>
                        <i class="fa-brands fa-linkedin cursor-pointer"></i>
                    </div>
                </div>
                  <br><br>
                <p class="px-8">Designed by <span class="text-blue-900"> RAP Developers</span></p>
                <br><br>
            </div>

            <div id="home" class="right bg-slate-300    	 w-auto h-screen  ">
               
            
                <div class="bg-fixed bg-no-repeat  grid place-items-center bg-cover w-screen h-screen"  
                    style="background-image: url('images/bg.jpg')">
    
                    <div  class="container text-white">
                        
                            <p class="	text-5xl	font-extrabold	animated ">
                                <?php echo "$Name"; ?>
                            </p>
                                <div
                                    class="animate-typing"
                                    
                                    data-animate-loop="true"
                                    data-type-speed="200"
                                    data-type-delay="200"
                                    data-remove-speed="50"
                                    data-remove-delay="500"
                                    data-cursor-speed="200">
                                    
                                    Developer|
                                    Designer|
                                    Coder|
                                    Learner|
                                </div>
                    </div>   
                    
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
                        <script src="animate-typing/jquery.animateTyping.js"></script>
                                    

                </div>
                            

                <div class=" about pl-3 ml-72 text-black	bg-white" >
                    <br>
                    <p id="about"  class="text-sky-900	text-3xl	font-extrabold	underline p-3 ">About</p> 
                    
                    <br><br>

                    <div class="about-main flex ">
                            <div class="about-left w-1/3 p-3 ml-20  animated " 
                                data-animated="transform right,fade" data-trigger="on screen">
                           
                                <img class="h-60 w-60 " src="images/Aman.jpg" alt="" srcset="">
                               
                            </div>
        
        
                            <div class="about-right w-2/3 p-3 ">
                                <p class="text-sky-900	text-2xl	font-bold	animated " 
                                    data-animated="transform left,fade" data-trigger="on screen"  >
                                        Designer & Developer
                                <p>
                                    <br>
                                    <ul>
                                        <br>
                                        <div class="divide grid-cols-2 flex text-lg " >

                                            <div class="left p-3  animated " data-animated="transform left,fade" data-trigger="on screen">
                                                <li><span class="font-bold"> Birthday </span>: <?php echo "$birthday"; ?></li>
                                                <br>
                                                <li><span class="font-bold"> Degree </span>: BE</li>
                                                <br>
                                                <li><span class="font-bold"> Institute Name </span>: <?php echo "$CollegeName"; ?></li>
                                                <br>
                                            </div>
                                           

                                            <div class="right p-3 pl-5 animated " data-animated="transform left,fade" data-trigger="on screen">
                                                <li><span class="font-bold"> City </span>: <?php echo "$City"; ?></li>
                                                <br>
                                                <li><span class="font-bold"> State </span>: <?php echo "$state"; ?></li>
                                                <br>
                                                 <li><span class="font-bold"> Email </span>: <?php echo "$email"; ?></li>
                                                 <br>
                                            </div>
                                            
                                        </div> 
                                        
                                    </ul>
                             </div>


                            
                    </div>
                    <br><br>

                </div>

                <div id="resume" class="skills pl-3 ml-72  text-black	bg-slate-100		">
                  
                    <p class="text-sky-900	text-3xl	font-extrabold	underline p-3 ">Skills</p> 
                    
<br>
                    <div class="skills-main mx-10">
                        
                      
                            

<div class="containera  animated " 
data-animated="transform up,fade" data-trigger="on screen"  >
    <h2>HTML</h2>
    <div id="p1"></div>
    <h2>CSS</h2>
    <div id="p2"></div>
    <h2>JS</h2>
    <div id="p3"></div>
    <h2>JAVA</h2>
    <div id="p4"></div>
    <h2>PYTHON</h2>
    <div id="p5"></div>
    <h2>SWIFT</h2>
    <div id="p6"></div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="jQuery-Progress-Bar-Plugin-LineProgressbar 2/jquery.lineProgressbar.js"></script>
    <script>
    $('#p1').LineProgressbar({
    percentage:<?php echo "$html"; ?>,
    radius: '10px',
    height: '10px',
    });
    $('#p2').LineProgressbar({
    percentage:<?php echo "$css"; ?>,
    radius: '10px',
    height: '10px',
    });
    $('#p3').LineProgressbar({
    percentage:<?php echo "$js"; ?>,
    radius: '10px',
    height: '10px',
    });
    $('#p4').LineProgressbar({
    percentage:<?php echo "$java"; ?>,
    radius: '10px',
    height: '10px',
    });
    $('#p5').LineProgressbar({
    percentage:<?php echo "$python"; ?>,
    radius: '10px',
    height: '10px',
    });
    $('#p6').LineProgressbar({
    percentage:<?php echo "$swift"; ?>,
    radius: '10px',
    height: '10px',
    });
    </script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    
       <br>                
    <br><br> 
                    </div>
                    </div>
                   
               


                <div class="Education pl-3 ml-72 text-black	bg-white	">
                    <br>
                    <p id="resume"  class="text-sky-900	text-3xl	font-extrabold	underline p-3 ">Resume</p> 

                    <br>


                        <div class="edu-main-1 flex p-7">
                            <div class="edu-left w-1/2 p-7 animated " data-animated="transform right,fade" data-trigger="on screen">
                                
                                <p class="text-sky-900	text-2xl	font-bold	">Sumary</p>
                                <br>
                                <p class="text-xl	font-semibold"><?php echo "$Name"; ?></p>
                                <br>
                                <p class="text-lg	">Innovative and deadline-driven Front-end Developer with 3+ years of experience designing and developing user-centered design according to customer requirements.</p>
                                <br>
                                <ul class="list-disc text-lg pl-3" >
                                    <li>
                                        <?php echo "$City"; ?>,<?php echo "$state"; ?>
                                    </li>
                                    <li>
                                        +91 <?php echo "$Phone"; ?>
                                    </li>
                                    <li>
                                        <?php echo "$email"; ?>
                                    </li>
                                </ul>
                                
                                
                                <br><br>
                            </div>
                        
                            <div class="edu-right w-1/2 p-7  animated " data-animated="transform left,fade" data-trigger="on screen">
                                
                                <p class="text-sky-900	text-2xl	font-bold	">Education</p>
                                <br>
                                <p class="text-xl   font-semibold"><?php echo "$education"; ?> (2020-2024)</p>
                                <br>
                                <ul class="list-disc text-lg pl-5" >
                                    <li>
                                        <p class="text-lg	"><?php echo "$CollegeName"; ?> Gandhinagar <?php echo "$state"; ?></p>
                                    </li>
                                </ul>
                               <br>
                                <p class="text-xl   font-semibold">SCHOOL</p>
                                <br>
                                <ul class="list-disc text-lg pl-5" >
                                    <li>
                                        <p class="text-lg	"><?php echo "$SchoolName"; ?></p>
                                    </li>
                                </ul>
                                
                               

                                <br><br>

                             </div>
                        </div>
              

                      
                </div>
          

                <div id="contact" class="contact pl-3 ml-72 bg-slate-100	text-black">
                    <br>
                    <p class="text-sky-900	text-3xl	font-extrabold	underline p-3 ">Contact</p> 
                    <br><br>

                    <div class="left p-3 animated " data-animated="transform down,fade" data-trigger="on screen">
                        <ul>
                            <li> <span class="text-xl   font-semibold">Email</span>  : <span class="text-lg"><?php echo "$email"; ?></span> </li>
                            <br>
                            <li><span class="text-xl   font-semibold">Call</span>  : <span class="text-lg">+91 <?php echo "$Phone"; ?></span></li>
                        </ul>
                    </div>

                    <div class="right p-3">

                    </div>

                </div>

                

            </div>
        </div>
    </div>
</div>
    </main>






</body>
</html>