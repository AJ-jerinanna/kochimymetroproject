
function validateform()
{

var x=document.forms["myform"]["name"].value;
if(x=="")
{
alert("Please Fill  Name");
return false;
}
var a=document.forms["myform"]["add"].value;
if(a=="")
{
alert("Please Fill Address Field");
return false;
}
if( document.myform.phn.value == "" ||
           isNaN( document.myform.phn.value) ||
           document.myform.phn.value.length != 10 )
   {
     alert( "Please provide a Mobile No upto 10 digit" );
     document.myform.phn.focus() ;
     return false;
   }
   if((document.myform.phn.value.charAt(0)!=9) && 
    (document.myform.phn.value.charAt(0)!=8) && 
    (document.myform.phn.value.charAt(0)!=7))
   {
alert( "Please provide a valid 10 digit mobile no. start with '9' or '8' or'7'" );
     document.myform.phn.focus() ;
     return false;
   }

var email = /^([a-z0-9A-Z_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/;
var c=document.myform.email.value;
 if(c==null || c=="")
     {
     alert("email can't be empty");
     return false;
     }
    if (!email.test(document.myform.email.value)) {
    alert('Please provide a valid email id');
    email.focus;
    return false;
 } 
/*var password=document.myform.pwd.value; 
   if(password=="")
   {
    alert("Please Enter Your Password");
    document.myform.pwd.focus();
    return false;
   }
   if(password.length<6){  
   alert("Password must be at least 6 characters long.");  
    return false;  
  }  
return( true ); */

        /*if (password != document.myform.cpss.value) 
        {
          alert("Your password and confirmation password do not match");
          document.myform.cpss.focus();
          return false;
        } */
           /* if(myform.pwd.value != "" && myform.pwd.value == myform.cpass.value) {
      if(!checkPassword(myform.pwd.value)) {
        alert("The password you have entered is not valid!");
        myform.pwd.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      myform.pwd.focus();
      return false;
    }
    return true;*/
   if(myform.pwd.value != "" && myform.pwd.value == myform.cpass.value) {
      if(myform.pwd.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        myform.pwd.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(myform.pwd.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        myform.pwd.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(myform.pwd.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        myform.pwd.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(myform.pwd.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        myform.pwd.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      myform.pwd.focus();
      return false;
    }

    return true;
   }