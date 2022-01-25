<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/lg.png" class="icon" >
    <title> Booking </title>
    
    <style>

*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
}
header{
   background-color: #2e2158;
    position: relative;
    height: 149px;
}
body{
    overflow: hidden;
    height: 100%;
}

a.ax {
    text-decoration: none;
    font-family: -webkit-pictograph;
    font-weight: 900;
    font-size: larger;
}

.slideshow-container {
    max-width: 887px;
    position: relative;
    margin: auto;
    text-align: center;
    margin-top: 30px;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -24px;
    margin-left: -305px;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;

  }
  
  /* Position the "next button" to the right */
  .next { 
   right: 0;
   margin-right: 110px;
   border-radius: 3px 0 0 3px;
  }
  
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(192, 191, 191, 0.8);
  }
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 5px;
    width: 5px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    margin-bottom: -10px;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    margin-bottom: -17px;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }



div#main {
    margin-left: 20%;
    display: flex;
    text-align: center;
    justify-content: space-around;
    background: rgba(240, 243, 241, 0.712);
    align-items: center;
    width: 70%;
    height: auto;
    padding: 32px;
    border-radius: 13px;
}
#todo1,input#todo2,input#todo3 {
    width: 70%;
    height: 49px;
    padding: 16px 20px;
    display: flex;
    border: 1px solid grey ;
    border-radius: 4px;
    background-color: #e7e7e7;
}

.divs input[type="text"] {
    width: 70%;
    padding: 16px 20px;
    border: none;
    margin-left: 30px;
    border-radius: 4px;
    background-color: #e7e7e7;
}
.edit-input,.remove{

    height: 27px;
    width: 33px;
    background: white;
    border: none;
    margin-right: 15px;
    cursor: pointer;
}
img.btnmdf {
    width: 26px;
}
.dltedt {
    margin-left: 80%;
}
input[type="button"] {
    width: 20%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #cccccc;
    cursor: pointer;
    transition: .3s;
    margin-left: 30px;
    
}

.appartementsf img{
    width: 500px;
    border: none;
    height: 50px;
    border-radius: 15px;
    
}
.appartementsf button{
    border: none;
    cursor: pointer;
    height: 50px;
}
.logo{
    width: 170px;
    position: absolute;
    margin-left: 45px;
    margin-top: 8px;
}
.menu{
    position: absolute;
    margin-top: 90px;
    margin-left: 337px;
    display: flex;
    justify-content: space-around;
    width: 800px;
    
}
.menu button{
    font-size: 15px;
}
.nav1{
    display: flex;
    justify-content: space-around;
    width: 695px;
}

.bmenu1,.bmenu{
    margin-top: -28px;
    display: inline-block;
    position: relative;
}
.bmenu1 button,.bmenu button{
  border-radius: 70px;
 background-color: #2e2158;
  border: none;
  color: white;
  text-align: center;
  padding: 20px;
  transition: .3s;
  cursor: pointer;
 
}
.bmenu1:hover button,.bmenu:hover button{
    background-image: linear-gradient( #413274 ,#392c66 ,#2e2158);
    
}

.ico,.acceuil img,.hotel,.appartements,.villa,.contact{
    width:23px;
}
.menu a{
    text-decoration: none;
    color: #1b455a;
}


article.volet2{  /* <article class="volet2"> */
    width: 100%;
    height: 555px;
    background-color: #ffffff;
    transition: all .5s;
    border-radius: 13px;
    margin-top: 12px;
} 
.scroller {    
    height: 100%;
    overflow-x: hidden;
  }

/* acceuil */
.cover1 img{
    width: 100%;
}
.ach1 {
    width: 100%;
    display: flex;
    justify-content: center;
}
.ach{
    text-align: center;
    width: 800px;
}
.b1{
    font-family: sans-serif;
    font-size: 55px;
    font-weight: 250;
    margin-left: 30px;
}
.p1{
    font-family: sans-serif;
    font-size: 20px;
    font-weight: 50;
    color: rgb(92, 91, 91);
    margin-left: 40px;
}
.acdiv h1{
    font-family: -webkit-pictograph;
    font-size: xxx-large;
    margin-left: 40px;
}
.acdiv h2{
    font-family: -webkit-pictograph;
    margin-left: 40px;
}
.acdiv p{
    font-family: -webkit-pictograph;
    margin-left: 40px;
    margin-bottom: 54px;}


.todos p{
        font-family: -webkit-pictograph;
    margin-left: 40px;
    margin-bottom: 20px;
   
}
    </style>


</head>

<body>
    <header>

        <div class="logo">
             <img src="images/logo.png" class="logo">
        </div>
        

        <div class="menu" id="menu">
            
                <div class="bmenu">
                   <a href=""> <button class="acceuil"><img src="images/accueil.png" class="acceuil"> Acceuil</button></a>
                   
                </div>

                <div class="bmenu1">
                <a href=""> <button class="appartement" ><img src="images/appartement.png" class="appartements">Appartements</button> 
                   
                </div>

                <div class="bmenu1">
                <a href=""> <button><img src="images/hotel.png" class="hotel" >Hôtels</button>
                    
                </div>

                <div class="bmenu">
                    <a href=""><button><img src="images/villa.png" class="villa">Villas</button></a>
                       
                </div>

                <div class="bmenu">
                   <a href=""> <button><img src="images/contact.png" class="contact" > Contact</button></a>
                        
                </div>    
                
        </div>

    </header>
    <section class="v2v3" id="vv">
        
        <article class="volet2" id="volet2">
            <div class="scroller">
                
                <div class="ach1">
                <div class="ach"> 
                   <b class="b1"> Trouvez votre prochain séjour</b> <br> <br>
                   <p class="p1">Recherchez des offres sur des hôtels, des appartements et des villas </p>
                   
                </div>
               
                
            </div> 
            <br> <br> <br>
            <div class="main" id="main">
                <select id="todo1">
                <option value="" disabled selected>Où allez-vous?</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>
                <input id="todo2" type="date" autofocus placeholder="Quand">
                <input id="todo3" type="number" autofocus placeholder="Combien êtes-vous?">

                <input onclick="myfun()" type="button" value="Rechercher">
               
            </div>
            
        
        </article> 
          
    </section>
    


</body>


</html>
