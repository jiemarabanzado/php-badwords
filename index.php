<?php     
    $paragraph='Spending time at national parks can be an exciting adventure, but this wasnt the type of excitement she was hoping to experience. As she contemplated the situation she found herself in, she knew shed gotten herself in a little more than she bargained for. It wasnt often that she found herself in a tree staring down at a pack of wolves that were looking to make her their next meal.';
    $word= $_GET['word'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    p{
        font-weight:bold;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
</style>
<body>
    <p><?php echo $paragraph ?></p>
    <div>Paragraph lenght: <strong style="font-size: 1.1rem;"><?php  echo strlen($paragraph)?></strong></div>
    <h2><?php echo  str_replace($word,'***' , $word)?></h2>
</body>
</html>