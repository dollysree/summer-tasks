<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" initial-scale=1 />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo site_url('resourses/css/bootstrap.min.css'); ?>" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="<?=site_url('resourses/css/bootstrap-theme.min.css'); ?>" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="http://localhost:1234/ci_intro/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<Link rel="stylesheet" type="text/css" href="<?php echo site_url('resourses/css/login.css'); ?>" />
<title>login</title>
</head>

<body>
 
 
<div class="container-fluid">
 <div class="header">
 <h1>THE NEWS WEBSITE</h1>
 </div>
 </div>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
 Administration Login 
 <?php 
 if(isset($account_created))
 echo $account_created;
 ?>

</div>
<?php echo validation_errors(); ?>
<?php echo form_open('WebsiteController/validate_credentials'); ?>
<div class="modal-body">
 
<form class=" col-xs-12 col-md-8 pull-right ">
 <div class="form-group">
   <input type="text" class="form-control" placeholder="username" name="username" />
 </div>
  <div class="form-group"> 
    <input type="password" class="form-control" placeholder="password" name="password" />
   </div>
  
 
 </div>
     
     <div class="modal-footer">
     <div class="col-md-12">
    
     <input type="submit" class="btn btn-primary" name="button" value="Login"/>
     <div class="btn btn-primary">
     <?php echo anchor('WebsiteController/signup','Register'); ?>
      </div>
     </div>
     </div>
</form>

</body>
</html>
