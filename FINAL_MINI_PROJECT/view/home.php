<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#box1{
    width: 25%;
  float: left;
  height: 300px;
  background: #fff   ;
  color: #F8F9F9 ;
  text-align: center;
  transition: 2s;
  margin-left: 150px;
  margin-top: 100px;
  border: 1px solid #000;
}
#box2{
    width: 25%;
  float: left;
  height: 300px;
  background: #fff   ;
  color: #F8F9F9 ;
  text-align: center;
  transition: 2s;
  margin-left: 308px;
   margin-top: 100px;
    border: 1px solid #000;
}
</style>
</head>
<body>
<table>
  <tr>
   <th>Admin's Home Page</th>
   <th>User's Home Page</th>
  </tr>
</table>
<section>
  <div id="box1">
    <h2 style="color: #000;">Welcome Bob!</h2><br>

    <a href="registration.php">Profile</a></br>
    <a href="registration.php">Change Password</a></br>
    <a href="registration.php">View Users</a></br>
    <a href="registration.php">Logout</a></br>

    
  </div>
  <div id="box2">
      <h2 style="color: #000;">Welcome Anne!</h2><br>

    <a href="registration.php">Profile</a></br>
    <a href="registration.php">Change Password</a></br>
    <a href="registration.php">Logout</a></br>
  </div>
</section>


  
   

</body>
</html>