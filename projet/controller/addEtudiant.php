<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addEtudiant
 *
 * @author Lenovo
 */
include_once '../racine.php';
include_once RACINE.'/service/EtudiantService.php';
extract($_GET);
$es = new EtudiantService();
$es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe));
header("location:../index.php");

