<?php require 'partials/head.php'; ?>
  <?php require 'partials/nav.php'; ?>
  <?php require 'partials/banner.php'; ?>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note): ?>
            <a href="/core-php-mvc/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body']) ?><br>
            </a>
            
        <?php endforeach; ?>
    </div>
  </main>
<?php require 'partials/footer.php'; ?>