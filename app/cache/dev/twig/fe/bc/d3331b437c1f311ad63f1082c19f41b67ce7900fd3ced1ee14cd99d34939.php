<?php

/* IntranetAdminBundle:Etudiant:voir.html.twig */
class __TwigTemplate_febcd3331b437c1f311ad63f1082c19f41b67ce7900fd3ced1ee14cd99d34939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "voir un étudiant";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ((!(null === (isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant"))))) {
            // line 5
            echo "
\t\t<p >
";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</p>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2 col-sm-3 image-profil\">
\t\t\t<div>
\t\t\t\t";
            // line 15
            if ((!(null === $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "compte", array())))) {
                echo "\t\t
\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"label label-default\">
\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "date", array()), "d-M-Y \\à g:ia"), "html", null, true);
                echo " 
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/default-no.png"), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"btn btn-success btn-xs\" href=\" ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_compte_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
                echo " \">Ajouter un compte</a>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-10 col-sm-9 contenu-profil\">
\t\t\t\t
\t\t\t\t\t<div class=\"pre-nom col-md-8 col-sm-8 col-xs-7\">
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo " <span class=\"nom\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-5 text-right\">
\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_etudiant");
            echo "\">les étudiants</a>
\t\t\t\t\t</div>
\t\t\t\t<div>
 <ul class=\"nav nav-tabs\" role=\"tablist\">
  <li role=\"presentation\" class=\"active\"><a href=\"#\">Home</a></li>
  <li role=\"presentation\"><a href=\"#\">Profile</a></li>
  <li role=\"presentation\"><a href=\"#\">Messages</a></li>
</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t";
        }
        // line 48
        echo "\t

\t
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  111 => 34,  107 => 33,  99 => 30,  92 => 25,  87 => 23,  82 => 22,  76 => 19,  69 => 16,  65 => 15,  58 => 10,  49 => 8,  45 => 7,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
