<?php require APPROOT . '/views/incFile/header.php'; ?>
<div class="dark:bg-gray-900 pb-[5rem]">

    
    <?php require APPROOT . '/views/incFile/navbar.php'; ?>
    
    
    <div class=" w-[100%] flex my-[2rem]">
        <div class="w-[30%] ml-[33%] relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="searchInput" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-violet-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:outline-none" placeholder="Search Wikis, Categories , Tags..." >
        </div>   
    </div>

<div class="container my-24 mx-auto md:px-6">
  <section class="mb-32 text-center">
    <h2 class="mb-12 text-center text-3xl text-white font-bold">Wikis</h2>

    <div id="allWikis" class="grid gap-6 lg:grid-cols-4 xl:gap-x-12">

    </div>
  </section>
</div>

<div class="container my-24 mx-auto md:px-6">
  <section class="mb-32 text-center">
    <h2 class="mb-12 text-center text-3xl text-white font-bold">Categories</h2>
    <div id="cats" class="grid gap-6 lg:grid-cols-4 xl:gap-x-12">  
    </div>
  </section>
</div>



</div>


<script defer src="<?php echo URLROOT?>/js/authorWiki.js"></script>
<script defer src="<?php echo URLROOT?>/js/wikiPage.js"></script> 

<?php require APPROOT . '/views/incFile/footer.php'; ?>


