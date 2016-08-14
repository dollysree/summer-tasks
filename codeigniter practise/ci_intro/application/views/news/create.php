<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>-->


<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br /><br/>

    <label for="text">Text</label>
    <textarea name="text" style="height:200px; width:400px;"></textarea><br /><br/>

    <input type="submit" name="submit" value="Create news item" style=" margin-left:30px; " /><br/>

</form>
</body>
</html>