<?php
echo "¡Bienvenido a Kenny´s Greedy Restaurant! <br> </br>";

echo "Abrimos de 7:00 AM hasta 8:00 PM <br> </br>";

echo $mensaje = "¡Menu de Kenny´s Greedy Restaurant! <br> </br>";
$menu = [
    "Tortas <br>" => "De Jamon con Huevo, De Milanesa <br> <br>",
    "Comida Rapida <br>" => "Pizza de Queso con Pepperoni, Hamburguesa con Papas <br> <br>",
    "Ensalada <br>" => "De Verduras, De Coditos <br> <br>",
    "Sopa <br>" => "De verduras, Caldo de Pollo <br> <br>",
    "Pasta <br>" => "Espagueti con Albondigas, Chilaquiles <br> <br>",
    "Carnes <br>" => "De Res, Chuleta de Cerdo <br> <br>",
    "Tostadas <br>" => "De Frijoles negros, De Frijoles con Cebolla <br> <br>",
    "Tacos <br>" => "Al Pastor, De Barbacoa y Dorados <br> <br>",
    "Empanadas <br>" => "De Queso, Carne Molida y De Atun <br> <br>",
    "Frijoles <br>" => "Frijoles Refritos, Frijoles Negros y Frijoles Bayos <br> <br>",
    "Tortillas <br>" => "De Harina y Maiz <br> <br>",
    "Burritos <br>" => "Frijol con Carne de Res, De Frijol con Queso, Aguacate, Tomate y jalapeño <br> <br>",
    "Quesadillas <br>" => "Sincronizadas, Queso con Carne y De Queso <br> <br>",
    "Chiles <br>" => "Jalapeno, Habanero <br> <br>",
    "Verduras <br>" => "Lechuga, Cebolla Blanca <br> <br>",
    "Frutas <br>" => "Aguacate, Limon y Tomate <br> <br>",
    "Quesos <br>" => "Mozzarella, Fresco y Cheddar <br> <br>",
    "Salsas <br>" => "Salsa Verde y Salsa Roja <br> <br>",
    "Postre <br>" => "Pie de Queso con Mermelada, Helado de Manzana, Vainilla, Chocolate, Fresa y Napolitano <br> <br>",
    "Cafes <br>" => "Lechero, Cafe con Leche, Capuchino <br> <br>",
    "Refrescos <br>" => "Coca Cola, Fanta de Naranja y Fresa <br> <br>",
    "Bebidas <br>" => "Agua con Hielo, De Limon, Jamaica, Horchata y Zarzaparilla"

];
echo json_encode($menu);
//hacermos un objeto
$ComidaPrecios = [
    //agrego mis atributos necesarios que son 20 
    
    "torta De jamon" => 30.99 ,
    "torta de milanesa" => 36.99 ,
    "pizza de queso e peperoni" => 37.99,
    "Hamburguesa con papas" => 40.99 ,
    "ensalada de verduras" => 80.99 ,
    "ensalada de coditos" => 20.99 ,
    "sopa de verduras" => 40.99 ,
    "caldo de pollo" => 80.51 ,
    "Espagueti con Albondigas" => 20.90 ,
    "Chilaquiles"=> 5.99 ,
    "carne de res"=> 999.99 ,
    "chuleta de cerdo"=> 40.99 ,
    "tostadas de frigoles negros" => 20.30 ,
    "tostadas de frigoles con cebolla" => 40.51 ,
    "tortillas de maiz "=> 15.02 ,
    "tortillas de harina "=> 20.52 ,
    "tacos al pastor"=> 25.10 ,
    "tacos de barbacoa"=> 25.20 ,
    "tacos dorados de papa"=> 25.20 ,
    "empanadas de queso"=>  50.02,
    "empanadas de carne molida"=> 55.10,
    "empanadas de carne atun"=>  40.80,
    "burritos"=> 30.99,
    "quesadillas"=> 40.24,
    "tamano " => "pequeno= 1 el seleccionarlo no se agrega monto extra ,mediano= 2.  al seleccionarlo 10 peso mas, grande=3. al seleccionarlo se le agrega 20 pesos mas"

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
//cerrar la etiqueta <pre>
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