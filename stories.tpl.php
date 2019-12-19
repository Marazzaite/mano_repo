<div class="">
    <?php foreach ($stories as $story): ?>
    <li class="<?php print $story['color']; ?>">
        <span><?php print $story['text']; ?></span>
    </li>
    <?php endforeach; ?>

</div>