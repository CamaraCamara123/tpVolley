<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connexion
 *
 * @author Lenovo
 */
class Connexion {
 private $connexion;
 public function __construct() {
 $host = 'localhost';
 $dbname = 'school1';
 $login = 'root';
 $password = 'root';
 try {
 $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
 $this->connexion->query("SET NAMES UTF8");
 } catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
 }
 }
 function getConnexion() {
 return $this->connexion;
 }
}

