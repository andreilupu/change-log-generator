<?php

$tags = $git->getReleases();

?>

<h3>Choose:</h3>

<form action="./" method="POST">
<!--    <input type="hidden" name="form_submited" value="true"/>-->

    <label for="from_tag">From:</label>
    <select name="from_tag">
        <?php foreach ( $tags as $key => $tag) {
             echo '<option value="'.$tag.'">'. $tag.'</option>';
        } ?>
    </select>

    <label for="to_tag">From:</label>
    <select name="to_tag">
        <?php foreach ( $tags as $key => $tag) {
            echo '<option value="'.$tag.'">'. $tag.'</option>';
        } ?>
    </select>

    <input type="submit" name="form_submited" value="submit" />
</form>