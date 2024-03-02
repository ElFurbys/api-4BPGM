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

echo "<h2> precio de la comida </h2>";
echo "<br><h5> en la compra de tu comida se le puede agregar un monto mayor si es que compran ingredientes extra o agra dan el plato</h5>" ;
//hacermos un objeto
$ComidaPrecios = [
    //agrego mis atributos necesarios que son 20 
    
    "<br>  torta De jamon<br>" =>   30.99,
    "<br>  torta de milanesa<br>" =>   36.99,
    "<br>  pizza de queso e peperoni<br>" =>   37.99,
    "<br>  Hamburguesa con papas<br>" =>   40.99,
    "<br>  ensalada de verduras<br>" =>   80.99,
    "<br>  ensalada de coditos<br>" =>   20.99,
    "<br>  sopa de verduras<br>" =>   40.99,
    "<br>  caldo de pollo<br>" =>   80.51,
    "<br>  Espagueti con Albondigas<br>" =>   20.90 ,
    "<br>  Chilaquiles<br>"=>   5.99 ,
    "<br>  carne de res<br>"=>   999.99 ,
    "<br>  chuleta de cerdo<br>"=>   40.99 ,
    "<br>  tostadas de frigoles negros<br>" =>   20.30 ,
    "<br>  tostadas de frigoles con cebolla<br>" =>   40.51 ,
    "<br>  tortillas de maiz<br>"=>   15.02 ,
    "<br>  tortillas de harina<br>"=>   20.52 ,
    "<br>  tacos al pastor<br>"=>   25.10 ,
    "<br>  tacos de barbacoa<br>"=>   25.20 ,
    "<br>  tacos dorados de papa<br>"=>   25.20 ,
    "<br>  empanadas de queso<br>"=>   50.02,
    "<br>  empanadas de carne molida<br>"=>   55.10,
    "<br>  empanadas de carne atun<br>"=>   40.80,
    "<br>  burritos<br>"=>   30.99,
    "<br>  quesadillas<br>"=>   40.24,
    "<br>  eliga un tamano<br>" => "   pequeono= 1 el seleccionarlo no se agrega monto extra ,mediano= 2.  al seleccionarlo 10 peso mas, grande=3. al seleccionarlo se le agrega 20 pesos mas"

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

$tamano = 2 ;
if ($tamano <=1) {
    echo "elegiste el plato pequeno.";
}elseif ($tamano = 2) {
    echo "elegiste el plato mediano se le agregara 10 pesos extra";
}else{
    echo "perdon hubo un error vuele a elegir desde cero";
}
//elegir el tamano de la comida

?> 