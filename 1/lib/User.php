<?php
 
 include_once 'Session.php';
 include 'Database.php';
 class User {
 	private $db;
 	public function __construct(){
 		 $this->db = new Database();
 	}

           public function userRegistration($data){
           	$name = $data['name'];
           	$email = $data['email'];
           	$password = md5($data['password']);
           	$chk_email = $this->emailCheck($email); 

         if ($name == "" OR $email == "" OR $password == ""){
         	$msg = "<div class='alert alert-danger'><strong> Error ! </strong>  Field must not be empty </div>";
         	return $msg;
         }

          if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	       $msg = "<div class='alert alert-danger'><strong> Error ! </strong> Email Address is not vaild  </div>";
         	return $msg;
          }

               if($chk_email == true){
            $msg = "<div class='alert alert-danger'><strong> Error ! </strong> The email already Exist   </div>";
         	return $msg;
           }

            $sql = "INSERT INTO tbl_user (name, email, password) VALUES(:name, :email, :password)";
            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(':name' , $name);
            $query->bindValue(':email' , $email);
            $query->bindValue(':password' , $password);
            $result = $query->execute();
            if ($result) {
            	    $msg = "<div class='alert alert-success'><strong> Success ! </strong> Thanks you you have been Registered   </div>";
         	return $msg;
            }else{
            	    $msg = "<div class='alert alert-danger'><strong> Error ! </strong> Sorry There has been problem insserting your Details.   </div>";
         	return $msg;
            }
       }

           public function emailCheck($email){
            $sql = "SELECT email FROM tbl_user WHERE email = :email";
            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(':email' , $email);
            $query->execute();
            if ($query->rowCount() > 0) {
            	return true;
            	            }else {
                      	return false;
            	            }
          }


               
           
 public function getLoginUser($email, $password){
 $sql = "SELECT * FROM tbl_user WHERE email = :email AND password = :password LIMIT 1";
            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(':email' , $email);
            $query->bindValue(':password' , $password);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            return $result;

 }


 public function userLogin($data){
            	$email = $data['email'];
           	$password = md5($data['password']);
           	$chk_email = $this->emailCheck($email); 

         if ($email == "" OR $password == ""){
         	$msg = "<div class='alert alert-danger'><strong> Error ! </strong>  Field must not be empty </div>";
         	return $msg;
         }
          if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	       $msg = "<div class='alert alert-danger'><strong> Error ! </strong> Email Address is not vaild  </div>";
         	return $msg;
          }

               if($chk_email == false){
            $msg = "<div class='alert alert-danger'><strong> Error ! </strong> The email Address not Exist   </div>";
         	return $msg;
           }

              $result = $this->getLoginUser($email, $password);
              if ($result) {
              	  Session::init();
              	  Session::set("login" , true);
              	   Session::set("id" , $result->id);
              	  Session::set("name" , $result->name);
              	   Session::set("loginmsg" , "<div class='alert alert-success'><strong> Success ! </strong> your are loggedIn  </div>");
              	   header("Location: index.php");

              }else {
              	 $msg = "<div class='alert alert-danger'><strong> Error ! </strong> Data not founnd </div>";
         	return $msg;
              }
}
 
 
       public function getUserData(){
    $sql = "SELECT * FROM tbl_user ORDER BY id DESC";
            $query = $this->db->pdo->prepare($sql);
             $query->execute();
             $result = $query->fetchAll();
             return $result;

       }



       public function getUserById($id){
       	    $sql = "SELECT * FROM tbl_user WHERE id= :id LIMIT 1";
             $query = $this->db->pdo->prepare($sql);
            $query->bindValue(':id' , $id);
          
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            return $result;
       }













         public function updateUserData($id, $data){
           	$name = $data['name'];
           	$email = $data['email'];
 
        

         if ($name == "" OR $email == "" ){
         	$msg = "<div class='alert alert-danger'><strong> Error ! </strong>  Field must not be empty </div>";
         	return $msg;
         }

           

            $sql = "UPDATE tbl_user set
                     name       = :name, 
                       email     = :email 
                        WHERE id = :id";


            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(':name' , $name);
            $query->bindValue(':email' , $email);
            $query->bindValue(':id' , $id);
            $result = $query->execute();
            if ($result) {
            	    $msg = "<div class='alert alert-success'><strong> Success ! </strong> User data Updated Successfully   </div>";
         	return $msg;
            }else{
            	    $msg = "<div class='alert alert-danger'><strong> Error ! </strong> User data not Updated.   </div>";
         	return $msg;
            }

         }



   




 }

?> 