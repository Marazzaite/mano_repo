<?php
//function validate_not_empty(){
//    print 'Hello';
//}
//function validate_number(){
//    print 'World';
//}
//
//$array = ['validate_not_empty', 'validate_number', 'validate_email'];
//
//foreach ($array as $value){
//    if(is_callable($value)){
//        $value();
//    }else{
//        var_dump('neveikia');
//    }
//}
$users = [
    [
        'id' => 1,
        'name' => 'Bill',
    ],
    [
        'id' => 2,
        'name' => 'John',
    ],
];

$comments = [
    [
        'id' => 1,
        'userId' => 1,
        'date' => '2019-12-17',
        'comment' => 'This sucks',
    ],
    [
        'id' => 2,
        'userId' => 1,
        'date' => '2017-09-1',
        'comment' => 'I like that',
    ],
    [
        'id' => 3,
        'userId' => 2,
        'date' => '1986-04-20',
        'comment' => 'This is a comment',
    ]
];

$array = [];
foreach ($comments as $comment) {
    foreach ($users as $user) {
        if ($comment['userId'] === $user['id']) {
            $comment['author'] = $user['name'];
            $array[] = $comment;
            }
    }
}
?>

<html>
<body>
<style>
    .container {
        width: 150px;
        height: 100px;
        border: 3px solid black;
    }
    .desc{

    }
</style>
<div class="container">
    <?php foreach($array as $post): ?>
    <article>
        <div class="desc">
            <span>User: <?php  print $post['author']; ?></span>
            <span><?php print $post['date'] ?> </span>
        </div>
        <div class="comment">
            <?php print $post['comment']; ?>

        </div>
    </article>
    <?php endforeach; ?>
</div>

</body>
</html>
