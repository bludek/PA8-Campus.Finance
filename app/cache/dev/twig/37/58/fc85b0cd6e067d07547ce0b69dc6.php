<?php

/* SdzSitesBundle:Model:site_toolbar.html.twig */
class __TwigTemplate_3758fc85b0cd6e067d07547ce0b69dc6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<script>
function visitorMode()
{
    window.open(Routing.generate('view_page',{'user':'";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "html");
        echo "', 'site':'";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'page'), "site", array(), "any", false), "url", array(), "any", false), "html");
        echo "', 'name':'";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'page'), "name", array(), "any", false), "html");
        echo "', 'visitor':'visiteur'}),\"Votre page en mode visiteur\",\"options_de_la_fenetre\");
}

function modalConfirmation( id, type )
{
    if (type == 'accueil')
    {
        \$( \"#dialog:ui-dialog\" ).dialog( \"destroy\" );
        \$( \"#dialog-message\" ).dialog({
            resizable: false,
            height:160,
            width: 360,
            modal: true,
            buttons: 
            {
                Ok: function() 
                {
                    \$( this ).dialog( \"close\" );
                }
            }
        });
    }
    else
    {
                    
        \$( \"#dialog:ui-dialog\" ).dialog( \"destroy\" );      
        \$( \"#dialog-confirm\" ).dialog({
                resizable: false,
                height:160,
                width: 340,
                modal: true,
                buttons: 
                {
                    \"Supprimer\": function() 
                    {
                        \$( this ).dialog( \"close\" );
                        window.location = Routing.generate('delete_page', { 'id': id });
                    },
                    Annuler: function() 
                    {
                        \$( this ).dialog( \"close\" );
                    }
                }
        });  
    }
}
</script>

<div id=\"dialog-confirm\" title=\"Supprimer la page ?\" style=\"display: none;\">
\t<p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>La page sera supprimée définitivement et ne pourra être récupérée. Voulez-vous continuer ?</p>
</div>

<div id=\"dialog-message\" title=\"Page d'accueil\" style=\"display: none;\">
\t<p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>La page d'accueil ne peut pas être supprimée. Retournez à la liste des sites pour en supprimer un.</p>
</div>

<div id=\"sites-page-toolbar\" class=\"sites-header-divider\">
    <div class=\"sites-header-divider sites-clear\">
        <div class=\"sites-ccc-nav\">
            <div id=\"gb\">
                <div id=\"gbw\">
                    <div id=\"gbu\">
                        <div id=\"gbvg\">
                            <ol class=\"gbtc\">
                                <li class=\"gbt\">
                                    <a class=\"gbgt\" href=\"\" id=\"gbg4\">
                                        <span id=\"gbgs4d\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "html");
        echo "<span class=\"gbmai\"></span>
                                        <span class=\"gbmab\"></span><span class=\"gbmac\"></span></span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"sites-collaborator-bar\">
        <div id=\"sites-page-info-bar\" class=\"sites-og-leaf-page\">
            <div class=\"collaborator-bar-container\">
                <div class=\"sites-app-title\">
                    <span dir=\"ltr\">
                        <span class=\"sites-site-name\" dir=\"ltr\">
                            <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("SdzSitesBundle_homepage"), "html");
        echo "\" class=\"sites-site-name-link\">
                                <span class=\"sites-camelot-icon sites-collaborator-bar-back-arrow\"></span>
                            </a>
                            ";
        // line 91
        echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
        echo "
                        </span>
                    </span>
                    <span id=\"title-data-wrapper\">
                        <span id=\"sites-revision-info\">
                            <span id=\"version-history\" dir=\"ltr\">  
                                Mis à jour <span dir=\"ltr\">2 déc. 2011 10:02</span>
                            </span>
                        </span>
                    </span>
                </div>
                <div id=\"sites-collaborator-buttons\">
                    <div id=\"goog-ws-page-tools-div\">
                        <div id=\"page-btns\">
                            <button id=\"site-new_page-button\" onclick=\"window.location=Routing.generate('new_page', {'user':'";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "usernameCanonical", array(), "any", false), "html");
        echo "', 'site':'";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'page'), "site", array(), "any", false), "url", array(), "any", false), "html");
        echo "'})\" style=\"width: 60px; height: 30px; margin-right: 15px;\">Nouvelle page</button>
                            <button id=\"site-plus-menu-button\" style=\"width: 70px; height: 30px; margin-right: 15px;\">Plus</button>
                            <button id=\"site-sharing-button\" style=\"height: 30px; margin-right: 30px;\">Partager</button>
                        </div>
                        <ul class=\"site-menu-action\">
                            <li style=\"margin-bottom: 5px; margin-top: 5px; margin-left: 4px; border-bottom: 1px solid #666; padding-bottom: 5px;\"><b>Actions sur la page</b></li>
                            <li style=\"margin-bottom: 5px;\"><a href=\"#\">Paramètres de la page</a></li>
                            <li style=\"margin-bottom: 5px;\"><a href=\"javascript:;\" onclick=\"modalConfirmation( ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'page'), "id", array(), "any", false), "html");
        echo ", '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'page'), "type", array(), "any", false), "html");
        echo "' );\">Supprimer la page</a></li>
                            <li style=\"margin-bottom: 5px; \"><a href=\"javascript:;\" onclick=\"visitorMode();\">Voir la page en tant que visiteur</a></li>
                            <li style=\"margin-bottom: 5px; margin-left: 4px; border-bottom: 1px solid #666; padding-bottom: 5px;\"><b>Action sur le site</b></li>
                            <li style=\"margin-bottom: 5px;\"><a href=\"#\">Paramètre du site</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SdzSitesBundle:Model:site_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
