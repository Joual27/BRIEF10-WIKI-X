<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0  w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-900">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="<?php echo URLROOT?>admin/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group <?php if($data["page"] == "dash"){ echo "bg-gray-600"; }  ;?>">
                <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/dashboard.png" alt="">
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
               <a href="<?php echo URLROOT?>admin/wikis" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer <?php if($data["page"] == "wikis"){ echo "bg-gray-600"; }  ;?>">
                    <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/wiki.png" alt="">
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Wikis</span>
               </a>
         </li>
         <li>
            <a href="<?php echo URLROOT?>admin/tags" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer <?php if($data["page"] == "tags"){ echo "bg-gray-600"; }  ;?>">
               <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/tags.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Tags</span>
            </a>
         </li>
         <li>
            <a href="<?php echo URLROOT?>admin/categories" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer <?php if($data["page"] == "cat"){ echo "bg-gray-600"; }  ;?>">
            <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/cat.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Categories</span>
            </a>
         </li>
         <li>
            <a href="<?php echo URLROOT?>admin/admin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer <?php if($data["page"] == "admins"){ echo "bg-gray-600"; }  ;?>">
            <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/admin.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Add Admin</span>
            </a>
         </li>
        
         <li>
            <a href="<?php echo URLROOT?>pages/logout" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer">
               <img class="w-[30px]" src="<?php echo URLROOT ?>/imgs/logout.png" alt="">
               <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
            </a>
         </li>
      </ul>
   </div>
</aside>






