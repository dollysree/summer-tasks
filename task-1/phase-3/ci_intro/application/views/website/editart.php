<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit article</title>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link rel="stylesheet" href="<?php echo site_url('resourses/css/bootstrap.min.css'); ?>" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 

<link rel="stylesheet"; type="text/css" href="<?php echo site_url('resourses/css/addart.css'); ?>"; />
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
         <?php echo validation_errors(); 
        

          echo form_open('Site/editart'); ?>

           <table class="table">
             <tr>
               <td>Title</td>
               <td><input type="text" name="title" value="<?php echo set_value('title', $news_item['title']); ?>" /></td>
             </tr>
             <tr>
               <td>Author</td>
               <td><input type="text" name="author" value="<?php echo $news_item['author'];?>" /></td>
             </tr>
             
             <!-- <tr>
               <td>Status</td>
               <td><select>
                   <option>Unpublished</option>
                   <option>Published</option>
                   </select>
                   </td>
             </tr>-->

              <tr>
               <td>Image</td>
               <td><input type="file" name="image"  </td>
             </tr>

            
             <tr>
             <td>Text:</td>
           
             <td> <textarea name="text"  style=" width:100%;  height:200px;"><?php echo $news_item['text'];?></textarea></td>
             </tr>
             <tr>    
                <td> <input type="submit" value="update" name="button" /></td> 
             </tr>
                  </table>
                  </form>
                 
 </div>
 
 </div>
 <script type="text/javascript">

$(document).ready(function(){      
        tinymce.init({selector:'textarea'});
});
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
