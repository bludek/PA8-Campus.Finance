<?php

/* SdzSitesBundle:Model:header.html.twig */
class __TwigTemplate_3ad03e9ab12b028cdc2733d7dd516068 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"navbar-inner\">
    <div class=\"container-fluid\">
        
        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </a>
        <a class=\"brand\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("view_page", array("user" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "site" => $this->getAttribute($this->getAttribute($this->getContext($context, 'header'), "site", array(), "any", false), "url", array(), "any", false), "name" => "accueil")), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'header'), "html");
        echo "</a>
        <div class=\"nav-collapse\">
            <ul class=\"nav\">
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'header'), "links", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['link']) {
            // line 13
            echo "                    <li><a href=\"";
            if ($this->getAttribute($this->getContext($context, 'link'), "page", array(), "any", false)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("view_page", array("user" => $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "site" => $this->getAttribute($this->getAttribute($this->getContext($context, 'header'), "site", array(), "any", false), "url", array(), "any", false), "name" => "accueil")), "html");
            } else {
                echo "#";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'link'), "html");
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "            </ul>
            <!--<p class=\"navbar-text pull-right\">Logged in as <a href=\"#\">username</a></p>-->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SdzSitesBundle:Model:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
