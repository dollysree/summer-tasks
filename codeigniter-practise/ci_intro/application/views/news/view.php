<form action="<?php echo site_url('news/'); ?>">
<input type="submit" name="button" value="Home" />
</form>

<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?><br/>
