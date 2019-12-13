<?php
//
//// format: alt+cmd+L
//
//$form = [
//    'attr' => [
//        'action' => 'index.php',
//        'class' => 'my=form',
//        'id' => 'login-form'
//    ],
//    'fields' => [
//        'first_name' => [
//            'label' => 'First name',
//            'type' => 'text',
//            'error' => 'Ivyko klaida',
//            'extra' => [
//                'attr' => [
//                    'class' => 'first-name',
//                    'id' => 'first-name',
//                ]
//            ]
//        ],
//        'last_name' => [
//            'label' => 'Last name',
//            'type' => 'text',
//            'extra' => [
//                'attr' => [
//                    'class' => 'last-name',
//                    'id' => 'last-name',
//                ]
//            ]
//        ],
//    ],
//    'buttons' => [
//        'save' => [
//            'title' => 'Save',
//            'extra' => [
//                'attr' => [
//                    'class' => 'save-btn',
//                ]
//            ]
//        ]
//    ]
//];
//
//$array = [
//    'name' => 'lol'
//];
//
//if (isset($array['name'])) {
//    $x = $array['name'];
//} else {
//    $x = 'nepavyko';
//}
//
//$x = $array['name'] ?? 'nepaejo';
//
//var_dump($x);
//
//function html_attr($attr)
//{
//    $attributes = [];
//
//    foreach ($attr as $attr_index => $attr_value) {
//        $attribute = "$attr_index=\"$attr_value\"";
//        $attributes[] = $attribute;
//    }
//
//    return implode(' ', $attributes);
//}
//
//?>
<!--<html>-->
<!--<body>-->
<!---->
<?php //require('templates/form.tpl.php'); ?>
<!---->
<!--</body>-->
<!--</html>-->
<!---->
<?php
//
//$array = [
//        'participants' => [
//                [
//                        'name' => 'Juozas',
//                        'surname' => 'Juozaitis',
//                        'age' => 86
//                ],
//            [
//                        'name' => 'Dalia',
//                        'surname' => 'Zemkalnyte',
//                        'age' => 28
//            ],
//            [
//                        'name' => 'Mantas',
//                        'surname' => 'Britkus',
//                        'age' => 41
//            ],
//        ]
//
//];
//$new_array = [];
//
//foreach ($array['participants'] as $person){
//    $new_array[] = $person['age'];
//}
//
//var_dump($new_array);
//

//    $dienos = [
//            'pirmadienis',
//            'antradienis',
//            'treciadienis',
//            'ketvirtadienis',
//            'penktadienis',
//            'sestadienis',
//            'sekmadienis',
//
//    ];
//    $array = [];
//
//    foreach ($dienas as $diena){
//        if($diena === 'sestadienis' || $diena === 'sekmadienis') {
//            $array[$diena] = 'weekend';
//        }
//        }
//      var_dump ($array);
//
//

$thermo = [
[
'figure' => 'circle',
'color' => 'green',
'text' => 'As',
],
[
'figure' => 'square',
'color' => 'green',
'text' => 'B',
],
[
'figure' => 'square',
'color' => 'orange',
'text' => 'B',
],
[
'figure' => 'square',
'color' => 'red',
'text' => 'D',
],

];


?>
<!doctype html>
<html lang="en">
<head>
<style>
    .wrapper {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .figure {
        width: 150px;
        height: 150px;
        border: 2px solid black;
    }

    .figure.circle{
        border-radius: 50%;
    }

    .figure.yellow{
        background-color: yellow;
    }
    .figure.orange{
        background-color: orange;
    }
    .figure.green{
        background-color: green;
    }
    .figure.brown{
        background-color: brown;
    }
    .figure.red{
        background-color: red;
    }

</style>
</head>
<body>
<?php require 'thermo.tpl.php'; ?>
</body>
</html>



