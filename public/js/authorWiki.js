$(document).ready(function(){
    function fetchAllWikis(response) {
        $("#allWikis").empty();
        $.each(response, function (index, row) {
            let wikiContainer = $("#allWikis").append(`
                <div class="py-6 lg:mb-0 bg-gray-700 px-[1rem] rounded-lg cursor-pointer hover:bg-gray-600 wiki" data-id="${row.wikiId}">
                    <h5 class="mb-3 text-lg font-bold text-white dark:text-white">${row.title}</h5>
                    <div class="mb-3 flex items-center justify-center text-sm font-medium">
                        <div class="px-[0.5rem] py-[0.3rem] bg-violet-500 rounded-lg my-[1rem]">
                            <p class="font-medium text-white">${row.categoryName}</p>
                        </div>
                    </div>
                    <div id="tagsOfWiki_${index}" class="mb-3 flex items-center justify-center text-sm font-medium gap-[10px] flex-wrap">
                    </div>
                    <p class="mb-6 text-white dark:text-white">
                        <small>Published by
                            <a class="text-white dark:text-white">${row.username}</a></small>
                    </p>
                    <p class="text-white dark:text-white">
                        ${row.content}
                    </p>
                </div>
            `);
    
            $.ajax({
                url: "http://localhost/wiki-x/author/getAllTagsOfWiki",
                type: "POST",
                dataType: "json",
                data: {
                    'fetch': 1,
                    'id': row.wikiId
                },
                success: function (tagsResponse) {
                    let tagsContainer = wikiContainer.find(`#tagsOfWiki_${index}`);
                    tagsContainer.empty(); 
    
                    $.each(tagsResponse, function (tagIndex, tagRow) {
                        tagsContainer.append(`
                            <div class="px-[0.5rem] py-[0.3rem] bg-pink-500 rounded-lg">
                                <p class="font-medium text-white">${tagRow.tagName}</p>
                            </div>
                        `);
                    });
                }
            });
        });
    }
    
    $.ajax({
        url: "http://localhost/wiki-x/author/getAllWikis",
        type: "GET",
        dataType: "json",
        success: function (response) {
            fetchAllWikis(response);
        }
    });


    $("#searchInput").on("input",function(){
        let term  =$(this).val();
        $.ajax({
            url : "http://localhost/wiki-x/author/search",
            method : "POST",
            dataType : 'json',
            data :{
                'search' : 1,
                'term' : term
            },
            success : function(response){
                fetchAllWikis(response);
                if(response.length === 0 && term.trim() === ""){
                    $.ajax({
                        url: "http://localhost/wiki-x/author/getAllWikis",
                        type: "GET",
                        dataType: "json",
                        success: function (response) {
                            fetchAllWikis(response);
                        }
                    });
                }
            }
        })
    })
     


    function fetchAllCategories(response){
        $("#cats").empty();
        $.each(response,function(index,row){
            $("#cats").append(`
                <div class="py-6 lg:mb-0 bg-gray-700 px-[1rem] rounded-lg cursor-pointer hover:bg-gray-600">
                    <h5 class="mb-3 text-lg font-bold text-white dark:text-white">${row.categoryName}</h5>
                    <div class="mb-3 flex items-center justify-center text-sm font-medium">
                    <div class="px-[0.5rem] py-[0.3rem] bg-violet-500 rounded-lg my-[1rem]">
                        <p class="font-medium text-white">${row.created_at}</p>
                    </div>
                    </div>
                    
                    <p class="text-white dark:text-white">
                    ${row.categoryDesc}
                    </p>
                </div>
            `)
        })
    }


    $.ajax({
        url : "http://localhost/wiki-x/author/getAllCategories",
        type : "GET",
        dataType : "json" ,
        success : function(response){
            fetchAllCategories(response);
        }
    })


 


 
 
    


})