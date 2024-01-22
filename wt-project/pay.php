<?php
session_start();
$product_name = $_POST['product_name'];
$price = $_POST['product_price'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

include 'instamojo\Instamojo.php';
// $api =new Instamojo\Instamojo('495f92e62d9394c58a5fc384f9f5e30e','afbcae8fff97089956b06dc5d6141674', 'http://api.instamojo.com/api/1.1/');
$authType = "app/user"; /**Depend on app or user based authentication**/

$api = Instamojo\Instamojo::init($authType,[
        "client_id" =>  'Ijr5naYEbyhYwmnKsrToq0Cx6UtzTbUHtv6nKQPL',
        "client_secret" => 'SAVGLEAoQ5pLY6GbLwfU5MiToq2SmixjEo5zhVba4HvqO0AzU8OA7WEOCJ9RcaUoWemkGUKn0zoWliSxFuGQJPIyYkbpcRf5rnGqahMM0waS8mY63Jm4js6oTUh58BF0',
      /** In case of user based authentication**/

    ],true);
try {
    $response = $api->createPaymentRequest(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name"=> $name,
        "phone"=> $phone,
        "send_sms"=> true,
        "send_email" => true,
        "allow_repeated_payments"=>false,
        "email" => $email,
        "redirect_url" => "http://localhost/wt_project/thankyou.php",
        //"webhook"=>
        ));
    // print_r($response);
    $pay_url = $response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}


?>