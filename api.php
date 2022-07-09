<?php 

define("ADD", 1);
define("SUBTRACT", 2);
define("MULTIPLY", 3);
define("DIVIDE", 4);

if (isset($_POST["a"], $_POST["b"], $_POST["type"])) {
    
$a = $_POST["a"];
$b = $_POST["b"]; 
$type = $_POST["type"]; 


$wsdl = "http://www.dneonline.com/calculator.asmx?wsdl";

$soap = new SoapClient($wsdl);
    
$params = array("intA"=>$a, "intB"=>$b);  

switch($type) {
     
    case ADD:        
        $soapresult = $soap->Add($params);
        $result = $soapresult->AddResult;
        break;
    case SUBTRACT:        
        $soapresult = $soap->Subtract($params);
        $result = $soapresult->SubtractResult;
        break;
     case MULTIPLY:        
        $soapresult = $soap->Multiply($params);
        $result = $soapresult->MultiplyResult;
        break;
    case DIVIDE:        
        $soapresult = $soap->Divide($params);
        $result = $soapresult->DivideResult;
        break;
}
    




}


?>