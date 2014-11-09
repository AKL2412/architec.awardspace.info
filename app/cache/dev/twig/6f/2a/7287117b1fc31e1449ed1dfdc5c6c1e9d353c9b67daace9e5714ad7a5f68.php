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
    </head>
    <body>
     ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 34
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
      ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        

        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 42
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 43
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 44
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        <div>
        <div class=\"row\">
        \t
        <div id=\"form\" class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\"  >
\t        <div class=\"detail col-md-4 col-xs-12 col-sm-5\">
\t        \t<div class=\"image col-md-12 col-xs-12 col-sm-12\" >
\t        \t\t<img src=\" ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.JPG"), "html", null, true);
        echo " \" class=\"thumbnail circle\">
\t        \t</div>
\t        \t<div class=\"connection col-md-12\" >
            ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a class=\"btn btn-warning btn-xs\" href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 64
            echo "                <a class=\"btn btn-info  btn-xs\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " </a>
            ";
        }
        // line 66
        echo "            <br>
            <a class=\"btn-link btn\" href=\" ";
        // line 67
        echo $this->env->getExtension('routing')->getPath("internetsite_homepage");
        echo " \">Architec AwardSpace</a>
        </div>
\t        </div>
\t        <div class=\"col-md-8 col-xs-12 col-sm-7\">
\t        \t";
        // line 71
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 73
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

    // line 71
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 72
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
        return array (  179 => 72,  176 => 71,  161 => 73,  159 => 71,  152 => 67,  149 => 66,  141 => 64,  135 => 61,  131 => 60,  126 => 59,  124 => 58,  118 => 55,  109 => 48,  103 => 47,  94 => 44,  89 => 43,  84 => 42,  80 => 41,  75 => 38,  66 => 35,  61 => 34,  57 => 33,  27 => 6,  20 => 1,);
    }
}
