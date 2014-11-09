<?php

/* IntranetEtudiantBundle:Default:compte.html.twig */
class __TwigTemplate_95b41a77c5a7dc453deaa5e8b29778446dee31803e2fa32929a79264464b7482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetEtudiantBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetEtudiantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Mon compte | ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
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
\t\t\t\t<div class=\"image-profil-change\">
\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "compte", array()), "image", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<form  action=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("intranet_change_picture");
                echo "\" method=\"post\" enctype=\"multipart/form-data\">

\t\t\t\t\t<label for=\"new-profil-image\">
\t\t\t\t\t\t<i class=\"fa fa-camera-retro fa-2x\"></i>
\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"file\" name=\"uploadFile\" id=\"new-profil-image\">
\t\t\t\t\t\t<input type=\"text\"  name=\"matricule\" value=\" ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "matricule", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"text\" name=\"link\" value=\"intranet_etudiant_compte\">
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<div class=\"change-password\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<a class=\"btn btn-default btn-xs voir-block\">
\t\t\t\t\t\tChanger votre mot de passe
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<form action=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("intranet_change_password");
                echo "\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t<input required=\"required\" id=\"pw\" name=\"pw\" class=\"form-control\" type=\"password\" placeholder=\"nouveau mot de passe\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" hidden=\"hidden\" name=\"link\" value=\"intranet_etudiant_compte\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t<input required=\"required\" id=\"cpw\" class=\"form-control\" type=\"password\" placeholder=\"confirmer le mot de passe\">
\t\t\t\t\t\t\t<i class=\"fa fa-times form-control-feedback\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success btn-xs\" value=\"modifier\">
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"label label-default\">
\t\t\t\t\tMis à jour: ";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "date", array()), "d-M-Y"), "html", null, true);
                echo " 
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 57
                echo "\t\t\t\t\t<img  class=\"thumbnail\" src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profil/default-no.png"), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"btn btn-success btn-xs\" href=\" ";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_ajout_compte_etudiant", array("id" => $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "id", array()))), "html", null, true);
                echo " \">Ajouter un compte</a>
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-10 col-sm-9 contenu-profil\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"pre-nom col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo " <span class=\"nom\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 col-sm-8 col-xs-12 text-right\">
\t\t\t\t\t\t\t";
            // line 69
            $context["classe"] = $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "classeActuelle", array(), "method");
            // line 70
            echo "\t\t\t\t\t\t\t";
            if ((null === (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")))) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<span class=\"label label-danger\">
\t\t\t\t\t\t\t\t\tVotre classe actuelle n'est pas definie
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_etudiant_ma_classe", array("id" => $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "classe", array()), "id", array()))), "html", null, true);
                echo "\" class=\"label label-primary\">
\t\t\t\t\t\t\t\t\t";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "classe", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 79
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
\t\t\t\t\t\t\t\t\t\t\t<th>Année Scolaire</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 115
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "classes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_etudiant_ma_classe", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "anneescolaire", array()), "annee", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
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
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Prenom : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Matricule : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "matricule", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Email : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Date de naissance : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 159
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "datenaissance", array()), "d-M-Y"), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">Téléphone : </span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td> <strong>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "telephone", array()), "html", null, true);
            echo "</strong> </td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td> <span class=\"label label-info\">";
            // line 169
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
\t\t\t\t\t\t\t\tInformations sur le tuteur
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"urgence\">
\t\t\t\t\t\t\t\tInformations sur le tuteur à contacter en cas d'urgence
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t";
        }
        // line 197
        echo "\t
<!-- <div>
\t<form action=\" ";
        // line 199
        echo $this->env->getExtension('routing')->getPath("intranet_change_picture");
        echo " \" method=\"post\" enctype=\"multipart/form-data\">
  Please choose a file: <input type=\"file\" name=\"uploadFile\"><br>
  <input type=\"text\" placeholder=\"dossier\" name=\"dossier\"><br>
  <input type=\"submit\" value=\"Upload File\">
</form> 
</div> -->
\t
";
    }

    public function getTemplateName()
    {
        return "IntranetEtudiantBundle:Default:compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 199,  338 => 197,  307 => 169,  300 => 165,  291 => 159,  282 => 153,  273 => 147,  264 => 141,  254 => 134,  243 => 125,  234 => 122,  228 => 119,  224 => 118,  220 => 116,  216 => 115,  178 => 79,  172 => 76,  167 => 75,  161 => 71,  158 => 70,  156 => 69,  148 => 66,  140 => 60,  135 => 58,  130 => 57,  124 => 54,  104 => 37,  88 => 24,  79 => 18,  74 => 17,  69 => 15,  62 => 10,  53 => 8,  49 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 2,);
    }
}
