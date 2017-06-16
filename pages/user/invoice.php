<?php
session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0051)file:///C:/Users/NAUSH/Desktop/project/CoPilot.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>CoPilot</title><link rel="shortcut icon" type="image/x-icon" href="https://copilot.mistergf.io/static/img/favicon.ico"><link rel="stylesheet" href="./CoPilot_files/bootstrap.min.css"><link rel="stylesheet" href="./CoPilot_files/font-awesome.min.css"><link rel="stylesheet" href="./CoPilot_files/ionicons.min.css"><link rel="stylesheet" href="./CoPilot_files/AdminLTE.min.css"><link rel="stylesheet" href="./CoPilot_files/skin-blue.min.css"><link rel="stylesheet" href="./CoPilot_files/pace.min.css"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <![endif]--><link href="./CoPilot_files/app.a8d04244372a92649e4c2d9ab2969f89.css" rel="stylesheet">
    <meta charset="utf-8">
<script type="text/javascript">
              jQuery(document).ready(function() {
  $('date1').datepicker({
    minDate : 0
});
});
            </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">

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
      <link rel="stylesheet" href="./CoPilot_files/bootstrap.min(1).css">
    <script async="" src="./CoPilot_files/analytics.js.download"></script><script src="./CoPilot_files/jquery.min.js.download"></script>
    
      <link rel="stylesheet" href="./CoPilot_files/w3.css">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <script src="./CoPilot_files/jQuery-2.2.0.min.js.download"></script> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
  </script>
  <script type="text/javascript">
    $(function() {
  $('#datetimepicker1').datetimepicker({
    language: 'pt-BR'
  });
});

  </script>
   
  <style type="text/css">
    .select {
  width: 100%;
  height: 28px;
  overflow: hidden;
  border: #000000 2px solid;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0px 0px 10px 1px #FEFEFE;
  box-shadow: inset 0px 0px 10px 1px #FEFEFE;
}
.select_join select {
  background: transparent;
  width: 170px;
  font-size:7pt;
  color:grey;
  border: 0;
  border-radius: 0;
  height: 28px;
  -webkit-appearance: none;
}
.select_join select:focus {
  outline: none;
}
  </style>
  <style type="text/css">
    .badge1 {
   position:relative;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:-10px;
   right:-10px;
   font-size:.7em;
   background:green;
   color:white;
   width:18px;height:18px;
   text-align:center;
   line-height:18px;
   border-radius:50%;
   box-shadow:0 0 1px #333;
}
  </style>

  <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
            function togglefunc(){
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
                    
                     //var ajaxDisplay = document.getElementById('ajaxDiv');
                     if(ajaxRequest.responseText=="failure")
                     {
                        alert(ajaxRequest.responseText);
                     }
                     else
                     {
                      alert("OVER TIME REQUESTED");
                      location.reload();
                     }
                     
                    // ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
          
               var age = document.getElementById('inputsubject').value;
               var wpm = document.getElementById('inputmessage').value;
               var invoice_no=document.getElementById('toptitle').value;
               var queryString = "?age=" + age ;
               queryString +=  "&wpm=" + wpm;
               queryString +=  "&invoice=" + invoice_no;

               ajaxRequest.open("GET", "contact_admin.php" + queryString, true);
               ajaxRequest.send(null); 
            }
         //-->
      </script>
      <script type="text/javascript">
       
         // alert("hi");
           // 
            //but.class="btn btn-success disabled";
            //var bool=false;
            var invoice_no;
            function myfunc(clicked_id)
            {
              invoice_no=clicked_id;
            }
            
            $(document).ready(function(){
              // $('table tr input').on('click' ,function(e){
              // var colIndex = $(this).parent().children().index($(this));
              //   var rowIndex = $(this).parent().parent().children().index($(this).parent());
              //    alert('Row: ' + rowIndex + ', Column: ' + colIndex);
              // });
              
            $('[data-toggle=confirmation]').confirmation({
         rootSelector: '[data-toggle=confirmation]',
          onConfirm: function() {
            
            //var property = document.getElementById(invoice_no);
             //property.style.backgroundColor = "#00ff00";
              //var invoice_no=document.getElementById("invoice_no");
              window.location.replace("update.php?invoice_no="+ invoice_no);
              //document.getElementById(invoice_no).style.background.color=#00ff00;
              //alert('You choosed confirmed');

            },
            onCancel: function() {
           //alert('You didn\'t choose');
  
            $("#myModalHorizontal").modal();
            //window.location.replace("contact_admin.php?invoice_no="+ invoice_no);
            $('#toptitle').text(function(i, oldText) {
              return oldText === 'Contact Admin' ? ('Invoice.No:'+invoice_no) : oldText;
            });
            



            }
          // other options
              });

          });

        
      </script>
      <style>
.container {
    display: inline-block;
    cursor: pointer;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #ffffff;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
    transform: rotate(-45deg) translate(-9px, 6px) ;
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
    transform: rotate(45deg) translate(-8px, -8px) ;
}
</style>
<style type="text/css">
  .modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}
</style>
<script>
function myFunction(x) {
    x.classList.toggle("change");
}
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

    <h1 style="margin-left:6px;" class="md-headline">Invoice Details</h1> 

    <!--modal-->
    <!-- Button trigger modal -->
    <!--
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
    Launch Horizontal Form
</button>-->

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 id="toptitle" class="modal-title" id="myModalLabel">Contact Admin</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputsubject">Subject</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" 
                        id="inputsubject" placeholder="Subject" length="80"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputmessage" >Message</label>
                    <div class="col-sm-10">
                        <textarea type="password" class="form-control"
                            id="inputmessage" placeholder="Message"></textarea>
                    </div>
                  </div>
                  
                </form>
                
                
                
                
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>


<!--end of my modal-->
    
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




$sql = "SELECT id,invoice_path, invoice_month,supporting_documents_path, invoice_status,invoice_no,invoice_amount,button_color FROM invoicetable order by id desc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo '<div class="table-responsive">        
  <table id="example" class="table">
    <thead>
      <tr>
        <th><center>Sr No.</center></th>
        <th><center>No.</center></th>
        <th><center>Month</center></th>
        <th><center>Amount</center></th>
        <th><center>Status</center></th>
        <th><center>Invoice</center></th>
        <th><center>Supporting Docs</center></th>
      </tr>
    </thead>
    <tbody>';
    // output data of each row
    $i=1;
    while($row = $result->fetch_assoc())
     {
        //echo "<tr><td>" . $row["invoice_no"]. "</td><td>" . $row["invoice_month"]. " " . $row["invoice_amount"]. "</td></tr>";

      

         echo "<tr>\n";
                                                $theID = $row['id'];
                                                echo " <td><center>{$i}</center></td>\n";
                                                echo " <td><center>{$row['invoice_no']}</center></td>\n";
                                                echo " <td><center>{$row['invoice_month']}</center></td>\n";
                                                echo " <td><center>{$row['invoice_amount']}</center></td>\n";
echo "<td >";
echo "<form action='update.php' method='POST'>";
echo "<input type='hidden' name='invoice' value='{$row['invoice_no']}'/>";
if(strcmp($row['invoice_status'],'pending'))
{


  echo " <center><button type='button' style='width:75%; background-color:{$row['button_color']}; border-color:white;' class='btn btn-danger' data-toggle='confirmation' data-singleton='true' data-popout='true' data-placement='bottom' data-btn-ok-label='Approve' data-btn-ok-icon='fa fa-thumbs-o-up'
        data-btn-ok-class='btn-success'
        data-btn-cancel-label='Contact Admin' data-btn-cancel-icon='fa fa-ban'
        data-btn-cancel-class='btn-danger'
        data-title='Approve the Invoice?' data-content='Click on button' id='{$row['invoice_no']}' onclick='myfunc(this.id);' disabled>
        {$row['invoice_status']}</button></center></form></td>\n";
      }

else
{

   echo " <center><button type='button' style='width:75%; background-color:{$row['button_color']}; border-color:white;' class='btn btn-danger' data-toggle='confirmation' data-singleton='true' data-popout='true' data-placement='bottom' data-btn-ok-label='Approve' data-btn-ok-icon='fa fa-thumbs-o-up'
        data-btn-ok-class='btn-success'
        data-btn-cancel-label='Contact Admin' data-btn-cancel-icon='fa fa-ban'
        data-btn-cancel-class='btn-danger'
        data-title='Approve the Invoice?' data-content='Click on button' id='{$row['invoice_no']}' onclick='myfunc(this.id);' >
        {$row['invoice_status']}</button></center></form></td>\n";

}



echo "<td> <center> <a href=\"{$row['invoice_path']}\" > <i class=\"fa fa-download\" style=\"color:black; font-size:1.5em;\"></i></a></center></td>";
                                       // echo " <td> <input type= 'submit' onclick=\"location . href = '{$row['supporting_documents_path']}'\" class='btn btn-primary' name= 'raise' value= 'Download'/></td>\n";
                                        echo "<td> <center> <a href=\"{$row['supporting_documents_path']}\" > <i class=\"fa fa-download\" style=\"color:black; font-size:1.5em;\"></i></a></center></td>";
                                                

                                                
                                                echo "</tr>\n";










      //   $id=$row['id'];
      //   echo '<tr>';
      //   echo '<td>'.$i.'.</td>';
      //   echo '<td>'. $row["date_row"].'</td>';
      //   echo '<td>'. $row["time_duration"].'</td>';
      //   echo '<td style="background:red;">'.$row["status"].'</td>';
      //   echo '<td><center><form method="POST" action="delete.php"><input name="id" type="hidden" value='.$id.'><button type="submit" class="btn btn-danger active" style="background:#F32C52; width:80% ">Delete</button></center></td>';
      // echo '</tr>';
      
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
<script async="" src="./CoPilot_files/analytics.js(1).download"></script>
<script async="" src="./CoPilot_files/analytics.js(2).download"></script>
<script async="" src="./CoPilot_files/analytics.js(3).download"></script>
<script async="" src="./CoPilot_files/analytics.js(4).download"></script>
<script async="" src="./CoPilot_files/analytics.js(5).download"></script>
<script async="" src="./CoPilot_files/analytics.js(6).download"></script>
<script src="./CoPilot_files/bootstrap.min.js(1).download"></script>
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