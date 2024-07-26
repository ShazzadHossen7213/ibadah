<?php
/*
* This templete for dispaying the header
*/

?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
    <?php wp_footer(); ?>
</body>
</html>