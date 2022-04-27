document.getElementById("eye").addEventListener("click",function(){
    if(document.getElementById("password").type=="password"){
        document.getElementById("password").type="text";
        this.classList.add("fa-eye");
        this.classList.remove("fa-eye-slash");
    }else{
        document.getElementById("password").type="password";
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
    }
});
document.getElementById("eye-con").addEventListener("click",function(){
    if(document.getElementById("cnfrm-password").type=="password"){
        document.getElementById("cnfrm-password").type="text";
        this.classList.add("fa-eye");
        this.classList.remove("fa-eye-slash");
    }else{
        document.getElementById("cnfrm-password").type="password";
        this.classList.add("fa-eye-slash");

    }
});
function checkPassword(){
    let password = document.getElementById("password").value;
    let cnfrmPassword = document.getElementById("cnfrm-password").value;
    console.log(password,cnfrmPassword);
    let message = document.getElementById("message");
    
    if(password.length != 0){
        if(password == cnfrmPassword){
            message.textContent=" ";
        }
        else{
            message.textContent="Password not match";
        }
    }
    else{
        alert("Password can't be empty!");
        message.textContent="";
    }
    }
