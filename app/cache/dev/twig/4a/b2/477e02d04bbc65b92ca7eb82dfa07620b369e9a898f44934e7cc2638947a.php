<?php

/* IntranetAdminBundle:Default:voirmatiere.html.twig */
class __TwigTemplate_4ab2477e02d04bbc65b92ca7eb82dfa07620b369e9a898f44934e7cc2638947a extends Twig_Template
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
        // line 3
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo " | Matière
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1> <i class=\"fa-cube fa\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "</h1>
<div class=\"row\">
\t<div class=\"panel panel-primary\">
\t\t<div class=\"panel-heading\">
\t\t\tDescription
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "description", array()), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t
\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3> <i class=\"fa-cubes fa\"></i> Les Filières étudiant la matière </h3>
\t\t</div>
\t\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "filieres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
            // line 27
            echo "
\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_filière", array("id" => $this->getAttribute($context["fil"], "id", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t<label>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "nom", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</div>
\t\t\t
\t\t
\t</div>
</div>
";
        // line 40
        if ((twig_length_filter($this->env, (isset($context["filieres"]) ? $context["filieres"] : $this->getContext($context, "filieres"))) > 0)) {
            // line 41
            echo "
<div class=\"row\">
\t
\t
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3> <i class=\"fa-plus-square fa\"></i> Affecter à d'autres filières  </h3>
\t\t</div>
\t\t<form method=\"post\" role=\"form\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) ? $context["filieres"] : $this->getContext($context, "filieres")));
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 52
                echo "
\t\t\t\t<div class=\"col-md-3 form-group\">
\t\t\t\t\t<label for=\"fil";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "nom", array()), "html", null, true);
                echo "</label>
\t\t\t\t\t<input type=\"checkbox\" name=\"fil";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                echo "\" id=\"fil";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Ajouter\">
\t\t\t\t<input type=\"reset\" class=\"btn btn-default\" value=\"Annuler\">
\t\t\t</div>
\t\t</form>
\t\t
\t</div>
</div>

<div class=\"row\">
\t<div class=\"panel \">
\t\t<div class=\"panel-heading\">
\t\t<h2>
\t\t\t<i class=\"fa-users fa\"></i>
\t\tle(s) professeur(s) enseignant la matière [";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "professeurs", array())), "html", null, true);
            echo "]
\t\t</h2>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "professeurs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ce"]) {
                // line 79
                echo "\t\t\t\t";
                $context["etud"] = $this->getAttribute($context["ce"], "professeur", array());
                // line 80
                echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"col-md-5 image-profil\">
\t\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_professeur", array("id" => $this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "id", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etud"]) ? $context["etud"] : $this->getContext($context, "etud")), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t</div>
\t</div>
</div>

";
        }
        // line 96
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:voirmatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 96,  200 => 91,  187 => 86,  183 => 85,  176 => 82,  172 => 80,  169 => 79,  165 => 78,  158 => 74,  141 => 59,  127 => 55,  121 => 54,  117 => 52,  113 => 51,  101 => 41,  99 => 40,  92 => 35,  81 => 30,  77 => 29,  73 => 27,  69 => 26,  53 => 13,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
