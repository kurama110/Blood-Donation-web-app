<?php
include "db_connection.php";

if ($errors > 0): ?>
    <div class="error">
        <?php foreach($errors as $error): ?>
            <h5><?php echo "$error"; ?></h5>
        <?php endforeach ?>
    </div>
    <?php endif ?>