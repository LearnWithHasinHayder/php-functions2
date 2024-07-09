<?php  

function completeOrder($orderId){
    //database connection
    //...

    //code for reduce product stock 
    //....

    //change order status
    //...

    //calculate total price
    //...

    //generate pdf invoice
    //...

    //send email for order confirmation
    //...

    $orderDetails = getOrderDetails($orderId);
    reduceStock($orderId);
    updateOrderStatus($orderId, 'complete');

    $totalPrice = getTotalPrice($orderId);
    $invoice =  generateInvoice($orderId);

    sendOrderCompleteEmail($orderId, $invoice);

    return true;

}

function reduceStock($orderId){
    //code for reduce product stock
}

function getOrderDetails($orderId){
    //return order details
}

function updateOrderStatus($orderId, $status){
    //update order status
}

function getTotalPrice($orderId){
    //return total price
}


function generateInvoice($orderId){
    //generate pdf invoice
}

function sendOrderCompleteEmail($orderId, $invoice){
    //send email for order confirmation
}

function sendRefundProcessedEmail($orderId, $invoice){
    //send email for refund
}
