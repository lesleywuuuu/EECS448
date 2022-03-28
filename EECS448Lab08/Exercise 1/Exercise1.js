var checkpossword = document.getElementById("validator");
var my_possword = document.getElementById("password");
var confirm_possword = document.getElementById("confirm");

var verify = function verify_password()
{
    console.log ("confirm");
    if(my_possword.value.length < 8)
    {
        alert("The passwords are not at least 8 characters long");
    }
    else if(confirm_possword.value != my_possword.value){
        alert("The passwords entered don't match");
    }
    else
    {
      alert("Your possword is Validated");
    }
  }