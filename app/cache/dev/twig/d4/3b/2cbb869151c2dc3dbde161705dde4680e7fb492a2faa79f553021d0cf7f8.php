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
        echo "
\t<div class=\" bloc-message\">
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-md-2 menu\">
\t\t\t\t
                \t<ul >
                \t\t
                \t\t<li class=\"ul\">
                \t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t  <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-contact"));
        echo "\" class=\"btn btn-danger btn-xs\">
\t\t                \t\tNouveau message
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-danger btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t    <span class=\"caret\"></span>
\t\t\t\t\t\t\t    <span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t\t  </button>
\t\t\t\t\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t    <li>
\t\t\t\t\t\t\t\t    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-administrateur"));
        echo "\">
\t\t\t\t\t\t\t\t    Pour l'administrateur
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t   <li>
\t\t\t\t\t\t\t\t   <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-adminstration"));
        echo "\">Pour l'administration
\t\t\t\t\t\t\t\t   </a>
\t\t\t\t\t\t\t   </li>
\t\t\t\t\t\t\t    <li class=\"divider\"></li>
\t\t\t\t\t\t\t    <li><a href=\"#\">Autre chose</a></li>
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</div>
                \t\t</li>

\t                    <li class=\"ul ";
        // line 41
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "boite-reception")) {
            // line 42
            echo "\t                    \tactive ";
        }
        echo "\"
\t                    >
\t                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "boite-reception"));
        echo "\">
\t                        \tBoîte de réception 
\t                        </a>
\t                    </li>
\t                    <li class=\"ul ";
        // line 48
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "message-envoyes")) {
            echo " active ";
        }
        echo "\"
\t                    >
\t                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "message-envoyes"));
        echo "\">
\t                        \tMessages envoyés
\t                        </a>
\t                    </li>
\t                    <li class=\"ul ";
        // line 54
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "contact")) {
            echo " active";
        }
        echo "\"
\t                    >
\t                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("intranet_etudiant_message", array("rubrique" => "contact"));
        echo "\">
\t                        \tMes contacts
\t                        </a>
\t                    </li>
                    </ul>
                
\t\t\t</div>
\t\t\t<div class=\"col-md-9 contenu\">
\t\t\t\t";
        // line 64
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "message-envoyes")) {
            // line 65
            echo "\t                    \tmessages envoyés
\t            
\t            ";
        } elseif (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "contact")) {
            // line 68
            echo "\t                    \tmes contacts
\t            
\t            ";
        } elseif (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "boite-reception")) {
            // line 71
            echo "\t                    \tma boite de reception 
\t            ";
        } elseif (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "message-adminstration")) {
            // line 73
            echo "\t                    \tmessage-adminstration
\t            ";
        } elseif (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "message-administrateur")) {
            // line 75
            echo "\t                   message-adminstrateur
\t             ";
        } elseif (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "message-contact")) {
            // line 77
            echo "\t                   message à un contact
\t            ";
        }
        // line 79
        echo "\t\t\t\t
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
        return array (  172 => 79,  168 => 77,  164 => 75,  160 => 73,  156 => 71,  151 => 68,  146 => 65,  144 => 64,  133 => 56,  126 => 54,  119 => 50,  112 => 48,  105 => 44,  99 => 42,  97 => 41,  85 => 32,  77 => 27,  65 => 18,  53 => 8,  50 => 7,  42 => 6,  36 => 5,  29 => 4,);
    }
}
