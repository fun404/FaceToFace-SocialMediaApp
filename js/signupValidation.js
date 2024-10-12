function validate()
{
  var firstName = document.Register.fname;
 // -------------------NAME--------------------
  if(firstName.value == "")
  {
    document.getElementById("errorname").innerHTML="Please enter your first name and last name";
    document.getElementById("errorname").style.color="red";
    uname.focus();
    return false;
  }
}