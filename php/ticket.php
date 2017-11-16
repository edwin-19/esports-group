<?php

  class Ticket {
    private $db;

    function __construct($DB_con) {
      $this->db = $DB_con;
    }

    public function purchaseTicket($ticketName, $purchasedBy) {
      try {
        $query = "INSERT INTO TICKET (ticket_name,ticket_purchased) VALUES (:ticketName, :purchasedBy)";
        $stmt = $this->db->prepare($query);

        if ($stmt != false) {
          $stmt = $this->db->prepare($query);

          $stmt->bindparam(":ticketName", $ticketName);
          $stmt->bindparam(":purchasedBy", $purchasedBy);

          $stmt->execute();
          return true;
        }
      } catch (PDOException $ex) {
        echo $e->getMessage();
      }
    }
  }

 ?>
