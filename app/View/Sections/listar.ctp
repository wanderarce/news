
<div class="row">
    <nav class="nav navbar">
        <?php foreach ($sections as $section): ?>
            <?php echo h($section['Section']['section']); ?>
        <?php endforeach; ?>
    </nav>
</div>
