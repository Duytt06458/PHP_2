<?php
    if(isset($page_content)){
        echo $page_content;
    }
?>
<select name="courses">
    <?php if(isset($list_of_courses)): ?>
        <?php foreach ($list_of_courses as $course_name): ?>
            <option><?=$course_name?></option>
        <?php endforeach;?>
    <?php endif; ?>
</select>
