<?php

/* SdzSitesBundle:Model:sidebar.html.twig */
class __TwigTemplate_a5d3ee37b6bfc1a708b389af8f656ca0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"well sidebar-nav\">
    <ul class=\"nav nav-list\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'sidebar'));
        foreach ($context['_seq'] as $context['_key'] => $context['element']) {
            // line 4
            echo "            <li class=\"nav-header\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'element'), "html");
            echo "</li>
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'element'), "links", array(), "any", false));
            foreach ($context['_seq'] as $context['_key'] => $context['link']) {
                // line 6
                echo "                <li><a href=\"";
                if ($this->getAttribute($this->getContext($context, 'link'), "page", array(), "any", false)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("view_page", array("user" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "site" => $this->getAttribute($this->getAttribute($this->getContext($context, 'element'), "site", array(), "any", false), "url", array(), "any", false), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, 'link'), "page", array(), "any", false), "name", array(), "any", false))), "html");
                } else {
                    echo "#";
                }
                echo "\"><i class=\"icon-book\"></i>";
                echo twig_escape_filter($this->env, $this->getContext($context, 'link'), "html");
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 8
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "    </ul>
        
</div>
";
        // line 12
        if (($this->getContext($context, 'visitor') == false)) {
            // line 13
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("edit_menu", array("user" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "site" => $this->getAttribute($this->getAttribute($this->getContext($context, 'page'), "site", array(), "any", false), "url", array(), "any", false))), "html");
            echo "\" style=\"padding-left: 15px;\">Modifier la barre latérale</a> 
";
        }
    }

    public function getTemplateName()
    {
        return "SdzSitesBundle:Model:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
