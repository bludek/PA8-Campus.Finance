<?php

/* SdzSitesBundle:Model:layout_model1.html.twig */
class __TwigTemplate_1ca22d1527c18986ad77372fc20b13e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'sytlesheets' => array($this, 'block_sytlesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'page'), "title", array(), "any", false), "html");
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->

<!-- Le styles -->
    ";
        // line 15
        $this->displayBlock('sytlesheets', $context, $blocks);
        // line 29
        echo "        
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    
</head>

<body>
    
  
    <div class=\"navbar navbar-fixed-top\">
        ";
        // line 45
        if (($this->getContext($context, 'visitor') == false)) {
            // line 46
            echo "        ";
            $this->env->loadTemplate("SdzSitesBundle:Model:site_toolbar.html.twig")->display($context);
            // line 47
            echo "        ";
        }
        // line 48
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "    </div>
    <div ";
        // line 52
        if (($this->getContext($context, 'visitor') == false)) {
            echo "style=\"margin-top: 70px;\"";
        }
        echo ">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
        <div class=\"span3\">
            ";
        // line 56
        $this->env->loadTemplate("SdzSitesBundle:Model:sidebar.html.twig")->display($context);
        // line 57
        echo "        </div><!--/span-->

        <div class=\"span9\">
            ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "        </div><!--/span-->
        </div><!--/row-->

        <hr>

        <footer style=\"margin-bottom: 0px;\">
            <p>&copy; Campus Finance 2012 - Tous droits réservés</p>
        </footer>

    </div>
    </div>
</body>
</html>
";
    }

    // line 15
    public function block_sytlesheets($context, array $blocks = array())
    {
        // line 16
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzsites/css/bootstrap.min.css"), "html");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzsites/css/main.css"), "html");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzblog/css/jquery-ui-1.8.18.custom.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
        <style type=\"text/css\">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
        </style>
    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzblog/js/jquery-1.7.1.min.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzblog/js/jquery-ui-1.8.18.custom.min.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzblog/js/i18n/jquery-ui-i18n.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzblog/js/autoresize.jquery.min.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sdzsites/js/button-toolbar.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html");
        echo "\"></script>
    ";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "            ";
        $this->env->loadTemplate("SdzSitesBundle:Model:header.html.twig")->display($context);
        // line 50
        echo "        ";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SdzSitesBundle:Model:layout_model1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
