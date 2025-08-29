<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Write Note</h1>

    <form method="POST" action="/note" class="space-y-4">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $notes['id'] ?>">
        <div>
            <textarea name="body" 
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                rows="6"
                placeholder="Write your note here..."><?= $notes['body'] ?? '' ?></textarea>

            <?php if (!empty($errors)): ?>
                <p class="text-red-500 mt-2">
                    <?= implode(', ', $errors) ?>
                </p>
            <?php endif; ?>
        </div>

    <div class="flex items-center gap-4 mt-6">
    <a 
        href="/notes"
        class="bg-gray-600 text-white px-5 py-2 rounded-lg hover:bg-gray-500 transition">
        Cancel
    </a>
    <button 
        type="submit" 
        class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
        Save Note
    </button>
</div>

    </form>
</main>
<?php require base_path('views/partials/footer.php'); ?>