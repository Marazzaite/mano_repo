<div class="wrapper">
    <?php foreach ($thermo as $figura): ?>
        <div class="figure <?php print $figura['figure'] . ' ' . $figura['color']; ?>"></div>
    <?php endforeach; ?>
    <span> <?php print $figura['text']; ?></span>
</div>

