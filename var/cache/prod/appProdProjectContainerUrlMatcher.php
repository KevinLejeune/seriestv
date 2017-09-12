<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
