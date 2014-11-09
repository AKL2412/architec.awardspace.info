<?php

/* IntranetAdminBundle:Etudiant:list.html.twig */
class __TwigTemplate_f8653987ee2c919c0f38dd6e9b7942233b047ad7dd7d4335ebac969c1d48be61 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants"))) > 0)) {
            // line 6
            echo "
\t <div class=\"panel panel-default\">
\t \t<div class=\"panel-heading\">La liste de étudiants</div>
\t \t<div class=\"panel-body\">
\t \t\t<table id=\"dataTables-etudiants\" class=\"table table-bordered table-condensed table-striped\">
\t\t\t \t<thead>
\t\t\t \t\t<tr>
\t\t\t \t\t\t<th>Matricule</th>
\t\t\t \t\t\t<th>Nom</th>
\t\t\t \t\t\t<th>Prénom(s)</th>
\t\t\t \t\t\t<th>E-mail</th>
\t\t\t \t\t</tr>
\t\t\t \t\t<tbody>
\t\t\t \t\t\t";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
            foreach ($context['_seq'] as $context["_key"] => $context["etu"]) {
                // line 20
                echo "\t\t\t \t\t\t\t<tr>
\t\t\t \t\t\t\t\t<td>
\t\t\t \t\t\t\t\t\t<a href=\" ";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_etudiant", array("id" => $this->getAttribute($context["etu"], "id", array()))), "html", null, true);
                echo " \">
\t\t\t \t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "matricule", array()), "html", null, true);
                echo "
\t\t\t \t\t\t\t\t\t</a>
\t\t\t \t\t\t\t\t</td>
\t\t\t \t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t \t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t \t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "email", array()), "html", null, true);
                echo "</td>
\t\t\t \t\t\t\t</tr>

\t\t\t \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t \t\t</tbody>
\t\t\t \t</thead>

\t\t\t </table>
\t \t</div>
\t </div>

\t ";
        } else {
            // line 40
            echo "
\t ";
        }
        // line 42
        echo "\t
";
    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        // line 45
        echo "<script>
    \$(document).ready(function() {
        \$('#dataTables-etudiants').dataTable();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  114 => 44,  109 => 42,  105 => 40,  95 => 32,  85 => 28,  81 => 27,  77 => 26,  71 => 23,  67 => 22,  63 => 20,  59 => 19,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
