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
\t <table id=\"dataTables-etudiants\"
\t class=\"table table-bordered table-condensed table-striped\">
\t \t<thead>
\t \t\t<tr>
\t \t\t\t<th>Matricule</th>
\t \t\t\t<th>Nom</th>
\t \t\t\t<th>Prénom(s)</th>
\t \t\t\t<th>E-mail</th>
\t \t\t</tr>
\t \t\t<tbody>
\t \t\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
            foreach ($context['_seq'] as $context["_key"] => $context["etu"]) {
                // line 18
                echo "\t \t\t\t\t<tr>
\t \t\t\t\t\t<td>
\t \t\t\t\t\t\t<a href=\" ";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_etudiant", array("id" => $this->getAttribute($context["etu"], "id", array()))), "html", null, true);
                echo " \">
\t \t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "matricule", array()), "html", null, true);
                echo "
\t \t\t\t\t\t\t</a>
\t \t\t\t\t\t</td>
\t \t\t\t\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "nom", array()), "html", null, true);
                echo "</td>
\t \t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "prenom", array()), "html", null, true);
                echo "</td>
\t \t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["etu"], "email", array()), "html", null, true);
                echo "</td>
\t \t\t\t\t</tr>

\t \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t \t\t</tbody>
\t \t</thead>

\t </table>

\t ";
        } else {
            // line 36
            echo "
\t ";
        }
        // line 38
        echo "\t
";
    }

    // line 40
    public function block_script($context, array $blocks = array())
    {
        // line 41
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
        return array (  113 => 41,  110 => 40,  105 => 38,  101 => 36,  93 => 30,  83 => 26,  79 => 25,  75 => 24,  69 => 21,  65 => 20,  61 => 18,  57 => 17,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
