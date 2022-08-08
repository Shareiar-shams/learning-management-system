<form action="<?php echo site_url('admin/assigments/'.$param2.'/add'); ?>" method="post">
    <div class="form-group">
        <label for="link"><?php echo get_phrase('google_form_link'); ?></label>
        <input class="form-control" type="text" name="link" id="link" required>
        <small class="text-muted"><?php echo get_phrase('provide_a_google_form_link'); ?></small>
    </div>
    <div class="text-right">
        <button class = "btn btn-success" type="submit" name="button"><?php echo get_phrase('submit'); ?></button>
    </div>
</form>
