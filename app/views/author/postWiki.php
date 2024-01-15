<?php require APPROOT . '/views/incFile/header.php'; ?>
<div class="dark:bg-gray-900 min-h-[100vh]">

    
    <?php require APPROOT . '/views/incFile/navbar.php'; ?>
    
    
<div class="w-full h-[85vh] flex justify-center items-center">
    <form class="ml-[10rem] my-auto flex gap-[4rem] w-[50%]" id="wikiForm" enctype="multipart/form-data">
        <div class="w-[40%]">
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  >
                <p id="titleErr" class="font-medium text-red-500"></p>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                <textarea id="content" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg min-h-[350px]  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light resize-none" ></textarea>
                <p id="contentErr" class="font-medium text-red-500"></p>
            </div>   
        </div>
        <div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Category</label>
                <select name="" id="categories" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                    <option value="">Select Category</option>
                </select>

            </div>
            <div class="mb-5">
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Tags</h3>
                <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white wikiTags">
                </ul>
                <p id="tagErr" class="font-medium text-red-500"></p>
            </div>
            
            
        </div>
        
    </form>
    
</div>
<div class="flex flex-col w-full gap-[10px] items-center absolute bottom-[16%]">
    <p id="wikiErr" class="font-medium text-red-500"></p>
    <p id="validation" class="font-medium text-violet-500"></p>
    <button id="submitForm"  class="text-white bg-blue-700 hover:bg-violet-600 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-400 dark:hover:bg-violet-600">Post New Wiki</button>
</div>
   

    



</div>


<script defer src="<?php echo URLROOT?>/js/postWiki.js"></script>

<?php require APPROOT . '/views/incFile/footer.php'; ?>


