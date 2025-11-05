<?php require ('Views/Partials/header.php')?>
    <?php require ('Views/Partials/nav.php');?>
    <?php require ('Views/Partials/banner.php');?>

  <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <p>
            
            <a href="/notes" class="text-blue-500 hover:underline">&larr; Back to Notes</a>


          </p>

          <p class="text-lg text-white"><?= $note['body'] ?></p>
          

        </div>
  </main>
<?php require ('Views/Partials/footer.php') ?>