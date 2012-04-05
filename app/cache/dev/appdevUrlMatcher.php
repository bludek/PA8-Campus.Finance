<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // editSection
        if (0 === strpos($pathinfo, '/sites/section/edit') && preg_match('#^/sites/section/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::editSectionAction',)), array('_route' => 'editSection'));
        }

        // cancelMenuAction
        if ($pathinfo === '/sites/cancel/action') {
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::cancelMenuAction',  '_route' => 'cancelMenuAction',);
        }

        // deleteMenuAction
        if ($pathinfo === '/sites/delete/action') {
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::deleteMenuAction',  '_route' => 'deleteMenuAction',);
        }

        // deleteSite
        if (0 === strpos($pathinfo, '/sites/delete/site') && preg_match('#^/sites/delete/site/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::deleteSiteAction',)), array('_route' => 'deleteSite'));
        }

        // restoreSite
        if (0 === strpos($pathinfo, '/sites/restore/site') && preg_match('#^/sites/restore/site/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::restoreSiteAction',)), array('_route' => 'restoreSite'));
        }

        // createMenu
        if ($pathinfo === '/sites/create/menu') {
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::createMenuAction',  '_route' => 'createMenu',);
        }

        // sortableMenu
        if ($pathinfo === '/sites/sortableMenu') {
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::sortableMenuAction',  '_route' => 'sortableMenu',);
        }

        // delete_page
        if (0 === strpos($pathinfo, '/sites/page_delete') && preg_match('#^/sites/page_delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::deletePageAction',)), array('_route' => 'delete_page'));
        }

        // new_page
        if (0 === strpos($pathinfo, '/sites') && preg_match('#^/sites/(?P<user>[^/]+?)/(?P<site>[^/]+?)/createPage$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::newPageAction',)), array('_route' => 'new_page'));
        }

        // edit_menu
        if (0 === strpos($pathinfo, '/sites') && preg_match('#^/sites/(?P<user>[^/]+?)/(?P<site>[^/]+?)/apparence/pageElements$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::editMenuAction',)), array('_route' => 'edit_menu'));
        }

        // page_create
        if ($pathinfo === '/page/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_page_create;
            }
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::createPageAction',  '_route' => 'page_create',);
        }
        not_page_create:

        // view_page
        if (0 === strpos($pathinfo, '/sites') && preg_match('#^/sites/(?P<user>[^/]+?)/(?P<site>[^/]+?)/(?P<name>[^/]+?)(?:/(?P<visitor>[^/]+?))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::viewAction',  'visitor' => false,)), array('_route' => 'view_page'));
        }

        // SdzSitesBundle_homepage
        if (0 === strpos($pathinfo, '/sites') && preg_match('#^/sites(?:/(?P<deleted>[^/]+?))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::indexAction',  'deleted' => false,)), array('_route' => 'SdzSitesBundle_homepage'));
        }

        // SdzSitesBundle_new
        if ($pathinfo === '/create-new-site') {
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::newAction',  '_route' => 'SdzSitesBundle_new',);
        }

        // SdzSitesBundle_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_SdzSitesBundle_create;
            }
            return array (  '_controller' => 'Sdz\\SitesBundle\\Controller\\SitesController::createAction',  '_route' => 'SdzSitesBundle_create',);
        }
        not_SdzSitesBundle_create:

        if (0 === strpos($pathinfo, '/sdz')) {
            // fos_user_security_login
            if ($pathinfo === '/sdz/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/sdz/login_check') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

            // fos_user_security_logout
            if ($pathinfo === '/sdz/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/sdz/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/sdz/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/sdz/profile/edit') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/sdz/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/sdz/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                // fos_user_registration_check_email
                if ($pathinfo === '/sdz/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                // fos_user_registration_confirm
                if (0 === strpos($pathinfo, '/sdz/register/confirm') && preg_match('#^/sdz/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ($pathinfo === '/sdz/register/confirmed') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirmed;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

            if (0 === strpos($pathinfo, '/sdz/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/sdz/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/sdz/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/sdz/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/sdz/resetting/reset') && preg_match('#^/sdz/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
                }
                not_fos_user_resetting_reset:

            }

            // fos_user_change_password
            if ($pathinfo === '/sdz/change-password/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // Home
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Home');
                }
                return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'Home',);
            }

            // Bye
            if ($pathinfo === '/blog/bye') {
                return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::byeAction',  '_route' => 'Bye',);
            }

            if (0 === strpos($pathinfo, '/blog/tag/crud')) {
                // tag
                if (rtrim($pathinfo, '/') === '/blog/tag/crud') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tag');
                    }
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
                }

                // tag_show
                if (preg_match('#^/blog/tag/crud/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::showAction',)), array('_route' => 'tag_show'));
                }

                // tag_new
                if ($pathinfo === '/blog/tag/crud/new') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
                }

                // tag_create
                if ($pathinfo === '/blog/tag/crud/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tag_create;
                    }
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::createAction',  '_route' => 'tag_create',);
                }
                not_tag_create:

                // tag_edit
                if (preg_match('#^/blog/tag/crud/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::editAction',)), array('_route' => 'tag_edit'));
                }

                // tag_update
                if (preg_match('#^/blog/tag/crud/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tag_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::updateAction',)), array('_route' => 'tag_update'));
                }
                not_tag_update:

                // tag_delete
                if (preg_match('#^/blog/tag/crud/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tag_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\TagController::deleteAction',)), array('_route' => 'tag_delete'));
                }
                not_tag_delete:

            }

            if (0 === strpos($pathinfo, '/blog/article/crud')) {
                // article
                if (rtrim($pathinfo, '/') === '/blog/article/crud') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article');
                    }
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
                }

                // article_show
                if (preg_match('#^/blog/article/crud/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::showAction',)), array('_route' => 'article_show'));
                }

                // article_new
                if ($pathinfo === '/blog/article/crud/new') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }

                // article_create
                if ($pathinfo === '/blog/article/crud/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_create;
                    }
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
                }
                not_article_create:

                // article_edit
                if (preg_match('#^/blog/article/crud/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::editAction',)), array('_route' => 'article_edit'));
                }

                // article_update
                if (preg_match('#^/blog/article/crud/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::updateAction',)), array('_route' => 'article_update'));
                }
                not_article_update:

                // article_delete
                if (preg_match('#^/blog/article/crud/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\ArticleController::deleteAction',)), array('_route' => 'article_delete'));
                }
                not_article_delete:

            }

            // sdzblog
            if (0 === strpos($pathinfo, '/blog/liste') && preg_match('#^/blog/liste(?:/(?P<page>\\d+))?$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::listeAction',  'page' => 1,)), array('_route' => 'sdzblog'));
            }

            // sdzblog_voir
            if (0 === strpos($pathinfo, '/blog/view') && preg_match('#^/blog/view/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',)), array('_route' => 'sdzblog_voir'));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',)), array('_route' => 'fos_js_routing_js'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
