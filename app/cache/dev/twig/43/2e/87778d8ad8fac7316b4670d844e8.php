<?php

/* SdzSitesBundle:Model:accueil.html.twig */
class __TwigTemplate_432e87778d8ad8fac7316b4670d844e8 extends Twig_Template
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
";
        // line 19
        $context['cpt'] = 0;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'sections'));
        foreach ($context['_seq'] as $context['_key'] => $context['section']) {
            // line 22
            echo "        ";
            if (($this->getAttribute($this->getContext($context, 'section'), "type", array(), "any", false) == "hero-unit")) {
                // line 23
                echo "            <div class=\"hero-unit\">
                ";
                // line 24
                echo $this->getAttribute($this->getContext($context, 'section'), "contenu", array(), "any", false);
                echo "
                 ";
                // line 25
                if (($this->getContext($context, 'visitor') == false)) {
                    echo "<div class=\"edit-section\"><button onclick=\"window.location = Routing.generate('editSection', {'id':'";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'section'), "id", array(), "any", false), "html");
                    echo "' })\" style=\"float: right; height: 30px;\">Éditer</button></div>";
                }
                // line 26
                echo "            </div>
            
        ";
            }
            // line 29
            echo "        ";
            if (($this->getAttribute($this->getContext($context, 'section'), "type", array(), "any", false) == "span4")) {
                // line 30
                echo "            ";
                if (($this->getContext($context, 'cpt') == 0)) {
                    // line 31
                    echo "                <div class=\"row-fluid\">
            ";
                }
                // line 33
                echo "            
            <div class=\"span4\">
                ";
                // line 35
                echo $this->getAttribute($this->getContext($context, 'section'), "contenu", array(), "any", false);
                echo "
                <div class=\"edit-section\">
                    <p><a class=\"btn\" href=\"#\">Lire le chapitre &raquo;</a>";
                // line 37
                if (($this->getContext($context, 'visitor') == false)) {
                    echo "<button onclick=\"window.location = Routing.generate('editSection', {'id':'";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'section'), "id", array(), "any", false), "html");
                    echo "' })\" style=\"margin-left: 10px; height: 30px;\">Éditer</button>";
                }
                echo "</p>
                </div>
            </div>
            
            ";
                // line 41
                $context['cpt'] = ($this->getContext($context, 'cpt') + 1);
                // line 42
                echo "            
            ";
                // line 43
                if (($this->getContext($context, 'cpt') == 3)) {
                    // line 44
                    echo "                </div>
                ";
                    // line 45
                    $context['cpt'] = 0;
                    // line 46
                    echo "            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "    
";
    }

    public function getTemplateName()
    {
        return "SdzSitesBundle:Model:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
