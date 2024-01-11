$(document).ready(function(){
    function fetchWikis(response){
        $("#wikis").empty();
        $.each(response,function(index,row){
            $("#wikis").append(`
            <tr class="odd:bg-white odd:dark:bg-white even:dark:bg-slate-100 text-gray-500 font-medium">
                <td scope="col" class="px-6 py-3">${row.wikiId}</td>
                <td scope="col" class="px-6 py-3">${row.title}</td>
                <td scope="col" class="px-6 py-3">${row.content}</td>
                <td scope="col" class="px-6 py-3">
                    <img class="w-[30px]" src="http://localhost/wiki-x/imgs/${row.wikiImg}">
                </td>
                <td scope="col" class="px-6 py-3">${row.username}</td>
                <td scope="col" class="px-6 py-3">${row.categoryName}</td>
                <td scope="col" class="px-6 py-3 flex gap-[10px]">
                    <img src="http://localhost/wiki-x/imgs/delete.png" class="w-[30px] h-[30px] delete cursor-pointer">
                </td>
            </tr>
        `);
        }) 
    }

    $.ajax({
        url : "http://localhost/wiki-x/admin/getAllWikis",
        type : "GET",
        dataType : "json" ,
        success : function(response){
            fetchWikis(response);
        }
    })


    $("#wikis").on("click",".delete", function(){
        let wikiId = $(this).closest("tr").find("td:eq(0)").text().trim();

        $.ajax({
            url : "http://localhost/wiki-x/admin/deleteWiki",
            type : "POST",
            dataType : "json",
            data : {
              "delete" : 1,
              "id": wikiId
            } ,
            success : function(response){
                fetchWikis(response);
            }
        })
    })

    
})