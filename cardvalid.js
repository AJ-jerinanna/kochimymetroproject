function validateform()
{

var x=document.forms["cardform"]["cname"].value;
if(x=="")
{
alert("Please Fill  Name");
return false;
}
if( document.cardform.phn.value == "" ||
           isNaN( document.cardform.phn.value) ||
           document.cardform.phn.value.length != 10 )
   {
     alert( "Please provide a Mobile No upto 10 digit" );
     document.cardform.phn.focus() ;
     return false;
   }
   var x=document.forms["cardform"]["dob"].value;
if(x=="")
{
alert("Please give date if birth");
return false;
}
var Givendate=document.forms["cardform"]["dob"].value;
var Currentdate=new Date();
Givendate=new Date(Givendate);
if(Givendate > Currentdate)
{
	alert("Given date is greater than current date");
	document.cardform.dob.focus() ;
     return false;
   }
   var x=document.forms["cardform"]["gender"].value;
if(x=="")
{
alert("Please choose gender");
return false;
}
var x=document.forms["cardform"]["occ"].value;
if(x=="")
{
alert("Please give occupation");
return false;
}
var x=document.forms["cardform"]["hname"].value;
if(x=="")
{
alert("Please give house name");
return false;
}
var x=document.forms["cardform"]["dis"].value;
if(x=="")
{
alert("Please choose district");
return false;
}
var x=document.forms["cardform"]["city"].value;
if(x=="")
{
alert("Please give city");
return false;
}
if( document.cardform.pincode.value == "" ||
           isNaN( document.cardform.pincode.value) ||
           document.cardform.pincode.value.length != 6 )
   {
     alert( "Please provide 6 digit pincode" );
     document.cardform.pincode.focus() ;
     return false;
   }
   if(document.cardform.ntype.value == "")
   {
   	alert("Please enter nationalid type");
   	return false;
   }
   if(document.cardform.typeno.value == "")
   {
   	alert("Please enter nationalid no");
   	return false;
   }
   
return true;
}