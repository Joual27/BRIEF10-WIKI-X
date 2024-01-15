$(document).ready(function(){

    function getCheckedCheckboxes() {
        var checkedCheckboxes = [];
    
        $(".wikiTags input[type='checkbox']").each(function() {
            if ($(this).is(":checked")) {
                checkedCheckboxes.push($(this).val());
            }
        });
    
        return checkedCheckboxes;
    }


    function fetchCategories(response){
        $.each(response,function(index,row){
            $("#categories").append(`
                <option value="${row.categoryId}">${row.categoryName}</option>
            `)
        })
    }
    function fetchTags(response){
        $.each(response,function(index,row){
            $(".wikiTags").append(`
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input type="checkbox" value="${row.tagId}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${row.tagName}</label>
                    </div>
                </li>
            `)
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
    $.ajax({
        url : "http://localhost/wiki-x/admin/getAllCategories",
        type : "GET" ,
        dataType : "json",
        success : function(response){
            fetchCategories(response);
        }
    })
  
    
    $("#submitForm").on("click", function(){
       
        let title = $("#title").val();
        let content = $("#content").val();
        let category = $("#categories").val();
        let tagsOfWiki = getCheckedCheckboxes();

        $("#wikiErr").text("");
        $("#titleErr").text("");
        $("#contentErr").text("");
        $("#tagErr").text("");

        let Pattern = /^[a-zA-Z0-9\s]+$/;
        let hasErrors = false;

        if (title.trim() === "" || content.trim() === ""  || category === "" ) {
            $("#wikiErr").text("FILL ALL FIELDS PLEASE!");
            hasErrors = true;
        } else {
            if (!Pattern.test(title)) {
                $("#titleErr").text("Invalid title format");
                hasErrors = true;
            }
            // if (!Pattern.test(content)) {
            //     $("#contentErr").text("invalid content format");
            //     hasErrors = true;
            // }
            if ($(".wikiTags input[type='checkbox']:checked").length === 0){
                $("#tagErr").text("Pls choose at least one tag !");
                hasErrors = true;
            }
            if (!hasErrors) {
                $.ajax({
                    url : "http://localhost/wiki-x/author/addWiki",
                    type : "POST",
                    dataType : 'html',
                    data :{
                        'add' : 1,
                        'title' : title,    
                        'content' : content,
                        'categoryId' : category,
                        'tags' : tagsOfWiki
                    },
                    success : function(response){
                        if(response.includes("done")){
                            $("#validation").text("Wiki Added Successfully");
                            setTimeout(()=>{  
                                $("#validation").fadeOut();
                                window.location.href = "http://localhost/wiki-x/author/wikisOfAuthor";
                            },2000)
                        }
                        
                    }

                })
            }
        }
    });
});
