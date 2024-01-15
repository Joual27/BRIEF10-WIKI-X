$(document).ready(function(){
    $("#allWikis").on("click",".wiki",function(){
        let id = $(this).data("id");
        window.location.href =  "http://localhost/wiki-x/author/Wiki?id="+id;
           
    })
})