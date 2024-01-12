$(document).ready(function(){

    function fetchAuthors(response){
       $("#users").empty();
       $.each(response,function(index,row){
        $("#users").append(`
           
            <tr class="odd:bg-white odd:dark:bg-white even:dark:bg-slate-100 text-gray-500 font-medium">
                <td scope="col" class="px-6 py-3">${row.userId}</td>
                <td scope="col" class="px-6 py-3">${row.username}</td>
                <td scope="col" class="px-6 py-3">${row.email}</td>
                <td scope="col" class="px-6 py-3">
                    <img class="w-[30px]" src="http://localhost/wiki-x/imgs/${row.userImg}">
                </td>
                <td scope="col" class="px-6 py-3 flex gap-[10px]">
                    <button id="addAdmin" class="px-[0.5rem] py-[0.4rem] bg-violet-500 font-medium rounded-lg text-white">Make As Admin</button>
                </td>
            </tr>
        
        `)
       })
        
       
    }

    $.ajax({
        url : "http://localhost/wiki-x/admin/getAllAuthors",
        type : "GET",
        dataType : "json" ,
        success : function(response){
            fetchAuthors(response);
        }
    })



    let userId ;
    $("#users").on("click", "#addAdmin" , function(){ 
        $("#confirmation").removeClass("hidden");
        userId = $(this).closest("tr").find("td:eq(0)").text().trim();
    })

    $(".confirm").on("click",function(){
        $.ajax({
            url : "http://localhost/wiki-x/admin/addNewAdmin",
            type : "POST",
            dataType : "json" ,
            data : {
               'affect' : 1,
               'id' : userId
            },
            success : function(response){
              $("#confirmation").addClass("hidden");
              fetchAuthors(response);
            }
        })
    })

    $(".cancel").on("click",function(){
        $("#confirmation").addClass("hidden");
    })

})