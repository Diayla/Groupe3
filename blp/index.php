<?php

//require_once('./connexion.php');

//$sql="SELECT ID, Nom, Prenom, Telephone FROM contacts ORDER BY ID";
//$result=$cnx->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
    padding: 0;
    margin: 0;
    background-image: url(image/photo%2011.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 2100;
}
html,body{
    height: 100%;
}

header{
    width: 100%;
    height: 800px;
    position: absolute;
    top: 0;
/*    border-bottom: 1px solid #b1a4a2;*/
/*    background-color: #726e6d;*/
/*
    border-bottom: 0.83px  #ddd;
    border-bottom-style: inset;
*/
/*    opacity: 0.63;*/
    
}

.head{
    width: 100%;
    height: 55px;
    position: absolute;
    top: 0;
    background-color: #000;
}

.debut{
    display: flex;
    justify-content: center;
    list-style: none;
}

.deb{
    margin: 0px 10px 0px 10px;
    
}

.ajt{
    font-family: agency fb;
    font-size: 16px;
    color: #fff;
    text-decoration: none;
    text-shadow: 1px 1px 20px #fff;
    padding: 8px 15px 19px 15px;
}

.ajt:hover{
    color: #000;
    background-color:#fff;
    border-bottom: 2px solid;
    border-bottom-color: #fff;
    transition: 1s;
}

h1{
    font-family: agency fb;
    font-size: 22px;
    color: #fff;
    text-transform: capitalize;
    text-shadow: 1px 1px 20px #fff;
    position: absolute;
    top:0;
    left: 30px;
    z-index: 10;
    margin: 15px 0px 3px 30px;
}

.center{
/*    margin: 60px 0px 0px 20px;*/
    position: sticky;
    top: 30%;
    left: 50px;
    width: 32%;
    height: 520px;
    background-color:transparent;
    z-index: -1;
    
    
}
.separator{
    width: 50px;
    height: 1.5px;
    background-color: #ff093e;
    border: 1px solid #ff093e;
    border-radius: 100px;
    margin: 12px 0px 0px 30px;
/*    margin-top: 50px;*/
     
}

.cnt{
    margin-top: 10px;
    margin-left: 30px;
    margin-bottom: 40px;
    color: #a19e9e;
    font-family: agency fb;
    font-weight: 900;
    text-shadow: 3px 3px 25px #000;
    font-size: 14px;
    width: 350px;
}

h3{
    text-align: left;
    margin: 60px 0px 0px 30px;
    color: #fff;
    font-family: calibri light;
    font-size: 38px;
}

.last{
    text-decoration: none;
    padding: 15px 15px 15px 15px;
    background-color: #ff093e;
    color: #fff;
    font-family: agency fb;
    font-size: 16px;
    margin-left: 30px;
    

}

/*Page d'affichage*/

#Affichage{
    width: 100%;
    height: 900px;
    background-color:#f3f3f3;
    position: absolute;
    z-index: -1;
    top: 810px;
}

.skills-h3{
    
    font-family: calibri light;
    font-size: 30px;
    text-transform: uppercase;
    color: #a19e9e;
    margin: 100px 0 0 80px;
    
}

.affiche-sep{
    width: 50px;
    height: 1.8px;
    background-color: #ff093e;
    position: absolute;
    left: 80px;
    border-color: #ff093e;
    border-radius: 25px;
}

.content-table{
    border-collapse: collapse;
    margin: 200px auto;
    font-size: 0.9em;
    width: 1180px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0.15);
}

.content-table thead tr{
    background-color: #1e1c1c;
    color: #ffffff;
    text-align: left;
    font-weight: 800;
    font-family: sans-serif;
}
.content-table th,
.content-table td{
    padding: 12px 15px;
}

.content-table tr td{
    font-family: sans-serif;
}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
    background: #fff;
}

.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type{
    border-bottom: 2px solid #1e1c1c;
}

.content-table tbody tr.active-row{
    font-weight: bold;
    color:#726e6d;
}

.bouton,.bouton1{
    text-decoration: none;
    padding: 15px 15px 15px 15px;
    text-align: center;
    color: #fff;
    font-family: sans-serif;
    font-size: 14px;
    background-color: #009789;
    border-radius: 10px;
}

.dlt{
    text-decoration: none;
    font-family: sans-serif;
    font-weight: bold;
    color: #a19e9e;
}

.sup{
    
    text-decoration: none;
    font-family: sans-serif;
    font-weight: bold;
    color: #ff093e;
}

.dlt:hover{
    color:#ff093e;
    
}

.sup:hover{
    color:#a19e9e;
}

.dtl{
    text-decoration: none;
    font-family: agency fb;
    font-size: 16px;
    letter-spacing: 1px;
   /* font-weight: bold*/;
    color:#fff;
    margin-left: 38%;
    padding: 11px 45px 11px 45px;
    background-color:#000;
    /*border: 1px solid #a19e9e;
    border-radius: 10px;*/
    
}

.supp{
    
    text-decoration: none;
    font-family: agency fb;
    font-size: 16px;
    letter-spacing: 1px;
    color:#fff;
    margin-left: 50px;
    padding: 11px 45px 11px 45px;
    background-color:#000;
   
}

.supp:hover{
     color: #a19e9e;
    background-color: white;
    border-left: 3px solid #a19e9e;
    border-bottom:3px solid #a19e9e;
    border-top: 0.5px solid #ffffff;
    border-right: 0.5px solid #ffffff;
    border-radius: 0px;
    overflow: hidden;
    box-shadow: 0 0 2px rgba(0,0,0.15);
    transition: 1.1s;
}
.dtl:hover{
    color: #a19e9e;
    background-color: white;
    border-left: 3px solid #a19e9e;
    border-bottom:3px solid #a19e9e;
    border-top: 0.5px solid #ffffff;
    border-right: 0.5px solid #ffffff;
    border-radius: 0px;
    overflow: hidden;
    box-shadow: 0 0 2px rgba(0,0,0.15);
    transition: 1.1s;
    
}

.dtl,.supp{
    margin-top: 80px;
}

.supp{
    text-decoration: none;
    text-align: center;
}

.about{
    width: 100%;
    height: 600px;
    background-color: #fff;
    position:absolute;
    top: 1800px;
}

.about-sep{
    width: 50px;
    height: 1.8px;
    background-color: #ff093e;
    position: absolute;
    left: 80px;
    border-color: #ff093e;
    border-radius: 25px;
}
h2{
    margin: 50px 0 0 80px;
    font-family: calibri;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    color: #a19e9e;
}

.moi{
    width: 800px;
    height: 250px;
    position: absolute;
    top: 30%;
    left: 80px;
    background-color:#f3f3f3;
    box-sizing: border-box;
    display: flex;

}

.me{
    
    width: 70px;
    height: 70px;
    border: 1px solid #e0e0e0;
    border-radius: 100%;
    background-image: url(image/profil.jpeg);
    background-size: cover;
    position: absolute;
    top: 30px;
    left: 30px;
}

.mee{
    font-size: 14px;
    font-family: calibri;
    font-weight: bold;
    color: #a19e9e;
    position: absolute;
    top: 60px;
    left: 16%;
    width: 500px;
    line-height: 18px;
}

h4{
    font-family: calibri light;
    font-size: 18px;
    color: #ff093e;
    position: absolute;
    top: 20px;
    left: 16%;
}

.sk{
    background-color:#f3f3f3;
    border-color: #f3f3f3;
    opacity: 0.63;
    width: 100%;
    height: 1.0px;
    position: absolute;
    top: 1283px;
    
}

/*Footer*/



.foo{
    width: 100%;
    height: 560px;
    background-color: #000;
    position: absolute;
    top: 2400px;
}

h5{
    font-family: calibri;
    font-size: 30px;
    color: #fff;
    margin: 100px 0px 0px 80px;
}

.contacte{
    width: 50px;
    height: 1.8px;
    background-color: #ff093e;
    border-radius: 25px;
    border-color: #ff093e;
    margin-left: 80px;
}

input{
    margin-left: 80px;
    background-color: #1e1c1c;
    border: 1px solid #1e1c1c;
    width: 300px;
}

.inp{
    width: 300px;
    height: 40px;
    background-color:#1e1c1c;
    border: 1px solid #1e1c1c;
    /*border-radius: 10px;*/
    font-family: calibri;
    font-size: 14px;
    color: #fff;
    margin-top: 20px;
     
}

.inpt{
    width: 300px;
    height: 140px;
    background-color:#1e1c1c;
    border: 1px solid #1e1c1c;
    font-family: calibri;
    font-size: 14px;
    color: #fff;
    margin-top: 10px;
}

button{
    margin-top: 10px;
    width: 120px;
    height: 50px;
    background-color: #ff093e;
    border-color: #ff093e;
    border: 1px solid;
    margin-left: 80px;
    /*border-radius: 10px;*/
}

.contact{
    font-family: calibri light;
    color: #fff;
    font-weight: lighter;
    font-size: 16px;
}

.fin{
    font-family: calibri;
    font-size: 14px;
    color: #fff;
    text-align: center;
    margin-top: 200px;
    word-spacing: 2px;
}

.in{
    width: 350px;
    height: 250px;
    background-color: #f3f3f3;
    margin: -400px auto;
    z-index: -1;
    background-color: transparent;
}

h6{
    font-family: calibri;
    font-size: 30px;
    color: #fff;
    text-align: right;
    margin-left: 450px;
}

.end{
    width: 50px;
    height: 1.8px;
    background-color: #ff093e;
    border-radius: 25px;
    border-color: #ff093e;
    position: absolute;
    top: 136px;
    right: 25.5%;
}

.fini{
    list-style: none;
    
}


.ini{
     text-decoration: none;
    font-family: calibri;
    font-size: 18px;
    color: #fff;
    margin-right:40px;
    line-height: 50px;
}

.fend{
    font-family: calibri;
    font-size: 14px;
    color: #fff;
    margin-top: 220px;
    margin-left: 550px;
    padding: 20px;
    background-color: 1
}

.add{
    font-family: calibri;
    font-size: 18px;
    line-height: 25px;
    color: #fff;
    margin-left:950px;
    margin-top: 230px;
}
	</style>
	
	<meta charset="utf-8">
</head>
<body>
	<header>
        
        <h1>GESTION DES EMPLOYES</h1>
        
		<div class="head">
			<ul class="debut">
				<li class="deb">
            		<a href="formulaire.php" class="ajt">Ajouter un contact</a>			
				</li>

				<li>
					<a href="#Affichage" class="ajt">Liste des contacts</a>
				</li>
			</ul>
		</div>
        <div class="center">
            <h3>Bienvenue<br>sur<br> le Gestionnaire de contact</h3><hr class="separator">
            <p class="cnt">Notre mission est de creer une page qui permet de gerer les employes de l'entreprise pour permettre d'avoir 

un suivi des employes.c.<br><br>Avec elle, vous pouvez AJOUTER de nouveaux contacts, MODIFIER votre liste de contacts existante et enfin SUPPRIMER ceux dont vous n'estimez plus avoir besoin.<br><br>Simplifiez-vous la vie avec l'application Gestionnaire d'employés</p>
            <a href="formulaire.php" class="last">Ajouter un contact</a>
        </div>

        
	</header>
	<section id="Affichage">
        <h3 class="skills-h3">Liste des contacts</h3>
        <hr class="affiche-sep">
      <table class="content-table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Téléphone</th>
                <th></th>
                <th></th>
                <th></th>
			</tr>
		</thead>
		<tbody>
			
		<?php //while ($ligne=$result->fetch_assoc()) {?>
			<tr>
				
				<td><?php echo($ligne['ID'])?></td>
				<td><?php echo($ligne['Nom'])?></td>
				<td><?php echo($ligne['Prenom'])?></td>
				<td><?php echo($ligne['Telephone'])?></td>
				<td class='change'><a class="sup" href="Detail.php?code=<?php echo($ligne['ID'])?>">Détails</a></td>
				<td class='change'><a class="dlt" href="modifier.php?code=<?php echo($ligne['ID'])?>">Modifier</a></td>
	            <td class='change'><a class="sup" href="Supprimer.php?code=<?php echo($ligne['ID'])?>">Supprimer</a></td>
			<?php ?>
	           
			</tr>
			
		</tbody>
	</table>
    <a href="Details.php" class="dtl">Détails</a>
    <a href="Suppression.php" class="supp">Supprimer</a>
    </section>

    <section class="about">
        
        <h2>Qui sommes-nous</h2>
        <hr class="about-sep">
        
        <div class="moi">
        
        
            <div class="me">

               </div>
            <h4>Hello !</h4>
              <p class="mee"><strong>BLACK-PANTHER</strong> est une entreprise spécialisée dans la programmation et le dévéloppement informatique.Nos activités sont essentiellement tournées vers le mobile et les technologies du web.Nous dévéloppons des applications mobiles aussi bien sur ANDROID que sur IOS avec différents langage informatique.Mais nous créeons, maintenons et administrons vos pages web,le tout à un prix résonnable</p>
        
        </div>
    </section>
	</body>
 	<footer class="foo">
    		<h5>Contactez nous</h5>
    		<hr class="contacte">
    		<input type="text" name="" placeholder="Entrez votre e-mail" class="inp"><br>
    		<input type="text" name="" placeholder="Votre message" class="inpt"><br>
    		<button><a class="contact">Envoyer</a></button>
    		<div class="in">
    			
    			<h6>Adresse</h6>
    			<hr class="end">
    		</div>
    		<p class="add">Dakar, Senegal<br>Medina rue 39<br>Téléphone: +221 77-415-47-59<br>E-mail: abdkabirzakouamadou@gmail.com</p>
    		<p class="fend">Copyright 2022-2025. Tous droits Réservés</p>%
    		
    </footer>
</html>
