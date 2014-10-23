<?php

/* IntranetAdminBundle:Default:accueil.html.twig */
class __TwigTemplate_7830aac795d9feb7c1af6b7479b990f91097292bd4bf3192e53feba9aa271095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "<div class=\"jumbotron\">
  <h1>Accueil Admin</h1>
  <p>...</p>
  ";
            // line 8
            if (array_key_exists("user", $context)) {
                // line 9
                echo "  <p class=\"btn btn-primary btn-lg\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
                echo " </p>
  ";
            }
            // line 11
            echo "</div>
";
        } else {
            // line 13
            echo "   Accueil | not connecté
";
        }
        // line 15
        echo "
<form action=\" ";
        // line 16
        echo $this->env->getExtension('routing')->getPath("intranet_admin_upload");
        echo " \" method=\"post\" enctype=\"multipart/form-data\">
  Please choose a file: <input type=\"file\" name=\"uploadFile\"><br>
  <input type=\"text\" placeholder=\"dossier\" name=\"dossier\"><br>
  <input type=\"submit\" value=\"Upload File\">
</form> 
";
        // line 21
        if (array_key_exists("message", $context)) {
            // line 22
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  65 => 21,  57 => 16,  54 => 15,  50 => 13,  46 => 11,  40 => 9,  38 => 8,  33 => 5,  31 => 4,  28 => 3,);
    }
}
