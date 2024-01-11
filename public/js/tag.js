$(document).ready(function(){
    $("#showTagForm").on("click",function(){
        if($("#addTagForm").hasClass("hidden")){
            $("#tagName").val("");
            $("#addTagForm").removeClass("hidden");
        }
    })

    $("#closeForm").click(function(){
        $("#addTagForm").addClass("hidden");
    })
    $("#closeEditForm").click(function(){
        $("#editTagForm").addClass("hidden");
    })



    function fetchTags(response){
        $("#tags").empty();
        $.each(response,function(index,row){
            $("#tags").append(
                ` <div class="w-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col gap-[10px] container">
                        <div class="flex gap-[10px] items-center ">
                            <img src="<?= URLROOT ?>/imgs/tags.png" alt="">
                            <p class="font-medium" id="tagName">${row.tagName}</p>
                        </div>
                        <div class="flex gap-[10px]" data-id="${row.tagId}">
                            <button class="bg-gray-300 px-[0.5rem] py-[0.4rem] text-gray-700 font-medium border-none rounded-lg edit">Update</button>
                            <button class="bg-red-500 px-[0.5rem] py-[0.4rem] text-white font-medium border-none rounded-lg delete">Delete</button>
                        </div>
                </div>`
            )
        })
    }

    $.ajax({
        url : "http://localhost/wiki-x/admin/getAllTags",
        type : "GET" ,
        dataType : "json",
        success : function(response){
            fetchTags(response);
        }
    })

    $("#addT").on("click",function(){
        $("#tagErr").text("");
        let tagName = $("#tagName").val();

        let pattern = /^[a-zA-Z]+$/;

        if(!pattern.test(tagName)){
            $("#tagErr").text("Tag Names accept only letters !");
        }
        else{
             $("#addTagForm").addClass("hidden");

             $.ajax({
                url : "http://localhost/wiki-x/admin/addTag",
                type : "POST",
                dataType : "json" ,
                data : {
                    'add' : 1 ,
                    'name' : tagName
                },
                success : function(response){
                    fetchTags(response);
                }
             })
        }

        
    })


    let tagId ;

    $("#tags").on("click",".edit" , function(){
        $("#editTagForm").removeClass("hidden");

        let tagName = $(this).closest(".container").find("#tagName").text().trim();
        tagId = $(this).closest("div").data("id");
        

        $("#name").val(tagName);

    })

    $("#editT").on("click", function(){
        let tagName =  $("#name").val();

        $.ajax({
            url : "http://localhost/wiki-x/admin/updateTag",
            type : "POST" ,
            dataType : "json",
            data : {
                'edit' : 1,
                'id' : tagId,
                'name' :  tagName
            },
            success : function(response){
                $("#editTagForm").addClass("hidden");
                fetchTags(response);
            }
        })
    })





})