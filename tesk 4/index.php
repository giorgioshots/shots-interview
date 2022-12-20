<?php

use App\CoreEntities\Order;
use App\CoreEntities\Product;
use App\CoreEntities\Review;
use App\CoreEntities\User;

include("all-dependencies.php");

// ecommerce app code: any kind of stuff happens here...
{
    // an order is placed
    $aUser = User::getById(123);
    $aOrder = new Order([
        'customer' => $aUser,
        'grossTotal' => 102.50,
        'paymentMethod' => 'PayPal'
    ]);
    $anOrder->save(); 

    // a review is written
    $aProduct = Product::getById(456);
    $aReview = new Review([
        'product' => $aProduct,
        'author' => $aUser,
        'rating' => 4
    ]);
    $aReview->save();
}


// add code to sync external systems on given events:
// on( 'Order', 'updated', ... );
// on( 'Review', 'created', ... );




?>