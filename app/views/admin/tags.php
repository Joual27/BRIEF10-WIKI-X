<?php require APPROOT . '/views/incFile/header.php'; ?>
<?php require APPROOT . '/views/incFile/sidebar.php'; ?>



<main class="my-[2rem] w-[100%]">
   

   <div class="w-[80%] ml-[15%] ">
        <div class="flex justify-between" >
            <div class="mb-[1rem]">
                <p class='font-semibold text-[1.25rem] text-violet-500'>WIKIS DASHBOARD</p>
            </div>
            <div class="my-[1rem]">
                <button class="py-[0.6rem] px-[1.2rem] bg-violet-500 text-white font-semibold rounded-lg" id="showTagForm">+ Add Tag</a></button>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md my-[2rem]">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
                        See our guideline
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                        </svg>
                    </a>
                </div>

        </div>
       
             
        <div class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
            <div class="container px-4 sm:px-8 mx-auto max-w-lg ">

                <div class="wrapper bg-white rounded-sm shadow-lg ">
                    <div class="card px-8 py-4">
                        <div class="card-image mt-4 mb-6 flex justify-between flex-row-reverse">
                          <img  src="<?= URLROOT?>/imgs/close.png" class="w-[30px] h-[30px] cursor-pointer" alt="">
                          <img src="<?= URLROOT?>/imgs/tags.png" alt="">
                        </div>

                        <div class="card-mail flex items-center mt-10 mb-6">
                            <input type="text" class="font-medium border-l border-t border-b border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none" placeholder="Tag Name">
                            <button class="bg-violet-500 hover:bg-violet-600 hover:border-violet-600 text-white font-bold capitalize px-3 py-2 text-base md:text-lg rounded-r-md border-t border-r border-b border-violet-500">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
   
</main>




<?php require APPROOT . '/views/incFile/footer.php'; ?>