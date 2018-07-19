<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    
    <?php if(is_array($data)): foreach($data as $k=>$v): echo ($v["uname"]); ?>__<?php echo ($v["pwd"]); ?><br /><?php endforeach; endif; ?>
    
</body>
</html>