<?php

/* SdzSitesBundle:Model:cours.html.twig */
class __TwigTemplate_d84161886e8fcbe4118ce3f7f015eafb extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "SdzSitesBundle:Model:layout_model1.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
\t\$(function() {
            \$( \".edit-section button\" ).button({
                icons: {
                    primary: \"ui-icon-pencil\"
                },
                text: false
            });
        });
    </script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"row-fluid\">
        
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'sections'));
        foreach ($context['_seq'] as $context['_key'] => $context['section']) {
            // line 22
            echo "        <div class=\"span12\">
            ";
            // line 23
            if (($this->getContext($context, 'visitor') == false)) {
                // line 24
                echo "            <div class=\"edit-section\" style=\"display: inline;\">        
                    <button onclick=\"window.location = Routing.generate('editSection', {'id':'";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'section'), "id", array(), "any", false), "html");
                echo "' })\" style=\" float: right; width: 65px; margin-left: 10px; height: 30px;\">Éditer</button>
            </div>
            ";
            }
            // line 28
            echo "            ";
            echo $this->getAttribute($this->getContext($context, 'section'), "contenu", array(), "any", false);
            echo "
            
            <div class=\"edit-section\" style=\"margin-top: 30px;\">
                <p><a class=\"btn\" href=\"#\"><i class=\"icon-file\"></i>  Télécharger en PDF &raquo;</a>
                ";
            // line 32
            if (($this->getContext($context, 'visitor') == false)) {
                // line 33
                echo "                    <button onclick=\"window.location = Routing.generate('editSection', {'id':'";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'section'), "id", array(), "any", false), "html");
                echo "' })\" style=\"float: right; width: 65px; margin-left: 10px; height: 30px;\">Éditer</button></p>  
                ";
            }
            // line 35
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "        
    </div><!--/row-->
    
";
    }

    public function getTemplateName()
    {
        return "SdzSitesBundle:Model:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
