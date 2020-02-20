<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // pdf
        if ('/pdf/Reclamation/pdf' === $pathinfo) {
            return array (  '_controller' => 'PdfBundle\\Controller\\PdfController::pdfAction',  '_route' => 'pdf',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reclamation')) {
                // reclamation_homepage
                if ('/reclamation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reclamation_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_reclamation_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_homepage'));
                    }

                    return $ret;
                }
                not_reclamation_homepage:

                if (0 === strpos($pathinfo, '/reclamation/a')) {
                    // afficherReclamationUser
                    if ('/reclamation/afficherReclamationUser' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::afficherReclamationUserAction',  '_route' => 'afficherReclamationUser',);
                    }

                    // afficherEvaluation
                    if ('/reclamation/afficherEvaluation' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::afficherEvaluationAction',  '_route' => 'afficherEvaluation',);
                    }

                    if (0 === strpos($pathinfo, '/reclamation/ajouter')) {
                        // ajouterReclamationUser
                        if ('/reclamation/ajouterReclamationUser' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::ajouterReclamationUserAction',  '_route' => 'ajouterReclamationUser',);
                        }

                        if (0 === strpos($pathinfo, '/reclamation/ajouterReclamationUser_type2')) {
                            // ajouterReclamationUser_type2
                            if ('/reclamation/ajouterReclamationUser_type2' === $pathinfo) {
                                return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::ajouterReclamationUser_type2Action',  '_route' => 'ajouterReclamationUser_type2',);
                            }

                            // ajouterReclamationUser_type2_prest
                            if ('/reclamation/ajouterReclamationUser_type2_prest' === $pathinfo) {
                                return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::ajouterReclamationUser_type2_prestAction',  '_route' => 'ajouterReclamationUser_type2_prest',);
                            }

                        }

                        // ajouterEvaluation
                        if ('/reclamation/ajouterEvaluation' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::ajouterEvaluationAction',  '_route' => 'ajouterEvaluation',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/reclamation/admin')) {
                        if (0 === strpos($pathinfo, '/reclamation/admin/Affichage')) {
                            // ListR_Admin
                            if ('/reclamation/admin/Affichage' === $pathinfo) {
                                return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::show_AdminAction',  '_route' => 'ListR_Admin',);
                            }

                            // Consulter_archive
                            if ('/reclamation/admin/Affichage_Archive' === $pathinfo) {
                                return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::show_Admin_ArchiveAction',  '_route' => 'Consulter_archive',);
                            }

                        }

                        // traiter_reclamation
                        if (0 === strpos($pathinfo, '/reclamation/admin/adminTraiter_Réclamation') && preg_match('#^/reclamation/admin/adminTraiter_Réclamation/(?P<id>[^/]++)$#sDu', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'traiter_reclamation']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::admin_traiter_reclamationAction',));
                        }

                        // supprimer_reclamtions_membre_admin
                        if (0 === strpos($pathinfo, '/reclamation/admin/supprimer_reclamtions_membre_admin') && preg_match('#^/reclamation/admin/supprimer_reclamtions_membre_admin/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_reclamtions_membre_admin']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::supprimer_reclamtions_membre_adminAction',));
                        }

                        // passer_en_jugement
                        if (0 === strpos($pathinfo, '/reclamation/admin/passer_en_jugement') && preg_match('#^/reclamation/admin/passer_en_jugement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'passer_en_jugement']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::passer_en_jugementAction',));
                        }

                        // score_update
                        if (preg_match('#^/reclamation/admin/(?P<id>[^/]++)/score_update$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'score_update']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::update_scoreAction',));
                        }

                    }

                }

                // listeMesPrestataires
                if ('/reclamation/listeMesPrestataires' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::listeMesPrestatairesAction',  '_route' => 'listeMesPrestataires',);
                }

                // recherchePrestataire
                if ('/reclamation/recherchePrestataire' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::recherchePrestataireAction',  '_route' => 'recherchePrestataire',);
                }

                // rechercheService
                if ('/reclamation/rechercheService' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::rechercheServiceAction',  '_route' => 'rechercheService',);
                }

                // ListR
                if ('/reclamation/Affichage' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::showAction',  '_route' => 'ListR',);
                }

                if (0 === strpos($pathinfo, '/reclamation/index')) {
                    // details_reclamtions
                    if (0 === strpos($pathinfo, '/reclamation/index/details_reclamtions') && preg_match('#^/reclamation/index/details_reclamtions/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'details_reclamtions']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::details_reclamtionsAction',));
                    }

                    // supprimer_reclamtions_membre
                    if (0 === strpos($pathinfo, '/reclamation/index/supprimer_reclamtions_membre') && preg_match('#^/reclamation/index/supprimer_reclamtions_membre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer_reclamtions_membre']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::supprimer_reclamtions_membreAction',));
                    }

                    // modifier_reclamtions_membre
                    if (0 === strpos($pathinfo, '/reclamation/index/modifier_reclamtions_membre') && preg_match('#^/reclamation/index/modifier_reclamtions_membre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier_reclamtions_membre']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::modifier_reclamtions_membreAction',));
                    }

                    // reclamation_update
                    if (preg_match('#^/reclamation/index/(?P<id>[^/]++)/reclamation_update$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'reclamation_update']), array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::updateAction',));
                    }

                    // after_ur_modify
                    if ('/reclamation/index/after_ur_modify' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\ReclamationController::index2Action',  '_route' => 'after_ur_modify',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register/parent' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_register1
                if ('/register/enseignant' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:register1Action',  '_route' => 'fos_user_registration_register1',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register1;
                    }

                    return $ret;
                }
                not_fos_user_registration_register1:

                // fos_user_registration_register2
                if ('/register/eleve' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:register2Action',  '_route' => 'fos_user_registration_register2',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register2;
                    }

                    return $ret;
                }
                not_fos_user_registration_register2:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/gestion')) {
            // gestion_homepage
            if ('/gestion' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestion_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_gestion_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestion_homepage'));
                }

                return $ret;
            }
            not_gestion_homepage:

            // gestion_index1
            if ('/gestion/gestion' === $pathinfo) {
                return array (  '_controller' => 'GestionBundle\\Controller\\DefaultController::index1Action',  '_route' => 'gestion_index1',);
            }

            if (0 === strpos($pathinfo, '/gestion/a')) {
                // gestion_afficheC
                if ('/gestion/afficheC' === $pathinfo) {
                    return array (  '_controller' => 'GestionBundle\\Controller\\ClasseController::afficheCAction',  '_route' => 'gestion_afficheC',);
                }

                if (0 === strpos($pathinfo, '/gestion/afficheR')) {
                    // gestion_afficheR
                    if ('/gestion/afficheR' === $pathinfo) {
                        return array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::afficheRAction',  '_route' => 'gestion_afficheR',);
                    }

                    // gestion_afficheRfront
                    if ('/gestion/afficheRfront' === $pathinfo) {
                        return array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::afficheRfrontAction',  '_route' => 'gestion_afficheRfront',);
                    }

                }

                // statistique_reclamation
                if ('/gestion/admin/statistique_reclamation' === $pathinfo) {
                    return array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::statistique_reclamationAction',  '_route' => 'statistique_reclamation',);
                }

                // gestion_ajouterC
                if ('/gestion/ajouterC' === $pathinfo) {
                    return array (  '_controller' => 'GestionBundle\\Controller\\ClasseController::ajouterCAction',  '_route' => 'gestion_ajouterC',);
                }

                // gestion_ajouterR
                if ('/gestion/ajouterR' === $pathinfo) {
                    return array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::ajouterRAction',  '_route' => 'gestion_ajouterR',);
                }

            }

            // gestion_modifierC
            if (0 === strpos($pathinfo, '/gestion/modifierC') && preg_match('#^/gestion/modifierC/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gestion_modifierC']), array (  '_controller' => 'GestionBundle\\Controller\\ClasseController::modifierCAction',));
            }

            // gestion_modifierR
            if ('/gestion/modifierR' === $pathinfo) {
                return array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::modifierRAction',  '_route' => 'gestion_modifierR',);
            }

            // gestion_deleteC
            if (0 === strpos($pathinfo, '/gestion/deleteC') && preg_match('#^/gestion/deleteC/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gestion_deleteC']), array (  '_controller' => 'GestionBundle\\Controller\\ClasseController::deleteCAction',));
            }

            if (0 === strpos($pathinfo, '/gestion/deleteR')) {
                // gestion_deleteR
                if (preg_match('#^/gestion/deleteR/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gestion_deleteR']), array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::deleteRAction',));
                }

                // gestion_deleteRfront
                if (0 === strpos($pathinfo, '/gestion/deleteRfront') && preg_match('#^/gestion/deleteRfront/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'gestion_deleteRfront']), array (  '_controller' => 'GestionBundle\\Controller\\ReclamationController::deleteRfrontAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/scolarite')) {
            // scolarite_homepage
            if ('/scolarite' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ScolariteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'scolarite_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_scolarite_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'scolarite_homepage'));
                }

                return $ret;
            }
            not_scolarite_homepage:

            if (0 === strpos($pathinfo, '/scolarite/afficher')) {
                // scolarite_readm
                if ('/scolarite/afficherM' === $pathinfo) {
                    return array (  '_controller' => 'ScolariteBundle\\Controller\\MatiereController::readmAction',  '_route' => 'scolarite_readm',);
                }

                // scolarite_readn
                if ('/scolarite/afficherN' === $pathinfo) {
                    return array (  '_controller' => 'ScolariteBundle\\Controller\\NoteController::readnAction',  '_route' => 'scolarite_readn',);
                }

                // scolaritereadfrontn
                if ('/scolarite/afficherfrontN' === $pathinfo) {
                    return array (  '_controller' => 'ScolariteBundle\\Controller\\NoteController::readfrontnAction',  '_route' => 'scolaritereadfrontn',);
                }

            }

            elseif (0 === strpos($pathinfo, '/scolarite/ajout')) {
                // scolarite_ajoutm
                if ('/scolarite/ajoutM' === $pathinfo) {
                    return array (  '_controller' => 'ScolariteBundle\\Controller\\MatiereController::ajoutMAction',  '_route' => 'scolarite_ajoutm',);
                }

                // scolarite_ajoutn
                if ('/scolarite/ajoutN' === $pathinfo) {
                    return array (  '_controller' => 'ScolariteBundle\\Controller\\NoteController::ajoutnAction',  '_route' => 'scolarite_ajoutn',);
                }

                // scolariteajoutfrontn
                if ('/scolarite/ajoutfrontN' === $pathinfo) {
                    return array (  '_controller' => 'ScolariteBundle\\Controller\\NoteController::ajoutfrontnAction',  '_route' => 'scolariteajoutfrontn',);
                }

            }

            // scolarite_delete
            if (0 === strpos($pathinfo, '/scolarite/delete') && preg_match('#^/scolarite/delete/(?P<idmatiere>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'scolarite_delete']), array (  '_controller' => 'ScolariteBundle\\Controller\\MatiereController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/scolarite/modifier')) {
                // scolarite_modifier
                if (preg_match('#^/scolarite/modifier/(?P<idmatiere>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'scolarite_modifier']), array (  '_controller' => 'ScolariteBundle\\Controller\\MatiereController::modifierAction',));
                }

                // scolarite_modifiern
                if (0 === strpos($pathinfo, '/scolarite/modifiern') && preg_match('#^/scolarite/modifiern/(?P<idnote>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'scolarite_modifiern']), array (  '_controller' => 'ScolariteBundle\\Controller\\NoteController::modifiernAction',));
                }

                // scolarite_modifierfrontn
                if (0 === strpos($pathinfo, '/scolarite/modifierfrontn') && preg_match('#^/scolarite/modifierfrontn/(?P<idnote>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'scolarite_modifierfrontn']), array (  '_controller' => 'ScolariteBundle\\Controller\\NoteController::modifierfrontnAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/home')) {
            // fixit_user_homepage
            if ('/home' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fixit_user_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fixit_user_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fixit_user_homepage'));
                }

                return $ret;
            }
            not_fixit_user_homepage:

            // fixit_admin_homepage
            if ('/home/admin' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::adminAction',  '_route' => 'fixit_admin_homepage',);
            }

            // creer_votre_compte
            if ('/home/creationcompte' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::creationcompteAction',  '_route' => 'creer_votre_compte',);
            }

        }

        // acceuil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acceuil',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_acceuil;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'acceuil'));
            }

            return $ret;
        }
        not_acceuil:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
