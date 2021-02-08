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
    if(!empty($_POST['Student No.'])&&!empty($_POST['First Name'])&&!empty($_POST['Last Name'])
    && !empty($_POST['Class'])){

         $student_no = $_POST['Student No.'];
         $first_name = $_POST['First Name'];
         $last_name = $_POST['Last Name'];
         $class = $_POST['Classs'];
         
         $query = "insert into form(Student No.,First Name,Last Name,Class) values('$student_no','$first_name',
         '$last_name','$class')";
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

$sql = 'SELECT Student_No. First_Name, Last_Name, Class FROM students_table';
$result = mysqli_query($conn,$sql);
$students_table = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($students_table);
?>
