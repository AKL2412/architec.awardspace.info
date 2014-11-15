<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6f2a7287117b1fc31e1449ed1dfdc5c6c1e9d353c9b67daace9e5714ad7a5f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
        body{
        \tbackground-color: rgba(0,0,0,0.3);
        }
\t\t#form{
\t\t\tbox-shadow: 0 0 8px rgba(0,0,0,0.9);
\t\t\tpadding: 8px;
\t\t\tmargin-top: 10%;
\t\t\tbackground-color: #fff;
\t\t\t/*border-left: 2px solid #000162;
\t\t\tborder-top: 2px solid #000162;
\t\t\tborder-bottom: 2px solid #CD000D;
\t\t\tborder-right: 2px solid #CD000D;*/
\t\t}
\t\t.image img{
\t\t\tdisplay: block;
\t\t\twidth: 70%;
\t\t}
\t\t.connection{
\t\t\tmargin-top: 8px;
\t\t\tborder-top: 1px solid #fff;
\t\t\tpadding-top: 8px;
\t\t}
        </style>
        <title>Authentification</title>
    </head>
    <body>
     ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 35
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
      ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        

        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 43
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 45
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        <div>
        <div class=\"row\">
        \t
        <div id=\"form\" class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\"  >
\t        <div class=\"detail col-md-4 col-xs-12 col-sm-5\">
\t        \t<div class=\"image col-md-12 col-xs-12 col-sm-12\" >
\t        \t\t<img src=\" ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.JPG"), "html", null, true);
        echo " \" class=\"thumbnail circle\">
\t        \t</div>
\t        \t<div class=\"connection col-md-12\" >
            ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a class=\"btn btn-warning btn-xs\" href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 65
            echo "                <a class=\"btn btn-info  btn-xs\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " </a>
            ";
        }
        // line 67
        echo "            <br>
            <a class=\"btn-link btn\" href=\" ";
        // line 68
        echo $this->env->getExtension('routing')->getPath("internetsite_homepage");
        echo " \">Architec AwardSpace</a>
        </div>
\t        </div>
\t        <div class=\"col-md-8 col-xs-12 col-sm-7\">
\t        \t";
        // line 72
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 74
        echo "
\t        </div>
        \t

        </div>

        </div>
            
        </div>
    </body>
</html>
";
    }

    // line 72
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 73
        echo "\t  \t\t\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  177 => 72,  162 => 74,  160 => 72,  153 => 68,  150 => 67,  142 => 65,  136 => 62,  132 => 61,  127 => 60,  125 => 59,  119 => 56,  110 => 49,  104 => 48,  95 => 45,  90 => 44,  85 => 43,  81 => 42,  76 => 39,  67 => 36,  62 => 35,  58 => 34,  27 => 6,  20 => 1,);
    }
}
