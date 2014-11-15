<?php

/* IntranetAdminBundle:Professeur:list.html.twig */
class __TwigTemplate_f961f354e6a860d617bd6b01e59ff17e48517defd8d2dfee5256ffa415edbfba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
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
        echo "Liste des étudiants";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["professeurs"]) ? $context["professeurs"] : $this->getContext($context, "professeurs"))) > 0)) {
            // line 6
            echo "
\t <div class=\"panel panel-default\">
\t \t<div class=\"panel-heading\">La liste des professeurs
\t \t<a href=\" ";
            // line 9
            echo $this->env->getExtension('routing')->getPath("intranet_admin_ajout_professeur");
            echo " \"
\t \t\tclass=\"btn btn-default btn-xs\"
\t \t\tstyle=\"float:right\" 
\t \t>Ajouter un nouveau professeur</a>
\t \t</div>
\t \t<div class=\"panel-body\">
\t \t\t<table id=\"dataTables-professeurs\"
\t \t\t\tclass=\"table table-bordered table-condensed table-striped\">
\t\t\t \t<thead>
\t\t\t \t\t<tr>
\t\t\t \t\t\t<th>Matricule</th>
\t\t\t \t\t\t<th>Nom</th>
\t\t\t \t\t\t<th>Prénom(s)</th>
\t\t\t \t\t\t<th>E-mail</th>
\t\t\t \t\t</tr>
\t\t\t \t\t<tbody>
\t\t\t \t\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["professeurs"]) ? $context["professeurs"] : $this->getContext($context, "professeurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
                // line 26
                echo "\t\t\t \t\t\t\t<tr>
\t\t\t \t\t\t\t\t<td>
\t\t\t \t\t\t\t\t\t<a href=\" ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_professeur", array("id" => $this->getAttribute($context["prof"], "id", array()))), "html", null, true);
                echo " \">
\t\t\t \t\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["prof"], "matricule", array()), "html", null, true);
                echo "
\t\t\t \t\t\t\t\t\t</a>
\t\t\t \t\t\t\t\t</td>
\t\t\t \t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["prof"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t \t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["prof"], "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t \t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["prof"], "email", array()), "html", null, true);
                echo "</td>
\t\t\t \t\t\t\t</tr>

\t\t\t \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t \t\t</tbody>
\t\t\t \t</thead>

\t\t\t</table>
\t \t</div>
\t </div>

\t ";
        } else {
            // line 46
            echo "
\t ";
        }
        // line 48
        echo "\t
";
    }

    // line 50
    public function block_script($context, array $blocks = array())
    {
        // line 51
        echo "<script>
    \$(document).ready(function() {
        \$('#dataTables-professeurs').dataTable();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Professeur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  123 => 50,  118 => 48,  114 => 46,  104 => 38,  94 => 34,  90 => 33,  86 => 32,  80 => 29,  76 => 28,  72 => 26,  68 => 25,  49 => 9,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
