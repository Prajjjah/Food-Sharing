<?php 
include("fa1.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="sidenav1.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Logged in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Organic, How it Works?, Our Promise, About Our Farm, Happy Animals, Of Organic Food">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage2.css" media="screen">
<link rel="stylesheet" href="Home2.css" media="screen">
   
   
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/food-sharing-donating.jpg"
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
	<style>
p {
	
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 65px;
    margin-right: 75px;
}
div.container1 {
    width:98%; 
    margin:1%;
  }
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin-left:15%; 
   margin-right:15%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}


}   
  </style>
</head>

<body>
  
 <!-- side navbar -->
  <ul id="sidenav-1 grey darken" class="sidenav sidenav-fixed">
    <li class="sidenav-header red">
      <div class="row">
          <div class="col s8">
            <a href="#" class="dropdown-trigger btn-flat waves-effect waves-light white-text" data-target="dropdown" data-activates="dropdown">
             <?php echo $rsedit[name]; ?> <i class="material-icons">arrow_drop_down</i></a>
            <ul id="dropdown" class="dropdown-content">
              <li><a href="nprofile.php"><i class="material-icons">person</i>Profile</a></li>
              <li><a href="nupdate.php"><i class="material-icons">create</i>Update profile</a></li>
              <li><a href="nchangepass.php"><i class="material-icons">help</i>Change password</a></li>
              <li class="divider"></li>
              <li><a href="logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
          </ul>
        </div>
      </div>
    </li>
<li class="white"><a href="requestitem.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i>View and Request Item</a></li>
<li class="white"><a href="viewstatus.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> View Status</a></li>
<li class="white"><a href="assignlogistics.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Assign Logistics</a></li>
<li class="white"><a href="viewarticle.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i>Blogs</a></li>
<li class="white"><a href="faq.html" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> FAQ</a></li>
<li class="white"><a href="ngo_report.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Report</a></li>

  </ul>
<body class="u-body"><header class="u-align-center u-clearfix u-header u-header" id="sec-5f00"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-align-left u-image u-logo u-image-1" data-image-width="995" data-image-height="469">
          <img src="images/food-sharing-donating.jpg" class="u-logo-image u-logo-image-1" data-image-width="242.6667">
        </a>
        <h1 class="u-align-center u-custom-font u-font-roboto-slab u-text u-title u-text-1">FOOD SHARING</h1>
      </div></header> 
	  <div id="page-container">
  <div class="content">
      <div id="content-wrap">
        <!-- all other page-content -->
        <section >
			<br><br>			 
			  <h2 class="center">Report</h2>
			   <form method="post" >
                    <input type="hidden" name="randnumber" value="<?php echo $randnumber; ?>" >
					<div class="container">
							<?php
							if(!isset($_SESSION)) { session_start(); }
								include("dbconnection.php");

								$_SESSION[randnumber] = $randnumber;
								if(isset($_SESSION[id]))
								{
								$sql1 = "SELECT * FROM  ngo_log where ngo='$rsedit[name]'";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>Restaurant</th>
										<th>Food Item</th>
										<th>Quantity</th>
										<th>Logistics</th>
										</tr>";
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								  echo "<td>".$rs[restaurant]."</td>";
								  echo "<td>".$rs[foodname]."</td>";
								  echo "<td>".$rs[qty]."</td>";
								  echo "<td>".$rs[logistics]."</td>";
								  echo "</tr>";
							  }
								echo "</table>";
							
								
							  }
								
							?>
              </div>
							<br><br>
             
		      </div>
						
                    </form>
                   
			  
						
				</section>		
      </div>		
		</div>
</div>
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7f8c"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">The New Everyday Revolution<br>Copyright © 2021 Food Sharing<br>
        </p>
      </div></footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.modal').modal();
$('.dropdown-trigger').dropdown();
$('.sidenav').sidenav();
});
  </script>
         

  </body>
  </html>