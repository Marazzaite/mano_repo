<?php
require '../bootloader.php';


//$drink = new \App\Drinks\Drink();
//$safe_input = $drink ->getbyId();
//$form['fields']['id']['value'] = $drink->getbyId();
$modelDrinks = new \App\Drinks\Model();
$drink = $modelDrinks->getById($_GET['id']);
$form = [
    'callbacks' => [
        'success' => 'form_success_edit',
        'fail' => 'form_fail',
    ],
    'attr' => [
        'action' => 'index.php',
        'class' => 'my=form',
        'id' => 'login-form'
    ],
    'fields' => [
        'name' => [
            'label' => 'Pavadinimas',
            'type' => 'text',
            'value' => $drink->getName(),
            // 'error' => 'Ivyko klaida',
            'extra' => [
                'validators' => [
                    'validate_not_empty'
                ],
                'attr' => [
                    'class' => 'first-name',
                    'id' => 'first-name',
                    'placeholder' => 'Pvz: Somersby'
                ]
            ]
        ],
        'amount' => [
            'label' => 'Kiekis(ml)',
            'type' => 'number',
            'value' => $drink->getAmount(),
            'extra' => [
                'validators' => [
                    'validate_not_empty',
                    'validate_is_number',
                ],
                'attr' => [
                    'class' => 'last-name',
                    'id' => 'last-name',
                    'placeholder' => 'Pvz: 500',
                ]
            ]
        ],
        'abarot' => [
            'label' => 'Abarot(%)',
            'type' => 'number',
            'value' => $drink->getAbarot(),
            'extra' => [
                'validators' => [
                    'validate_not_empty',
                    'validate_is_number',
                ],
                'attr' => [
                    'step' => '0.01',
                    'class' => 'last-name',
                    'id' => 'last-name',
                    'placeholder' => 'Pvz: 4.4'
                ]
            ]
        ],

        'image' => [
            'label' => 'Nuotrauka(Url)',
            'type' => 'text',
            'value' => $drink->getImage(),
            'extra' => [
                'validators' => [
                    'validate_not_empty'
                ],
                'attr' => [
                    'class' => 'last-name',
                    'id' => 'last-name',
                    'placeholder' => 'Pvz.: http://....'
                ]
            ]
        ],
        'price' => [
            'label' => 'Kaina',
            'type' => 'number',
            'value' => $drink->getPrice(),
            'extra' => [
                'validators' => [
                    'validate_not_empty',
                    'validate_is_number',
                ],
                'attr' => [
                    'step' => '0.01',
                    'class' => 'last-name',
                    'id' => 'last-name',
                    'placeholder' => 'Pvz: 3.50'
                ]
            ]
        ],
        'in_stock' => [
            'label' => 'Atsargos sandėlyje',
            'type' => 'number',
            'value' => $drink->getInStock(),
            'extra' => [
                'validators' => [
                    'validate_not_empty',
                    'validate_is_number',
                ],
                'attr' => [
                    'class' => 'last-name',
                    'id' => 'last-name',
                    'placeholder' => 'Pvz: 13'
                ]
            ]
        ],
    ],

    'buttons' => [

        'create' => [
            'title' => 'Redaguoti',
            'extra' => [
                'attr' => [
                    'class' => 'save-btn',
                ]
            ]
        ]
    ]
];

function form_success_edit($safe_input, &$form)
{
    $modelDrinks = new App\Drinks\Model();
    $drink = new \App\Drinks\Drink($safe_input);

    $drink = $modelDrinks->getById($safe_input['id']);

}
//$catalog = [];
//$drinks = new \App\Drinks\Drink();
//
//foreach ($drinks as $drink) {
//    $form['fields']['id']['value'] = $drink->getbyId();
//$catalog[] = [
//    'dataholder' => $drink,
//'form_edit' => new \App\Views\Form($form_edit),
//];}


if (!empty($_POST)) {
    $safe_input = get_form_input($form);
    $success = validate_form($safe_input, $form);
}else {
    $success = false;
}

$view = [];
$views['nav'] = new \App\Views\Navigation();
$views['form'] = new \App\Views\Form($form);




?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <title>OOP</title>
</head>
<body>
<?php  print $views['form']->render(); ?>
<div></div>
</body>
