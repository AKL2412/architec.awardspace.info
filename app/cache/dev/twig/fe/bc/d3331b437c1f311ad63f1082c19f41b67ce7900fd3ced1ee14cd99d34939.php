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
        echo "Etudiant : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
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
\t\t\t\t\tMis à jour: ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "date", array()), "d-M-Y"), "html", null, true);
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
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"pre-nom col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo " <span class=\"nom\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-8 col-xs-12 text-right\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\" ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_modifier_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
            echo " \">modifier</a>
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("intranet_admin_liste_etudiant");
            echo "\">les étudiants</a>
\t\t\t\t\t\t\t";
            // line 36
            $context["classeA"] = $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "classeActuelle", array(), "method");
            // line 37
            echo "\t\t\t\t\t\t\t";
            if ((null === (isset($context["classeA"]) ? $context["classeA"] : $this->getContext($context, "classeA")))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_classe_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
                echo "\">Définir la classe actuelle</a>
\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_classe", array("id" => $this->getAttribute($this->getAttribute((isset($context["classeA"]) ? $context["classeA"] : $this->getContext($context, "classeA")), "classe", array()), "id", array()))), "html", null, true);
                echo "\" class=\"label label-primary\">
\t\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classeA"]) ? $context["classeA"] : $this->getContext($context, "classeA")), "classe", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t<div class=\"row\" style=\"padding-top:20px;\">
\t\t\t\t\t 
\t\t\t\t\t <div class=\"tabbable tabs-left\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs \">
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"#Information\" data-toggle=\"tab\">Informations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<a href=\"#parcours\" data-toggle=\"tab\">Parcours</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#témoignages\" data-toggle=\"tab\">Documents</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#tuteur\" data-toggle=\"tab\">Tuteur de l'étudiant</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#urgence\" data-toggle=\"tab\">Contact d'urgence</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\" style=\"padding-top:20px;\">

\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"parcours\">
\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Classe</th>
\t\t\t\t\t\t\t\t\t\t\t<th >Année Scolaire</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "classes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_classe", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 86
                if (((!(null === (isset($context["classeA"]) ? $context["classeA"] : $this->getContext($context, "classeA")))) && ($this->getAttribute($this->getAttribute((isset($context["classeA"]) ? $context["classeA"] : $this->getContext($context, "classeA")), "classe", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array())))) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Classe actuelle</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "anneescolaire", array()), "annee", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"Information\">
\t\t\t\t\t\t\t\t<table class=\"table-condensed \">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Nom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Prenom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Matricule : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "matricule", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Email : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Date de naissance : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "datenaissance", array()), "d-M-Y"), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Téléphone : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td> <span class=\"label label-info\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "sexe", array()), "html", null, true);
            echo "</span> </td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"témoignages\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\tTous les documents pour l'inscription
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tuteur\">
\t\t\t\t\t\t\t\t";
            // line 151
            $context["tut"] = $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "tuteur", array());
            // line 152
            echo "\t\t\t\t\t\t\t\t\t";
            if ((null === (isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")))) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h2>Veuillez renseigner le tuteur</h2>
\t\t\t\t\t\t\t\t\t";
                // line 155
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
                echo "
    ";
                // line 156
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "

    <div class=\"form-group col-md-6\">
\t    ";
                // line 160
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom du tuteur"));
                echo "

\t    ";
                // line 163
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
                echo "

\t    ";
                // line 166
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-6\">
\t    ";
                // line 170
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom du tuteur"));
                echo "

\t    ";
                // line 173
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
                echo "

\t    ";
                // line 176
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prenom du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-6\">
\t    ";
                // line 180
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Téléphone du tuteur"));
                echo "

\t    ";
                // line 183
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
                echo "

\t    ";
                // line 186
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-6\">
\t    ";
                // line 190
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email du tuteur"));
                echo "

\t    ";
                // line 193
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
                echo "

\t    ";
                // line 196
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-12\">
\t    ";
                // line 200
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label" => "adresse du tuteur"));
                echo "

\t    ";
                // line 203
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
                echo "

\t    ";
                // line 206
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "adresse du tuteur")));
                echo "
    </div>
    <div class=\"form-group\">
  \t<input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn\">
  <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default btn\">

  </div>
  
  ";
                // line 215
                echo "  ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 217
                echo "
\t\t\t\t\t\t\t\t\t<table class=\"table-condensed \">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Nom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "nom", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Prenom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "prenom", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Email : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "email", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Téléphone : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "telephone", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Adresse : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 250
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "adresse", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
            }
            // line 254
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"urgence\">
\t\t\t\t\t\t\t\t";
            // line 257
            $context["tut"] = $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "contacturgent", array());
            // line 258
            echo "\t\t\t\t\t\t\t\t\t";
            if ((null === (isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")))) {
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t
<h2>Veuillez renseigner le contact en cas d'urgence</h2>
\t\t\t\t\t\t\t\t\t";
                // line 261
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), 'form_start', array("attr" => array("role" => "form")));
                echo "
    ";
                // line 262
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), 'errors');
                echo "

    <div class=\"form-group col-md-6\">
\t    ";
                // line 266
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "nom", array()), 'label', array("label" => "Nom du tuteur"));
                echo "

\t    ";
                // line 269
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "nom", array()), 'errors');
                echo "

\t    ";
                // line 272
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-6\">
\t    ";
                // line 276
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "prenom", array()), 'label', array("label" => "Prenom du tuteur"));
                echo "

\t    ";
                // line 279
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "prenom", array()), 'errors');
                echo "

\t    ";
                // line 282
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prenom du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-6\">
\t    ";
                // line 286
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "telephone", array()), 'label', array("label" => "Téléphone du tuteur"));
                echo "

\t    ";
                // line 289
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "telephone", array()), 'errors');
                echo "

\t    ";
                // line 292
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-6\">
\t    ";
                // line 296
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "email", array()), 'label', array("label" => "Email du tuteur"));
                echo "

\t    ";
                // line 299
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "email", array()), 'errors');
                echo "

\t    ";
                // line 302
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email du tuteur")));
                echo "
    </div>
    <div class=\"form-group col-md-12\">
\t    ";
                // line 306
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "adresse", array()), 'label', array("label" => "adresse du tuteur"));
                echo "

\t    ";
                // line 309
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "adresse", array()), 'errors');
                echo "

\t    ";
                // line 312
                echo "\t    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "adresse du tuteur")));
                echo "
    </div>
    <div class=\"form-group\">
  \t<input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn\">
  <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default btn\">

  </div>
  
  ";
                // line 321
                echo "  ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["formu"]) ? $context["formu"] : $this->getContext($context, "formu")), 'form_end');
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 323
                echo "
\t\t\t\t\t\t\t\t\t<table class=\"table-condensed \">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Nom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 329
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "nom", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Prenom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 336
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "prenom", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Email : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 343
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "email", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Téléphone : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 350
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "telephone", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Adresse : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
                // line 356
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tut"]) ? $context["tut"] : $this->getContext($context, "tut")), "adresse", array()), "html", null, true);
                echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
            }
            // line 361
            echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t";
        }
        // line 373
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
        return array (  673 => 373,  659 => 361,  651 => 356,  642 => 350,  632 => 343,  622 => 336,  612 => 329,  604 => 323,  598 => 321,  586 => 312,  580 => 309,  574 => 306,  567 => 302,  561 => 299,  555 => 296,  548 => 292,  542 => 289,  536 => 286,  529 => 282,  523 => 279,  517 => 276,  510 => 272,  504 => 269,  498 => 266,  492 => 262,  488 => 261,  484 => 259,  481 => 258,  479 => 257,  474 => 254,  467 => 250,  458 => 244,  448 => 237,  438 => 230,  428 => 223,  420 => 217,  414 => 215,  402 => 206,  396 => 203,  390 => 200,  383 => 196,  377 => 193,  371 => 190,  364 => 186,  358 => 183,  352 => 180,  345 => 176,  339 => 173,  333 => 170,  326 => 166,  320 => 163,  314 => 160,  308 => 156,  304 => 155,  300 => 153,  297 => 152,  295 => 151,  280 => 139,  273 => 135,  264 => 129,  255 => 123,  246 => 117,  237 => 111,  227 => 104,  216 => 95,  206 => 91,  202 => 89,  198 => 87,  196 => 86,  191 => 84,  187 => 83,  183 => 81,  179 => 80,  141 => 44,  135 => 41,  130 => 40,  124 => 38,  121 => 37,  119 => 36,  115 => 35,  111 => 34,  103 => 31,  95 => 25,  90 => 23,  85 => 22,  79 => 19,  72 => 16,  68 => 15,  61 => 10,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  38 => 3,  29 => 2,);
    }
}
