// login validation

 var loginForm = document.getElementById("loginForm");
 var username = document.getElementById("username");
 var password = document.getElementById("password");


function login(username,password){
    
    
    
}
    

loginForm.addEventListener("submit",function(event){
    
    event.preventDefault();
    //remove checklength from here
    
   //login();    
});


//end of login validation

//sign up validation
    


   
    var signUpForm =document.getElementById("signUpForm");
    var S_username = document.getElementById("username");
    var S_email    = document.getElementById("email");
    var S_password = document.getElementById("password");
    var S_password_2 = document.getElementById("confPassword");
    

    function showErrorMsg(inputField,Msg){
        
        var formSplit = inputField.parentElement;
        formSplit.className="FormSplitError";
        
        var errPlaceholder = formSplit.querySelector("small");
        errPlaceholder.innerHTML = Msg;
    }

   function succsses(inputField){
       var formSplit = inputField.parentElement;
       formSplit.className="FormSplitSuccsses";
   }
    
     
    function checkLength(min, max,obj){
        if(obj.value.length<min){
            showErrorMsg(obj,"minimum "+ min +" charcters maximum "+max+" charcters.");
        }
       
        else if(min<obj.value.length<max){
            succsses(obj);
        }
        
    }
          
    
    function checkPassword(S_password,S_password_2){
    
        if(S_password.value != S_password_2.value){ 
           showErrorMsg(S_password_2,"Passwords do not match");
        }
        else if(S_password==S_password_2){
            succsses(S_password_2);
        }
        
    }
  
  signUpForm.addEventListener("input",function(event){
    event.preventDefault();
    checkLength(8,16,S_username);
    checkLength(8,16,S_password);     
            });
  
  
    signUpForm.addEventListener("submit", function(event){
    event.preventDefault();    
   
    checkPassword(S_password,S_password_2);
  
    
});

