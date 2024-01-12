
<?php require APPROOT . '/views/incFile/header.php'; ?>
<?php require APPROOT . '/views/incFile/sidebar.php'; ?>


<main class="my-[2rem] w-[100%]">
   

   <div class="w-[80%] ml-[15%] ">
        <div class="flex justify-between" >
            <div class="mb-[1rem]">
                <p class='font-semibold text-[1.25rem] text-violet-500'>ADD ADMINS DASHBOARD</p>
            </div>
           
        </div>
        <div class="relative overflow-x-auto shadow-md my-[2rem]">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-black dark:text-white h-[50px]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            USERNAME
                        </th>
                        <th scope="col" class="px-6 py-3">
                            EMAIL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IMAGE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ACTIONS
                        </th>
                    </tr>
                </thead>
                <tbody id="users">
                
                </tbody>           
            </table>
        </div>

   </div>
   <div id="confirmation" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
        
        <div class="bg-black opacity-25 w-full h-full absolute z-10 inset-0"></div>
            <div class="bg-white rounded-lg md:max-w-md md:mx-auto p-4 fixed inset-x-0 bottom-0 z-50 mb-4 mx-4 md:relative">
            <div class="md:flex items-center">
                <div class="rounded-full border border-gray-300 flex items-center justify-center w-16 h-16 flex-shrink-0 mx-auto">
                   <img src="<?= URLROOT ?>./imgs/danger.png" alt="">
                </div>
                <div class="mt-4 md:mt-0 md:ml-6 text-center md:text-left">
                <p class="font-bold">Confirm Action</p>
                <p class="text-sm text-gray-700 mt-1">Are U Sure To Give This User Permissions Of Admin</p>
                </div>
            </div>
            <div class="text-center md:text-right mt-4 md:flex md:justify-end">
                <button  class="block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-red-200 text-red-700 rounded-lg font-semibold text-sm md:ml-2 md:order-2 confirm">Confirm</button>
                <button  class="block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-gray-200 rounded-lg font-semibold text-sm mt-4 md:mt-0 md:order-1 cancel">Cancel</button>
            </div>
        </div>
        
   </div>

   
</main>


<script defer src="<?php echo URLROOT?>/js/user.js"></script>


<?php require APPROOT . '/views/incFile/footer.php'; ?>
