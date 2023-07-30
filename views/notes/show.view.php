<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-5">
            <a class="text-blue-500 hover:underline" href="/notes">Go Back...</a>
        </p>
        <p>
            <?= htmlspecialchars($note['body']) ?>
        </p>


        <div class="mt-5">
            <div class="flex items-center gap-x-2">
                <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-lg px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 hover:text-white border border-gray-400">
                    Edit
                </a>
            </div>
        </div>
    </div>
</main>


<?php require base_path('views/partials/footer.php'); ?>