var check_btn  = getElementById("checkout");

check_btn.onclick = function check()
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var freeS = document.getElementById("freeShip");
    var overnightS = document.getElementById("overnightShip");
    var threedayS = document.getElementById("3dayShip");
    var numofE = document.getElementById("eggnum").value;
    var lbsofJ = document.getElementById("juicelbs").value;
    var lbsofB = document.getElementById("beeflbs").value;


    if(username.length == 0 || password.length == 0)
    {
        console.log(username.length);
        alert('Username or Password cannot be blank!');
        return false;
    }

    if(!freeS.checked && !overnightS.checked && !threedayS.checked)
    {
        alert("Please select one shipping way!");
        return false;
    }
    
    if(numofE.length==0||lbsofJ.length==0||lbsofB.length==0)
    {
        alert("Please choose corrent number/lbs of goods!(>=0)");
        return false;
    }

    else
    {
        return true;
    }

}