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
            $_SESSION['username'] = $userRow['user_name'];
            $_SESSION['useremail'] = $userRow['user_email'];
            $_SESSION['userpassword'] = $userRow['user_password'];
            $_SESSION['firstname'] = $userRow['user_first_name'];
            $_SESSION['lastname'] = $userRow['user_last_name'];
            $_SESSION['company'] = $userRow['user_company'];

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

  public function updateUser($ufname, $ulastname, $uname, $upass, $ucompany, $uemail, $uid) {
    try {
      $hashPassword = password_hash($upass, PASSWORD_DEFAULT);
      $query = "UPDATE USER
        SET user_name=:uname,user_first_name=:ufname, user_last_name=:ulastname,
        user_password=:hashPassword, user_company=:ucompany, user_email=:uemail
        WHERE user_id=:uid
      ";
      //user_first_name=:ufname, user_last_name=:ulastname,
      //user_password=:hashPassword, user_company=:ucompany, user_email=:uemail
      $stmt = $this->db->prepare($query);
      if ($stmt != false) {

        $stmt->bindparam(":uname", $uname);
        $stmt->bindparam(":uemail", $uemail);
        $stmt->bindparam(":hashPassword", $hashPassword);
        $stmt->bindparam(":ufname", $ufname);
        $stmt->bindparam(":ulastname", $ulastname);
        $stmt->bindparam(":ucompany", $ucompany);
        $stmt->bindparam(":uid", $uid);

        $stmt->execute();
        echo "Succefully Update";
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
    unset($_SESSION['username']);
    unset($_SESSION['useremail']);
    unset($_SESSION['userpassword']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['company']);
    return true;
  }

  public function getNumOfTicket($uname, $umail) {
    try {
      $query = "SELECT * FROM USER WHERE user_name=:uname OR user_email=:umail LIMIT 1";
      $stmt = $this->db->prepare($query);

      if ($stmt != false) {
        $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
        $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
          return $userRow['user_ticket'];
        }
      }

    } catch(PDOException $ex) {
      echo $ex->getMessage();
    }
  }
}


 ?>
