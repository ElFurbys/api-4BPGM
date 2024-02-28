<?php
echo $mensaje = "Proyecto APi" + "\n";

$menu = [
    "Tortas" => "De Jamon con Huevo," + "\n" + "De Milanesa",
    "Comida Rapida" => "Pizza de Queso con Pepperoni," + "\n" + "Hamburguesa con Papas",
    "Ensalada" => "De Verduras," + "\n" + "De Coditos",
    "Sopa" => "De verduras," + "\n" + "Caldo de Pollo",
    "Pasta" => "Espagueti con Albondigas," + "\n" + "Chilaquiles",
    "Carnes" => "De Res," + "\n" + "Chuleta de Cerdo",
    "Tostadas" => "De Frijoles negros," + "\n" + "De Frijoles con Cebolla",
    "Tacos" => "Al Pastor," + "\n" + "De Barbacoa y Dorados",
    "Empanadas" => "De Queso," + "\n" + "Carne Molida y De Atun",
    "Frijoles" => "Frijoles Refritos," + "\n" + " Frijoles Negros y Frijoles Bayos",
    "Tortillas" => "De Harina y Maiz",
    "Burritos" => "Frijol con Carne de Res," + "\n" + "De Frijol con Queso, Aguacate, Tomate y jalapeño",
    "Quesadillas" "Sincronizadas," + "\n" + "Queso con Carne y De Queso",
    "Chiles" => "Jalapeño," + "\n" + "Habanero",
    "Verduras" => "Lechuga," + "\n" + "Cebolla Blanca",
    "Frutas" => "Aguacate," + "\n" + "Limon y Tomate",
    "Quesos" => "Mozzarella," + "\n" + "Fresco y Cheddar",
    "Salsas" => "Salsa Verde y Salsa Roja",
    "Postre" => "Pie de Queso con Mermelada," + "\n" + "Helado de Manzana," + "\n" "Vainilla, Chocolate, Fresa y Napolitano",
    "Cafes" => "Lechero, Cafe con Leche," + "\n" + "Capuchino",
    "Refrescos" => "Coca Cola, Fanta de Naranja y Fresa",
    "Bebidas" => "Agua con Hielo, De Limon, Jamaica," + "\n" + "Horchata y Zarzaparilla"

]
 echo json_encode($menu);
?>