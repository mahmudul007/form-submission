<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>
<?php
// define variables and set to empty values
      $fnameErr=$lnameErr = $emailErr=$dobErr=$religionErr = $genderErr =$usernameErr =$emailErr =$passwordErr ="";
echo 
     $fname=$lname = $email=$religion =$dob= $gender = $uname =$email=$password =$username=$present_adress=
     $parmanent_adress=$url=$phone="";

  if($_SERVER['REQUEST_METHOD'] === "POST") {
   if(empty($_POST['fname'])) {
$fnameErr = "Value can't be empty";
}
   else {
    $fname = test_input($_POST['fname']);
    }


if(empty($_POST['lname']))
   {
    $lnameErr="Value can't be empty";

   }
       else 
  {
          $lname=test_input($_POST['lname']);
     }

if(empty($_POST['gender']))
     {
        $genderErr="Value cant be empty";

     }
     else{
        $gender=test_input($_POST['gender']);
     }

if(empty($_POST['religion']))
     {
        $genderErr="Value cant be empty";
     }
     else{
        $religion =test_input($_POST['religion']);
     }
if(empty($_POST['dob']))
     {
        $dobErr="Value can't be empty";
     }
     else
     {
        $dob=test_input($_POST['dob']);
     }
if(empty($_POST['email']))
   {
    $emailErr="Value cant be empty";
   }
   else
   {
    $email=test_input($_POST['email']);
   }

   if(empty($_POST['username']))
   {
    $usernameErr="Value cant be empty";
   }
   else
   {
    $username=test_input($_POST['email']);
   }
   if (empty($_POST['password']))
   {
    $passwordErr="Value cant be empty";
   }
   else{
    $password=test_input($_POST['password']);
   }
}


    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
           return $data;
}
    ?>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <fieldset>
  <legend>Basic Information:</legend>
    <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname">
  <span style="color: red"><?php echo $fnameErr; ?></span><br><br>
    <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname">
  <span style="color: red"><?php echo $lnameErr; ?></span><br><br>
<label for="gender">Gender:</label>

   <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label> 
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label> 
        <span style="color: red"><?php echo $genderErr; ?></span><br><br>

        <label for="dob">DoB</label>
        <input type="date" name="dob" id="dob">
        <span style="color: red"><?php echo $dobErr; ?></span><br><br>

<label for="relegion">Relegion:</label>
   <select id = "relegion" name="relegion">
    <option value="Islam"> Islam </option> 
        <option value="Hindu"> Hindu </option>
            <option value="Buddha"> Buddha </option>
                <option value="Other"> Other </option>   
            </select>

 </fieldset>
 
 <fieldset>
   <legend>Contact Information:</legend> 
   <label for="present_adress">Present adress: </label> 
    <input type="text" id="present_adress" name="present_adress"><br><br>
     <label for="parmanent_adress">Present adress: </label> 
      <input type="text" id="parmanent_adress" name="parmanent_adress"><br><br>
      <label for ="phone"> Phone</label>
      <input type="tel" id="phone" name="phone" ><br><br>
      <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span style="color: red"><?php echo $emailErr; ?></span><br><br>
        <label for ="url">Personal Website link :</label>
        <p><a href="https://www.facebook.com/">Visit my web page</a></p>


 </fieldset>
 <fieldset>
     <legend>Account information</legend>
     <label for="username">User name</label>
     <input type="text" id="username" name="username"><br><br>
     <label for="password">Password</label>
     <input type="password" id="password"  name="password"><br><br>
 </fieldset>

   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
echo "<br>";
echo $religion;
echo "<br>";
echo $present_adress;
echo "<br>";
echo $parmanent_adress;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $url;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
?>

</body>
</html>