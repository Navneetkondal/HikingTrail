
var mflag;
function check()
{
    var flag=0;
    var username=document.getElementById("username").value;
    var password=document.getElementById("pwd").value;
    var usererror,passerror;
    var nameRegex = /^[a-zA-Z0-9\-]+$/;
    var passRegex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(username.match(nameRegex)==null)    
    {
    usererror="*Enter username";
    flag++;
    }else
    {
    usererror="";
    }
    if(password.match(passRegex))    
    {
    passerror="";  
    }
    else
    { 
    flag++;
    passerror="*Enter password";
    }
    document.getElementById("usererror").innerHTML=usererror;
    document.getElementById("passerror").innerHTML=passerror;
    mflag=flag;  

    if(flag==0)
    {
        document.getElementById("h11").removeAttribute("disabled");
    }
    else
    {
    document.getElementById("h11").setAttribute('disabled', 'disabled');
   
    }
}
function check1()
    {
    var flag=0;
    var username=document.getElementById("signuser").value;
    var password=document.getElementById("signpassword").value;
    var email=document.getElementById("signmail").value;
    var phonenumber=document.getElementById("signphone").value;
    var usererror,passerror,emailerror,phoneerror;
    var nameRegex = /^[a-zA-Z0-9\-]+$/;
    var passRegex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    var emailRegex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(username.match(nameRegex)==null)    
    {
        usererror="*Enter username";
        flag++;
    }else
    {
        usererror="";
    }
    if(password.match(passRegex))    
    {
        passerror="";
    }
    else
    { 
        flag++;
        passerror="*Enter password";
    }
    if(email.match(emailRegex))    
    {
        emailerror="";  
    }
    else
    { 
        flag++;
        emailerror="*Enter email";
    }
    if(phonenumber<10)    
    {
        phoneerror="*Enter 10-digit phone number";
        flag++;  
    }
    else
    { 
        phoneerror="";
    }
    document.getElementById("usererror1").innerHTML=usererror;
    document.getElementById("passerror1").innerHTML=passerror;
    document.getElementById("emailerror1").innerHTML=emailerror;
    document.getElementById("phoneerror1").innerHTML=phoneerror;
    mflag=flag;
    if(flag==0)
    {
        document.getElementById("h22").removeAttribute("disabled");
    }
    else
    {
    document.getElementById("h22").setAttribute('disabled', 'disabled');
   
    }
}
