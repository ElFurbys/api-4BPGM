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
$ComidaPrecios = [
    "torta De jamon" => "mediana" 30.90 ,
    "torta de milanesa" => ,
    "pizza de queso e peperoni" => ,
    "Hamburguesa con papas" => ,
    "ensalada de verduras" => ,
    "ensalada de coditos" => ,
    "sopa de verduras" => ,
    "caldo de pollo" => ,
    ""
];
echo json_encode($ComidaPrecios);
?> 