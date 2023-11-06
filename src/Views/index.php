<h1>Welcome to Simple PHP MVC Starter!</h1>

<ul>
    <?php foreach ($journals as $journal) : ?>
        <li><?= $journal->name ?> (<?= $journal->publishedYear ?>)</li>
    <?php endforeach; ?>
</ul>