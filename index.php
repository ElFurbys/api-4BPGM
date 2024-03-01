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
    "Frijoles <br>" => "Frijoles Refritos, Frijoles Negros y Frijoles Bayos <br>",
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
//hacermos un objeto
$ComidaPrecios = [
    //agrego mis atributos necesarios que son 20 
    
    "<h2> precio de las comidas </h2> <br>" => "<h5> estos son los precion en la comida se le puede agregar un monto mayor si es que compran ingredientes extra </h5>" ,
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
    "<br>  tamano<br>" => "   pequeno= 1 el seleccionarlo no se agrega monto extra ,mediano= 2.  al seleccionarlo 10 peso mas, grande=3. al seleccionarlo se le agrega 20 pesos mas"

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