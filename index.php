<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$products = [
    1 => [
        'name' => 'Produktas 1',
        'sku' => '000001',
        'price' => '100',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    2 => [
        'name' => 'Produktas 2',
        'sku' => '000002',
        'price' => '200',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    3 => [
        'name' => 'Produktas 3',
        'sku' => '000003',
        'price' => '300',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    4 => [
        'name' => 'Produktas 4',
        'sku' => '000004',
        'price' => '400',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    5 => [
        'name' => 'Produktas 5',
        'sku' => '000005',
        'price' => '500',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    6 => [
        'name' => 'Produktas 6',
        'sku' => '000006',
        'price' => '600',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
];
//echo "<pre>";
//print_r($products);

function renderProduct($product)
{
    $html = '';
    $html .= '<div class="product-wrapper">';//style= "float: left; width: 100px;"
    $html .= '<div class="image"><img src="' . $product['image'] . '"></div>';
    $html .= '<div class="name">' . $product['name'] . '</div>';
    $html .= '<div class="sku">' . $product['sku'] . '</div>';
    $html .= '<div class="price">' . $product['price'] . '</div>';

    //arejuje nesukuriau special-price
    //$html.= '<div class="special-price">' . $product['special-price'] . '</div>';

    $html .= '</div>';

    return $html;

}


function renderGrid($products)
{
    $html = '';
    $html .= '<div class="grid-wrapper">';
    foreach ($products as $product) {
        $html .= renderProduct($product);

    }
    $html .= '<div>';
    return $html;
}

//echo renderGrid($products);

$users = [
    1 => [
        'name' => 'Antanas',
        'surname' => 'Bogdanavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2020 01 01',
    ],
    2 => [
        'name' => 'Kestas',
        'surname' => 'Kestavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2222 01 01',
    ],
    3 => [
        'name' => 'Zigmas',
        'surname' => 'Zigmuntavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2017 01 01',
    ],
    4 => [
        'name' => 'Juozas',
        'surname' => 'Juozapevicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2020 01 01',
    ],
];

function renderListItem($user)
{
    $html = '';

    $html .= '<tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['name'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['surname'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['email'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['phone'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['bday'] . '</td>';
    $html .= '</tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';

    return $html;
}


function userOutput($users)
{
    $html = '';
    $html .= '<table style="max-width:100%; border:1px solid yellow; border-collapse: collapse;">';

    $html .= '<tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';//
    $html .= '<td style="text-align: center; border:1px solid yellow;">Name</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Surname</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Email</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Phone</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Bday</td>';

    //$html .= '<div class="grid-wrapper">';
    foreach ($users as $user) {
        $html .= renderListItem($user);

    }
    $html .= '</tr>'; //close header tr row
    $html .= '</table>'; //close table
    return $html;
}

echo userOutput($users);


?>

