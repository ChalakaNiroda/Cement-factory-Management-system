
	
function empty(){
    //var error=""
    if(document.getElementById('req1').value=="")
    {
        //error+="Enter Firstname";
        alert("Enter first name");
    }
  
    if(document.getElementById('req2').value=="")
    {
        alert("Enter email address");
    }
    
    if(document.getElementById('req5').value=="")
    {
        alert("Enter contact number");
    }
    if(req4.value.length!=10)
    {
        alert('Note : Contact no must be 10 digits')
    }
    if(document.getElementById('req3').value=="")
    {
        alert("Password");
        return false;
    }
    if(document.getElementById('req4').value=="")
    {
       
        alert("company name");
    }
}


function emailValidate(element,message)
{
var emailExp=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0]{2,4}$/;
if(element.value.length>0)
{
    if(element.value.match(emailExp))
    {
        return true;
    }
    else
    {
        alert(message);
        element.focus();
        return false;
    }
    return true;
}
/*else
{
        alert('Please fill email id');
        element.focus();
        return false;
    
}*/
}

function isNumeric(element,message)
{
var numericExpression=/^(?:19|20)?\d{2}(?:[0-35-8]\d\d(?<!(?:000|500|36[7-9]|3[7-9]\d|86[7-9]|8[7-9]\d)))\d{4}(?:[vVxX])$/;
if(element.value.match(numericExpression))
{
    return true;
}
else{
    alert(message);
    element.focus();
    return false;
}
}




