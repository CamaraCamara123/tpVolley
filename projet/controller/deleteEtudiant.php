<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deleteEtudiant
 *
 * @author Lenovo
 */
include_once '../racine.php';
include_once RACINE.'/service/EtudiantService.php';
extract($_GET);
$es = new EtudiantService();
$es->delete($es->findById($id));
header("location:../index.php");

