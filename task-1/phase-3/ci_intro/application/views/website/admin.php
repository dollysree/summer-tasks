<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link rel="stylesheet" href="<?php echo site_url('resourses/css/bootstrap.min.css'); ?>" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo site_url('resourses/css/bootstrap-theme.min.css'); ?>" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">



<link rel="stylesheet" type="text/css" href="<?php echo site_url('resourses/css/admin.css'); ?>" />
</head>

<body>
<div class="container-fluid">
 <div class="header">
<h1> THE NEWS WEBSITE</h1>
 </div>
 </div>
 
<div id="wrapper">
  <div id="sidebar-wrapper">
   <ul class="sidebar-nav">
    <li><a href="#">Account</a></li>
      <li><a href="#">settings</a></li>
     <li><a href="<?php echo site_url(); ?>">Logout</a></li>
    </ul>
   </div>
   <!--pagecontent-->
   <div id="pagecontainer-wrapper">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
          <h3>Welcome <?php echo $first_name ; ?></h3>
          <p>what do u want to do?</p>
           <div class="row">
             <div class="col-md-6">
                 <a href="addarticle">
                 <img src="<?php echo site_url('resourses/imgs/pencil_48.png'); ?>" /><br /> 
                 Add Article </a> 
                </div>  </div> <br />
                  
                <div class="row">
                      <div class="col-md-6 ">
                       <a href="edit">
                         <img src="<?php echo site_url('resourses/imgs/paper_content_pencil_48.png'); ?>" /><br />
                         Edit Article </a> 
               </div></div>
      </div>
     </div>
   </div>
 </div>
 <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
