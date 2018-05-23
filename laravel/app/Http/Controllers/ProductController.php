<?php
namespace App\Http\Controllers;
use App\Product;
use Dhtmlx\Connector\GridConnector;

class ProductController extends Controller
{
    public function data() {
        $connector = new GridConnector(null, "PHPLaravel");
        $PK = "ProductID";
        $COLS = "ProductName, SupplierID, CategoryID, Unit, Price, Quantity";
        $connector->configure(new Product(), $PK, $COLS);
        $connector->render();
    }
}
