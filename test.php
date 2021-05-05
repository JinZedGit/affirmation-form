<?php 
$post1 = $_POST['fname'];
$post2 = $_POST['sname'];
$post3 = $_POST['lname'];
$post4 = $_POST['egn'];
$post5 = $_POST['address'];
$post6 = $_POST['email'];
$post7 = $_POST['specialty'];
$post8 = $_POST['semester'];
$post9 = $_POST['status'];
$post10 = $_POST['oks'];
$post11 = $_POST['course'];

echo $post1;
echo $post2;
echo $post3;
echo $post4;
echo $post5;
echo $post6;
echo $post7;
echo $post8;
echo $post9;
echo $post10;
echo $post11;

$_POST['fname'];
$_POST['sname'];
$_POST['lname'];
$_POST['egn'];
$_POST['address'];
$_POST['email'];
$_POST['specialty'];
$_POST['semester'];
$_POST['status'];
$_POST['oks'];
$_POST['course'];

/*$sql = "INSERT INTO Student ('f_name', 's_name', 'l_name', 'egn', 'address', 'e-mail', 'spec_id', 'semester_id', 'rec_id', 'oks_id', 'course_id')
VALUES ($post1, $post2, $post3, $post4, $post5, $post6, $post7, $post8, $post9, $post10, $post11)";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$conn->close();
*/
?>
