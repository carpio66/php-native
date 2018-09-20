<?php
// get product id
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : die('ERROR: Product ID not found.');
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
// instantiate database and product object
$database = new Database();
$db       = $database->getConnection();
// initialize object
$product = new Product($db);
// set product id property
$product->id = $product_id;
// read single product
$product->readOne();

$productos                  = array();
$productos["name"]          = $product->name;
$productos["description"]   = $product->description;
$productos["price"]         = $product->price;
$productos["url"]           = $product->url;

$resp               = array();
$resp['response']   = true;
$resp['msg']        = "Record deleted successfully";
$resp['productos']  = $productos;
echo json_encode($resp);
/*
<form id='update-product-form' action='#' method='post' border='0'>
    <table class='table table-bordered table-hover'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php //echo htmlspecialchars($product->name, ENT_QUOTES); ?>' required /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td>
                <textarea name='description' class='form-control' required><?php //echo htmlspecialchars($product->description, ENT_QUOTES); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='number' min='1' name='price' class='form-control' value='<?php //echo htmlspecialchars($product->price, ENT_QUOTES);  ?>' required /></td>
        </tr>
        <tr>
            <td>
                <input type='hidden' name='id' value='<?php //echo $product_id ?>' />
            </td>
            <td>
                <button type='submit' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-edit'></span> Save Changes
                </button>
            </td>
        </tr>
    </table>
</form>
 */
?>
