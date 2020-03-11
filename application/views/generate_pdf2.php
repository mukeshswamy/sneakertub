<?php
// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();




// Load HTML content 
$name =  $this->session->userdata('username');
$product_name = $this->session->userdata('rentData');
$product_name = json_decode($product_name['rent_items'],true);
// echo $product_name;
$dompdf->loadHtml('<h4>Invioce Generated For Rent</h4>'.
    '<h2>Billing Summary</h2><hr>'.
    '<h4>Thank You '.$name.'</h4><hr>'.
    '<h4>Product Name: '.$product_name['product_name'].'</h4>'.
    '<h4>Size: '.$product_name['size'].'</h4>'.
    '<h4>Quntity: '.$product_name['quantity'].'</h4>'.
    '<h4>Days of rent: '.$product_name['rent_days'].'</h4>'.
    '<h4>Product prize: '.$product_name['product_prize'].'</h4><hr>'.
    // .$product_name['term'].
    '<h2>Thank For shopping with Sneaker Tubs</h2>'
    

);  

// $dompdf->loadHtml('<h4>Report For case number:</h4>');  
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser trim($con, '"')
$dompdf->stream("Report.pdf",array("Attachment" => 0));
exit();

?>
