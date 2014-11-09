<?php

/* IntranetAdminBundle:Classe:planning-content.html.twig */
class __TwigTemplate_88407d2495e17380b4c553181e67eaeaff58fd8b5b8b49f8c037ede9b0d18b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
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
        // line 3
        echo "\tajout contenu | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "nom", array()), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_style($context, array $blocks = array())
    {
        // line 7
        echo "\t<style type=\"text/css\">
\t\t.drop-hover{
\t\t\tbackground-color: rgba(0,0,0,0.1);
\t\t}
\t\t.case{
\t\t\tbackground-color: #f4551f1f1;
\t\t\theight: 70px;
\t\t}
\t\t.case i{
\t\t\tcursor: pointer;
\t\t\tmargin-top: -8px;
\t\t\tposition: absolute;
\t\t}
\t\t.case .data-case {
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tmargin: 0;
\t\t}
\t\t.data-case-move{
\t\t\tcursor: move;
\t\t\tz-index: 50;
\t\t\tdisplay: inline-block;
\t\t}
\t</style>
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "\t<p >
\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "\t\t\t<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > 
\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</p>

\t<div class=\"row\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"pre-nom col-md-7 col-sm-4 col-xs-12\">
\t\t\t\t\t<h2>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "nom", array()), "html", null, true);
        echo " </h2>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 47
        if ($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "complet", array())) {
            // line 48
            echo "\t\t\t\t\t\t<div class=\"label label-primary\">
\t\t\t\t\t\t\tEtat : <i class=\"fa fa-check-circle-o\"></i>\tTerminé
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t<div class=\"label label-warning\">
\t\t\t\t\t\t\tEtat : <i class=\"fa fa-times\"></i>\tNon terminé
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12 text-right\">
\t\t\t\t<label class=\"alert alert-success\">
\t\t\t\t\t<i class=\"fa fa-calendar-o\"></i>
\t\t\t\t\tDu : ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "datedebut", array()), "d-M-Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "datefin", array()), "d-M-Y"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 67
        if ($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "complet", array())) {
            // line 68
            echo "\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\tConsultation de l'emploi de temps
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"alert alert-info col-md-3 col-md-offset-2\">
\t\t\t\t\t\t\tCompleter l'emploi de temps
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Les professeurs</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["professeurs"]) ? $context["professeurs"] : $this->getContext($context, "professeurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["professeur"]) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t<div type=\"professeur\" class=\"data-case-move label label-info\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["professeur"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["professeur"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["professeur"], "prenom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professeur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Les Matières</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t<div type=\"matiere\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                echo "\" class=\"data-case-move label label-default\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Les Salles</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t<div type=\"salle\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                echo "\" class=\"data-case-move label label-success\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- La table de contenu -->
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<table class=\"table table-condensed table-bordered table-striped-\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jours"]) ? $context["jours"] : $this->getContext($context, "jours")));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["heures"]) ? $context["heures"] : $this->getContext($context, "heures")));
            foreach ($context['_seq'] as $context["_key"] => $context["heure"]) {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 132
                echo twig_escape_filter($this->env, $context["heure"], "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 133
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["jours"]) ? $context["jours"] : $this->getContext($context, "jours")));
                foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"case\" jour=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                    echo "\" heure=\"{heure}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div etat=\"vide\" class=\"matiere data-case label label-default \" >Matière...</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div etat=\"vide\" class=\"professeur data-case  label label-info\">Professeur...</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div etat=\"vide\" class=\"salle data-case  label label-success\">salle...</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heure'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t


\t\t\t\t";
        }
        // line 159
        echo "\t\t\t</div>
\t</div>

";
    }

    // line 165
    public function block_script($context, array $blocks = array())
    {
        // line 166
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/droppable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/draggable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contenuplanning.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Classe:planning-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 169,  340 => 168,  336 => 167,  331 => 166,  328 => 165,  321 => 159,  308 => 148,  299 => 144,  284 => 135,  281 => 134,  277 => 133,  273 => 132,  270 => 131,  266 => 130,  262 => 128,  253 => 126,  249 => 125,  238 => 116,  229 => 113,  224 => 112,  220 => 111,  210 => 103,  201 => 100,  196 => 99,  192 => 98,  182 => 90,  171 => 87,  166 => 86,  162 => 85,  147 => 72,  141 => 68,  139 => 67,  128 => 61,  121 => 56,  115 => 52,  109 => 48,  107 => 47,  101 => 44,  94 => 39,  85 => 36,  82 => 35,  78 => 34,  75 => 33,  72 => 32,  44 => 7,  41 => 6,  34 => 3,  31 => 2,);
    }
}
