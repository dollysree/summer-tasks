<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>-->
<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/view/'.$news_item['slug']); ?>"><input type="button" name="button" value="view article" /></a></p>

<?php endforeach; ?>
<a href="http://localhost:1234/ci_intro/index.php/News/create">
<input type="button" name="button" value="Add news item" /></a><br/>
</body>
</html>