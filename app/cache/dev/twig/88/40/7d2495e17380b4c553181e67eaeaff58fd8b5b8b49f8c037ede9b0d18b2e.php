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
\t\t.case .data-case,.case-visonner .data-case{
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tmargin: 0;
\t\t}
\t\t.data-case-move{
\t\t\tcursor: move;
\t\t\tz-index: 50;
\t\t\tdisplay: inline-block;
\t\t}
\t\ttable thead tr th{
\t\t\ttext-align: center;
\t\t}
\t\ttable tbody tr td.td{
\t\t\tbackground-color: #f5f5f5;
\t\t}
\t\t.case-visonner{
\t\t\tbackground-color: #fff;
\t\t}
\t</style>
";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "\t<p >
\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "\t\t\t<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > 
\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</p>

\t<div class=\"row\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"pre-nom col-md-7 col-sm-4 col-xs-12\">
\t\t\t\t\t<div class=\"badge\">
\t\t\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "classe", array()), "nom", array()), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t<h3>

\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "nom", array()), "html", null, true);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t </h3>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 63
        if ($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "complet", array())) {
            // line 64
            echo "\t\t\t\t\t\t<div class=\"label label-primary\">
\t\t\t\t\t\t\tEtat : <i class=\"fa fa-check-circle-o\"></i>\tTerminé
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t<div class=\"label label-warning\">
\t\t\t\t\t\t\tSignalé : <i class=\"fa fa-times\"></i>\tNon terminé
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12 text-right\">
\t\t\t\t<label class=\"alert alert-success\">
\t\t\t\t\t<i class=\"fa fa-calendar-o\"></i>
\t\t\t\t\tDu : ";
        // line 77
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
        // line 83
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "visionner")) {
            // line 84
            echo "\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\tConsultation de l'emploi de temps
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<table id=\"lesSeances\" class=\"table table-condensed table-bordered table-striped-\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-calendar fa\"></i>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "lesjours", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "leshoraires", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["heure"]) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 100
                echo twig_escape_filter($this->env, $context["heure"], "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 101
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "lesjours", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 104
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "cases", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["s"] = $this->getAttribute($context["seance"], "salle", array());
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["p"] = $this->getAttribute($context["seance"], "professeur", array());
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((($this->getAttribute($context["seance"], "jour", array()) == $context["jour"]) && ($this->getAttribute($context["seance"], "horaire", array()) == $context["heure"]))) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"case-visonner\" jour=\"";
                            // line 109
                            echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                            echo "\" heure=\"";
                            echo twig_escape_filter($this->env, $context["heure"], "html", null, true);
                            echo "\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"matiere data-case label label-default \" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 112
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["seance"], "matiere", array()), "nom", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 114
                            if ((!(null === (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p"))))) {
                                // line 115
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"professeur data-case  label label-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 116
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prenom", array()), "html", null, true);
                                echo " <strong>";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom", array()), "html", null, true);
                                echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 119
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"professeur data-case  label label-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProfesseur Inconnu
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 123
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 124
                            if ((!(null === (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s"))))) {
                                // line 125
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"salle data-case  label label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 126
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "nom", array()), "html", null, true);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 129
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"salle data-case  label label-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSalle Inconnu
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 133
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 135
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heure'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "ajout-contenu")) {
            // line 148
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"alert alert-info col-md-3 col-md-offset-2\">
\t\t\t\t\t\t\tCompleter l'emploi de temps
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"lesProfesseurs\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Les professeurs</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 166
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Les Matières de la filière</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "classe", array()), "filiere", array()), "matieres", array(0 => (isset($context["em"]) ? $context["em"] : $this->getContext($context, "em"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t<div url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_professeur_de_matiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
                echo " \" type=\"matiere\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
                echo "\" class=\"data-case-move label label-default\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Les Salles</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 187
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t<div type=\"salle\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                echo "\" class=\"data-case-move label label-success\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- La table de contenu -->
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<table id=\"lesSeances\" class=\"table table-condensed table-bordered table-striped-\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<th><i class=\"fa-calendar fa\"></i></th>
\t\t\t\t\t\t\t\t\t\t";
            // line 201
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "lesjours", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 206
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "leshoraires", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["heure"]) {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 208
                echo twig_escape_filter($this->env, $context["heure"], "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 209
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "lesjours", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"case\" jour=\"";
                    // line 211
                    echo twig_escape_filter($this->env, $context["jour"], "html", null, true);
                    echo "\" heure=\"";
                    echo twig_escape_filter($this->env, $context["heure"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div objectId=\"\" etat=\"vide\" class=\"matiere data-case label label-default \" >Matière...</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div objectId=\"\" etat=\"vide\" class=\"professeur data-case  label label-info\">Professeur...</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div objectId=\"\" etat=\"vide\" class=\"salle data-case  label label-success\">salle...</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heure'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button id=\"verification\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-stethoscope fa\"></i>\tVérifier
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\t\turl=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_enregistrer_contenu_planning", array("id" => $this->getAttribute((isset($context["planning"]) ? $context["planning"] : $this->getContext($context, "planning")), "id", array()))), "html", null, true);
            echo "\" id=\"continuer\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-send fa\"></i>\tContinuer
\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t<button id=\"refresh\" class=\"btn btn-warning\"
\t\t\t\t\t\t\t\t\tstyle=\"float:right\" 
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<i class=\"fa-refresh fa\"></i>\tReprendre
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 252
        echo "\t\t\t</div>
\t</div>

";
    }

    // line 258
    public function block_script($context, array $blocks = array())
    {
        // line 259
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/droppable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/draggable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 262
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
        return array (  510 => 262,  506 => 261,  502 => 260,  497 => 259,  494 => 258,  487 => 252,  466 => 234,  454 => 224,  445 => 220,  428 => 211,  425 => 210,  421 => 209,  417 => 208,  414 => 207,  410 => 206,  406 => 204,  397 => 202,  393 => 201,  382 => 192,  373 => 189,  368 => 188,  364 => 187,  354 => 179,  345 => 176,  338 => 175,  334 => 174,  324 => 166,  309 => 148,  302 => 143,  293 => 139,  286 => 137,  279 => 135,  275 => 133,  269 => 129,  263 => 126,  260 => 125,  258 => 124,  255 => 123,  249 => 119,  241 => 116,  238 => 115,  236 => 114,  231 => 112,  223 => 109,  220 => 108,  217 => 107,  214 => 106,  211 => 105,  207 => 104,  203 => 102,  199 => 101,  195 => 100,  192 => 99,  188 => 98,  184 => 96,  175 => 94,  171 => 93,  160 => 84,  158 => 83,  147 => 77,  140 => 72,  134 => 68,  128 => 64,  126 => 63,  118 => 58,  111 => 54,  103 => 48,  94 => 45,  91 => 44,  87 => 43,  84 => 42,  81 => 41,  44 => 7,  41 => 6,  34 => 3,  31 => 2,);
    }
}
