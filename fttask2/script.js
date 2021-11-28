function validateForm(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var age = document.getElementById("age").value;
    var designation = document.getElementById("designation");
    var v1 = document.getElementById("java").value;
    var v2 = document.getElementById("php").value;
    var v3 = document.getElementById("c++").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (fname == "" || lname == "" || age == "" || designation == ""|| email == "" || password == "") {
        document.getElementById("message").innerHTML="Enter all information!";
    // alert("ENTER VALID INFORMATION");
    return false;
    }
    if(v1 == "" && v2 =="" && v3 ==""){
    document.getElementById("message2").innerHTML="Please Select the Language Preference";
    return false;
    }
}