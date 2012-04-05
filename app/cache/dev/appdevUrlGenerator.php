<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'editSection' => true,
       'cancelMenuAction' => true,
       'deleteMenuAction' => true,
       'deleteSite' => true,
       'restoreSite' => true,
       'createMenu' => true,
       'sortableMenu' => true,
       'delete_page' => true,
       'new_page' => true,
       'edit_menu' => true,
       'page_create' => true,
       'view_page' => true,
       'SdzSitesBundle_homepage' => true,
       'SdzSitesBundle_new' => true,
       'SdzSitesBundle_create' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'Home' => true,
       'Bye' => true,
       'tag' => true,
       'tag_show' => true,
       'tag_new' => true,
       'tag_create' => true,
       'tag_edit' => true,
       'tag_update' => true,
       'tag_delete' => true,
       'article' => true,
       'article_show' => true,
       'article_new' => true,
       'article_create' => true,
       'article_edit' => true,
       'article_update' => true,
       'article_delete' => true,
       'sdzblog' => true,
       'sdzblog_voir' => true,
       'fos_js_routing_js' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function geteditSectionRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::editSectionAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/sites/section/edit',  ),));
    }

    private function getcancelMenuActionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::cancelMenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sites/cancel/action',  ),));
    }

    private function getdeleteMenuActionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::deleteMenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sites/delete/action',  ),));
    }

    private function getdeleteSiteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::deleteSiteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/sites/delete/site',  ),));
    }

    private function getrestoreSiteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::restoreSiteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/sites/restore/site',  ),));
    }

    private function getcreateMenuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::createMenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sites/create/menu',  ),));
    }

    private function getsortableMenuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::sortableMenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sites/sortableMenu',  ),));
    }

    private function getdelete_pageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::deletePageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/sites/page_delete',  ),));
    }

    private function getnew_pageRouteInfo()
    {
        return array(array (  0 => 'user',  1 => 'site',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::newPageAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/createPage',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'site',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'user',  ),  3 =>   array (    0 => 'text',    1 => '/sites',  ),));
    }

    private function getedit_menuRouteInfo()
    {
        return array(array (  0 => 'user',  1 => 'site',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::editMenuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/apparence/pageElements',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'site',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'user',  ),  3 =>   array (    0 => 'text',    1 => '/sites',  ),));
    }

    private function getpage_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::createPageAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/page/create',  ),));
    }

    private function getview_pageRouteInfo()
    {
        return array(array (  0 => 'user',  1 => 'site',  2 => 'name',  3 => 'visitor',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::viewAction',  'visitor' => false,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'visitor',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'site',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'user',  ),  4 =>   array (    0 => 'text',    1 => '/sites',  ),));
    }

    private function getSdzSitesBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'deleted',), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::indexAction',  'deleted' => false,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'deleted',  ),  1 =>   array (    0 => 'text',    1 => '/sites',  ),));
    }

    private function getSdzSitesBundle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/create-new-site',  ),));
    }

    private function getSdzSitesBundle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/create',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sdz/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sdz/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sdz/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sdz/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sdz/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/sdz/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/sdz/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/sdz/change-password/change-password',  ),));
    }

    private function getHomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/',  ),));
    }

    private function getByeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::byeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/bye',  ),));
    }

    private function gettagRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/tag/crud/',  ),));
    }

    private function gettag_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/tag/crud',  ),));
    }

    private function gettag_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/tag/crud/new',  ),));
    }

    private function gettag_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/blog/tag/crud/create',  ),));
    }

    private function gettag_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/tag/crud',  ),));
    }

    private function gettag_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/tag/crud',  ),));
    }

    private function gettag_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/tag/crud',  ),));
    }

    private function getarticleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/article/crud/',  ),));
    }

    private function getarticle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/article/crud',  ),));
    }

    private function getarticle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/blog/article/crud/new',  ),));
    }

    private function getarticle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/blog/article/crud/create',  ),));
    }

    private function getarticle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/article/crud',  ),));
    }

    private function getarticle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/article/crud',  ),));
    }

    private function getarticle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/blog/article/crud',  ),));
    }

    private function getsdzblogRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::listeAction',  'page' => 1,), array (  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/blog/liste',  ),));
    }

    private function getsdzblog_voirRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/blog/view',  ),));
    }

    private function getfos_js_routing_jsRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',), array (  '_format' => 'js|json',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'js|json',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/js/routing',  ),));
    }
}
