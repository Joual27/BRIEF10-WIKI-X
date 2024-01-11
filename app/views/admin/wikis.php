
<?php require APPROOT . '/views/incFile/header.php'; ?>
<?php require APPROOT . '/views/incFile/sidebar.php'; ?>


<main class="my-[2rem] w-[100%]">
   

   <div class="w-[80%] ml-[15%] ">
        <div class="flex justify-between" >
            <div class="mb-[1rem]">
                <p class='font-semibold text-[1.25rem] text-violet-500'>WIKIS DASHBOARD</p>
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
                            TITLE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CONTENT
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IMAGE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            POSTED BY
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CATEGORY
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ACTIONS
                        </th>
                    </tr>
                </thead>
                <tbody id="wikis">
                
                </tbody>           
            </table>
        </div>

   </div>

   
</main>


<script defer src="<?php echo URLROOT?>/js/wiki.js"></script>


<?php require APPROOT . '/views/incFile/footer.php'; ?>
