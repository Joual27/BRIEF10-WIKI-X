<?php require APPROOT . '/views/incFile/header.php'; ?>
<div class="dark:bg-gray-900 min-h-[100vh]">

    
    <?php require APPROOT . '/views/incFile/navbar.php'; ?>
    <div class="flex flex-col justify-center h-[80vh]">
            <div
                class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
                <div class="w-full md:w-1/3 bg-white grid place-items-center">
                    <img src="<?= URLROOT?>/imgs/wiki.png" alt="tailwind logo" class="rounded-xl" />
            </div>
			<div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
				<div class="flex justify-between item-center">
					<p class="text-violet-500 font-medium hidden md:block"><span class="text-gray-700 text-[0.9rem]">Posted at :</span><?= $data["wikiInfo"]->CreatedAt ?></p>
					
					<div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                    <?= $data["wikiInfo"]->categoryName ?></div>
				</div>
				<h3 class="font-black text-gray-800 md:text-3xl text-xl"><?= $data["wikiInfo"]->title ?></h3>
				<p class="md:text-lg text-gray-500 text-base"><?= $data["wikiInfo"]->content ?></p>
				
                <div class="flex gap-[10px] flex-wrap">
                <?php foreach($data["tagsOfWiki"] as $tag){ ?>
                    <div class="bg-pink-500 text-white font-medium w-[100px] flex justify-center items-center rounded-lg py-[0.3rem]">
                        <p><?= $tag->tagName ?></p>
                    </div>
                <?php } ?>
                </div>
           
			</div>
            
		</div>
	</div>



<script defer src="<?php echo URLROOT?>/js/wikiPage.js"></script>


<?php require APPROOT . '/views/incFile/footer.php'; ?>