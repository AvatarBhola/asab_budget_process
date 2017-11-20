<?php
   require 'db_connect.php'
?>
<html lang="en"><head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
   <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
   <title>FAU - Activity and Service Accounting and Budget Office</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="student/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/alert.css" rel="stylesheet" type="text/css">
   <link href="student/css/student-affairs.css" rel="stylesheet" type="text/css">
   <link href="sg/css/sg.css" rel="stylesheet">
   <script src="functions.js">//</script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript"></script>
    <script src = student/js/edit.js>//</script>
    <link href=""><!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js">//</script><![endif]-->
		
		<meta name="Description" content="Florida Atlanic University Student Government's Activity and Service Accounting and Budget Office">
		<meta name="Keywords" content="Activity, Service, Accounting, Budget Office">
		
</head>
<body class="" style=""><!-- Google Analytics Tracking -->
<div class="fit-vids-style" id="fit-vids-style" style="display: none;">&shy;<style> .fluid-width-video-wrapper { width: 100%; position: relative; padding: 0; } .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; } </style></div><script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-K8QZ6S"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-3936766-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-K8QZ6S"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K8QZ6S');</script>
<!-- End Google Tag Manager -->   <script type="text/javascript" src="/includes/alert/alert.js">//</script>
   <script>$(document).ready(function() {$('#alert').slideDown('slow', function() { });});</script>
   <header>
      <div class="container">
         <div class="row">
            <div class="col-sm-7">
               <a class="header-logo" href="http://www.fau.edu/">
                  <img id="bs-header" class="img-responsive pull-left" src="/images/hompage/fau-logo.png" alt="FAU -Florida Atlantic University" title="FAU -Florida Atlantic University">
               </a>
            </div>
            <div class="col-sm-5">
               <div class="navbar-header">
                  <button class="navbar-toggle" style="border: none;" type="button" data-toggle="collapse" data-target="#student-affairs-search-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="glyphicon glyphicon-search" style="color: #fff;">&nbsp;</span>
                  </button>
               </div>
               <div id="student-affairs-search-collapse" class="collapse navbar-collapse">
                  <ul class="list-inline pull-right text-right ccslinks">
                     <li>
                        <a title="FAU People Directory" href="http://www.fau.edu/explore/peopledirectory.php">FAU People Directory</a>
                     </li>
                     <li>
                        <a title="FAU Site Index" href="http://www.fau.edu/explore/sitemap.php">Site Index</a>
                     </li>
                     <li>
                        <a title="FAU Text Only" href="http://www.textise.net/showText.aspx?strURL=www.fau.edu/sg/programs/university-wide/accounting-and-budget-office.php" target="_blank">Text Only</a>
                     </li>
                  </ul>
                  <link href = "css/table.css" rel="stylesheet">
                  <div id="searchNav"><form id="searchbox_002953027092500659673:o7kscwfqif0" class="searchform" action="http://www.fau.edu/searchpage/google_results.php"><input id="searchButton" class="searchfield" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" type="text" name="q" value="Search..." size="12" maxlength="255"> <input type="hidden" name="cx" value="002953027092500659673:o7kscwfqif0"> <input type="hidden" name="cof" value="FORID:11"> <input class="searchbutton" type="submit" value="Go"></form></di`                                 
               </div>
            </div>
         </div>
      </div>                              
   </header>     
    </script>
<form action="index.php" method="post" accept-charset="utf-8" class="form" role="form">
    <table id="tblCustomers" cellpadding="0" cellspacing="0" border="1">
        <thead>
            <tr>
                <th>Description</th>
                <th>Requested Budget</th>
            </tr>
            <tr>
                <th>Support Services</th>
                <th><input type="text" name = "Support"/></th>
            </tr>
            <tr>
                <th>Food Services</th>
                <th><input type="text" name ="Food"/></th>
            </tr>
            <tr>
                <th>Programs and Services</th>
                <th><input type="text" name ="Program"/></th>
            </tr>
            <tr>
                <th>Travel</th>
                <th><input type="text" name ="Travel"/></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <td><input type="text" id="txtName" /></td>
                <td><input type="text" id="txtCountry" /></td>
                <td><input type="button" onclick="Add()" value="Add" /></td>
            </tr>
        </tfoot>
    </table>
    <button class="btn btn-lg btn-primary btn-block signup-btn"
     name = 'Next' type="submit">Next</button>
</form>
       
       
       <?php 
            if(isset($_POST['Next']))

                $Support=$_POST['Support'];
                $Support=$_POST['Support'];
                $Support=$_POST['Support'];
                $Support=$_POST['Support'];

                $query = "insert into Expense values ('Support Services', '$Support')";
                $query_run = mysqli_query($db,$query);
            
        
        ?>
            
        <table id="tblCustomer" cellpadding="0" cellspacing="0" border="1">
        <thead>
            <tr>
                <th>Transfer Out</th>
                <th>Requested Budget</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <td><input type="text" id="Name" /></td>
                <td><input type="text" id="Country" /></td>
                <td><input type="button" onclick="Add1()" value="Add" /></td>
            </tr>
        </tfoot>
    </table>    
                   
</body>                 
			     <link href="/student/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
			         <div style="text-align: center;">
                  <strong>Office Hours</strong> 
                  <br>Monday-Friday 8 a.m. - 5 p.m.<br>Boca Raton Student Union, Building 31, Room 221<br>777 Glades Road<br>Boca Raton, FL 33431<br>Phone: 561-297-2879</div>
               
            </section>
         </div>
      </div>
   </div>
   <footer>
      <div class="container">
         <div class="row"><div class="col-sm-3">
<p><img src="http://www.fau.edu/images/fau-logo-sm.png" alt=""></p>
<p>Florida Atlantic University<br> 777 Glades Road<br> Boca Raton, FL 33431</p>
</div>
<div class="col-sm-3">
<h3>Campuses</h3>
<ul class="campuses">
<li><a href="http://www.fau.edu/explore/boca_raton.php">Boca Raton</a></li>
<li><a href="http://www.fau.edu/broward/daniabeach/">Dania Beach</a></li>
<li><a href="http://www.fau.edu/broward/davie/">Davie</a></li>
<li><a href="http://www.fau.edu/broward/fortlauderdale/">Fort Lauderdale</a></li>
<li><a href="http://www.fau.edu/hboi/">Harbor Branch</a></li>
<li><a href="http://www.fau.edu/jupiter/">Jupiter</a></li>
</ul>
</div>
<div class="col-sm-3">
<h3>Quick Links</h3>
<ul class="help-links">
<li><a href="http://www.fau.edu/privacypolicy.php">Privacy Policy</a></li>
<li><a href="http://www.fau.edu/policies/policiesregulations.php">University Regulations and Policies</a></li>
<li><a href="http://www.fau.edu/hr/">Employment Opportunities</a></li>
<li><a href="http://www.fau.edu/admin/EmergencyInformation.php">Emergency Information</a></li>
<li><a href="http://onestop.fau.edu/" target="_blank">Get Help</a></li>
<li><a href="http://www.fau.edu/explore/contact.php">Contact Us</a></li>
</ul>
</div>
<div class="col-sm-3">
<ul class="list-inline social">
<li><a class="facebook" href="https://www.facebook.com/pages/FAU-Student-Government/165789090100263" target="_blank"><img src="http://www.fau.edu/images/social/facebook.png" alt=""></a></li>
<li><a class="twitter" href="https://twitter.com/SGatFAU" target="_blank"><img src="http://www.fau.edu/images/social/twitter.png" alt=""></a></li>
</ul>
<div id="copyright">An Equal Opportunity/Equal Access Institution <br> © Copyright 2014. Florida Atlantic University</div>
</div>
</div>
      </div>
   </footer>
   <script src="/student/js/jquery.js">//</script>
   <script src="/student/js/bootstrap.min.js">//</script>
   <script src="/student/js/jquery.fitvids.js">//</script>
   <script src="/student/js/student-affairs.js">//</script>
<div class="copyright1 customHidden" style="text-align:center; padding: 0px"><a href="http://a.cms.omniupdate.com/10?skin=fau&amp;account=fau&amp;site=production&amp;action=de&amp;path=/sg/programs/university-wide/accounting-and-budget-office.pcf" style="text-decoration: none; color: #666666;font-family: Arial,Helvetica,sans-serif;font-size: 9px;font-weight: normal;">&nbsp;Last Modified 10/4/17</a></div></body></html>
<?php $db->close(); ?>