<?php

/* IntranetAdminBundle:Professeur:affectermatiere.html.twig */
class __TwigTemplate_d4e7d423877ec46999139c8e39d5bb90c4247c5402f752db37b42e80aa0d1676 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
        echo " | affectation de matière";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " 
 <div class=\"row\">
 \t<div class=\"col-md-2 col-sm-3 image-profil\">
\t\t\t<div>
\t\t\t\t";
        // line 8
        if ((!(null === $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "compte", array())))) {
            echo "\t\t
\t\t\t\t<img  class=\"thumbnail\" src=\" ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "compte", array()), "image", array()), "html", null, true);
            echo "\">
\t\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/default-no.png"), "html", null, true);
            echo "\">
\t\t\t\t\t<a class=\"btn btn-success btn-xs\" href=\" ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_compte_professeur", array("id" => $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "id", array()))), "html", null, true);
            echo " \">Ajouter un compte</a>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["professeur"]) ? $context["professeur"] : $this->getContext($context, "professeur")), "nom", array()), "html", null, true);
        echo "</h2>
\t\t\t</div>
 </div>
<div class=\"row\">
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<h2>Affectation de matière(s)</h2>
\t\t<form role=\"form\" method=\"post\">
\t\t\t
\t\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 26
            echo "
\t\t\t\t

\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"id";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t<input type=\"checkbox\" name=\"matieres";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\" id=\"id";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t<div class=\"form-group col-lg-12\">
\t\t\t\t<input type=\"submit\" value=\"Affecter\" class=\"btn btn-primary\">
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Professeur:affectermatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  101 => 31,  95 => 30,  89 => 26,  85 => 25,  72 => 17,  67 => 14,  62 => 12,  57 => 11,  51 => 9,  47 => 8,  41 => 4,  38 => 3,  29 => 2,);
    }
}
