<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world from html</h1>
    <?php
 $author='salman';
 ?> 
 <h1> Hello world from
    <?php echo $author;
    ?>
 </h1>
 <?php
 //string basics
 $str="Hello world from MIST";
 echo strlen($str).'<br/>';
 echo str_word_count($str) . '<br/>';
 ?>

 $students=[
    'faisal'=>22,
    'mohyminur'=>23,
    'tonmoy'=>24
    
    ];
    foreach($students as $name=>$roll)
    {
        echo"name : " . $name . ',' . 'Roll: ' 
    }

</body>
</html>
