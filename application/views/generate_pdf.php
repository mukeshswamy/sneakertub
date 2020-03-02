<?php
// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();




// Load HTML content 
$name =  $this->session->userdata('username');
$product_name = $this->session->userdata('userdata');
$product_name = json_decode($product_name['order_details'],true);
// $product_name = $product_name['term'];
// echo $product_name;
$dompdf->loadHtml('<h4>Invioce Generated </h4>'.
    '<h2>Billing Summary</h2><hr>'.
    '<h4>Thank You '.$name.'</h4><hr>'.
    '<h4>Product Name: '.$product_name['product_name'].'</h4>'.
    '<h4>Product Term: '.$product_name['term'].'</h4>'.
    '<h4>Gender: '.$product_name['gender'].'</h4>'.
    '<h4>Sneaker Size: '.$product_name['sneaker_size'].'</h4>'.
    '<h4>Shirt Size: '.$product_name['shirt_size'].'</h4>'.
    '<h4>Total: '.$product_name['term_prize'].'</h4><hr>'.
    // .$product_name['term'].
    '<h2>Thank For shopping with Sneaker Tub</h2>'
    

);  

// $dompdf->loadHtml('<h4>Report For case number: <u>'.$cnum.'</u></h4>'. 
// '<h3>Report Description</h3><hr>'
// .trim($con, '"').
// '<h3>End Note</h3><hr>'
// .trim($en, '"')

// );  
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser trim($con, '"')
$dompdf->stream("Report.pdf",array("Attachment" => 0));
exit();

?>
