<?php
require 'functions/form/validators.php';
require 'functions/form/core.php';
require 'functions/html.php';

function form_success($form, $safe_input)
{
    $x = $safe_input['x'];
    $y = $safe_input['y'];
    $sum = $x + $y;
    var_dump($sum);
}

function form_fail($form, $safe_input)
{
var_dump('Klaida');
}

$form = [
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
    'attr' => [
//        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'x' => [
            'label' => 'X',
            'type' => 'text',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
                'validate_is_number',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'skaicius',
                ],
            ],
        ],
        'y' => [
            'label' => 'Y',
            'type' => 'text',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
                'validate_is_number',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'skaicius',
                ],
            ],
        ]
    ],
    'buttons' => [
        'clear' => [
            'title' => 'Clear',
            'extra' => [
                'attr' => [
                    'class' => 'clear-btn',
                ],
            ]
        ],
        'save' => [
            'title' => 'Save',
            'extra' => [
                'attr' => [
                    'class' => 'save-btn',
                ],
            ],
        ]
    ]
];

if (!empty($_POST)) {
    $safe_input = get_filtered_input($form);
    $success = validate_form($form, $safe_input);
} else {
    $success = false;
}
?>
<html>
<body>
<?php if ($success): ?>
    <h1>ZJBS</h1>
<?php endif; ?>
<?php require 'templates/form.tpl.php'; ?>
</body>
</html>