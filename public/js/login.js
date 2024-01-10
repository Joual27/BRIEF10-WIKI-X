$(document).ready(function(){
    


    let form = $("#loginForm");

    form.on("submit",function(e){
        e.preventDefault();
        let email = $("#email").val();
        let pw = $("#pw").val();
        let token = $("#token").val();

        $("#formError").text("");
        $("#emailErr").text("");
        $("#pwErr").text("");
 

        let emailPattern = /^[\w.-_]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
        let pwPattern = /^(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[0-9]).{8,}$/;

        let hasErrors = false;

        if( email.trim() === "" || pw.trim() === ""){
            $("#formError").text("FILL ALL FIELDS PLEASE !");
            hasErrors = true;
        }
        else{
            if(!emailPattern.test(email)){
               $("#emailErr").text("Invalid email format");
                hasErrors = true;

            }
            if(!pwPattern.test(pw)){
                $("#pwErr").text("Invalid pw format");
                hasErrors = true;
            }

            if(!hasErrors){
                 $.ajax({
                    url : "http://localhost/wiki-x/pages/login",
                    type : "POST" ,
                    dataType : "json",
                    data : {
                        'login' : 1,
                        'email' : email ,
                        'pw' : pw ,
                        'token' : token
                    },
                    success : function(response){
                        if(response == "success"){
                            window.location.href = "http://localhost/wiki-x/author/wikis";
                        }
                        else{
                            $("#formError").text("INVALID CREDENTIALS . TRY AGAIN ! ");
                        }
                    }
                 })
            }
        }
    })
})
