<?php 

 require ("db.php");

 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $type = $_FILES["image"]["type"];

 

    if($name == ""){
        $arr = array("status" => "error","message" => "***Name Field Is Required***","field" => "name_error");
    }elseif ($email == "") {
        $arr = array("status" => "error","message" => "***Email Field Is Required***","field" => "email_error");
    }elseif ($phone == "") {
        $arr = array("status" => "error","message" => "***Phone Field Is Required***","field" => "phone_error");
    }elseif ($image == "") {
        $arr = array("status" => "error","message" => "***Image Field Is Required***","field" => "image_error");
   
        // elseif ($type  !== "image/jpg" || "image/jpeg" || "image/png") {
        // $arr = array("status" => "error","message" => "***Choose Valid Image Type***","field" => "image_error");
    }elseif ($password == "") {
        $arr = array("status" => "error","message" => "***Password Field Is Required***","field" => "password_error");
    }else{

              move_uploaded_file($tmp_name, "upload/".$image);

              $sql = "insert into users (name,email,phone,image,password) values(:na,:em,:ph,:im,:pa)";
             $query = $conn->prepare($sql);

             $query->bindParam(':na',$name,PDO::PARAM_STR);
             $query->bindParam(':em',$email,PDO::PARAM_STR);
             $query->bindParam(':ph',$phone,PDO::PARAM_STR);
             $query->bindParam(':im',$image,PDO::PARAM_STR);
             $query->bindParam(':pa',$password,PDO::PARAM_STR);

             $query->execute();
              $lastInsertId = $conn->lastInsertId();
              if($lastInsertId > 0){
                $arr = array("status" => "success","message" => "Data Insert Succesfully");
              }else{
                $arr = array("status" => "error","message" => "***Image Field Is Required***","field" => "last_error");;
              }

        

     }


   

echo json_encode($arr);
 
?>
