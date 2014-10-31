<?php

/* ::intranet-layout.html.twig */
class __TwigTemplate_6efb59ea8fac23e6f95b28856f271ae17f89496ebe0ca45aed38038e668c0bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'connected' => array($this, 'block_connected'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.JPG"), "html", null, true);
        echo " \" />
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        // line 26
        $this->displayBlock('style', $context, $blocks);
        // line 28
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">

        <!--   les liens de navigation -->
            <!-- div class=\"positionUrl hidden-xs\" >
            \t<a href=\"#\">home</a>
                <i class=\" fa fa-angle-right\"></i>
            \t<a href=\"#\">Sotir</a>
                <i class=\" fa fa-angle-right\"></i>
            \t<a href=\"#\" class=\"active\">enter</a>
           \t</div --> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <a class=\"navbar-brand\" href=\" ";
        // line 61
        echo $this->env->getExtension('routing')->getPath("internetsite_homepage");
        echo " \">Architec AwardSpace</a>
            </div>

            <!-- Top Menu Items -->
            ";
        // line 65
        $this->displayBlock('connected', $context, $blocks);
        // line 70
        echo "            
             
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            ";
        // line 73
        $this->displayBlock('menu', $context, $blocks);
        // line 74
        echo "            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\" class=\"myBody\"> 

            <div class=\"container-fluid\">

                

                <!-- Page Heading -->
                <!-- <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                <i class=\"fa fa-dashboard\"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div> -->
                <!-- /.row -->
                ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript 
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
    -->

    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 122
        $this->displayBlock('script', $context, $blocks);
        // line 124
        echo "</body>

</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 26
    public function block_style($context, array $blocks = array())
    {
    }

    // line 65
    public function block_connected($context, array $blocks = array())
    {
        // line 66
        echo "            <ul class=\"nav navbar-right top-nav\">
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>
            </ul>
            ";
    }

    // line 73
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
    }

    // line 122
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::intranet-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 122,  237 => 97,  232 => 73,  225 => 67,  222 => 66,  219 => 65,  214 => 26,  209 => 12,  202 => 124,  200 => 122,  196 => 121,  192 => 120,  186 => 117,  182 => 116,  178 => 115,  172 => 112,  166 => 109,  153 => 98,  151 => 97,  126 => 74,  124 => 73,  119 => 70,  117 => 65,  110 => 61,  75 => 28,  73 => 26,  69 => 25,  63 => 22,  57 => 19,  53 => 18,  47 => 15,  41 => 12,  37 => 11,  25 => 1,);
    }
}
