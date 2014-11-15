<?php

/* IntranetAdminBundle:Etudiant:definirclasse.html.twig */
class __TwigTemplate_7e71993753105cb29a328ad3e033e966e4aaf9b9ae2345e95128e58b74825fdb extends Twig_Template
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
        echo "Définition de classe |";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"badge\">
\t";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo "
</div>
<div class=\"row\">
\t
\t<div class=\"col-lg-12\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label>Le niveau : </label>
\t\t\t<select class=\"select-type form-control\" type=\"niveau\">
\t\t\t<option value=\"none\">Choisir le niveau</option>
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) ? $context["niveaux"] : $this->getContext($context, "niveaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["niv"]) {
            // line 15
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["niv"], "id", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["niv"], "nom", array()), "html", null, true);
            echo " </option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label>La filière : </label>
\t\t\t<select class=\"select-type form-control\" type=\"filiere\">
\t\t\t<option value=\"none\">Choisir la filière</option>
\t\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) ? $context["filieres"] : $this->getContext($context, "filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
            // line 24
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "nom", array()), "html", null, true);
            echo " </option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t</select>
\t\t</div>
\t</div>\t
</div>
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t";
        // line 32
        if (array_key_exists("classes", $context)) {
            // line 33
            echo "
\t\t\t<div class=\"alert alert-info\">
\t\t\t\tLe nombre de classe de <strong>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filiere"]) ? $context["filiere"] : $this->getContext($context, "filiere")), "nom", array()), "html", null, true);
            echo "</strong> <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["niveau"]) ? $context["niveau"] : $this->getContext($context, "niveau")), "nom", array()), "html", null, true);
            echo "</strong> : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<form role=\"form\" method=\"post\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t<label>La classe : </label>
\t\t\t<select class=\"form-control\" type=\"clasee\" name=\"classe\">
\t\t\t<option value=\"none\">Choisir la filière</option>
\t\t\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                // line 43
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "id", array()), "html", null, true);
                echo " \">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
                echo " </option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group col-md-1\">
\t\t<label></label>
\t\t\t<input type=\"submit\"  value=\"Affecter\" class=\"btn btn-primary form-control\">
\t\t</div>
\t\t\t</form>
\t\t";
        }
        // line 53
        echo "\t</div>
</div>

";
    }

    // line 59
    public function block_script($context, array $blocks = array())
    {
        // line 60
        echo "<script type=\"text/javascript\">
\t
\tjQuery(document).ready(function(\$) {

var vars ={
\t\tfiliere : null,
\t\tniveau :null
\t};

\t\t\$('.select-type').change(function(event) {
\t\t/* Act on the event */
\t\tvar type = \$(this).attr('type');
\t\tvar url =window.location.href.toString().split(\"?\")[0];
\t\t
\t\t//alert(url)
\t\tif(\$(this).val() != 'none'){

\t\t\tvars[type] = \$(this).val();

\t\t\tif(type == 'filiere' && vars['niveau'] != null){
\t\t\t\twindow.location.href = url+\"?niveau=\"+vars['niveau']+\"&filiere=\"+vars['filiere']
\t\t\t}else if(type == 'niveau' && vars['filiere'] != null){
\t\t\twindow.location.href = url+\"?niveau=\"+vars['niveau']+\"&filiere=\"+vars['filiere']
\t\t\t}
\t\t\tconsole.log(vars);
\t\t}
\t});

\t});


function decoupage(url,type,newValue){
\tvar dUrl = url.split('?');
\tvar rUrl = dUrl[0];
\tvar find = false;
\tif(dUrl.length > 1){

\t\tfor (var i = 1; i < dUrl.length; i++) {
\t\t\tvar tnavl = dUrl[i].split(\"=\");
\t\t\tif(tnavl.length > 1){
\t\t\t\tif(tnavl[0] == type){
\t\t\t\t\tif( i != 1)
\t\t\t\t\t\trUrl += \"&\"+type+\"=\"+newValue;
\t\t\t\t\telse
\t\t\t\t\t\trUrl += \"?\"+type+\"=\"+newValue;
\t\t\t\t\tfind = true;
\t\t\t\t}else{
\t\t\t\t\trUrl += \"?\"+dUrl[i];
\t\t\t\t}
\t\t\t}else{

\t\t\t}
\t\t};
\t\tif(!find){

\t\t\trUrl +=\"&\"+type+\"=\"+newValue;
\t\t}

\t}else{
\t\trUrl = url+\"?\"+type+\"=\"+newValue;
\t}
\treturn rUrl;
}
</script>


";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:definirclasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  156 => 59,  149 => 53,  139 => 45,  128 => 43,  124 => 42,  110 => 35,  106 => 33,  104 => 32,  96 => 26,  85 => 24,  81 => 23,  73 => 17,  62 => 15,  58 => 14,  44 => 5,  41 => 4,  38 => 3,  30 => 2,);
    }
}
