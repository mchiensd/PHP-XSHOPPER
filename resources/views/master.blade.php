
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <meta charset="utf-8" />
        <title>Smarty - Multipurpose + Admin</title>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="source/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- REVOLUTION SLIDER -->
        <link href="source/assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
        <link href="source/assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="source/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="source/assets/css/layout.css" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="source/assets/css/header-1.css" rel="stylesheet" type="text/css" />
        <link href="source/assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
        <link href="source/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />








       
       


    </head>

<body>
	@include('header')
	
	
	@yield('content')
	
	@include('footer')

  
    <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = 'source/assets/plugins/';</script>
        <script type="text/javascript" src="source/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

        <script type="text/javascript" src="source/assets/js/scripts.js"></script>
        
        

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="source/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="source/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="source/assets/js/view/demo.revolution_slider.js"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script type="text/javascript" src="source/assets/js/view/demo.shop.js"></script>



        
        <!-- STYLESWITCHER - REMOVE -->
        <script async type="text/javascript" src="source/assets/plugins/styleswitcher/styleswitcher.js"></script>






       
    </body>
</html>
