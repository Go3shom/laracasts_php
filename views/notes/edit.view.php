<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-2">

        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">

            <div class="p-6 bg-gray-100">
                <div class="container max-w-screen-md">
                    <div class="bg-white rounded-lg shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="col-span-full">
                                <label for="body" class="block text-lg font-medium leading-6 text-gray-600">
                                    Body
                                </label>
                                <div class="mt-2">
                                    <textarea id="body" name="body" rows="5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Write your note here…"><?= $note['body'] ?></textarea>
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
                                        <div class="mt-6 flex items-center justify-end gap-x-2">

                                            <button type="button" class="mr-auto rounded-lg px-3 py-2 text-sm font-semibold text-red-700 
                                            border border-red-700
                                            shadow-sm hover:text-white hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600" onclick="document.querySelector('#delete-form').submit()">
                                                Delete
                                            </button>


                                            <a href="/notes" class="rounded-lg px-3 py-2 text-sm font-semibold text-gray-400 hover:text-gray-600 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-gray-300" tabindex="0">
                                                Cancle
                                            </a>

                                            <button type="submit" class="rounded-lg px-3 py-2 text-sm font-semibold text-white shadow-sm bg-slate-900 hover:bg-slate-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">
                                                Update
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

        <form id="delete-form" class="hidden" method="POST" action="/note">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
        </form>
    </div>
</main>



<?php require base_path('views/partials/footer.php'); ?>