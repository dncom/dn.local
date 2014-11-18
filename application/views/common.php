<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1-strict.dtd">
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script src="<?php echo URL::base(); ?>public/js/jquery-1.7.1.min.js"></script>
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
    
<?php endforeach; ?>
  <link rel="shortcut icon" href="<?php echo URL::base(); ?>public/images/favicon.png" type="image/png"/>  
  <script>
$(document).ready(function()
{
    
    
    $('#wall2').hide();
    $('#else').hide();
    $('#main_info').click(function()
    {
        
         $('#else').slideToggle(800);
    });
        
    $('#wall1').click(function()
    {
        
         $('#wall2').slideToggle(800);
    });

});
</script>       
</head>
<body id = "body">
 <div id = "container" >
    <div id = "header">
        <div id = "header1"><a href="<?php echo URL::site(); ?>"><img width = "300px" height="173px" src="<?php echo URL::base(); ?>public/images/header1.png"></div></a>
     
     <div id = "header2"><img width = "500px" height="173px" src="<?php echo URL::base(); ?>public/images/ussr.png"></div>
     
<div id = "header3">
<table border = "2" color = "blue">
<tr>
    <th colspan="5"><a href ="1. Russia.png"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/1. Russia.png"></a></th>
    <th colspan="5"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/2. Ukraine.png"></th>
    <th colspan="5"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/3. Belarus.png"></th>
    <th colspan="5"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/4.Moldova.png"></th>
	
</tr>
<tr>
	<th colspan="2"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/5. Estonia.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/6.Lithuania.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/7.Latvia.png"></th>
	
        
        
</tr>
<tr>
	<th colspan="2"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/8. Azerbaijan.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/9. Armenia.png"></th>
        <th colspan="6"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/10. Georgia.png"></th>
</tr>
<tr>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/11. Kazakhstan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/12. Kyrgyzstan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/13. Uzbekistan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/14. Tajikistan.png"></th>
    <th colspan="4"><img width = "50px" height="30px" src="<?php echo URL::base(); ?>public/images/15. Turkmenistan.png"></th>
</tr>
</table>
</div> 
</div>
 
		
                    <?php echo $content; ?>
		
<div id = "sign">
			<div id = "sign1"><a href="http://kohanaframework.su/" target="_blank"><img src="http://kohanaframework.su/kohana.png" border="0" alt="Фреймворк Kohana v3.2. Документация. Обучение" title="Фреймворк Kohana v3.2. Документация. Обучение"/></a></div>
			<div id = "sign2">Большая реклама 2</div>
			<div id = "sign3">
				<div id = "sign31">Реклама поменьше 1</div>
				<div id = "sign32">
				<table border = "2" color = "blue" id = "table1">
					<tr><th>Еще меньше1</th><th>Еще меньше2</th></tr>
					<tr><th>Уще меньше3</th><th>Еще меньше4</th></tr>
				</table>
				</div>
				<div id = "sign33">Реклама поменьше 2</div>
				<div id = "sign34">
				<table border = "2" color = "blue" id = "table1">
					<tr><th>вот</th><th>бы</th><th>вся</th><th>ре</th></tr>
					<tr><th>кла</th><th>ма</th><th>была</th><th>та</th></tr>
					<tr><th>кой</th><th>же</th><th>мале</th><th>нь</th></tr>
					<tr><th>кой</th><th>и не</th><th>на вяз</th><th>чивой</th></tr>
				</table>	
				</div>
			</div>
			</div>
  <footer id = "footer">
    <marquee> Copyright Александр Ковальчук </marquee>
  </footer>
		</div>
</body>
</html>
