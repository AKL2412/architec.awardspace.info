<?php

/* IntranetAdminBundle:Professeur:voir.html.twig */
class __TwigTemplate_8c4b18c1df04c2367056367979eaaf6852805c182e089738fe350081aad80a2b extends Twig_Template
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
        echo "voir un professeur | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ((!(null === (isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur"))))) {
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
            if ((!(null === $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "compte", array())))) {
                echo "\t\t
\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"label label-success\">
\t\t\t\t\tAjouté : ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "date", array()), "d-M-Y"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_compte_professeur", array("id" => $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
            echo " <span class=\"nom\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-5 text-right\">
\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_professeur", array("id" => $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_professeur");
            echo "\">les professeurs</a>
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
        return "IntranetAdminBundle:Professeur:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  114 => 34,  110 => 33,  102 => 30,  95 => 25,  90 => 23,  85 => 22,  79 => 19,  72 => 16,  68 => 15,  61 => 10,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  38 => 3,  29 => 2,);
    }
}
