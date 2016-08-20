
<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/view/'.$news_item['slug']); ?>"><input type="button" name="button" value="View Article" /></a></p>

<?php endforeach; ?>

<form action="<?php echo site_url('news/create'); ?>">
<input type="submit" name="button" value="Add News Item" />
</form>
<br/>
