

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br /><br/>

    <label for="text">Text</label>
    <textarea name="text" style="height:200px; width:400px;"></textarea><br /><br/>

    <input type="submit" name="submit" value="Create news item" style=" margin-left:30px; " /><br/>

</form>
