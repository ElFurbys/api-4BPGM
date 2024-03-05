<?php
echo "<h1>¡Bienvenido a Kenny´s Greedy Restaurant! <br> </h1>";

echo "<h2> Abrimos de 7:00 AM hasta 8:00 PM <br> </br> </h2>";

echo $mensaje = "<h3> ¡Menu de Kenny´s Greedy Restaurant! <br> </br> </h3>";
$menu = [
    "Tortas <br>" => "De Jamon con Huevo, De Milanesa <br>",
    "Comida Rapida <br>" => "Pizza de Queso con Pepperoni, Hamburguesa con Papas <br>",
    "Ensalada <br>" => "De Verduras, De Coditos <br>",
    "Sopa <br>" => "De verduras, Caldo de Pollo <br>",
    "Pasta <br>" => "Espagueti con Albondigas, Chilaquiles <br>",
    "Carnes <br>" => "De Res, Chuleta de Cerdo <br>",
    "Tostadas <br>" => "De Frijoles negros, De Frijoles con Cebolla <br>",
    "Tacos <br>" => "Al Pastor, De Barbacoa y Dorados <br>",
    "Empanadas <br>" => "De Queso, Carne Molida y De Atun <br>",
    "Frijoles <br>" => "Frijoles Refritos, Frijol  es Negros y Frijoles Bayos <br>",
    "Tortillas <br>" => "De Harina y Maiz <br>",
    "Burritos <br>" => "Frijol con Carne de Res, De Frijol con Queso, Aguacate, Tomate y jalapeño <br>",
    "Quesadillas <br>" => "Sincronizadas, Queso con Carne y De Queso <br>",
    "Chiles <br>" => "Jalapeno, Habanero <br>",
    "Verduras <br>" => "Lechuga, Cebolla Blanca <br>",
    "Frutas <br>" => "Aguacate, Limon y Tomate <br>",
    "Quesos <br>" => "Mozzarella, Fresco y Cheddar <br>",
    "Salsas <br>" => "Salsa Verde y Salsa Roja <br>",
    "Postre <br>" => "Pie de Queso con Mermelada, Helado de Manzana, Vainilla, Chocolate, Fresa y Napolitano <br>",
    "Cafes <br>" => "Lechero, Cafe con Leche, Capuchino <br>",
    "Refrescos <br>" => "Coca Cola, Fanta de Naranja y Fresa <br>",
    "Bebidas <br>" => "Agua con Hielo, De Limon, Jamaica, Horchata y Zarzaparilla"

];
echo "<pre>";

echo json_encode($menu, JSON_PRETTY_PRINT);

echo "</pre>";

echo "<h1> LA MEJOR COMIDA DE TIJUANA </h1>";
echo "<h2> precio de la comida </h2>";
echo "<br><h5> en la compra de tu comida se le puede agregar un monto mayor si es que compran ingredientes extra o agrandan el plato</h5>" ;
//hacermos un objeto
$ComidaPrecios = [
    //agrego mis atributos necesarios que son 20 
    //precio del platillo en genral float
    "<br>  torta De jamon<br>" =>   30.99,
    //igreso el tamno y el monto extra en los precios 
    //precio de tamano tipo interger
    "<br> plato mediano 1 " => 40,
    "<br> plato grande 1 " => 40,
    //dando valor null o verdadero
    $canplatillo1 = 1,
    //evalua si es nul o no y muesta en pantalla el mensaje hay y si no hay pos que no hay 
    $mens1 = $canplatillo1 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

//como mi companero bryan hizo yo tambien tego hueva de escribir asi que solo copio y pego esta parte
    "<br>  torta de milanesa<br>" =>   36.99,
    "<br> plato mediano 2 " => 50,
    "<br> plato grande 2 " => 10,
    $canplatillo2 = 0,
    $mens1 = $canplatillo2 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  pizza de queso e peperoni<br>" =>   37.99,
    "<br> plato mediano 3 " => 50,
    "<br> plato grande 3 " => 50,
    $canplatillo3 = 1,
    $mens1 = $canplatillo3 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  Hamburguesa con papas<br>" =>   40.99,
    "<br> plato mediano 4 " => 60,
    "<br> plato grande 4 " => 10,
    $canplatillo4 = 0,
    $mens1 = $canplatillo4 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  ensalada de verduras<br>" =>   80.99,
    "<br> plato mediano 5 " => 20,
    "<br> plato grande 5 " => 30,
    $canplatillo5 = 1,
    $mens1 = $canplatillo5 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  ensalada de coditos<br>" =>   20.99,
    "<br> plato mediano 6 " => 10,
    "<br> plato grande 6 " => 50,
    $canplatillo6 = 1,
    $mens1 = $canplatillo6 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  sopa de verduras<br>" =>   40.99,
    "<br> plato mediano 7 " => 20,
    "<br> plato grande 7 " => 40,
    $canplatillo7 = 1,
    $mens1 = $canplatillo7 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  caldo de pollo<br>" =>   80.51,
    "<br> plato mediano 8 " => 30,
    "<br> plato grande 8 " => 30,
    $canplatillo8 = 0,
    $mens1 = $canplatillo8 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  Espagueti con Albondigas<br>" =>   20.90 ,
    "<br> plato mediano 9 " => 40,
    "<br> plato grande 9 " => 20,
    $canplatillo9 = 1,
    $mens1 = $canplatillo9 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  Chilaquiles<br>"=>   5.99 ,
    "<br> plato mediano 10 " => 40,
    "<br> plato grande 10 " => 30,
    $canplatillo10 = 1,
    $mens1 = $canplatillo10 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  carne de res<br>"=>   999.99 ,
    "<br> plato mediano 11 " => 80,
    "<br> plato grande 11 " => 20,
    $canplatillo11 = 1,
    $mens1 = $canplatillo11 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  chuleta de cerdo<br>"=>   40.99 ,
    "<br> plato mediano 12 " => 10,
    "<br> plato grande 12 " => 70,
    $canplatillo12 = 1,
    $mens1 = $canplatillo12 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tostadas de frigoles negros<br>" =>   20.30 ,
    "<br> plato mediano 14 " => 10,
    "<br> plato grande 14 " => 80,
    $canplatillo14 = 0,
    $mens1 = $canplatillo14 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tostadas de frigoles con cebolla<br>" =>   40.51 ,
    "<br> plato mediano 15 " => 60,
    "<br> plato grande 15 " => 90,
    $canplatillo15 = 0,
    $mens1 = $canplatillo15 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tortillas de maiz<br>"=>   15.02 ,
    "<br> plato mediano 16 " => 0,
    "<br> plato grande 16 " => 0,
    $canplatillo16 = 1,
    $mens1 = $canplatillo16 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tortillas de harina<br>"=>   20.52 ,
    "<br> plato mediano 17 " => 50,
    "<br> plato grande 17 " => 60,
    $canplatillo17 = 1,
    $mens1 = $canplatillo17 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tacos al pastor<br>"=>   25.10 ,
    "<br> plato mediano 18 " => 40,
    "<br> plato grande 18 " => 70,
    $canplatillo18 = 1,
    $mens1 = $canplatillo18 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tacos de barbacoa<br>"=>   25.20 ,
    "<br> plato mediano 19 " => 20,
    "<br> plato grande 19 " => 60,
    $canplatillo19 = 1,
    $mens1 = $canplatillo16 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  tacos dorados de papa<br>"=>   25.20 ,
    "<br> plato mediano 20 " => 40,
    "<br> plato grande 20 " => 90,
    $canplatillo20 = 1,
    $mens1 = $canplatillo20 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  empanadas de queso<br>"=>   50.02,
    "<br> plato mediano 21 " => 50,
    "<br> plato grande 21 " => 0,
    $canplatillo21 = 1,
    $mens1 = $canplatillo21 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  empanadas de carne molida<br>"=>   55.10,
    "<br> plato mediano 22 " => 60,
    "<br> plato grande 22 " => 420,
    $canplatillo22 = 1,
    $mens1 = $canplatillo22 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  empanadas de carne atun<br>"=>   40.80,
    "<br> plato mediano 23 " => 50,
    "<br> plato grande 23 " => 5000,
    $canplatillo23 = 1,
    $mens1 = $canplatillo23 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  burritos<br>"=>   30.99,
    "<br> plato mediano 24 " => 80,
    "<br> plato grande 24 " => 30,
    $canplatillo24 = 0,
    $mens1 = $canplatillo24 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    "<br>  quesadillas<br>"=>   40.24,
    "<br> plato mediano 25 " => 0,
    "<br> plato grande 25  " => 10,
    $canplatillo25 = 1,
    $mens1 = $canplatillo25 ? "aun nos queda comida" : "ya no hay comida una disculpa ",

    /*como no se como poner numeros junto con texto pos pongo solo numeros y para el cliente seria
    algo asi como chico el estandar no se le agrega mas dinero un plato mediano es 5 pesos mas y grande 10 pesos mas
    */
];
echo "<pre>";
//el texto dentro de la etiqueta <pre> se mostrará como casi como el código fuente 
//echo pos la declaracion para imprimir texto dxdxdxd
echo json_encode($ComidaPrecios, JSON_PRETTY_PRINT);
/*JSON_PRETTY_PRINT es una constante en PHP que se utiliza como un parámetro de 
json_encode. Cuando se utiliza JSON_PRETTY_PRINT, la salida JSON se formatea 
de manera que sea más fácil de leer e incluye los saltos de "linea" que como 
dijo el prof no existenen el codigo mostrandolo*/
echo "</pre>";
//cerramos la etiqueta pre

echo "<h2> Tenemos las mejores bebidas </h2>";
echo "<h3> en la compra de 4 bebidas llevate un 10% de descuento en la quinta </h3>";
//creamos el tercer objeto
$bebidasPrecio = [
    //Colocamos los 20 objetos con sus 3 tipos de datos
    "bebida1"=> "Horchata",
    "precio1"=> 25,
    $cantidadHorchata = 12,
    $mensaje01 = $cantidadHorchata ? "aun nos queda" : "ya no queda agua de horchata ",
    
    "bebida2" => "limonada",
    "precio2" => 20,
    $cantidadLimomada = null,
    $mensaje02 = $cantidadLimomada ? "aun nos queda" : "ya no queda limonada",

    "bebida3" => "cafe",
    "precio3" => 40,
    $cantidadCafe = 20,
    $mensaje03 = $cantidadCafe? "aun nos queda" : "ya no queda  cafe ",

    "bebida4" => "Te",
    "precio4" => 30,
    $cantidadTe = 50,
    $mensaje04 = $cantidadTe ? "aun nos queda" : "ya no queda Te ",
    //de ahora en adelante copiare y pegare la misma parte del codigo para hacer esto mas rapido, solo edito
    // las varibles y valores 

    "bebida5" => "agua natural",
    "precio5" => 35,
    $cantidadNatural = 50,
    $mensaje05 = $cantidadNatural ? "aun nos queda" : "ya no queda agua natural ",

    "bebida6" => "agua de jamaica",
    "precio6" => 20,
    $cantidadJamaica = 50,
    $mensaje06 = $cantidadJamaica ? "aun nos queda" : "ya no queda agua natural ",

    "bebida7" => "agua de tamarindo",
    "precio7" => 35,
    $cantidadTamarindo = 3,
    $mensaje07 = $cantidadTamarindo ? "aun nos queda" : "ya no queda agua de tamarindo ",

    "bebida8" => "pepsi",
    "precio8" => 10,
    $cantidadPepsi = 25,
    $mensaje08 = $cantidadPepsi ? "aun nos queda" : "ya no queda pepsi ",

    "bebida9" => "CocaCola",
    "precio9" => 35,
    $cantidadCoca = 50,
    $mensaje09 = $cantidadCoca ? "aun nos queda" : "ya no queda Te ",

    "bebida10" => "Batido de frutas",
    "precio10" => 35,
    $cantidadBatido = 0,
    $mensaje10 = $cantidadBatido ? "aun nos queda" : "ya no queda batido ",

    "bebida11" => "Te negro",
    "precio11" => 40,
    $cantidadTeNegro = 10,
    $mensaje11 = $cantidadTeNegro ? "aun nos queda" : "ya no queda Te negro ",

    "bebida12" => "Te bobba",
    "precio12" => 60,
    $cantidadTeBobba = 20,
    $mensaje12 = $cantidadTeBobba ? "aun nos queda" : "ya no queda Te bobba ",

    "bebida13" => "",
    "precio13" => 75,
    $cantidadCapuccino = 0,
    $mensaje13 = $cantidadCapuccino ? "aun nos queda" : "ya no queda Capuccino ",

    "bebida14" => "latte",
    "precio14" => 77,
    $cantidadLatte = 12,
    $mensaje14 = $cantidadLatte ? "aun nos queda" : "ya no queda latte ",

    "bebida15" => "Raw super Dink",
    "precio15" => 33,
    $cantidadRaw = 33,
    $mensaje15 = $cantidadRaw ? "aun nos queda" : "ya no queda raw super drink ",

    "bebida16" => "agua mineral",
    "precio16" => 27,
    $cantidadMineral = 50,
    $mensaje16 = $cantidadMineral ? "aun nos queda" : "ya no queda agua Mineral ",

    "bebida17" => "RedBull",
    "precio17" => 35,
    $cantidadRedbull = 0,
    $mensaje17 = $cantidadRedbull ? "aun nos queda" : "ya no queda Redbull ",

    "bebida18" => "Fanta",
    "precio18" => 28,
    $cantidadFanta = 22,
    $mensaje18 = $cantidadFanta ? "aun nos queda" : "ya no queda Fanta ",

    "bebida19" => "Agua de naranja",
    "precio19" => 35,
    $cantidadNaranja = 50,
    $mensaje02 = $cantidadNaranja ? "aun nos queda" : "ya no queda agua de naranja ",

    "bebida20" => "batido de fresa",
    "precio20" => 55,
    $cantidadFresa = 11,
    $mensaje02 = $cantidadFresa ? "aun nos queda" : "ya no quedan batidos de fresa ",
];

echo "<pre>";
 echo json_encode($bebidasPrecio, JSON_PRETTY_PRINT);

 echo "</pre>";


//elegir el tamano de la comida

$incredientes = [
    "chile jelapeno " => "una pieza",
    $cantidadjalapeno= 1,
    "precio jalapeno" => 1.5,

    "habanero " => "dos piezas",
    $cantidadhabanero= 2,
    "precio habanero" => 2.5,

    "lechuga" => "tres hojas",
    $cantidadlechuga= 3,
    "precio lechuga" => 2.5,

    "cebolla" => "dos rodajas",
    $cantidadcebolla= 2,
    "precio cebolla" => 1.7,

    "aguacate" => "la mitad",
    $cantidadaguacate=2,
    "precio aguacate" => 3.5,

    "limon" => "una piza",
    $cantidadlimon= 1
    "precio limon" => 1.0

    "tomate" => "dos rodajas",
    $cantidadtomate= 2
    "precio tomate" => 1.0

    "mozzarela" => "7 gramos",
    $cantidadmozzarela= 7,
    "precio mozzarela" => 1.5

    "fresco" => "4 gramos",
    $cantodadfresco= 4,
    "precio fresco" => 0.99

    "chedar" => "5 gramos",
    $cantodadchedar= 5,
    "precio chedar" => 1.0,

    "salsa verde" => "1 gramo",
    $cantidadsalsaverde= 1,
    "preco salsa verde" => 0.50

    "salsa roja" => "1 gramo",
    $cantidadsalsaroja= 1,
    "precio salsa roja" => 0.55,
    
    ];
echo "<pre>";
 echo json_encode($incredientes, JSON_PRETTY_PRINT);

 echo "</pre>";

?> 
