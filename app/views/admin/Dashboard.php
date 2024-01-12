<?php require APPROOT . '/views/incFile/header.php'; ?>
<?php require APPROOT . '/views/incFile/sidebar.php'; ?>



<main class="my-[2rem] w-[100%]">
   

   <div class="w-[80%] ml-[15%] ">
        <div class="flex justify-between" >
            <div class="mb-[1rem]">
                <p class='font-semibold text-[1.25rem] text-violet-500'>STATS DASHBOARD</p>
            </div>
            
        </div>
        <div class="relative overflow-x-auto my-[2rem] flex gap-[3rem] flex-wrap" id="tags">
        </div>
       
             
        <div id="addTagForm" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
            <div class="container px-4 sm:px-8 mx-auto max-w-lg ">

                <div class="wrapper bg-white rounded-sm shadow-lg ">
                    <div class="card px-8 py-4">
                        <div class="card-image mt-4 mb-6 flex justify-between flex-row-reverse ">
                          <img  src="<?= URLROOT?>/imgs/close.png" class="w-[30px] h-[30px] cursor-pointer" id="closeForm" alt="">
                          <img src="<?= URLROOT?>/imgs/tags.png" alt="">
                        </div>

                        <div class="card-mail flex items-center mt-10 mb-6">
                            <input type="text" class="font-medium border-l border-t border-b border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none tagName" placeholder="Tag Name">
                            <button class="bg-violet-500 hover:bg-violet-600 hover:border-violet-600 text-white font-bold capitalize px-3 py-2 text-base md:text-lg rounded-r-md border-t border-r border-b border-violet-500" id="addT">Submit</button>
                        </div>
                        <p id="tagErr" class="text-red-500 font-semibold"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="editTagForm" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
            <div class="container px-4 sm:px-8 mx-auto max-w-lg ">

                <div class="wrapper bg-white rounded-sm shadow-lg ">
                    <div class="card px-8 py-4">
                        <div class="card-image mt-4 mb-6 flex justify-between flex-row-reverse">
                          <img  src="<?= URLROOT?>/imgs/close.png" class="w-[30px] h-[30px] cursor-pointer" id="closeEditForm" alt="">
                          <img src="<?= URLROOT?>/imgs/tags.png" alt="">
                        </div>

                        <div class="card-mail flex items-center mt-10 mb-6">
                            <input type="text" id="name" class=" border-l border-t border-b border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none" placeholder="Tag Name">
                            <button class="bg-violet-500 hover:bg-violet-600 hover:border-violet-600 text-white font-bold capitalize px-3 py-2 text-base md:text-lg rounded-r-md border-t border-r border-b border-violet-500" id="editT">Update</button>
                        </div>
                        <p id="EditTagErr" class="text-red-500 font-semibold"></p>  
                    </div>
                </div>
            </div>
        </div>

 
   
</main>

<script defer src="<?php echo URLROOT?>/js/dashboard.js"></script>


<?php require APPROOT . '/views/incFile/footer.php'; ?>