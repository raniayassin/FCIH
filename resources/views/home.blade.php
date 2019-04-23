
<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('views') }}/vendors/css/ionicons.min.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('views') }}/resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <title >Courses Camp</title>
    <style type="text/css">

        .app-screen {
            position: relative;
            float: left ; 
            left: 20% ; 
            width: 20% ; 
        }
        .works-step 
        ,.bttm-apps{
            position: relative ; 
            left: 27%; 
        }
        
            html {
    background-color: white ;
    color: #555 ;
    font-family: 'lato','arial', sans-serif;
    font-size: 20px ;
    text-rendering: optimizeLe gibility;
    font-weight: 300; 
    overflow-x:hidden ; 
}    
        header{
           
            background-position: center ; 
            background-size: cover ;
            height: 25vh ;
            background-attachment: fixed ; 
            
        }
        #logo {
            margin-top: 20px ;
            margin-left: -20px ; 
            height: 90px ; 
            width: auto ; 
            
        }
       
        #first-p{
            color: white;
            padding-top: 25px ;
            position: relative;
            left: 40%;
            font-size: 120% ;
        }
        #fcih {
            padding-top: 5px ;
            position: fixed ; 
            left: 46%;
            color: #E67E22 ;
            font-size: 150%;
            font-weight: 700 ;
        }
        .capital {
            color: #E67E22; 
            font-weight: 700 ;
        }
        #first-btm {
            padding-top: 60px ;
            position: fixed  ;
            left: 36% ;
        }
        .courses {
             margin: 0 ! important ; 
            
        }
        .courses-info {
            margin: 40px ;
            padding: 15px ; 
            background-color: #ebebeb; 
            height: 330px;
        }
        h2 {
            color: black ; 
        }
        #course-title {
            font-size: 200% ;
            
        }
        .ion-person {
            color: #e67e22 ; 
            font-size: 30px ; 
            padding: 5px 5px 5px 20px ;
        }
        
        .instructor {
            font-size: 20px ;
            padding-left: 10px;
        }
        .description {
            width: 35%;
            padding: 5px 5px 5px 50px ;
            color: #8d8d8d;
            font-size: 80%; 

        }
        .content {
            width: 15%;
            font-size: 15px ;
            position: relative;
            left: 38%;
            bottom: 110px ; 

        }
        a:link,
        a:visited {
            color:cornflowerblue ; 
            text-decoration: none ; 
            padding-bottom: 1px ; 
            border-bottom: 1px solid cornflowerblue ; 
            transition: border-bottom .2s,  color 1s ;
        }

        a:hover, 
        a:active {
            color: #E67E22  ; 
            border-bottom: 1px solid transparent ; 

        }

        .video {
            position:relative ; 
            left: 60%;
            bottom: 275px ; 
            width: 450px ;
            height: 195px;
             
            
        }
        /*=======external====*/
        /*===================*/
        /*===================*/
        
        /*=====Headder========*/
         .hero-text-box {
                position: absolute ; 
                width: 1140px ; 
                left : 50% ; 
                top : 6% ;
                transform: translate(-50% , -50%) ;

            }
        .main-nav {
            float: right ; 
            list-style: none ; 
            margin-top: 40px ;
        }

        .main-nav li {
            display: inline-block ; 
            margin-left: 40px ; 

        }
        .main-nav li a:link, 
        .main-nav li a:visited {
            padding: 8px 0px ; 
            color: white ; 
            text-decoration: none ; 
            text-transform: uppercase ; 
            font-size: 85% ; 
            border-bottom: 2px solid transparent ;
            transition:  border-bottom .02s; 


        }
        .main-nav li a:hover, 
        .main-nav li a:active {
            border-bottom: 2px solid #e67e22 ; 
        }
        /*=====Headding========*/
        h1,
        h2 {

            font-weight: 300 ; 
            text-transform: uppercase ; 
            letter-spacing: .5px ; 
        }

        h1 {
        
            color: white ; 
            word-spacing: 3px ; 
            left: 23% ;



    }

        h2 {

            font-size: 180% ;
            word-spacing: 2px;
            text-align: center;
            margin-bottom: 30px ;

    }
    h2:after {
        display: block;
        height: 2px ;
        width: 100px ;
        background-color:#e67e22;
        content: " ";
        margin: 0 auto ;
        margin-top: 30px ;
    }

    h3{
        margin-bottom: 15px;
    }
        /*-------------------------------*/ 
        /*--------SETUP------------------*/
        /*-------------------------------*/ 

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html {
            background-color: white ;
            color: #555 ;
            font-family: 'lato','arial', sans-serif;
            font-size: 20px ;
            text-rendering: optimizeLegibility;
            font-weight: 300; 
        }

        
        /*-------------------------------*/ 
        /*--------REUSNABLE------------------*/
        /*-------------------------------*/

        section {
            padding: 80px 0px ;
        }

        .row {
            max-width: 1140px;
            margin: 0 auto;
            left: 30% ;
        }

        

        /*-------------------*/
        /*-----botton--------*/
        /*-------------------*/
        .btm:link,
        .btm:visited,
        input[type=submit] {
             display: inline-block ; 
             padding: 15px 30px ; 
             font-weight: 300px ; 
             text-decoration: none ; 
             border-radius: 200px ; 
             transition: background-color .2s , color .2s , border .2s ; 

        }

        .btm-full:link,
        .btm-full:visited,
        input[type=submit] {
            background-color: #e67e22; 
            color: white; 
            border: 1px solid #e67e22 ; 
            margin-right: 15px ; 

        }

        .btm-ghost:link ,
        .btm-ghost:visited {
            border: 1px solid #e67e22 ; 
            color: #e67e22 ; 

        }

        .btm:hover,
        .btm:active,
        input[type=submit]:hover,
        input[type=submit]:active {

            background-color: #c97122 ;

        }

        .btm-full:hover,
        .btm-full:active,
        input[type=submit] {
            border: 1px solid #e67e22 ; 

        }

        .btm-ghost:hover ,
        .btm-ghost:active {
            border: 1px solid #e67e22 ; 
            color: #fff ; 
        }

        p{
            padding-bottom: 10px;
        }
        h2{
            color: black;
            padding-top: 10px;
        }
       body
       {
        background-color:#F8F8F8;
       }
       .d1
       {
         background:#FFF;
         margin:60px auto;
         width: 933px;
       }
       .d2
       {
         margin-bottom:15px;
       }
       .d3
       {
         border-top:5px solid #E67E22;
         margin-bottom:15px;
       }
       .d4
       {
         border-top:5px solid #E67E22;
       }
       img
       {
         width:933px;
         height:400px;
       }
       p
       {
        color:#8d8d8d ;
       }



    </style>

</head>                                  
    <body>
        <header style="background-color:#404040; "> 
            <nav>
                <div class="row">
                    <img img src="{{ asset('webhome') }}/vendors/css/img/logo3.png" id="logo" >
                    <ul class="main-nav">
                         @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <li> <a href="{{ url('/') }}">Home</a></li>
                        <li> <a href="#">Contact</a></li>
                        <li> <a href="#">ِAbout Us</a></li>
                        <li> <a href="{{ route('logout') }}"onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    {{ csrf_field() }}
                     </form>
                        </li>
                        
                    </ul>
                    
                </div>
            </nav>
                <div class="hero-text-box">
                    <div id="first-btm">
                    <a class="btm btm-full" href="">Premium</a>
                    <a class="btm btm-ghost" href="">Totally Free</a>
                    </div>
                </div>
        </header>



        <section class="News">
            <h2>News</h2>

              <div class="d1">
      <div class="d2">
        <h2>Web Designing</h2>
        <p>
            Do web designers really need to know how to code? Do we really need “unicorns”?<br>
            The answer is probably no.<br>
            Today's world is heading towards super specialization (for example mobile apps for just about anything). Most designers prefer to focus on their strengths – the creative aspects of the website design. Let the developer figure out how to bring it to life. Or better still, create a live site with modern co-design tools, where there’s no need to call in a developer!
            <br>But here’s the thing – as a creative, you want full control over your work. You want to see your work go live. You want to push the boundaries.<br>
            As Van Gogh wrote<br>
            'I keep on making what I can’t do yet in order to learn to be able to do it.' — Vincent Van Gogh
            <br> To truly master your craft, you need to understand the medium. The medium of the web, is code.
            <br>For those who aspire to master web design, the question is not really “Does a web designer need to learn how to code?” but it’s more of “How much code does a web designer need to learn?”.
            <br>A designer does not need to be an HTML or CSS guru. Or an expert coder. A designer needs to understand just enough about the code that forms the basis of the web – to be able to connect the dots and make sound design decisions.
        </p>
        <img src="images/Design.jpg">
      </div>
      <div class="d3">
        <h2>Programming</h2>
        <p>
            A programming language is a formal language that specifies a set of instructions that can be used to produce various kinds of output. Programming languages generally consist of instructions for a computer. Programming languages can be used to create programs that implement specific algorithms.
            The earliest known programmable machine preceded the invention of the digital computer and is the automatic flute player described in the 9th century by the brothers Musa in Baghdad, "during the Islamic Golden Age".
            <br>[1] From the early 1800s, "programs" were used to direct the behavior of machines such as Jacquard looms and player pianos.
            <br>[2] Thousands of different programming languages have been created, mainly in the computer field, and many more still are being created every year.
            <br>Many programming languages require computation to be specified in an imperative form (i.e., as a sequence of operations to perform) while other languages use other forms of program specification such as the declarative form (i.e. the desired result is specified, not how to achieve it).
            <br>The description of a programming language is usually split into the two components of syntax (form) and semantics (meaning). Some languages are defined by a specification document (for example, the C programming language is specified by an ISO Standard) while other languages (such as Perl) have a dominant implementation that is treated as a reference. Some languages have both, with the basic language defined by a standard and extensions taken from the dominant implementation being common
        </p>
        <img src="images/01.jpg">
       </div>
       <div class="d4">
          <h2>Android</h2>
          <p>
            Android is a mobile operating system developed by Google, based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Android's user interface is mainly based on direct manipulation, using touch gestures that loosely correspond to real-world actions, such as swiping, tapping and pinching, to manipulate on-screen objects, along with a virtual keyboard for text input. In addition to touchscreen devices, Google has further developed Android TV for televisions, Android Auto for cars, and Android Wear for wrist watches, each with a specialized user interface. Variants of Android are also used on notebooks, game consoles, digital cameras, and other electronics.
            <br>In 2007, the green Android logo was designed for Google by graphic designer Irina Blok. The design team was tasked with a project to create a universally identifiable icon with the specific inclusion of a robot in the final design. After numerous design developments based on science fiction and space movies, the team eventually sought inspiration from the human symbol on restroom doors and modified the figure into a robot shape. As Android is open-source, it was agreed that the logo should be likewise, and since its launch the green logo has been reinterpreted into countless variations on the original desi
            <br>The success of Android has made it a target for patent and copyright litigation as part of the so-called "smartphone wars" between technology companies.
          </p>
          <img src="images/Android.jpg">
      </div>
    </div>

            
            
        </section>

               
            
       

    

        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Courses<span>Camp</span></h3>

                <p class="footer-links">
                    <a href="userhmeo.html">Home</a>
                    
                    <a href="aboutus.html">About us</a>
                    
                    <a href="contactus.html">Contact Us</a>
                    
                </p>

                <p class="footer-company-name">FCIH &copy; 2019</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Helwan University</span> cairo , Egypt</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+20 122 123456</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="{{ asset('views') }}/mailto:support@fcih.com.com">support@fcih.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
 We are the right place that will provide you courses that will help you in your life.          
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>
   
  

    </body>
</html>




