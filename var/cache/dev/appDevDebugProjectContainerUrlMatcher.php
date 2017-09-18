<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // frontend_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontend_default_index');
            }

            return array (  '_controller' => 'FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontend_default_index',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // backend_default_index
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_default_index');
                }

                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_default_index',);
            }

            if (0 === strpos($pathinfo, '/admin/episode')) {
                // episode_index
                if ('/admin/episode' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_episode_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'episode_index');
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\EpisodeController::indexAction',  '_route' => 'episode_index',);
                }
                not_episode_index:

                // episode_new
                if ('/admin/episode/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_episode_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\EpisodeController::newAction',  '_route' => 'episode_new',);
                }
                not_episode_new:

                // episode_show
                if (preg_match('#^/admin/episode/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_episode_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_show')), array (  '_controller' => 'BackendBundle\\Controller\\EpisodeController::showAction',));
                }
                not_episode_show:

                // episode_edit
                if (preg_match('#^/admin/episode/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_episode_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_edit')), array (  '_controller' => 'BackendBundle\\Controller\\EpisodeController::editAction',));
                }
                not_episode_edit:

                // episode_delete
                if (preg_match('#^/admin/episode/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_episode_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_delete')), array (  '_controller' => 'BackendBundle\\Controller\\EpisodeController::deleteAction',));
                }
                not_episode_delete:

                if (0 === strpos($pathinfo, '/admin/episodepeople')) {
                    // episodepeople_index
                    if ('/admin/episodepeople' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_episodepeople_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'episodepeople_index');
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\EpisodePeopleController::indexAction',  '_route' => 'episodepeople_index',);
                    }
                    not_episodepeople_index:

                    // episodepeople_new
                    if ('/admin/episodepeople/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_episodepeople_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\EpisodePeopleController::newAction',  '_route' => 'episodepeople_new',);
                    }
                    not_episodepeople_new:

                    // episodepeople_show
                    if (preg_match('#^/admin/episodepeople/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_episodepeople_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'episodepeople_show')), array (  '_controller' => 'BackendBundle\\Controller\\EpisodePeopleController::showAction',));
                    }
                    not_episodepeople_show:

                    // episodepeople_edit
                    if (preg_match('#^/admin/episodepeople/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_episodepeople_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'episodepeople_edit')), array (  '_controller' => 'BackendBundle\\Controller\\EpisodePeopleController::editAction',));
                    }
                    not_episodepeople_edit:

                    // episodepeople_delete
                    if (preg_match('#^/admin/episodepeople/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_episodepeople_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'episodepeople_delete')), array (  '_controller' => 'BackendBundle\\Controller\\EpisodePeopleController::deleteAction',));
                    }
                    not_episodepeople_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/people')) {
                // people_index
                if ('/admin/people' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_people_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'people_index');
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\PeopleController::indexAction',  '_route' => 'people_index',);
                }
                not_people_index:

                // people_new
                if ('/admin/people/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_people_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\PeopleController::newAction',  '_route' => 'people_new',);
                }
                not_people_new:

                // people_show
                if (preg_match('#^/admin/people/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_people_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'people_show')), array (  '_controller' => 'BackendBundle\\Controller\\PeopleController::showAction',));
                }
                not_people_show:

                // people_edit
                if (preg_match('#^/admin/people/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_people_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'people_edit')), array (  '_controller' => 'BackendBundle\\Controller\\PeopleController::editAction',));
                }
                not_people_edit:

                // people_delete
                if (preg_match('#^/admin/people/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_people_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'people_delete')), array (  '_controller' => 'BackendBundle\\Controller\\PeopleController::deleteAction',));
                }
                not_people_delete:

                if (0 === strpos($pathinfo, '/admin/people_type')) {
                    // people_type_index
                    if ('/admin/people_type' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_people_type_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'people_type_index');
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\People_typeController::indexAction',  '_route' => 'people_type_index',);
                    }
                    not_people_type_index:

                    // people_type_new
                    if ('/admin/people_type/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_people_type_new;
                        }

                        return array (  '_controller' => 'BackendBundle\\Controller\\People_typeController::newAction',  '_route' => 'people_type_new',);
                    }
                    not_people_type_new:

                    // people_type_show
                    if (preg_match('#^/admin/people_type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_people_type_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'people_type_show')), array (  '_controller' => 'BackendBundle\\Controller\\People_typeController::showAction',));
                    }
                    not_people_type_show:

                    // people_type_edit
                    if (preg_match('#^/admin/people_type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_people_type_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'people_type_edit')), array (  '_controller' => 'BackendBundle\\Controller\\People_typeController::editAction',));
                    }
                    not_people_type_edit:

                    // people_type_delete
                    if (preg_match('#^/admin/people_type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_people_type_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'people_type_delete')), array (  '_controller' => 'BackendBundle\\Controller\\People_typeController::deleteAction',));
                    }
                    not_people_type_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/saison')) {
                // saison_index
                if ('/admin/saison' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_saison_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'saison_index');
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\SaisonController::indexAction',  '_route' => 'saison_index',);
                }
                not_saison_index:

                // saison_new
                if ('/admin/saison/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_saison_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\SaisonController::newAction',  '_route' => 'saison_new',);
                }
                not_saison_new:

                // saison_show
                if (preg_match('#^/admin/saison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_saison_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_show')), array (  '_controller' => 'BackendBundle\\Controller\\SaisonController::showAction',));
                }
                not_saison_show:

                // saison_edit
                if (preg_match('#^/admin/saison/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_saison_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_edit')), array (  '_controller' => 'BackendBundle\\Controller\\SaisonController::editAction',));
                }
                not_saison_edit:

                // saison_delete
                if (preg_match('#^/admin/saison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_saison_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_delete')), array (  '_controller' => 'BackendBundle\\Controller\\SaisonController::deleteAction',));
                }
                not_saison_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/serie')) {
                // serie_index
                if ('/admin/serie' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_serie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'serie_index');
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\SerieController::indexAction',  '_route' => 'serie_index',);
                }
                not_serie_index:

                // serie_new
                if ('/admin/serie/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_serie_new;
                    }

                    return array (  '_controller' => 'BackendBundle\\Controller\\SerieController::newAction',  '_route' => 'serie_new',);
                }
                not_serie_new:

                // serie_show
                if (preg_match('#^/admin/serie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_serie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_show')), array (  '_controller' => 'BackendBundle\\Controller\\SerieController::showAction',));
                }
                not_serie_show:

                // serie_edit
                if (preg_match('#^/admin/serie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_serie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_edit')), array (  '_controller' => 'BackendBundle\\Controller\\SerieController::editAction',));
                }
                not_serie_edit:

                // serie_delete
                if (preg_match('#^/admin/serie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_serie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_delete')), array (  '_controller' => 'BackendBundle\\Controller\\SerieController::deleteAction',));
                }
                not_serie_delete:

            }

        }

        // homepage
        if ('/app' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
