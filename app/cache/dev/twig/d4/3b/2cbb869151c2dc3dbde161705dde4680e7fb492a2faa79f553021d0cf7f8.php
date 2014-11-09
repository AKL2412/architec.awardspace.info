<?php

/* IntranetEtudiantBundle:Default:message.html.twig */
class __TwigTemplate_d43b2cbb869151c2dc3dbde161705dde4680e7fb492a2faa79f553021d0cf7f8 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "html", null, true);
        echo "
\t";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) != 0)) {
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
            echo ") ";
        }
        // line 6
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\tles messages : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sends", array())), "html", null, true);
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "send", "action" => "receive")), "html", null, true);
        echo "

\t<div class=\"row bloc-message\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"col-md-2 menu\">
\t\t\t\t
                \t<ul class=\"\">
                \t\t
                \t\t<li>
                \t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t  <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-contact"));
        echo "\" class=\"btn btn-danger btn-xs\">
\t\t                \t\tNouveau message
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t    <span class=\"caret\"></span>
\t\t\t\t\t\t\t    <span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t\t  </button>
\t\t\t\t\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-administrateur"));
        echo "\">Pour l'administrateur</a></li>
\t\t\t\t\t\t\t   <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-adminstration"));
        echo "\">Pour l'administration</a></li>
\t\t\t\t\t\t\t    <li class=\"divider\"></li>
\t\t\t\t\t\t\t    <li><a href=\"#\">Autre chose</a></li>
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</div>
                \t\t</li>

\t                    <li 
\t                    ";
        // line 37
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "boite-reception")) {
            // line 38
            echo "\t                    \tclass=\"active\" 
\t                    ";
        }
        // line 40
        echo "\t                    >
\t                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "boite-reception"));
        echo "\">
\t                        \tBoîte de réception 
\t                        </a>
\t                    </li>
\t                    <li 
\t                    ";
        // line 46
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "message-envoyes")) {
            // line 47
            echo "\t                    \tclass=\"active\" 
\t                    ";
        }
        // line 49
        echo "\t                    >
\t                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-envoyes"));
        echo "\">
\t                        \tMessages envoyés
\t                        </a>
\t                    </li>
\t                    <li 
\t                    ";
        // line 55
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "contact")) {
            // line 56
            echo "\t                    \tclass=\"active\" 
\t                    ";
        }
        // line 58
        echo "\t                    >
\t                        <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "contact"));
        echo "\">
\t                        \tMes contacts
\t                        </a>
\t                    </li>
                    </ul>
                
\t\t\t</div>
\t\t\t<div class=\"col-md-9 contenu\">
\t\t\t\tcontenu
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetEtudiantBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 59,  138 => 58,  134 => 56,  132 => 55,  124 => 50,  121 => 49,  117 => 47,  115 => 46,  107 => 41,  104 => 40,  100 => 38,  98 => 37,  87 => 29,  83 => 28,  72 => 20,  58 => 9,  53 => 8,  50 => 7,  42 => 6,  36 => 5,  29 => 4,);
    }
}
