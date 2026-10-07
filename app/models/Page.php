<?php
class Page
{
   private $db;
   public function __construct()
   {
      $this->db = new MySQL;
   }

   public function insertInquiry($data)
   {
      $this->db->query('INSERT INTO inquiry (invoice, name, email, phone, category, message) VALUES (:invoice, :name, :email, :phone, :category, :message)');
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':invoice', $data['invoice']);
      $this->db->bind(':category', $data['category']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
   }

   public function insertContact($data)
   {
      $this->db->query('INSERT INTO contact (invoice, name, email, subject, message) VALUES (:invoice, :name, :email, :subject, :message)');
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':invoice', $data['invoice']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
   }

   public function selectAll($table)
   {
      $this->db->query("SELECT * FROM `$table` ORDER BY `id` DESC");

      return $this->db->resultSet();
   }
}


// SMTP_ACCOUNTS='["smtp.mweb.co.za:587:betshepherd@mweb.co.za:peters"]'