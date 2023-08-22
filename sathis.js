document.getElementById("btn").onclick= function(){
    let a =document.getElementById("username").value;
        let b =document.getElementById("password").value;
  
        if(a==""||b==""){
          alert("you should fill the blanks");
        }else{
          alert("you successfully create a account");
        }
  }