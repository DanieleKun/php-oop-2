<?php 
    include __DIR__ . '/classes/Products.php';
    include __DIR__ . '/classes/Food.php';
    include __DIR__ . '/classes/Kennels.php';
    include __DIR__ . '/classes/Toys.php';



    $food_product = new Food('Royal Canin Maxi Adult', 26, 'ROYAL CANIN', '098346', '27/09/2024');
    var_dump($food_product);

    $kennel_product = new Kennels('Feandrea', 37, 'Feandrea', '4525234', 80);
    var_dump($kennel_product);

    $toy_product = new Toys('Toozey', 5, 'Toozey', '67589978', 10);
    var_dump($toy_product);

?>