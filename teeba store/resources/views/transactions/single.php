<?php

use Core\Helpers\Helper;
?>
<div class="mt-5 d-flex flex-row-reverse gap-3">
    <?php if (Helper::check_permission(['tag:read', 'tag:update'])) : ?>
        <a href="/transactions/edit?id=<?= $data->transactions->id ?>" class="btn btn-warning">Edit</a>
    <?php endif;
    if (Helper::check_permission(['tag:read', 'tag:delete'])) :
    ?>
        <a href="/transactions/delete?id=<?= $data->transactions->id ?>" class="btn btn-danger">Delete</a>
    <?php endif; ?>
</div>

<div class="my-5">
    <!-- for admins -->
    <h1 class="text-center">
        <?= $data->transactions->item_name ?>
    </h1>

    <p>
        <?= $data->transactions->quantity ?>
    </p>
</div>