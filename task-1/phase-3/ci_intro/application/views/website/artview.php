<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $news_item['title']; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet"; type="text/css" href="/css/main2.css"; />
</head>
<body>
 <div class="container-fluid">
 <div class="header">
<h1> THE NEWS WEBSITE</h1>
 </div>
 </div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
   <!--logo
   <div class="navbar-header">
    <a href="#" class="navbar-brand">the news website</a>
   </div>-->
   <div>
     <ul class="nav navbar-nav">
       <li><a href="navbar.html">Home</a></li>
       <li class="active"><a href="#">Articles</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="login.html">Login</a></li>
     </ul>
   </div>
  </div>
</nav>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
 <img src="li4 img.jpg" class="img-responsive" />
 <br />
 <div style="background-color:#e7e7e7;  font:24px Arial, Helvetica, sans-serif bold; border-left:#63F 2px solid; padding:5px;">
    Most Popular</div>
     <ul>
    <li>
   <a href="li3.html" title="World's largest cargo aircraft Antonov An-225 lands at Hyderabad airport">
    <img src="li3 img.jpg" width="100"; height="70px"; /></a>
  <a href="li3.html">World's largest cargo aircraft Antonov An-225 lands at Hyderabad airport</a>
  </li>
  <li>
  <a href="li5.html" title="Woman allegedly raped at Infosys campus in Pune">
    <img src="li5 img.jpg" width="100"; height="70px"; /></a>
  <a href="li5.html">Woman allegedly raped at Infosys campus in Pune</a>
  </li>
  <li>
  <a href="li4.html" title="Salman Khan's 'hit-&-run victim' moves Supreme Court">
    <img src="li4 img.jpg" width="100"; height="70px"; /></a>
  <a href="li4.html">Salman Khan's 'hit-&-run victim' moves Supreme Court</a>
  </li>
  </ul>
 
 
 </div>

  <div class="col-md-9">
 <div style="font:18px bold Arial, Helvetica, sans-serif; color: #353535; padding:12px;">
<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
 </div></div></div></div>
 </div>
  <div class="col-md-6" style="background-color:#C00; height:200px; font:24px 'Times New Roman', Times, serif";>THE NEWS WEBSITE<HR />
 <p style="font-size:20px; text-align:left; padding-left:15px"> ABOUT:<br />THE NEWS WEBSITE is a social media body ,it covers all the recent news articles of the world.<br /><br />
 
 
 </div>
 <div class="col-md-3" style="background-color:#C00; height:200px; padding:15px;">
  <p style="font-size:15px; text-align:left; padding-left:15px; margin-left:10px;">
  ARCHIEVES<br />
  CONTACT US:<br />
  8908583616<br />
  8333812345<br />
  </p></div>
   <div class="col-md-3" style="background-color:#C00; height:200px; padding:15px;">
  <p style="font-size:15px; text-align:left; padding-left:15px; margin-left:10px;">
 FOLLOW US:<br />
 <img src="fb img.png" width="44px"; height="44px"; />&nbsp;
 <img src="b img.png" width="44px"; height="44px"; />
 </p>
 </div>

</div>
</body>
</html>
