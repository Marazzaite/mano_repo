


//$array = [
//    't' => [
//            'b' => [
//                    'a' => 'my value'
//            ]
//    ]
//];
//
//print $array['t']['b']['a'];

//$form = [
//    'fields' =>[
//            'password' =>[
//                    'error' => 'field is empty'
//            ]
////]
////    ];
////    print $form['fields']['password']['error'];
//
//$form = [
//    'fields' =>[
//        'password' =>[
//            'password' => 'kazkas'
//        ],
//        'email' => [
//            'email' => 'kazkas'
//        ]
//    ]
//
//];
////print $form['fields']['password']['label'];
//
//foreach ($form['fields'] as $field_id => $field){
//    print $field_id;
//

$receptai = [];

$ingridients = [
'obuolys',
'miltai',
'cukrus',
'pienas',
];


foreach ($ingridients as $ingridient) {
print $ingridient;
$receptai ['pyragas'][] = $ingridient;
}
var_dump ($receptai);

