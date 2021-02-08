<?php
//require 'connect.php';
$server = "localhost";
$username = "zenon";
$password = "onyekachi" ;
$dbname = "teachers_table" ;

$conn = mysqli_connect($server,$username,$password,$dbname) ;
if(!$conn){
    echo 'connection error' . mysqli_connect_error();
}
if (isset($_POST['submit'])){
    if(!empty($_POST['Staff No.'])&&!empty($_POST['First Name'])&&!empty($_POST['Last Name'])
    && !empty($_POST['Levels'])&&!empty($_POST['Class Held'])){

         $staff_no = $_POST['Staff No.'];
         $first_name = $_POST['First Name'];
         $last_name = $_POST['Last Name'];
         $levels = $_POST['Levels'];
         $class_held = $_POST['Class Held'];
         $query = "insert into form{Staff No.,First Name,Last Name,Levels,Class Held} values('$staff_no','$first_name',
         '$last_name','$levels','$class_held')";
         $run = mysqli_query($conn,$query) or die(mysqli_error($link));

         if($run){
             echo "Form submitted succesfully";
            
         }
         else{
         echo "Form not submitted";
         }
    }
    else{
        echo "all fields required";
    }

}

$sql = 'SELECT Staff_No. first_Name, Last_Name, Levels, Class_Held FROM teachers_table';
$result = mysqli_query($conn,$sql);
$teachers_table = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($teachers_table);
?>
