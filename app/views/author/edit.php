<?php require APPROOT . '/views/incFile/header.php'; ?>
<div class="dark:bg-gray-900 min-h-[100vh]">

    
    <?php require APPROOT . '/views/incFile/navbar.php'; ?>
    
    
<div class="w-full h-[85vh] flex justify-center items-center">
    <form class="ml-[10rem] my-auto flex gap-[4rem] w-[50%]" id="wikiForm">
        <div class="w-[40%]">
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="<?=$data['currentWiki']->title?>">
                <p id="titleErr" class="font-medium text-red-500"></p>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                <textarea id="content" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg min-h-[350px]  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light resize-none"><?=$data['currentWiki']->content ?></textarea>
                <p id="contentErr" class="font-medium text-red-500"></p>
            </div>   
        </div>
        <div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Category</label>
                <select name="" id="categories" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                    <option value="">Select Category</option>
                    <?php foreach($data["categories"] as $category){ ?>
                        <option value="<?= $category->categoryId ?>" <?php if($category->categoryId == $data["currentWiki"]->categoryId){echo "selected";} ?>><?= $category->categoryName ?></option>
                    <?php } ?>
                </select>

            </div>
            <div class="mb-5">
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Tags</h3>
                <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white wikiTags">
                <?php foreach ($data["tags"] as $tag) { ?>
                    <?php
                    $checked = false;
                    foreach ($data["tagsOfWiki"] as $tagOfWiki) {
                        if ($tag->tagId == $tagOfWiki->tagId) {
                            $checked = true;
                            break; 
                        }
                    }
                    ?>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input type="checkbox" value="<?= $tag->tagId ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" <?= $checked ? 'checked' : '' ?>>
                            <label class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"><?= $tag->tagName ?></label>
                        </div>
                    </li>
                <?php } ?>
                </ul>
                <p id="tagErr" class="font-medium text-red-500"></p>
            </div>
            
            
        </div>
        
    </form>
    
</div>
<div class="flex flex-col w-full gap-[10px] items-center absolute bottom-[16%]">
    <p id="wikiErr" class="font-medium text-red-500"></p>
    <p id="validation" class="font-medium text-violet-500"></p>
    <button id="submitForm" class="text-white bg-blue-700 hover:bg-violet-600 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-400 dark:hover:bg-violet-600">Update Wiki</button>
</div>
   

    



</div>


<script defer src="<?php echo URLROOT?>/js/editWiki.js"></script>

<?php require APPROOT . '/views/incFile/footer.php'; ?>


