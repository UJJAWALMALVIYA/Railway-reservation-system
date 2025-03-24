<!-- <?php
   // $firstname=$_POST['firstname'];
   // $lastname=$_POST['lastname'];
   // $username=$_POST['username'];
   // $email=$_POST['email'];
   // $gender=$_POST['gender'];
   // $mobilenumber=$_POST['mobilenumber'];
   // $datebirth=$_POST['datebirth'];
   // $password=$_POST['password'] ;

   // //database connection
   // $conn = new mysqli('localhost','root','','register');
   // if ($conn->connect_error) {
   //  die('connection failed :'. $conn->connect_error);
   // }
   // else {
   //  $stmt = $conn->prepare("insert into test(firstname,lastname,username,email,gender,mobile,datebirth,password)values(?,?,?,?,?,?,?,?)");
   //  $stmt->bind_param("sssssiis", $firstname, $lastname,$username,$email,$gender,$mobile,$datebirth,$password);
   //  $stmt->execute();
   //  echo"registration sucessfull";
   //  $stmt->close();
   //  $conn->close();
   // }
?> -->

<?php
$connect=mysqli_connect("localhost","root","","register");
?>