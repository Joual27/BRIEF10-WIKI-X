<?php require APPROOT . '/views/incFile/header.php'; ?>
<?php require APPROOT . '/views/incFile/sidebar.php'; ?>



<main class="my-[2rem] w-[100%]">
   

   <div class="w-[80%] ml-[15%] ">
        <div class="flex justify-between" >
            <div class="mb-[1rem]">
                <p class='font-semibold text-[1.25rem] text-violet-500'>CATEGORIES DASHBOARD</p>
            </div>
            <div class="my-[1rem]">
                <button class="py-[0.6rem] px-[1.2rem] bg-violet-500 text-white font-semibold rounded-lg" id="showTCatForm">+ Add Category</a></button>
            </div>
        </div>
        <div class="relative overflow-x-auto my-[2rem] flex gap-[3rem] flex-wrap" id="categories">
            
        </div>
       
             
        <div id="addCatForm" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
            <div class="container px-4 sm:px-8 mx-auto max-w-lg ">

                <div class="wrapper bg-white rounded-sm shadow-lg ">
                    <div class="card px-8 py-4">
                        <div class="card-image mt-4 mb-6 flex justify-between flex-row-reverse ">
                          <img  src="<?= URLROOT?>/imgs/close.png" class="w-[30px] h-[30px] cursor-pointer" id="closeForm" alt="">
                          <img class="w-[30px]" src="<?= URLROOT?>/imgs/cat.png" alt="">
                        </div>

                        <div class="card-mail flex items-center mt-10 mb-6 ">
                            <input type="text" class="font-medium border border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none catName"  placeholder="Category Name">
                        </div>
                        <div class="card-mail flex items-center mt-10 mb-6">
                            <input type="text" class="font-medium border  border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none catDesc"  placeholder="Category Desc">
                        </div>
                        <div class="w-[100%] flex justify-center">
                            <button class=" my-[1rem] bg-violet-400 hover:bg-violet-600 hover:border-violet-600 text-white font-bold capitalize px-3 py-2 text-base md:text-lg rounded-r-md rounded-lg border-violet-500" id="addC">Submit</button>
                        </div>
                        <p id="catErr" class="text-red-500 font-semibold"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="editCatForm" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
            <div class="container px-4 sm:px-8 mx-auto max-w-lg ">

                <div class="wrapper bg-white rounded-sm shadow-lg ">
                    <div class="card px-8 py-4">
                        <div class="card-image mt-4 mb-6 flex justify-between flex-row-reverse">
                          <img  src="<?= URLROOT?>/imgs/close.png" class="w-[30px] h-[30px] cursor-pointer" id="closeEditForm" alt="">
                          <img  class="w-[30px]" src="<?= URLROOT?>/imgs/cat.png" alt=""> 
                        </div>

                        <div class="card-mail flex items-center mt-10 mb-6 ">
                            <input type="text" id="catName" class=" border border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none categoryName"  placeholder="Category Name">
                        </div>
                        <div class="card-mail flex items-center mt-10 mb-6">
                            <input type="text" id="catDesc" class=" border  border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none categoryDesc"  placeholder="Category Desc">
                        </div>
                        <div class="w-[100%] flex justify-center">
                            <button id="editC" class=" my-[1rem] bg-violet-400 hover:bg-violet-600 hover:border-violet-600 text-white font-bold capitalize px-3 py-2 text-base md:text-lg rounded-r-md rounded-lg border-violet-500" >Update</button>
                        </div>
                        <p id="EditCatErr" class="text-red-500 font-semibold"></p>  
                    </div>
                </div>
            </div>
        </div>

 
   
</main>

<script defer src="<?php echo URLROOT?>/js/category.js"></script>


<?php require APPROOT . '/views/incFile/footer.php'; ?>