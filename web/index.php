<html>
    <head>
        My shop
    </head>
    <body>
        <h1>hello apps</h1>
        <ul>
          <?php
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->products;
            foreach ($products as $product) {
                # code...
                echo "<li>$product</li>";
             } 
          ?>
        </ul>
    </body>
</html>