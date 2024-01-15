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
       
        <div class="flex justify-center bg-inherit py-10 p-14">
            
        <div class="container mx-auto pr-4 rounded-lg">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-20 bg-red-400 flex items-center justify-between">
                <p class="mr-0 text-white text-lg pl-5">USERS</p>
            </div>
            <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p id="countUsers" class="py-4 text-3xl ml-5"><?php echo $data['overallU']; ?></p>
            <!-- <hr > -->
            </div>
        </div>
            <!---== First Stats Container ====--->

            <!---== Second Stats Container ====--->
        <div class="container mx-auto pr-4 rounded-lg">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-20 bg-blue-500 flex items-center justify-between">
                <p class="mr-0 text-white text-lg pl-5">WIKIS</p>
            </div>
            <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-4 text-3xl ml-5"><?php echo $data['overallW']; ?></p>
            <!-- <hr > -->
            </div>
        </div>
            <!---== Second Stats Container ====--->

        <!---== Third Stats Container ====--->
        <div class="container mx-auto pr-4 rounded-lg">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-20 bg-purple-400 flex items-center justify-between">
                <p class="mr-0 text-white text-lg pl-5">CATEGORYS</p>
            </div>
            <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-4 text-3xl ml-5"><?php echo $data['overallC']; ?></p>
            <!-- <hr > -->
            </div>
        </div>


        <div class="container mx-auto pr-4 rounded-lg">
            <div class="w-72 bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-20 bg-purple-400 flex items-center justify-between">
                <p class="mr-0 text-white text-lg pl-5">TAGS</p>
            </div>
            <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-4 text-3xl ml-5"><?php echo $data['overallT']; ?></p>
            <!-- <hr > -->
            </div>
        </div>
        <!---== Third Stats Container ====--->

        <!---== Fourth Stats Container ====--->
        
            <!--==== frist div ends here ====--->

            </div>

 
   
</main>




<?php require APPROOT . '/views/incFile/footer.php'; ?>