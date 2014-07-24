
<div class="row">
    <nav class="nav navbar">
        <?php foreach ($categories as $category): ?>
            <?php echo h($category['Category']['category']); ?>
        <?php endforeach; ?>
    </nav>
</div>
