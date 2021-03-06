<?php
$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
);

function addProduct($products)
{
    $ht = "";
    foreach ($products as $key => $value) {



        foreach ($value as $ke => $val) {


            foreach ($val as $k => $v) {
                echo "<tr>
                        <td>$key</td>
                        <td>$ke</td>
                        <td>" . $v['id'] . "</td>
                        <td>" . $v['name'] . "</td>
                        <td>" . $v['brand'] . "</td>
                     </tr>";
            }
        }
    }

    function mobileSubCata($products)
    {
        foreach ($products as $key => $value) {



            foreach ($value as $ke => $val) {


                foreach ($val as $k => $v) {
                    if ($ke == 'Mobile') {
                        echo "<tr>
                            <td>$key</td>
                            <td>$ke</td>
                            <td>" . $v['id'] . "</td>
                            <td>" . $v['name'] . "</td>
                            <td>" . $v['brand'] . "</td>
                         </tr>";
                    }
                }
            }
        }
    }
    function SamsungShow($products)
    {
        foreach ($products as $key => $value) {



            foreach ($value as $ke => $val) {


                foreach ($val as $k => $v) {
                    
                    if ($v['brand'] == 'Samsung') {
                        echo "
                            
                            <p><b>Product ID:</b> " . $v['id'] . "</p>
                            <p><b>Product Name:</b> " . $v['name'] . "</p>
                            <p><b>Subcategory:</b> $ke</p>
                            <p><b>Category:</b> $key</p><br>";
                        
                    }
                }
            }
        }
    }
}
function DeleteID($products)
    {
        foreach ($products as $key => $value) {



            foreach ($value as $ke => $val) {


                foreach ($val as $k => $v) {
                    if ($v['id'] == 'PR003') {
                        unset($products['Electronics']['Television'][2]);
                    }
                }
            }
        }
        addProduct($products);
    }

    function UpdateID($products)
    {
        foreach ($products as $key => $value) {



            foreach ($value as $ke => $val) {


                foreach ($val as $k => $v) {
                    if ($v['id'] == 'PR002') {
                        
                        $v['name']="<b></b>BIG-555";
                    }
                    echo "<tr>
                        <td>$key</td>
                        <td>$ke</td>
                        <td>" . $v['id'] . "</td>
                        <td>" . $v['name'] . "</td>
                        <td>" . $v['brand'] . "</td>
                     </tr>";
                }
            }
        }
        
    }




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>List All the Product</h2>
    <table>
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
        </tr>
        <tbody><?php addProduct($products);  ?></tbody>
    </table>

    <br>
    <h2>List All Mobile </h2>
    <table>
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
        </tr>
        <tbody><?php mobileSubCata($products); ?></tbody>
    </table>
    <h2>After Updating Product Id:- PR002</h2>
    <table>
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
        </tr>
        <tbody><?php UpdateID($products); ?></tbody>
    </table>
    <h2>After deleteing Product Id:-PR003 </h2>
    <table>
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
        </tr>
        <tbody><?php DeleteID($products) ?></tbody>
    </table>


</body>

</html>