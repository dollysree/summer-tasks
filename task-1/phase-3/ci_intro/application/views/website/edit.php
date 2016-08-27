<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit article</title>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link rel="stylesheet" href="<?php echo site_url('resourses/css/bootstrap.min.css'); ?>" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet"; type="text/css" href="<?php echo site_url('resourses/css/navbar.css'); ?>"; />
</head>
<body>
 <div class="container-fluid">
 <div class="header">
<h1> THE NEWS WEBSITE</h1>
 </div>
 </div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
  
   <div>
     <ul class="nav navbar-nav">
       <li><a href="#">Home</a></li>
       <li><a href="#">Articles</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="<?php echo site_url(); ?>">Logout</a></li>
     </ul>
   </div>
  </div>
</nav>
<div class="container-fluid">
 <div style="font-size:24px; color:#C00; font:bold; border:1px solid #000; padding:10px;">
 <div class="row">
 <div class="col-md-6">Article[Edit]</div>
 
   </div></div>  
</div>
 <br />
 <div class="container-fluid">
 <div style="border:1px solid #000; padding:1px;">
  <div class="row">
    <div class="col-md-11" style="background-color:#e7e7e7;  margin-left:50px; margin-right:50px; margin-top:25px; padding:10px">
       <div class="row">
         <div class="col-md-8" style="background-color:#fff; margin-left:25px;">
<div style="font:18px bold Arial, Helvetica, sans-serif; border-bottom:#63F solid 2px; color:#039; padding:10px;">All Articles</div>
 <ul>
<?php foreach ($webnews as $news_item): ?>
    <li>  
       <a href="<?php echo site_url('websitecontroller/view/'.$news_item['slug']); ?>"><?php echo $news_item['title'] .'<br/>'; ?></a>
       <a href="<?php echo site_url('Site/editart/'.$news_item['slug']); ?>">edit</a>
   </li>
<?php endforeach; ?>

  </ul>
  </div>
</div>
</div>
</div>
</div>
</div>