<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-2">

        <form method="POST">
            <div class="p-6 bg-gray-100">
                <div class="container max-w-screen-md">
                    <div class="bg-white rounded-lg shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="col-span-full">
                                <label for="body" class="block text-lg font-medium leading-6 text-gray-600">
                                    Body
                                </label>
                                <div class="mt-2">
                                    <textarea id="body" name="body" rows="5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Write your note here…"><?= $_POST['body'] ?? '' ?></textarea>
                                </div>

                                <?php if (isset($errors['body'])) : ?>
                                    <p class="text-red-500 text-xs mt-2">
                                        <?= $errors['body'] ?>
                                    </p>
                                <?php endif; ?>
                            </div>


                            <div class="lg:col-span-3">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5 text-right">
                                        <div class="mt-6 flex items-center justify-end gap-x-6">

                                            <button type="submit" class="rounded-lg px-3 py-2 text-sm font-semibold text-white shadow-sm bg-slate-900 hover:bg-slate-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">
                                                Save
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>



<?php require 'partials/footer.php'; ?>