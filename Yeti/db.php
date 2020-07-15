<?php 
$servername = "localhost";
$username = "root";
$password = "55555";
$dbname = "yeti";
$charset = "utf8";
$num = 1;

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  header_menu";
$result = $conn->query($sql);
$result2 = $conn->query($sql);
$result3 = $conn->query($sql);
$result4 = $conn->query($sql);
$result5 = $conn->query($sql);
$result6 = $conn->query($sql);
$result7 = $conn->query($sql);
$result8 = $conn->query($sql);
$result9 = $conn->query($sql);
$result10 = $conn->query($sql);
$result11 = $conn->query($sql);
$result12 = $conn->query($sql);
$result13 = $conn->query($sql);
$result14 = $conn->query($sql);
$result15 = $conn->query($sql);
$result16 = $conn->query($sql);
$result17 = $conn->query($sql);
$result18 = $conn->query($sql);
$result19 = $conn->query($sql);
$result20 = $conn->query($sql);
$result21 = $conn->query($sql);
$result22 = $conn->query($sql);
$result23 = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
}
if($result2->num_rows > 0){
    $row2 = $result2->fetch_assoc();
}
if($result3->num_rows > 0){
    $row3 = $result3->fetch_assoc();
}
if($result4->num_rows > 0){
    $row4 = $result4->fetch_assoc();
}
if($result5->num_rows > 0){
    $row5 = $result5->fetch_assoc();
}
if($result6->num_rows > 0){
    $row6 = $result6->fetch_assoc();
}
if($result7->num_rows > 0){
    $row7 = $result7->fetch_assoc();
}
if($result8->num_rows > 0){
    $row8 = $result8->fetch_assoc();
}
if($result9->num_rows > 0){
    $row9 = $result9->fetch_assoc();
}
if($result10->num_rows > 0){
    $row10 = $result10->fetch_assoc();
}
if($result11->num_rows > 0){
    $row11 = $result11->fetch_assoc();
}
if($result12->num_rows > 0){
    $row12 = $result12->fetch_assoc();
}
if($result13->num_rows > 0){
    $row13 = $result13->fetch_assoc();
}
if($result14->num_rows > 0){
    $row14 = $result14->fetch_assoc();
}
if($result15->num_rows > 0){
    $row15 = $result15->fetch_assoc();
}
if($result16->num_rows > 0){
    $row16 = $result16->fetch_assoc();
}
if($result17->num_rows > 0){
    $row17 = $result17->fetch_assoc();
}
if($result18->num_rows > 0){
    $row18 = $result18->fetch_assoc();
}
if($result19->num_rows > 0){
    $row19 = $result19->fetch_assoc();
}
if($result20->num_rows > 0){
    $row20 = $result20->fetch_assoc();
}
if($result21->num_rows > 0){
    $row21 = $result21->fetch_assoc();
}
if($result22->num_rows > 0){
    $row22 = $result22->fetch_assoc();
} 
if($result23->num_rows > 0){
    $row23 = $result23->fetch_assoc();
} 

$req = "SELECT * FROM footer_menu";

$custSupp = $conn->query($req);
$com = $conn->query($req);
$str = $conn->query($req);
$pc = $conn->query($req);
if($custSupp->num_rows > 0){
    $cust = $custSupp->fetch_assoc();
}
if($com->num_rows > 0){
    $company = $com->fetch_assoc();
}
if($str->num_rows > 0){
    $stores = $str->fetch_assoc();
}
if($pc->num_rows > 0){
    $privacy = $pc->fetch_assoc();
}

?> 
