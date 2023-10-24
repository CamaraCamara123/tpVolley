<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of createEtudiant
 *
 * @author Lenovo
 */
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once("../racine.php");
    include_once RACINE.'/service/EtudiantService.php';
    create();
   }
   function create(){
    extract($_POST);
    $es = new EtudiantService();
    //insertion d’un étudiant
    $es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe));
    //chargement de la liste des étudiants sous format json
    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
   }
   
