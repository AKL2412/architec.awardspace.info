<?php

/* IntranetAdminBundle:Default:index.html.twig */
class __TwigTemplate_343f91d577bad72689099c266a6de6c0535313fe47d78aca3057fa2a1e646ffa extends Twig_Template
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
            echo "<table class=\"table\">
\t<tr>
\t\t<td>Username</td>
\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "username", array()), "html", null, true);
            echo "</td>
\t</tr>
\t<tr>
\t\t<td>Password</td>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "password", array()), "html", null, true);
            echo "</td>
\t</tr>
</table>
Bonjour ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "password", array()), "html", null, true);
            echo "
<a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("intranet_admin_auteur");
            echo "\" class=\"btn-link\">les auteurs</a>
<br>
";
            // line 20
            if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
                // line 21
                echo "  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("intranet_admin_auteur");
                echo "\">Ajouter une annonce</a></li>
";
            }
            // line 23
            echo "
<a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("intranet_admin_accueil");
            echo "\">Administrateur</a>
";
            // line 25
            echo $this->env->getExtension('routing')->getPath("intranet_admin_accueil");
            echo "

";
        } else {
            // line 28
            echo "   Accueil | not connecté
";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  83 => 28,  77 => 25,  73 => 24,  70 => 23,  64 => 21,  62 => 20,  57 => 16,  51 => 15,  45 => 12,  38 => 8,  33 => 5,  31 => 4,  28 => 3,);
    }
}
