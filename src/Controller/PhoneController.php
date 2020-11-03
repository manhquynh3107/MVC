<?php

namespace App\Controller;

use App\Model\Phone;
use App\Model\PhoneManager;

class PhoneController
{
    protected $phoneController;

    public function __construct()
    {
        $this->phoneController = new PhoneManager();
    }

    function viewProduct()
    {
        $phones = $this->phoneController->getAllProduct();
        include_once 'src/View/listProduct.php';
    }

    function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/View/addProduct.php';
        } else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $color = $_REQUEST['color'];

            $phone = new Phone($name, $price, $color);
            $this->phoneController->addProduct($phone);
            header('location:index.php');
        }

    }

    function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->phoneController->delete($id);

        header('location:index.php');
    }

    function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $phone = $this->phoneController->getProductId($id);
            include_once 'src/View/update.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $color = $_REQUEST['color'];

            $phone = new Phone($name, $price, $color);
            $phone->setId($id);
            $this->phoneController->updateProduct($phone);

            header('location:index.php');

        }
    }

    function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_REQUEST['search'];
            $phone =  $this->phoneController->searchProduct($search);
            include_once '/Users/quynhnghesi/Sites/MVC/src/controller/PhoneController.php';
        }
    }

}