<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';

switch ($module) {
    case 'home': default:
        include('home.php');
        break;
    case 'profil':
        include('profil.php');
        break;
    case 'latihan':
        include('latihan.php');
        break;
    case 'webdev':
        include('webdev.php');
        break;    
    case 'server':
        include('server.php');
        break;    
    case 'jarkom':
        include('jarkom.php');
        break;    
    case 'album':
        include('album.php');
        break;
    }