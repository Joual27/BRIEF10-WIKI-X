$(document).ready(function(){
    function validateEmail(email){
        let pattern = /^[\w.-_]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
        if(pattern.test(email)){
            return true;
        }
        else{
            return false
        }
    }
    
    function validatePw(pw){
        let pattern = /^(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[0-9]).{8,}$/;
        if(pattern.test(pw)){
            return true;
        }
        else{
            return false
        }
    }
    
    
    function emptyErrors(){
        $("#emailError").text("");
        $("#passwordError").text("");
        $("#passwordConfirmationError").text("");
        $("#formError").text("");
        $("#validationMsg").text("");
    }
    
    
    const registrationForm  = $("#signupForm");
    
    
    
    registrationForm.on("submit",function(e){
        emptyErrors();
        let email = $("#email").val();
        let username = $("#username").val();
        let pw = $("#password").val();
        let confirmPw = $("#password_confirmation").val();
        let hasErrors = false ;
        e.preventDefault();
        if(email.trim() === "" || username.trim() === "" || pw.trim() === "" || confirmPw.trim() === "" ){
            $("#formError").text("All Fields Are Required !");
            hasErrors = true ;
    
        }
        else{
            if(!validateEmail(email)){
                 $("#emailError").text("Invalid Email Format");
                 hasErrors = true ;
            }
            if(!validatePw(pw)){
                $("#passwordError").text("Pw must contain at least 8 chars , 1 UPPER letter , 1 number and 1 symbol at least !");
                hasErrors = true ;
            }
            if(pw !== confirmPw){
              $("#passwordConfirmationError").text("Passwords doesn't match");
              hasErrors = true ;
            }   
    
            if(!hasErrors){
                let email = $("#email").val();
                let csrf_token = $("#csrf_token").val();
                let username = $("#username").val();
                let pw = $("#password").val();
    
                $.ajax({
                    url : "http://localhost/wiki-x/pages/register",
                    type : "POST" ,
                    data : {
                        "add" : 1,
                        "email" : email,
                        "csrf_token" : csrf_token,
                        "username" : username ,
                        "pw" : pw
                    },
                    dataType: "html", 
                    success: function (response) {
                        if (response.includes("success")) {
                            $("#validationMsg").text("Registarion successfully , Login to access Our Website");
                            setTimeout(()=>{
                                $("#validationMsg").text("Registarion successfully , Login to access Our Website");
                                $("#validationMsg").fadeOut();
                                window.location.href = "http://localhost/wiki-x/pages/login";
                            },2000)
                        } else {
                            $("#formError").text("Invalid response: " + response);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);  
                    }
                })
            }
        }
    })
    
})