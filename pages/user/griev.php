﻿<?php
session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0051)file:///C:/Users/NAUSH/Desktop/project/CoPilot.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>CoPilot</title><!-- <link rel="shortcut icon" type="image/x-icon" href="https://copilot.mistergf.io/static/img/favicon.ico"> --><!-- <link rel="stylesheet" href="./CoPilot_files/bootstrap.min.css"><link rel="stylesheet" href="./CoPilot_files/font-awesome.min.css"><link rel="stylesheet" href="./CoPilot_files/ionicons.min.css"> --><link rel="stylesheet" href="./CoPilot_files/AdminLTE.min.css"><link rel="stylesheet" href="./CoPilot_files/skin-blue.min.css"><link rel="stylesheet" href="./CoPilot_files/pace.min.css"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><link href="./CoPilot_files/app.a8d04244372a92649e4c2d9ab2969f89.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type="text/css">
        #username
        {
          color:white;
          font-size:25px;
          padding-left: 20px;
          padding-top: 10px;
          padding-right: 20px;
          padding-bottom: 5px;

        }
        #custom
        {
          color:white;
          font-size:15px;
          padding-left: 20px;
          padding-right: 20px;
          padding-bottom: 10px;
        }
        #divcustom
        {
          float: right;
          height:50px;
          
        }


       
      </style>
      <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    float: right;
    position: relative;
    display: inline-block;
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    right: 0;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
      <!-- <link rel="stylesheet" href="./CoPilot_files/bootstrap.min(1).css"> -->
   <!--  <script async="" src="./CoPilot_files/analytics.js.download"></script><script src="./CoPilot_files/jquery.min.js.download"></script>
    <script src="./CoPilot_files/bootstrap.min.js.download"></script> -->
      <link rel="stylesheet" href="./CoPilot_files/w3.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
 -->  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
 
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  
  
  <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
            function ajaxFunction(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
          
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                   if(ajaxRequest.responseText=="fail")
                     {
                        alert(ajaxRequest.responseText);
                     }
                     else
                     {
                      alert(ajaxRequest.responseText);
                      location.reload();
                     }
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
          
               var age = document.getElementById('subject').value;
               var wpm = document.getElementById('message').value;
               var queryString = "?age=" + age ;
            
               queryString +=  "&wpm=" + wpm;
               ajaxRequest.open("GET", "ins.php" + queryString, true);
               ajaxRequest.send(null); 
            }
         //-->
      </script>

      <script src="./scripts/bootstrap-confirmation.min.js" type="text/javascript"></script>

   
  
    </head>
    <body class="skin-blue sidebar-mini              pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div id="app"><div class="wrapper">

<header class="main-header">
  <span class="logo-mini">
    <a href="https://copilot.mistergf.io/">
      <img src="./images/fus.png" alt="Logo" class="img-responsive center-block logo">
    </a>
  </span>
  <nav role="navigation" class="navbar navbar-static-top" style="height: 50px;">
    <a href="javascript:;" data-toggle="offcanvas" role="button" class="sidebar-toggle" style="text-decoration: none;"><span class="sr-only">Toggle navigation</span>
    </a> 

    <div id="divcustom">
        <a href="file:///C:/Users/NAUSH/Desktop/project/CoPilot.html" style="color:white; padding-right: 15px;">username</a>
        <a href="file:///C:/Users/NAUSH/Desktop/project/CoPilot.html#" class="btn btn-info btn-lg" style="background-color:red; height: 50px;">
          <center>
            <span class="glyphicon glyphicon-log-out"></span>Log out
          </center>
        </a>
    
    </div>
  </nav>
 </header> 
<aside class="main-sidebar">
  <section class="sidebar">
    
    <ul class="sidebar-menu"> 
      <li class="pageLink">
        <a href="CoPilot.php" class="router-link-exact-active router-link-active">
           <i class="fa fa-desktop"></i> 

          <span class="page">Dashboard</span>
        </a>
      </li> 
      <li class="pageLink">
        <a href="invoice.php" class="">
         <i class="fa fa-table"></i> 
          <span class="page">Invoice</span>
        </a>
      </li>
      <li class="pageLink">
        <a href="extratime.php" class="">
          <i class="fa fa-clock-o"></i> 
          <span class="page">Request Extra Time</span>
        </a>
      </li> 
      <li class="pageLink">
        <a href="griev.php" class="">
          <i class="fa fa-comment"></i>
          <span class="page">Issues/Feedback</span>
        </a>
      </li>
      <li class="pageLink">
        <a href="cal.php" class="">
          <i class="fa fa-calendar"></i>
          <span class="page">Holiday Calendar</span>
        </a>
      </li>
      <li class="pageLink">
        <a href="" class="">
          <i class="fa fa-hdd-o"></i>
          <span class="page">Check Internet Usage</span>
        </a>
      </li> 
      <li class="treeview" style="text-decoration: none;">
        <a href="file:///C:/Users/NAUSH/Desktop/project/CoPilot.html#" class="" style="text-decoration: none;">
          <i class="fa fa-user"></i>
          <span style="text-decoration: none;">Change User Info</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left fa-fw pull-right"></i>
          </span>
        </a> 
        <ul class="treeview-menu">
          <li>

            <a href="#" style="text-decoration: none;">
              <i class="fa fa-unlock-alt"></i>
              <span class="page">Change Password</span>
            </a>
          </li>
          <li>
            <a href="#" style="text-decoration: none;">
              <i class="fa fa-user-circle"></i>
              <span class="page">Change Username</span>
            </a>
          </li>
        </ul>
  </li></ul></section>
</aside>
<div class="content-wrapper" style="min-height: 490px;">
  <section class="content-header">
    <h1 style="margin-left:6px; margin-right:6px; display:inline-block; " class="md-headline">griev pannel</h1>
     <button type="button" class="btn btn-sm btn-primary" style="margin-right: 30px; margin-bottom:10px; " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" > Request  <span class="glyphicon glyphicon-calendar"></span></button>
    
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12"></div>
      <div class="col-md-3 col-sm-6 col-xs-12"></div> 
      <div class="clearfix visible-sm-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-12"></div> 
      <div class="col-md-3 col-sm-6 col-xs-12"></div>
    </div>
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">

</br>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">New griev</h2>
        
      </div>
      <div class="modal-body">




        <form name = 'myForm'>  
          <div class="form-group">
            <label for="recipient-name" class="form-control-label" >Subject:</label>
            <textarea class="form-control" id="subject" length="80"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message" length="500"></textarea>
          </div>
         
        </form>






        
      </div>
      <div class="modal-footer">
       
<input align="right" type = 'button' class="btn btn-primary" data-dismiss="modal" onclick = 'ajaxFunction();' value = 'Submit Feedback'/>

  
       </div>
    </div>
  </div>
</div>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fusion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "SELECT subject, message, status,created_at FROM grievence order by id desc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo '<div class="table-responsive">        
  <table id="example" class="table">
    <thead>
      <tr>
        <th>subject</th>
        <th>Message</th>
        <th>Time</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>';
    // output data of each row
    $i=1;
    while($row = $result->fetch_assoc())
     {
        //echo "<tr><td>" . $row["invoice_no"]. "</td><td>" . $row["invoice_month"]. " " . $row["invoice_amount"]. "</td></tr>";

      if($row["status"]=="pending")
      {

         echo "<tr>\n";
                                              
                                      
                                                echo " <td>{$row['subject']}</td>\n";
                                                echo " <td>{$row['message']}</td>\n";
                                                echo " <td>{$row['created_at']}</td>\n";
                                             echo "<td><button   class='btn btn-danger' data-trigger='hover' data-toggle='popover' title='Request Status' data-content='Your Extra Time Request is still pending' >{$row['status']}</button></td>\n";

                                                
                                               
                                                echo "</tr>\n";










      //   $id=$row['id'];
      //   echo '<tr>';
      //   echo '<td>'.$i.'.</td>';
      //   echo '<td>'. $row["date_row"].'</td>';
      //   echo '<td>'. $row["time_duration"].'</td>';
      //   echo '<td style="background:red;">'.$row["status"].'</td>';
      //   echo '<td><center><form method="POST" action="delete.php"><input name="id" type="hidden" value='.$id.'><button type="submit" class="btn btn-danger active" style="background:#F32C52; width:80% ">Delete</button></center></td>';
      // echo '</tr>';
      }
      else
      {

         echo "<tr>\n";
                                                $theID = $row['id'];
                                      
                                                echo " <td>{$row['subject']}</center></td>\n";
                                                echo " <td>{$row['message']}</center></td>\n";
                                                echo " <td>{$row['created_at']}</center></td>\n";
                                             echo "<td><button   class='btn btn-success' data-trigger='hover' data-toggle='popover' title='Request Status' data-content='Your Extra Time Request is still pending' >{$row['status']}</button></td>\n";

                                                
                                               
                                                echo "</tr>\n";
                                        
      }
      $i=$i+1;
    }
    $i=0;
    echo "</tbody></table></div>";
} else {
    echo "0 results";
}

$conn->close();
?> 


        </div> 
      </div>
    </div> 
    <div class="row">
     <div class="col-md-3 col-sm-6 col-xs-12"></div> 
    </div>
  </section>
</div>
<footer class="main-footer" style="font-size: 14px;">
  <strong>Copyright © 2017
        <a href="javascript:;">Fusion Business Centre</a>.
  </strong> All rights reserved. Created and Managed by Bombay Blokes
</footer>
</div>
</div>
<!-- <script async="" src="./CoPilot_files/analytics.js(1).download"></script>
<script async="" src="./CoPilot_files/analytics.js(2).download"></script>
<script async="" src="./CoPilot_files/analytics.js(3).download"></script>
<script async="" src="./CoPilot_files/analytics.js(4).download"></script>
<script async="" src="./CoPilot_files/analytics.js(5).download"></script>
<script async="" src="./CoPilot_files/analytics.js(6).download"></script> -->
<script src="./CoPilot_files/jQuery-2.2.0.min.js.download"></script>
<!-- <script src="./CoPilot_files/bootstrap.min.js(1).download"></script> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./CoPilot_files/app.min.js.download"></script>
<script src="./CoPilot_files/pace.min.js.download"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      // analytics section
      ga('create', 'YOUR_SHIT_HERE', 'auto')
      ga('send', 'pageview')
</script>
<script type="text/javascript" src="./CoPilot_files/manifest.1327c341fd6fd4b82c05.js.download"></script>
<script type="text/javascript" src="./CoPilot_files/vendor.d2b68a14bffc63a9e25f.js.download"></script>
<script type="text/javascript" src="./CoPilot_files/app.8e6ead85916243dfb119.js.download"></script>


</body>
</html>