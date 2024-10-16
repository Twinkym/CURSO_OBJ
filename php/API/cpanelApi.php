<?php 

/**
 * Documentación del conector a la api de Cpanel.
 * 
 * @category Cpanel_API_Connector
 * @package  Connectors
 * @author   David De La Puente <ddelapuente@gmail.com>
 * @license  http://
 * @link     https://github.com/
 * 
 */


 // Include the CPANEL class
 require 'path/to/cpanel/cpanel_class.php';

// Instantiate the CPANEL class with the credentials and base URLs
 $cpanel = new CPANEL('your_username', 'your_password', 'https://your-cpanel-url:2083'); 

 // Call a UAPI function.
$function_result = $cpanel->uapi(
    'module', 'function',
    array(
        'paprameter1' => 'value',
        'paprameter2' => 'value',
        'paprameter3' => 'value',
        )
);

// Managing the outcome of the functioin.
if ($function_result['status'] == 1) {
    echo "Funcion ejecutada con éxito.";
    // Process returned data.
    print_r($funnction_result['data']);
} else {
    echo "Error when running function: ".$function_result['error'];
}
?>