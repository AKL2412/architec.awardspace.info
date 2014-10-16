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
            <div class=\"positionUrl hidden-xs\" >
            \t<a href=\"#\">home</a>
            \t<a href=\"#\">Sotir</a>
            \t<a href=\"#\" class=\"active\">enter</a>
           \t</div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Architec AwardSpace</a>
            </div>

            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\"><strong>John Smith</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">View All</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Smith <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                        </li>
                    </ul>
                </li>

            </ul>
            
             
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            ";
        // line 164
        $this->displayBlock('menu', $context, $blocks);
        // line 165
        echo "            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\" class=\"myBody\"> 

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
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
                </div>
                <!-- /.row -->
                <a href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"label label-danger\"> 
                        logout
                </a>
                ";
        // line 189
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo "
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
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

    // line 164
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 189
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
        return array (  288 => 189,  283 => 164,  278 => 12,  268 => 209,  264 => 208,  260 => 207,  254 => 204,  248 => 201,  235 => 190,  233 => 189,  227 => 186,  204 => 165,  202 => 164,  59 => 24,  53 => 21,  47 => 18,  41 => 15,  35 => 12,  22 => 1,);
    }
}
