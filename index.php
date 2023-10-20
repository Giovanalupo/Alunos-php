<!--Exemplos de Métodos 
Veremos também na prátia os métyodo de inicialização (construtor) e finalização (destrutor).
-Criar método construtor e destrutor -->

<?php 
//Inluindo a classe que criada na pasta "Classes"

include("Alunos-php/class.php");

//Instanciando um novo obj (p1)
$p1 = new Pessoa(); 


//Atribuindo valores aos atributos 
$p1 ->Nome   ="Giovana LUpo Morelli";
$p1 -> Altura     =1.62;
$p1->Nascimento    = "14-05-2007";
$p1->Hobbie     = "Pintura";


//Instanciando um novo obj (p2)
$p2 = new Pessoa(); 


//Atribuindo valores aos atributos 
$p2-> Nome     ="Felipe Wilbert";
$p2 -> Altura     =1.78;
$p2->Nascimento    = "06-012-2006";
$p2->Hobbie     = "Academia";


//Instanciando um novo obj (p3)
$p3 = new Pessoa(); 


//Atribuindo valores aos atributos 
$p3 -> Nome     ="Raí Franca";
$p3 -> Altura     =1.82;
$p3-> Nascimento    = "02-09-2007";
$p3->Hobbie     = "Ouvir música";


//Instanciando um novo obj (p4)
$p4= new Pessoa(); 


//Atribuindo valores aos atributos 
$p4 -> Nome     ="Bruno Alves";
$p4 -> Altura     =1.75;
$p4->Nascimento    = "28-05-2007";
$p4->Hobbie     = "tocar bateria";


//Instanciando um novo obj (p5)
$p5 = new Pessoa();


//Atribuindo valores aos atributos 
$p5 ->Nome ="Pedro Santos";
$p5 ->Altura = 1.80;
$p5 ->Nascimento="24-10-2006";
$p5 ->Hobbie = "Tocar Violão";


//Instanciando um novo obj (p6)
$p6 = new Pessoa();


//Atribuindo valores aos atributos 
$p6 ->Nome= "Guilherme Carvalho";
$p6 ->Altura= 1.75;
$p6 ->Nascimento= "09 - 06 - 2007";
$p6 ->Hobbie="Jogar Videogame";


//Instanciando um novo obj (p7)
$p7 = new Pessoa();


//Atribuindo valores aos atributos 

$p7 ->Nome= "Júlia Mogi";
$p7 ->Altura= 1.70;
$p7 ->Nascimento= "08-11-2006";
$p7 ->Hobbie= "Cozinha";


//Instanciando um novo obj (p8)
$p8 = new Pessoa();


//Atribuindo valores aos atributos 
$p8 ->Nome= "Laura Perez";
$p8 ->Altura=1.70;
$p8 ->Nascimento="03-08-2006";
$p8 ->Hobbie="Ler";


//Instanciando um novo obj (p9)
$p9 = new Pessoa();


//Atribuindo valores aos atributos 
$p9 ->Nome= "Natally Reis";
$p9 ->Altura= 1.60;
$p9 ->Nascimento= "07-01-2007";
$p9 ->Hobbie= "Ouvir música";


//Instanciando um novo obj (p10)
$p10 = new Pessoa();


//Atribuindo valores aos atributos 
$p10 ->Nome= "Samuel Américo";
$p10 ->Altura= 1.85;
$p10 ->Nascimento= "26-01-2007";
$p10 ->Hobbie= "Tocar Piano";



//Instanciando um novo obj (p11)
$p11 = new Pessoa();


//Atribuindo valores aos atributos 
$p11 ->Nome= "Beatriz Baccaro";
$p11 ->Altura= 1.60;
$p11 ->Nascimento= "02.08.2006";
$p11 ->Hobbie= "Esporte";


//Instanciando um novo obj (p12)
$p12 = new Pessoa();


//Atribuindo valores aos atributos 
$p12 ->Nome= "Pedro Grechi"; 
$p12 ->Altura= 1.68;
$p12 ->Nascimento="23-03-2007";
$p12 ->Hobbie=" Jogar/Desenhar";


//Instanciando um novo obj (p13)
$p13 = new Pessoa();


//Atribuindo valores aos atributos 
$p13 ->Nome= "Luis Gustavo Magela";
$p13 ->Altura= 1.77;
$p13 ->Nascimento= "06-03-2007";
$p13 ->Hobbie=" Dormir e jogar videogame";



//Instanciando um novo obj (p14)
$p14= new Pessoa();


//Atribuindo valores aos atributos

$p14 ->Nome= "José Luiz Oliveira Costa";
$p14 ->Altura= 1.7;
$p14 ->Nascimento= "15-09-2006";
$p14 ->Hobbie= "Assistir/Crítica de filme";


//Instanciando um novo obj (p15)
$p15= new Pessoa();


//Atribuindo valores aos atributos
$p15 ->Nome="Thell Zardi";
$p15 ->Altura=1.65;
$p15 ->Nascimento= "31-10-2006";
$p15 ->Hobbie= "jogar";



//Instanciando um novo obj (p16)
$p16= new Pessoa();


//Atribuindo valores aos atributos
$p16 ->Nome= "Ryan Silveira";
$p16 ->Altura= 1.72;
$p16 ->Nascimento= "02.09.2006";
$p16 ->Hobbie= "Jogar videogame";



//Instanciando um novo obj (p17)
$p17= new Pessoa();


//Atribuindo valores aos atributos
$p17 ->Nome="Letícia Gabrielle";
$p17 ->Altura= 1.65;
$p17 ->Nascimento= "30-09-2006";
$p17 ->Hobbie= "Ouvir música e assistir série";


//Instanciando um novo obj (p18)
$p18= new Pessoa();


//Atribuindo valores aos atributos
$p18 ->Nome= "Camilly Vitória de Oliveira"; 
$p18 ->Altura= 1.60;
$p18 ->Nascimento= "22/01/2007";
$p18 ->Hobbie= "ouvir música/ fazer aula de jazz";


//Instanciando um novo obj (p19)
$p19= new Pessoa();


//Atribuindo valores aos atributos
$p19 ->Nome= "Ana Clara Maciel";
$p19 ->Altura= 1.50;
$p19 ->Nascimento= "19-01-2007";
$p19 ->Hobbie= "Ler e ouvir música";



//Instanciando um novo obj (p20)
$p20= new Pessoa();


//Atribuindo valores aos atributos
$p20 ->Nome= "Ana Zinatto"; 
$p20 ->Altura= 1.60;
$p20 ->Nascimento="03-11-2006";
$p20 ->Hobbie= "treinar/ ouvir música";



//Instanciando um novo obj (p21)
$p21= new Pessoa();


//Atribuindo valores aos atributos
$p21 ->Nome= "Gustavo Otaviano";
$p21 ->Altura=1.85;
$p21 ->Nascimento= "04-03-2007";
$p21 ->Hobbie= "esportes";



//Instanciando um novo obj (p22)
$p22= new Pessoa();


//Atribuindo valores aos atributos
$p22->Nome="Henrique Tavares";
$p22->Altura= 1.63;
$p22->Nascimento="26-07-2006";
$p22->Hobbie= "jogar/ouvir música";


//Instanciando um novo obj (p2)
$p23= new Pessoa();

//Atribuindo valores aos atributos
$p23->Nome="Gabriel Credendio";
$p23->Altura=1.70;
$p23->Nascimento= "28-07-2006";
$p23->Hobbie="vídeo game";



//Instanciando um novo obj (p24)
$p24= new Pessoa();

//Atribuindo valores aos atributos
$p24->Nome= "Ana Clara Ferreira ";
$p24->Altura= 1.55;
$p24->Nascimento= "21-03-2007";
$p24->Hobbie= "pintar";


//Instanciando um novo obj (p25)
$p25= new Pessoa();

//Atribuindo valores aos atributo
$p25->Nome= "Gabriel Alves Santos";
$p25->Altura= 1.84;
$p25->Nascimento= "03-08-2006";
$p25->Hobbie= "Jogar videogame, praticar esportes";



//Instanciando um novo obj (p26)
$p26= new Pessoa();

//Atribuindo valores aos atributo
$p26->Nome= "Kauã Lira";
$p26->Altura=1.63;
$p26->Nascimento= "05-01-2007";
$p26->Hobbie= "Tocar guitarra";



//Instanciando um novo obj (p27)
$p27= new Pessoa();

//Atribuindo valores aos atributo
$p27->Nome= "Diaz";
$p27->Altura= 1.74;
$p27->Nascimento= "21-03-2007";
$p27->Hobbie= "joga";




//Instanciando um novo obj (p28)
$p28= new Pessoa();

//Atribuindo valores aos atributo
$p28->Nome= "Kauan Silva Vieira";
$p28->Altura= 1.68;
$p28->Nascimento= "02-09-2006";
$p28->Hobbie= "Jogar videogame";



//Instanciando um novo obj (p29)
$p29= new Pessoa();

//Atribuindo valores aos atributo
$p29->Nome="Beatriz Mayumi";
$p29->Altura= 1.65;
$p29->Nascimento= "03/03/2007";
$p29->Hobbie= "ler livros, jogar videogame e ouvir música";


//Instanciando um novo obj (p30)
$p30= new Pessoa();

//Atribuindo valores aos atributo
$p30->Nome="Miguel Romewro";
$p30->Altura= 1.70;
$p30->Nascimento= "14-04=2007";
$p30->Hobbie= "jogar futebol";


//Instanciando um novo obj (p31)
$p31= new Pessoa();

//Atribuindo valores aos atributo
$p31->Nome="Henrique Nagata";
$p31->Altura= 1.58;
$p31->Nascimento= "25-10-2006";
$p31->Hobbie= "andar de bicicleta";


//Instanciando um novo obj (p32)
$p32= new Pessoa();

//Atribuindo valores aos atributo
$p32->Nome="Pedro Araujo";
$p32->Altura= 1.68;
$p32->Nascimento= "24-09-2007";
$p32->Hobbie= "jogar vídeo game e andar de bike";



//Instanciando um novo obj (p33)
$p33= new Pessoa();

//Atribuindo valores aos atributo
$p33->Nome="Duda";
$p33->Altura= 1.65;
$p33->Nascimento= "02-04-2007";
$p33->Hobbie= "ver sdérie e jogar vôlei";




//Imprimindo valores inseridos no obj (p1) usando echo 
echo "Nome:" . $p1 -> Nome . "br/>
Altura:". $p1 -> Altura . "<br />
 Nascimento:".$p1->Nascimento."<br />
 Hobbie:".$p1->Hobbie."<br /> <br/><hr/><br/>";


//Imprimindo valores inseridos no obj (p2) usando echo 
echo "Nome:" . $p2 -> Nome . "br/>
Altura:". $p2 -> Altura . "<br />
 Nascimento:".$p2->Nascimento."<br />
 Hobbie:".$p2->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p3) usando echo 
echo "Nome:" . $p3 -> Nome . "br/>
Altura:". $p3 -> Altura . "<br />
 Nascimento:".$p3->Nascimento."<br />
 Hobbie:".$p3->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p4) usando echo 
echo "Nome:" . $p4 -> Nome . "br/>
Altura:". $p4 -> Altura . "<br />
 Nascimento:".$p4->Nascimento."<br />
 Hobbie:".$p4->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p5) usando echo 
echo "Nome:" . $p5 -> Nome . "br/>
Altura:". $p5 -> Altura . "<br />
 Nascimento:".$p5->Nascimento."<br />
 Hobbie:".$p5->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p6) usando echo 
echo "Nome:" . $p6 -> Nome . "br/>
Altura:". $p6 -> Altura . "<br />
 Nascimento:".$p6->Nascimento."<br />
 Hobbie:".$p6->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p7) usando echo 
echo "Nome:" . $p7 -> Nome . "br/>
Altura:". $p7 -> Altura . "<br />
 Nascimento:".$p7->Nascimento."<br />
 Hobbie:".$p7->Hobbie."<br /> <br/><hr/><br/>";

 //Imprimindo valores inseridos no obj (p8) usando echo 
echo "Nome:" . $p8 -> Nome . "br/>
Altura:". $p8 -> Altura . "<br />
 Nascimento:".$p8->Nascimento."<br />
 Hobbie:".$p8->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p9) usando echo 
echo "Nome:" . $p9 -> Nome . "br/>
Altura:". $p9 -> Altura . "<br />
 Nascimento:".$p9->Nascimento."<br />
 Hobbie:".$p9->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p10) usando echo 
echo "Nome:" . $p10 -> Nome . "br/>
Altura:". $p10 -> Altura . "<br />
 Nascimento:".$p10->Nascimento."<br />
 Hobbie:".$p10->Hobbie."<br /> <br/><hr/><br/>";

 //Imprimindo valores inseridos no obj (p11) usando echo 
echo "Nome:" . $p11 -> Nome . "br/>
Altura:". $p11 -> Altura . "<br />
 Nascimento:".$p11->Nascimento."<br />
 Hobbie:".$p11->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p12) usando echo 
echo "Nome:" . $p12 -> Nome . "br/>
Altura:". $p12 -> Altura . "<br />
 Nascimento:".$p12->Nascimento."<br />
 Hobbie:".$p12->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p12) usando echo 
echo "Nome:" . $p13 -> Nome . "br/>
Altura:". $p13 -> Altura . "<br />
 Nascimento:".$p13->Nascimento."<br />
 Hobbie:".$p13->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p14) usando echo 
echo "Nome:" . $p14 -> Nome . "br/>
Altura:". $p14 -> Altura . "<br />
 Nascimento:".$p14->Nascimento."<br />
 Hobbie:".$p14->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p15) usando echo 
echo "Nome:" . $p15 -> Nome . "br/>
Altura:". $p15 -> Altura . "<br />
 Nascimento:".$p15->Nascimento."<br />
 Hobbie:".$p15->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p16) usando echo 
echo "Nome:" . $p16 -> Nome . "br/>
Altura:". $p16 -> Altura . "<br />
 Nascimento:".$p16->Nascimento."<br />
 Hobbie:".$p16->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p17) usando echo 
echo "Nome:" . $p17 -> Nome . "br/>
Altura:". $p17 -> Altura . "<br />
 Nascimento:".$p17->Nascimento."<br />
 Hobbie:".$p17->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p18) usando echo 
echo "Nome:" . $p18 -> Nome . "br/>
Altura:". $p18 -> Altura . "<br />
 Nascimento:".$p18->Nascimento."<br />
 Hobbie:".$p18->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p19) usando echo 
echo "Nome:" . $p19 -> Nome . "br/>
Altura:". $p19 -> Altura . "<br />
 Nascimento:".$p19->Nascimento."<br />
 Hobbie:".$p19->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p20) usando echo 
echo "Nome:" . $p20 -> Nome . "br/>
Altura:". $p20 -> Altura . "<br />
 Nascimento:".$p20->Nascimento."<br />
 Hobbie:".$p20->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p21) usando echo 
echo "Nome:" . $p21 -> Nome . "br/>
Altura:". $p21 -> Altura . "<br />
 Nascimento:".$p21->Nascimento."<br />
 Hobbie:".$p21->Hobbie."<br /> <br/><hr/><br/>";

 //Imprimindo valores inseridos no obj (p22) usando echo 
echo "Nome:" . $p22 -> Nome . "br/>
Altura:". $p22 -> Altura . "<br />
 Nascimento:".$p22->Nascimento."<br />
 Hobbie:".$p22->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p23) usando echo 
echo "Nome:" . $p23 -> Nome . "br/>
Altura:". $p23 -> Altura . "<br />
 Nascimento:".$p23->Nascimento."<br />
 Hobbie:".$p23->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p24) usando echo 
echo "Nome:" . $p24 -> Nome . "br/>
Altura:". $p24 -> Altura . "<br />
 Nascimento:".$p24->Nascimento."<br />
 Hobbie:".$p24->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p25) usando echo 
echo "Nome:" . $p25 -> Nome . "br/>
Altura:". $p25 -> Altura . "<br />
 Nascimento:".$p25->Nascimento."<br />
 Hobbie:".$p25->Hobbie."<br /> <br/><hr/><br/>";


 //Imprimindo valores inseridos no obj (p26) usando echo 
echo "Nome:" . $p26 -> Nome . "br/>
Altura:". $p26 -> Altura . "<br />
 Nascimento:".$p26->Nascimento."<br />
 Hobbie:".$p26->Hobbie."<br /> <br/><hr/><br/>";


  //Imprimindo valores inseridos no obj (p27) usando echo 
echo "Nome:" . $p27 -> Nome . "br/>
Altura:". $p27 ->Altura . "<br />
 Nascimento:".$p27->Nascimento."<br />
 Hobbie:".$p27->Hobbie."<br /> <br/><hr/><br/>";



  //Imprimindo valores inseridos no obj (p28) usando echo 
echo "Nome:" . $p28 -> Nome . "br/>
Altura:". $p28 -> Altura . "<br />
 Nascimento:".$p28->Nascimento."<br />
 Hobbie:".$p28->Hobbie."<br /> <br/><hr/><br/>";



  //Imprimindo valores inseridos no obj (p29) usando echo 
echo "Nome:" . $p29 -> Nome . "br/>
Altura:". $p29 -> Altura . "<br />
 Nascimento:".$p29->Nascimento."<br />
 Hobbie:".$p29->Hobbie."<br /> <br/><hr/><br/>";
 
 
  //Imprimindo valores inseridos no obj (p30) usando echo 
echo "Nome:" . $p30-> Nome . "br/>
Altura:". $p30 -> Altura . "<br />
 Nascimento:".$p30->Nascimento."<br />
 Hobbie:".$p30->Hobbie."<br /> <br/><hr/><br/>";
 
 
   //Imprimindo valores inseridos no obj (p31) usando echo 
echo "Nome:" . $p31 -> Nome . "br/>
Altura:". $p31 -> Altura . "<br />
 Nascimento:".$p31->Nascimento."<br />
 Hobbie:".$p31->Hobbie."<br /> <br/><hr/><br/>";


   //Imprimindo valores inseridos no obj (p32) usando echo 
echo "Nome:" . $p32 -> Nome . "br/>
Altura:". $p32 -> Altura . "<br />
 Nascimento:".$p32->Nascimento."<br />
 Hobbie:".$p32->Hobbie."<br /> <br/><hr/><br/>";


   //Imprimindo valores inseridos no obj (p33) usando echo 
echo "Nome:" . $p33 -> Nome . "br/>
Altura:". $p33 -> Altura . "<br />
 Nascimento:".$p33->Nascimento."<br />
 Hobbie:".$p33->Hobbie."<br /> <br/><hr/><br/>";



 

?>


 



