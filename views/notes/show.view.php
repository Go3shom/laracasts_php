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


        <form class="my-5" method="POST">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">

            <button type="submit" class="rounded-lg px-3 py-2 text-sm font-semibold text-white shadow-sm bg-red-900 hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                Delete
            </button>
        </form>
    </div>
</main>


<?php require base_path('views/partials/footer.php'); ?>