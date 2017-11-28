function credentialcheck()
{
    uname = $("#uname").val();
    pwd = $("#pwd").val();
    ajax = makeAjaxCall(uname, pwd);
}


function makeAjaxCall(uname, pwd)
{
  return $.post("/leavermann/businesslogic/auth/credential_check.php",{username: uname, password:pwd}, function(data)
  {
    if(data === "1")
      {
        window.location = "/leavermann/view/signin.php";
      }  
  });
}