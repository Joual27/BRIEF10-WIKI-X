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
            if (!Pattern.test(content)) {
                $("#contentErr").text("invalid content format");
                hasErrors = true;
            }
            if ($(".wikiTags input[type='checkbox']:checked").length === 0){
                $("#tagErr").text("Pls choose at least one tag !");
                hasErrors = true;
            }
            if (!hasErrors) {
                $.ajax({
                    url : "http://localhost/wiki-x/author/editWiki",
                    type : "POST",
                    dataType : 'html',
                    data :{
                        'update' : 1,
                        'title' : title,    
                        'content' : content,
                        'categoryId' : category,
                        'tags' : tagsOfWiki
                    },
                    success : function(response){
                        if(response.includes("done")){
                            $("#validation").text("Wiki updated Successfully");
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
