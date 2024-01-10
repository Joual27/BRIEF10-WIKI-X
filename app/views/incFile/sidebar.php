<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0  w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-900">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ">
                <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/dashboard.png" alt="">
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
               <a href="<?php echo URLROOT?>pages/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer ">
                    <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/wiki.png" alt="">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Wikis</span>
               </a>
         </li>
         <li>
            <a href="<?php echo URLROOT?>pages/insurances" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer ">
               <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/tags.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Tags</span>
            </a>
         </li>
         <li>
            <a href="<?php echo URLROOT?>pages/articles" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer ">
            <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/cat.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Categories</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer">
               <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/logout.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
            </a>
         </li>
      </ul>
   </div>
</aside>
