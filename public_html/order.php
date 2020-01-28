<?php

use App\Orders\Model;

require '../bootloader.php';


$form_deliver = [
    'callbacks' => [
        'success' => 'form_success_delivery',
        'fail' => 'form_fail',
    ],
    'fields' => [
        'id' => [
            'type' => 'hidden',
        ],
    ],
    'attr' => [
        'method' => 'POST',
        'class' => 'last-name',
        'id' => 'last-name',
        'placeholder' => 'Pvz: 13'
    ],
    'buttons' => [
        'delivery' => [
            'title' => 'Pristatyti',
            'extra' => [
                'attr' => [
                    'class' => 'save-btn',
                ]
            ]
        ]
    ]

];

function form_success_delivery($safe_input, &$form)
{
    $modelOrders = new App\Orders\Model();
    $order = $modelOrders->getById($safe_input['id']);
    $order->setStatus('delivered');
    $modelOrders->update($order);




}


$modelOrders = new \App\Orders\Model();
$orders = $modelOrders->get([]);

$view = [];
$views['nav'] = new \App\Views\Navigation();
$views['form_deliver'] = new \App\Views\Form($form_deliver);

$modelDrinks = new \App\Drinks\Model();
$drink = new \App\Drinks\Drink();

$drinks_orders_array = [];
foreach ($orders as $order) {
    $form_deliver['fields']['id']['value'] = $order->getId();
    $drinks_orders_array[] = [
        'order' => $order,
        'drink' => $modelDrinks->getById($order->getDrinkId()),
        'form_deliver' => new \App\Views\Form($form_deliver),
    ];
}
if (!empty($_POST)) {
    $safe_input = get_form_input($form_deliver);
    $success = validate_form($safe_input, $form_deliver);
}

?>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <title>OOP</title>
</head>
<body>
<?php print $views['nav']->render(); ?>
<?php if (\App\App::$session->userLoggedin()): ?>
<?php endif; ?>
<table>
    <tr>
        <th>Gėrimo pavadinimas</th>
        <th>Užsakymo ID</th>
        <th>Gėrimo ID</th>
        <th>Data</th>
        <th>Būklė</th>
        <th>Veiksmai</th>
    </tr>
    <?php foreach ($drinks_orders_array as $item): ?>
        <tr>
            <td><?php print $item['drink']->getName(); ?></td>
            <td><?php print $item['order']->getId(); ?></td>
            <td><?php print $item['order']->getTimestamp(); ?></td>
            <td><?php print $item['order']->getDrinkId(); ?></td>
            <td><?php print $item['order']->getStatus(); ?></td>
            <td><?php if($item['order']->getStatus()== 'užsakyta') print $item['form_deliver']->render(); ?>
           </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
