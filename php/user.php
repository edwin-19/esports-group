<?php
/**
 * User manipulation class
 */
class User {
  private $db;

  function __construct($DB_con) {
    $this->db = $DB_con;
  }

  public function register($uemail,$uname,$upass) {
    try {
      $query = "INSERT INTO USER (user_name,user_email,user_password) VALUES (:uname, :uemail, :upass)";
      $stmt = $this->db->prepare($query);

      if ($stmt != false) {
        $hashPassword = password_hash($upass, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare($query);

        $stmt->bindparam(":uname", $uname);
        $stmt->bindparam(":uemail", $uemail);
        $stmt->bindparam(":upass", $hashPassword);

        $stmt->execute();
        return $stmt;
      }
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function login($uname,$umail,$upass) {
    try {
      $query = "SELECT * FROM USER WHERE user_name=:uname OR user_email=:umail LIMIT 1";
      $stmt = $this->db->prepare($query);

      if ($stmt != false) {
        $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
          if(password_verify($upass, $userRow['user_password'])) {
            $_SESSION['user_session'] = $userRow['user_id'];
            return true;
          } else {
            return false;
          }
        }
      }
    } catch(PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  public function isLoggedIn() {
    if(isset($_SESSION['user_session'])) {
         return true;
    }
  }

  public function redirect($url) {
    header("Location: $url");
  }

  public function logout() {
    session_destroy();
    unset($_SESSION['user_session']);
    return true;
  }
}


 ?>
