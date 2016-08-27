
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link rel="stylesheet" href="<?php echo site_url('resourses/css/bootstrap.min.css'); ?>" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="<?php echo site_url('resourses/css/navbar.css'); ?>" />
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
       <li class="active"><a href="#">Home</a></li>
       <li><a href="#">Articles</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="WebsiteController/login">Login</a></li>
     </ul>
   </div>
  </div>
</nav>
<div class="container-fluid">
 <div class="row">
  <div class="col-md-9">
  <section id="page_content">
   <div style="font:18px bold Arial, Helvetica, sans-serif; border-bottom:#63F solid 2px; color:#039; padding:10px;">Latest News</div>
 
<?php foreach ($webnews as $news_item): ?>
    <li>  <a href="<?php echo site_url('websitecontroller/view/'.$news_item['slug']); ?>" title="<?php echo $news_item['title']; ?>">
    <img src="<?php echo base_url('resourses/uploads/'.$news_item['image']);?>" width="100"; height="70px"; /><?php echo $news_item['image']?></a>
       <a href="<?php echo site_url('websitecontroller/view/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a></p>
   </li>
<?php endforeach; ?>

  </ul>
  </div>
 
  </section>
     <div class="col-md-6" style="background-color:#be2819; height:200px; font:24px 'Times New Roman', Times, serif";>THE NEWS WEBSITE<HR />
 <p style="font-size:20px; text-align:left; padding-left:15px"> ABOUT:<br />THE NEWS WEBSITE is a social media body ,it covers all the recent news articles of the world.<br /><br />
 
 
 </div>
 <div class="col-md-3" style="background-color:#be2819; height:200px; padding:15px;">
  <p style="font-size:15px; text-align:left; padding-left:15px; margin-left:10px;">
  ARCHIEVES<br />
  CONTACT US:<br />
  8908583616<br />
  8333812345<br />
  </p></div>
   <div class="col-md-3" style="background-color:#be2819; height:200px; padding:15px;">
  <p style="font-size:15px; text-align:left; padding-left:15px; margin-left:10px;">
 FOLLOW US:<br />
 <img src="<?php echo site_url('resourses/imgs/fb img.png'); ?>" width="44px"; height="44px"; />&nbsp;
 <img src="<?php echo site_url('resourses/imgs/b img.png'); ?>" width="44px"; height="44px"; />
 </p>
 </div>
  </div> 
</div>
</body>
</html>
