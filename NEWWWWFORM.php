<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$firstname = $lastname = $religion= $presentaddress = $permanentaddress =$email = $gender= "";

$firstnameErr = $lastnameErr = $religionErr = $presentaddressErr = $permanentaddressErr =$emailErr = $genderErr= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") 

{
  if (empty($_POST["firstname"])) 
  {
    $firstnameErr = " First Name is required";
  } else 
  {
    $firstname = test_input($_POST["firstname"]);
  }

  if (empty($_POST["lastname"])) 
  {
    $lastnameErr = " Last Name is required";
  } else 
  {
    $lastname = test_input($_POST["lastname"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["presentaddress"])) 
  {
    $presentaddressErr = "Present Address is required";
  } else 
  {
    $presentaddress = test_input($_POST["presentaddress"]);
  }

  if (empty($_POST["permanentaddress"])) 
  {
    $permanentaddressErr = "Permanent Address is required";
  } else 
  {
    $permanentaddress = test_input($_POST["permanentaddress"]);
  }


}

function test_input($data) 

{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<h2 style="color: blue" align="center">Registration Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  First Name: <input type="text" name="firstname">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br><br>


  Last Name: <input type="text" name="lastname">
  <span class="error">* <?php echo $lastnameErr;?></span>
  <br><br>


  Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>  <br> <br>


  Date of Birth : <input type="date" name="dob"> <br> <br>

       Present Address: <input type="text" name="presentaddress"> 
       <span class="error"><?php echo $presentaddressErr;?></span> <br> <br>


       Permanent Address: <input type="text" name="permanentaddress">
       <span class="error"><?php echo $permanentaddressErr;?></span> <br> <br>


       Email : <input type="email" name="email"> <br> <br>
       <span class="error">* <?php echo $emailErr;?></span>
  <input type="submit" name="submit" value="Submit">  
</form>

<br> <br>
 <br>
   <script>
      var jsonobject = {
        "Registration form" : [
        {
          "firstname" : "fahim"
        },
        {
          "lastname" : "tridip"
        },
        {
          "password" : "2323"
        },
        {
          "gender" : "male" 
        },
        {
          "Email" : "tridipahmed@yahoo.com"
        }

        ]
      }
       document.write(jsonobject.Registrationform[])
      for( x in jsonobject.Registrationform)
      

   </script>




<?php

extract($_REQUEST);
$file=fopen("data.txt", "a");

fwrite($file, "First Name : ");
fwrite($file, $firstname. "\n");

fwrite($file, "Last Name : ");
fwrite($file, $lastname. "\n");

fwrite($file, "Gender : ");
fwrite($file, $gender. "\n");

fwrite($file, "Date of Birth : ");
fwrite($file, $dob. "\n");


fwrite($file, "Prrsent Address : ");
fwrite($file, $presentaddress. "\n");


fwrite($file, "Permanent Address : ");
fwrite($file, $permanentaddress. "\n");

fwrite($file, "Email : ");
fwrite($file, $email. "\n");


?>


</body>
</html>