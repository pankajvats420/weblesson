<?php 

 
 

    session_start();
    define('server', 'localhost');
	define('username', 'root');
	define('password', '');
	define('database', 'crud');


class database{
	

    public $db;	

    public function __construct(){
        $this->db = $conn= new PDO("mysql:host=".server.";dbname=".database,username,password);

        
    }

    public function insert($name,$email,$phone,$image,$password,$tmp_name){
    	 move_uploaded_file($tmp_name, "upload/".$image);
    	 
         $sql = "insert into users (name,email,phone,image,password) values(:na,:em,:ph,:im,:pa)";
         $query = $this->db->prepare($sql);

         $query->bindParam(':na',$name,PDO::PARAM_STR);
         $query->bindParam(':em',$email,PDO::PARAM_STR);
         $query->bindParam(':ph',$phone,PDO::PARAM_STR);
         $query->bindParam(':im',$image,PDO::PARAM_STR);
         $query->bindParam(':pa',$password,PDO::PARAM_STR);

         $query->execute();
         $lastInsertId = $this->db->lastInsertId();
         if($lastInsertId > 0){
              
                
             echo "Data Inserted Successfully";   

          }else{
               
                
          }
                    
    }

    public function fetchdata(){
         $sql = "select * from users";
         $query = $this->db->prepare($sql);

        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
         
         return $data;
         
    }

    public function fetchonerecord($userid){
         $sql = "select * from users where id= :us";
         $query = $this->db->prepare($sql);
         $query->bindParam(':us',$userid, PDO::PARAM_STR);
         $query->execute(); 
         $row =  $query->fetchAll(PDO::FETCH_ASSOC);
         return $row;

    }

    public function update($name,$email,$phone,$image,$password,$userid,$tmp_name){
    	if(!empty($image)){

                 move_uploaded_file($tmp_name, "upload/".$image);
                 $sql = " update users set name= :na ,email= :em,phone= :ph,image= :im, password= :pa where id= :us ";
                 $query = $this->db->prepare($sql);
                 
                     $query->bindParam(':na',$name,PDO::PARAM_STR);
                     $query->bindParam(':em',$email,PDO::PARAM_STR);
                     $query->bindParam(':ph',$phone,PDO::PARAM_STR);
                     $query->bindParam(':im',$image,PDO::PARAM_STR);
                     $query->bindParam(':pa',$password,PDO::PARAM_STR);
                     $query->bindParam(':us',$userid,PDO::PARAM_STR);

                    $result = $query->execute();
                     if($result = true){
                      
                         echo "Data Updated Successfully"; 
                      
                      }
        }else{
            $sql = " update users set name= :na ,email= :em,phone= :ph, password= :pa where id= :us ";
                 $query = $this->db->prepare($sql);
                 
                     $query->bindParam(':na',$name,PDO::PARAM_STR);
                     $query->bindParam(':em',$email,PDO::PARAM_STR);
                     $query->bindParam(':ph',$phone,PDO::PARAM_STR);
                     $query->bindParam(':pa',$password,PDO::PARAM_STR);
                     $query->bindParam(':us',$userid,PDO::PARAM_STR);

                    $result = $query->execute();
                     if($result = true){
                      
                        echo "Data Updated Successfully"; 
                      
                      }
        }

    }

    public function delete($userid){
         $sql = "delete from users where id= :us";
         $query = $this->db->prepare($sql);
         $query->bindParam(':us',$userid,PDO::PARAM_STR);
         $result = $query->execute();

         
         if($result = true){
              
                
                echo "Data Delete Successfully"; 
         	  
          }
        
    }

   


    public function redirect($path){
    	echo "<script>window.location.href='$path'</script>";
    }

    

}

 	 $name = $_POST["name"];
  	$email = $_POST["email"];
  	$phone = $_POST["phone"];
    $image = $_FILES["image"]["name"];
	$tmp_name = $_FILES["image"]["tmp_name"];
  	$password = $_POST["password"];


  
  	if($name !=""){
  		 $obj = new database();
  		 $obj->insert($name,$email,$phone,$image,$password,$tmp_name);
  	}

   if(isset($_SESSION['msg'])){
   	echo $_SESSION['msg'];
   }

unset($_SESSION['msg']);

?>
