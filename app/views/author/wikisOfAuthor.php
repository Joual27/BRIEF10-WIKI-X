<?php require APPROOT . '/views/incFile/header.php'; ?>
<div class="dark:bg-gray-900 min-h-[100vh]">

    
    <?php require APPROOT . '/views/incFile/navbar.php'; ?>
    <div class="container my-24 mx-auto md:px-6">
        <section class="mb-32 text-center">
            <h2 class="mb-12 text-center text-3xl text-white font-bold">My Wikis :</h2>
            <div id="allWikis" class="grid gap-6 lg:grid-cols-4 xl:gap-x-12">
                
            </div>
        </section>
    </div>



<script defer src="<?php echo URLROOT?>/js/wikisOfAuthor.js"></script>
<script defer src="<?php echo URLROOT?>/js/wikiPage.js"></script> 

<?php require APPROOT . '/views/incFile/footer.php'; ?>