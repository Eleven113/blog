<?php
session_start();

require('../controller/BackEnd/controller.php');

if (isset($_GET['action'])) {
     if ($_GET['action'] == 'listcomments') {
         $controllerBack = new ControllerBack();
         $controllerBack->listComments();
     }
 
     elseif ($_GET['action'] == 'createpost') {
        $controllerBack = new ControllerBack();
        $controllerBack->createPost();
     }
 
     elseif ($_GET['action'] == 'addpost') {
        $controllerBack = new ControllerBack();
        $controllerBack->addPost($_POST['post']);
     }
 
     elseif ($_GET['action'] == 'deletepost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack = new ControllerBack();
            $controllerBack->deletePost($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     }   
 
     elseif ($_GET['action'] == 'deletecomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack = new ControllerBack();
            $controllerBack->deleteComment($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'showpost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack = new ControllerBack();
            $controllerBack->showPost($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'updatepost') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack = new ControllerBack();
            $controllerBack->updatePost($_GET['id'],$_POST['post']);
         }
         else {
             echo 'Erreur : aucun identifiant de billet envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'showcomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack = new ControllerBack();
            $controllerBack->showComment($_GET['id']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 
     elseif ($_GET['action'] == 'updatecomment') {
         if (isset($_GET['id']) && $_GET['id'] > 0) {
            $controllerBack = new ControllerBack();
            $controllerBack->updateComment($_GET['id'],$_POST['comment']);
         }
         else {
             echo 'Erreur : aucun identifiant de commentaire envoyé';
         }  
     } 
 }
 
 else {
    $controllerBack = new ControllerBack();
    $controllerBack->listPost();
 }
?>