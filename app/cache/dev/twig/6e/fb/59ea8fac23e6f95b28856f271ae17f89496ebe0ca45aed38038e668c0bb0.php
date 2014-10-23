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
            'connected' => array($this, 'block_connected'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
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

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
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
        // line 59
        echo $this->env->getExtension('routing')->getPath("internetsite_homepage");
        echo " \">Architec AwardSpace</a>
            </div>

            <!-- Top Menu Items -->
            ";
        // line 63
        $this->displayBlock('connected', $context, $blocks);
        // line 68
        echo "            
             
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            ";
        // line 71
        $this->displayBlock('menu', $context, $blocks);
        // line 72
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
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 63
    public function block_connected($context, array $blocks = array())
    {
        // line 64
        echo "            <ul class=\"nav navbar-right top-nav\">
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>
            </ul>
            ";
    }

    // line 71
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 95
    public function block_body($context, array $blocks = array())
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
        return array (  210 => 95,  205 => 71,  198 => 65,  195 => 64,  192 => 63,  187 => 12,  177 => 115,  173 => 114,  169 => 113,  163 => 110,  157 => 107,  144 => 96,  142 => 95,  117 => 72,  115 => 71,  110 => 68,  108 => 63,  101 => 59,  63 => 24,  57 => 21,  51 => 18,  45 => 15,  39 => 12,  35 => 11,  23 => 1,);
    }
}
