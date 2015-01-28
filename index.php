<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('./ProvisioningAPILib.php');

//Structure of the Account Balance Request
$controller = new OrderingController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->getAccountbalance();
  echo "<b>controller accountBalance var dump</b><br/>", var_dump($response);
  echo "<br/><br/><br/>";
  echo "<b>content</b><br/>";
  echo "balance: ".$response->accountBalance->balance."<br/>";
  echo "currency: ".$response->accountBalance->currency."<br/>";
  echo "<br/><br/><br/>";

}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/>";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}
//Structure of the createCart Request
$controller = new OrderingController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->createCart("Example of a customerReference ", "Example of a description");
  echo "<b>createCart Request var dump</b><br/><br />\n", var_dump($response);
  echo "<br/><br/><br/>";
  echo "<b>content</b><br/>";
  echo "cartIdentifier: ".$response->cart->cartIdentifier."<br/>";
  echo "customerReference: ".$response->cart->customerReference."<br/>";
  echo "description: ".$response->cart->description."<br/>";
  echo "dateAdded: ".$response->cart->dateAdded."<br/>";
  echo "orderProducts: ".$response->cart->orderProducts."<br/>";
  echo "<br/><br/><br/>";

}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/><br />\n";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}

//Structure of Remove From Cart Request
$controller = new OrderingController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->removeFromCart("12345", "54321", 1);
  echo "<b>removeFromCart Response var dump</b><br/><br />\n", var_dump($response);
  echo "<br/><br/><br/>";
  echo "<b>content</b><br/>";
  echo "status: ".$response->messages->status."<br/>";
}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/><br />\n";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}

//Structure of the List Country Request
$controller = new InventoryController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->listCountry(0, 10, 'ARG');
  echo "<b>controller countries var dump</b><br/>", var_dump($response);
  echo "<br/><br/><br/>";
  echo "<b>content</b><br/>";
  echo "countryCodeA3: ".$response->countries[0]->countryCodeA3."<br/>";
  echo "countryName: ".$response->countries[0]->countryName."<br/>";
  echo "hasStates: ".$response->countries[0]->hasStates."<br/>";
  echo "hasRegulationRequirement: ".$response->countries[0]->hasRegulationRequirement."<br/>";
  echo "phoneCode: ".$response->countries[0]->phoneCode."<br/>";
  echo "<br/><br/><br/>";

}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/>";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}

//Structure of the List Voice URIs Request
$controller = new ConfigurationController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->listVoiceUri(0, 10);
  echo "<b>controller voiceUris var dump</b><br/>", var_dump($response);
  echo "<br/><br/><br/>";
  echo "<b>content</b><br/>";
  echo "voiceUriId: ".$response->voiceUris[0]->voiceUriId."<br/>";
  echo "backupUriId: ".$response->voiceUris[0]->backupUriId."<br/>";
  echo "voiceUriProtocol: ".$response->voiceUris[0]->voiceUriProtocol."<br/>";
  echo "uri: ".$response->voiceUris[0]->uri."<br/>";
  echo "description: ".$response->voiceUris[0]->description."<br/>";
  echo "<br/><br/><br/>";

}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/>";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}

//Structure of the List Regulation Addresses Request
$controller = new RegulationController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->listRegulationAddress(0, 10);
  echo "<b>controller regulationAddresses var dump</b><br/>", var_dump($response);
  echo "<br/><br/><br/>";
  echo "<b>content</b><br/>";
  echo "addressId: ".$response->regulationAddresses[0]->addressId."<br/>";
  echo "linked: ".$response->regulationAddresses[0]->linked."<br/>";
  echo "status: ".$response->regulationAddresses[0]->status."<br/>";
  echo "companyName: ".$response->regulationAddresses[0]->companyName."<br/>";
  echo "companyDescription: ".$response->regulationAddresses[0]->companyDescription."<br/>";
  echo "firstName: ".$response->regulationAddresses[0]->firstName."<br/>";
  echo "lastName: ".$response->regulationAddresses[0]->lastName."<br/>";
  echo "countryCodeA3: ".$response->regulationAddresses[0]->countryCodeA3."<br/>";
  echo "city: ".$response->regulationAddresses[0]->city."<br/>";
  echo "zipCode: ".$response->regulationAddresses[0]->zipCode."<br/>";
  echo "streetName: ".$response->regulationAddresses[0]->streetName."<br/>";
  echo "buildingNumber: ".$response->regulationAddresses[0]->buildingNumber."<br/>";
  echo "buildingLetter: ".$response->regulationAddresses[0]->buildingLetter."<br/>";
  echo "customerReference: ".$response->regulationAddresses[0]->customerReference."<br/>";
  echo "extraFields: ".$response->regulationAddresses[0]->extraFields."<br/>";
  echo "<br/><br/><br/>";

}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/>";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}

//Structure of the List CDR Files Request
$controller = new CDRsController(Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);
try{
  $response = $controller->listExistingFiles();
  echo "<b>controller fileNames var dump</b><br/>", var_dump($response);

  echo "<br/><br/><br/>";

}catch (APIException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br/>";
    echo 'error code is: ', $e->getResponseCode()," ", $e->getReason();
}
?>
