<?php
echo $mensaje = "Menu de Kenny´s Greedy Restaurant";
$menu = [
    "Tortas" => "De Jamon con Huevo, De Milanesa",
    "Comida Rapida" => "Pizza de Queso con Pepperoni, Hamburguesa con Papas",
    "Ensalada" => "De Verduras, De Coditos",
    "Sopa" => "De verduras, Caldo de Pollo",
    "Pasta" => "Espagueti con Albondigas, Chilaquiles",
    "Carnes" => "De Res, Chuleta de Cerdo",
    "Tostadas" => "De Frijoles negros, De Frijoles con Cebolla",
    "Tacos" => "Al Pastor, De Barbacoa y Dorados",
    "Empanadas" => "De Queso, Carne Molida y De Atun",
    "Frijoles" => "Frijoles Refritos, Frijoles Negros y Frijoles Bayos",
    "Tortillas" => "De Harina y Maiz",
    "Burritos" => "Frijol con Carne de Res, De Frijol con Queso, Aguacate, Tomate y jalapeño",
    "Quesadillas" => "Sincronizadas, Queso con Carne y De Queso",
    "Chiles" => "Jalapeño, Habanero",
    "Verduras" => "Lechuga, Cebolla Blanca",
    "Frutas" => "Aguacate, Limon y Tomate",
    "Quesos" => "Mozzarella, Fresco y Cheddar",
    "Salsas" => "Salsa Verde y Salsa Roja",
    "Postre" => "Pie de Queso con Mermelada, Helado de Manzana, Vainilla, Chocolate, Fresa y Napolitano",
    "Cafes" => "Lechero, Cafe con Leche, Capuchino",
    "Refrescos" => "Coca Cola, Fanta de Naranja y Fresa",
    "Bebidas" => "Agua con Hielo, De Limon, Jamaica, Horchata y Zarzaparilla"

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