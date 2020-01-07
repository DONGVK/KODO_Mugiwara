<!DOCTYPE html>
<!--
* @Author : DONG Jean
* Groupe : Kodo B - Mugiwara
-->
<html>
    <head>
        <meta charset="utf-8" />
        <link href="/css/style.css" rel="stylesheet" type="text/css" >
        <title>Inscription</title>
        <style>


.onglet_0 {
  border-style:double;
  padding: 3px 3px;
  font-weight: bold;
  color: #0000FF;
  cursor: pointer;
-webkit-transform: perspective(1px) translateZ(0);
transform: perspective(1px) translateZ(0);
box-shadow: 0 0 1px rgba(0, 0, 0, 0);
position: relative;
overflow: auto;
}

.onglet_0:hover{
  padding: 3px 3px;
  font-weight: bold;
  background: #D7DF01;
  color: white;
  transition: width 1s ease, background-color 1s ease;
}

.onglet_0:before {
content: "";
position: absolute;
z-index: 8;
left: 51%;
right: 51%;
bottom: 0;
background: #FFFF00;
height: 4px;
transition-property: left, right;
transition-duration: 1.3s;
transition-timing-function: ease-out;
}

.onglet_0:hover:before{
left: 0;
right: 0;
}

.contenu_onglet{
  padding-top: 10px;
  color: white;
  display : none;
}

.etape{
  border-style:dotted;
  padding: 3px 3px;
  font-weight: bold;
  color: white;
  background: #485DFB;
  cursor: pointer;
  -webkit-transition:  0.65s linear;
  transition: 0.65s linear;
}

.etape1{
  border-style:dotted;
  padding: 3px 3px;
  font-weight: bold;
  color: white;
  background: #48FB4D;
  cursor: pointer;
  -webkit-transition:  0.65s linear;
  transition: 0.65s linear;
}

input:invalid {
  border: 2px dashed red;
}

input:valid {
  border: 1px solid black;
}
        </style>
    </head>

    <body>
      <center><img src="{{ asset('img/kodo_logo.png') }}" width="100"/></center>
        <ul id="nav">
	         <li><a href="#"><FONT face="helvetica">Accueil</a></li>
	         <li><a href="#">Actualité</a></li>
	         <li><a href="#">À propos</a></li>
	         <li><a href="#" class="dernier">Contact</FONT></a></li>
        </ul>
      <main>
