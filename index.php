<?php 
    include __DIR__ . '/classes/Product.php';
    include __DIR__ . '/classes/Food.php';
    include __DIR__ . '/classes/Kennel.php';
    include __DIR__ . '/classes/Toy.php';
    include __DIR__ . '/classes/User.php';



    $food_product = new Food('Royal Canin Maxi Adult', 26, 'ROYAL CANIN', '098346', '27/09/2024');
    var_dump($food_product);

    $kennel_product = new Kennel('Feandrea', 37, 'Feandrea', '4525234', 80);
    var_dump($kennel_product);

    $toy_product = new Toy('Toozey', 5, 'Toozey', '67589978', 10);
    var_dump($toy_product);

    $user_gino = new User("Gino", "Passalacqua", "gino@gmail.com" , "Via non ho idee, Roma", true);
    var_dump($user_gino)

?>