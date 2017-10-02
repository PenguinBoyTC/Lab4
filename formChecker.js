function checker(){
    var name = document.getElementById("username").value;//question 1box or 2 boxes
    var password = document.getElementById("password").value;
    var num1 = document.getElementById("number1").value;
    var num2 = document.getElementById("number2").value;
    var num3 = document.getElementById("number3").value;
    console.log(name);
    console.log(password);
    if(name=="")
    {
        alert("Please enter an User name!!!");
        return false;
    }
    else if(password=="")
    {
        alert("Please enter a Password!!!");
        return false;
    }
    else if(num1==""||num2==""||num3=="")
    {
        alert("The number of items cannot be blank!!!");
        return false;
    }
    else
    {
        alert("You have successfully added items!!!");
        return true;
    }
}
