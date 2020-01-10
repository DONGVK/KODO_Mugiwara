<!DOCTYPE html>
<!--
* @Author : DONG Jean
* Groupe : Kodo B - Mugiwara
-->
<html>
    <head>
        <meta charset="utf-8" />
        <!--<link href="/css/style.css" rel="stylesheet" type="text/css" >-->
        <title>Inscription</title>
        <style>

        *{
          margin: 0;
          padding: 0;
          text-decoration: none;
          list-style: none;
          box-sizing: border-box;
          font-family: Arial, Helvetica, sans-serif;
        }

        body{
          background-color: #4b4b69;
        }
        /*-------------------------Navigation-----------------------------------------*/
        ul#nav {
                margin: auto;
                padding : 5px 5em 5px 10px;

                list-style-type : none;
                background-color: #2F408F;
                font-weight : bold;
                text-align: center;
         }

         ul#nav li {
                 display: inline;
          }

        ul#nav li a.debut {
                  padding : 5px 2em 5px 2em;
                  color: #778BF1;
                  text-decoration: none;
                  border-left: 1px solid #fff;
           }

           ul#nav li a.dernier {
                     padding : 5px 2em 5px 2em;
                     color: #778BF1;
                     border-right: 1px solid #fff;
                     text-decoration: none;
              }

           ul#nav li a:hover {
                   color: #A3B3FA;
            }

        /* ------------------------------- image ------------------------- */

        #effet {
          position: relative;
          width: 50%;
        }

        .eta {
          opacity: 1;
          display: block;
          width: 100%;
          height: auto;
          transition: .5s ease;
          backface-visibility: hidden;
        }

        .popopo {
          transition: .5s ease;
          opacity: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          text-align: center;
        }

        #effet:hover .eta {
          opacity: 0.3;
        }

        #effet:hover .popopo {
          opacity: 1;
        }

        .text {
          background-color: #0431B4;
          color: white;
          font-size: 16px;
          padding: 16px 32px;
        }

        #effet{
          width: 200px; /* largeur de l'image */
          height: auto; /* hauteur de l'image */
          -webkit-transition: .3s ease-in-out !important;
          transition: .3s ease-in-out !important;
        }
        #effet:hover {
          width: 150px; /* on affiche l'image au carré */
          height: 150px;
          border-radius: 50%;
        }

        a {
          outline: none;
          text-decoration: white;
        	color: white;
          padding: 2px 1px 0;
        }
/***************************************************************************/
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
  input[type=submit] {
    background-color:#A3B3FA;
    width:150px;
    border-style: groove;
  }

  input[type=submit]:hover, input[type=reset]:hover {
    background-color: #A3B3FA;
    border-style: groove;
  }

  input[type=submit]:active, input[type=reset]:active {
    background-color:#48FB4D;
  }
        </style>

    </head>

    <body>
        <ul id="nav">
	         <li><a href="/accueil" class="debut"><FONT face="helvetica">Accueil</a></li>
	         <li><a href="#" class="debut">Actualité</a></li>
	         <li><a href="#" class="debut">À propos</a></li>
           <li><img src="{{ asset('img/kodo_logo.png') }}" width="80"/><li>
	         <li><a href="#" class="dernier">Contact</FONT></a></li>
           <li><a href="/connexion" class="dernier">Connexion</FONT></a></li>
           <li><a href="/inscriptionn" class="dernier">Inscription</FONT></a></li>
        </ul>
      <main>
