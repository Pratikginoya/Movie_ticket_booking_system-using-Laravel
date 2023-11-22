function password_visibility(){
    var ipass = document.getElementById("password");
    if(ipass.type=="password"){
        ipass.type="text";
        document.getElementById("visible_button").innerHTML="visibility_off";
        document.getElementById("visible_button").className="material-icons-round red-color";
  
    }
    else if(ipass.type=="text"){
        ipass.type="password";
        document.getElementById("visible_button").innerHTML="visibility";
        document.getElementById("visible_button").className="material-icons-round green-color";
    }
  }