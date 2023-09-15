<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="style.css" type="text/css">
  <title>CCSIT-Muttil</title>
</head>
<div class="container">
<header class="heading">
<img src="Uni_of_cali.png" class="img" alt="logo"> 
 <h1>CCSIT Muttil</h1>
   <div class="wrapper">
	<nav>
		
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	 </nav>
	</div>
	
		  
</header>
<h1>WE ENSURE A BETTER EDUCATION <br> FOR A BETTER WORLD</h1><hr><br>
<main class="content">
	<div class="section">
		
		
        <style>
            img{
  width: 5%;
  margin-left: 2rem;
  margin-top: 0%;
}
.content{
  background: url(front.jpg)
  no-repeat center center;
  min-height: 30rem;
}
nav ul{
  float: right;
  margin: 0;
  margin-right: 1.9rem;
}

nav ul li{
  list-style-type: none;
  display: inline-block;
}

nav ul li a{
  text-decoration: none;
  color: #010000;
  padding: 20px;
}

nav ul li:hover{
  background-color: coral;
  color: #000;
  font-weight: bold;
  font-size: 1.2rem;
}</style>
<br><br><br>
	</div></main><br><br><br><br>
	<center><h1>Center for Computer Science and Information Technology</h1></center>
		<p>The University of Calicut is the largest University in Kerala. Established in the year 1968, it is the second university to be set 
			up in Kerala. The University aims to nurture excellence in education and research in its catchment areas of Northern Kerala, hist
			orically consigned to the periphery of Kerala’s academic map. The University lays its emphasis on fostering quality human resource
			 and promoting productive research that benefit both local communities and wider humanity.The University was created through a Gov
			 ernment plan bifurcating Kerala University. As per the plan, the four post-graduate departments of the University of Kerala opera
			 ting in Calicut were annexed to the new University along with fifty four constituent colleges spread across seven northern distr
			 icts. With ‘Nirmaya Karmana Sree’ as it motto, the University has been able to surmount all challenges and emerge as the largest
			  residential cum affiliating University in Kerala. With 30 post graduate departments and 395 colleges it has become a beacon of 
			  hope and enlightenment for hundreds of thousands of young men and women in North Kerala.</p><hr>
		
	<showcase>
		<center><h2><bold>COURSES WE OFFER</h2><br><br></bold></center>
		<div id="courses">
			<div class="it">
				
				
				<h3>BSC INFORMATION TECHNOLOGY</h3>
				<p>A Bachelor of Science in Information Technology, is a bachelor's degree  awarded for an undergraduate program in the information technology. The degree is normally required in order to work in the Information technology industry.A Bachelor of Science in Information Technology (B.Sc IT) degree program typically takes three to four years depending on the country. This degree is primarily focused on subjects such as software, databases, and networking. In general,computer science degrees tend to focus on the mathematical and theoretical foundations of computing rather than emphasizing specific technologies.</p>
			</div>
			
			<div class="mca">
				
		
				<h3>MASTER OF COMPUTER APPLICATION</h3>
				<p>Master of Computer Applications (MCA) is a two year professional post-graduate programme for candidates wanting to delve deeper into the world of computer application development with the help of learning modern programming language.The programme is a blend of both theoretical and practical knowledge.The course aims to prepare students for a flourishing corporate IT culture with exposure. MCA education focuses on learning programming constructs and application modeling.</p>
			
			</div>
		</div>
	</showcase>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Results and Admin login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
                <div class="row">
                    <div class="col-lg-6 visible-lg-block">

<section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>For Students</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">View Internal Mark</p>
                                                    </div>

                                                    <form class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-6 control-label">Search your Internal mark</label>
                                                            <div class="col-sm-6">
                                                               <a href="find-result.php">click here</a>
                                                            </div>
                                                        </div>

                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->

                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                    
                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Admin Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title"></p>
                                                    </div>

                                                    <form class="form-horizontal" method="post">
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" class="col-sm-2 control-label">Username</label><br><br>
                                                    		<div class="col-sm-10">
                                                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-2 control-label">Password</label><br><br>
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		</div>
                                                    	</div>

                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">

                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                          
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>
        
	<footer class="footer">&copy; CCSIT Muttil</footer>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
