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
                        <small>Published At : ${row.CreatedAt} </small>
                    </p>
                    <p class="text-white dark:text-white">
                        ${row.content}
                    </p>
                    
                    <div class="flex gap-[10px] justify-center mt-[1.5rem] mb-[1rem]" data-id="${row.wikiId}">
                        <button class="bg-gray-200 px-[0.5rem] py-[0.4rem] text-gray-500 font-medium border-none rounded-lg edit"><a href="http://localhost/wiki-x/author/editWiki?id=${row.wikiId}">Update</a></button>
                        <button class="bg-red-500 px-[0.5rem] py-[0.4rem] text-white font-medium border-none rounded-lg delete">Delete</a></button>
                    </div>
                    
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
        url: "http://localhost/wiki-x/author/getAllWikisOfAuthor",
        type: "GET",
        dataType: "json",
        success: function (response) {
            fetchAllWikis(response);
        }
    });


    $("#allWikis").on("click",".delete",function(){
        let id = $(this).closest("div").data("id");
        $.ajax({
            url : "http://localhost/wiki-x/author/deleteWiki",
            type : "POST",
            dataType : 'json',
            data : {
                "delete" : 1,
                "id" : id
            },
            success: function (response) {
                fetchAllWikis(response);
            }
        })
    })


    
    





    





})