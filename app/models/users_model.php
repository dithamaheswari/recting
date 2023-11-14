<?php

class users_model extends Database
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getUserLogin($email, $password)
  {
    $query = "SELECT * FROM users WHERE email=:email && password=:password";
    $this->db->query($query);
    $this->db->bind('email', $email);
    $this->db->bind('password', $password);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function getDataPengguna()
  {
    $query = "SELECT * FROM pengguna";
    $this->db->query($query);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getDataPenggunaByID($id)
  {
    $query = "SELECT * FROM pengguna WHERE pengguna_id=:pengguna_id";
    $this->db->query($query);
    $this->db->bind('pengguna_id', $id);
    $this->db->execute();
    return $this->db->resultSingle();
  }

  public function insertUserRegister($data)
  {
    $query = "INSERT INTO users(username,email,password,role) VALUES(:username,:email,:password,:role)";
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('role', $data['role']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getUserByEmail($data)
  {
    $query = "SELECT * FROM users WHERE email=:email";
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    return $this->db->resultSingle();
  }
}