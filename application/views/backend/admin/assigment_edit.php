<?php
    $course_details = $this->crud_model->get_course_by_id($param3)->row_array();
    $section_details = $this->crud_model->get_assigment('assigment', $param2)->row_array();
?>
<form action="<?php echo site_url('admin/assigments/'.$param3.'/edit/'.$param2); ?>" method="post">
    <div class="form-group">
        <label for="link"><?php echo get_phrase('google_form_link'); ?></label>
        <input class="form-control" type="text" name="link" id="link" value="<?php echo $section_details['link']; ?>" required>
        <small class="text-muted"><?php echo get_phrase('provide_a_google_form_link'); ?></small>
    </div>
    <div class="text-right">
        <button class = "btn btn-success" type="submit" name="button"><?php echo get_phrase('submit'); ?></button>
    </div>
</form>
