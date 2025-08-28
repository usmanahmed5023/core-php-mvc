<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note): ?>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body']) ?><br>
            </a>
            
        <?php endforeach; ?>

        <a class="mt-6" href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
    </div>
   
    
  </main>
<?php require base_path('views/partials/footer.php'); ?>