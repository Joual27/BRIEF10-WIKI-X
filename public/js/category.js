$(document).ready(function(){
    $("#showTCatForm").on("click",function(){
        $(".catName").val("");
        $(".catDesc").val("");
        $("#catErr").text("");
        $("#addCatForm").removeClass("hidden");
    })
    $("#closeForm").on("click",function(){
        $("#addCatForm").addClass("hidden");
    })
    $("#closeEditForm").on("click",function(){
        $("#editCatForm").addClass("hidden");
    })



    function fetchCategories(response){
        $("#categories").empty();
        $.each(response,function(index,row){
            $("#categories").append(`
                <div class="w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col gap-[20px] container">
                        <div class="flex gap-[10px] items-center ">
                            <img class="w-[50px]" src="http://localhost/wiki-x/imgs/cat.png" alt="">
                            <p class="font-medium" id="catName">${row.categoryName}</p>
                        </div>
                        <div>
                            <p id="catDesc">${row.categoryDesc}</p>
                        </div>
                        <div class="flex gap-[10px]" data-id="${row.categoryId}">
                            <button class="bg-gray-300 px-[0.5rem] py-[0.4rem] text-gray-700 font-medium border-none rounded-lg edit">Update</button>
                            <button class="bg-red-500 px-[0.5rem] py-[0.4rem] text-white font-medium border-none rounded-lg delete">Delete</button>
                        </div>
                </div>
            `)
        })
    }


    $.ajax({
        url : "http://localhost/wiki-x/admin/getAllCategories",
        type : "GET" ,
        dataType : "json",
        success : function(response){
            fetchCategories(response);
        }
    })


    
    $("#addC").on("click",function(){
        $("#catErr").text("");
        let catName = $(".catName").val();
        let catDesc = $(".catDesc").val();

        let pattern = /^[a-zA-Z]+$/;

        if(catName.trim() == "" || catDesc.trim() == ""){
            $("#catErr").text("All Fields Are Required !");
        }
        else if(!pattern.test(catName)){
            $("#catErr").text("Cat Names accept only letters !");
        }
        else{
             $.ajax({
                url : "http://localhost/wiki-x/admin/addCategory",
                type : "POST",
                dataType : "json" ,
                data : {
                    'add' : 1 ,
                    'name' : catName,
                    'desc' : catDesc
                },
                success : function(response){
                    $("#addCatForm").addClass("hidden");
                    fetchCategories(response);
                }
             })
        }
   
    })


    let catId ;

    $("#categories").on("click" , ".edit" ,function(){
        $("#editCatForm").removeClass("hidden");

        let name = $(this).closest(".container").find("#catName").text().trim();    
        
        let desc = $(this).closest(".container").find("#catDesc").text().trim(); 
        
        catId = $(this).closest("div").data("id");
        

        $(".categoryName").val(name);
        $(".categoryDesc").val(desc);

    })


    $("#editC").on("click", function(){
        

        let catName = $(".categoryName").val();
        let catDesc = $(".categoryDesc").val();

        $.ajax({
            url : "http://localhost/wiki-x/admin/updateCategory",
            type : "POST" ,
            dataType : "json",
            data : {
                'edit' : 1,
                'id' : catId,
                'name' :  catName,
                'desc' :  catDesc
            },
            success : function(response){
                $("#editCatForm").addClass("hidden");
                fetchCategories(response);
            }
        })
    })

    $("#categories").on("click" , ".delete" ,function(){
        let id = $(this).closest("div").data("id");

        $.ajax({
            url : "http://localhost/wiki-x/admin/deleteCategory",
            type : "POST",
            dataType : "json",
            data :{ 
                'delete' : 1 ,
                'id' : id
            },
            success : function(response){
                fetchCategories(response);
            }
        })
    })

})