<?php

// Detailed info about a link
$app->match('/link/{id}', "Watson\Controller\HomeController::linkAction")->bind('link');

// List links with same tag
$app->match('/tag/{id}', "Watson\Controller\HomeController::tagAction")->bind('tag');

// Login form
$app->get('/login', "Watson\Controller\HomeController::loginAction")->bind('login');

// Admin zone
$app->get('/admin/{page}', "Watson\Controller\AdminController::indexAction")->assert('id', '\d+')->value('page', 0)->bind('admin');

// Add a new link
$app->match('/admin/link/add', "Watson\Controller\AdminController::addLinkAction")->bind('admin_link_add');

// Edit an existing link
$app->match('/admin/link/{id}/edit', "Watson\Controller\AdminController::editLinkAction")->bind('admin_link_edit');

// Remove a link
$app->get('/admin/link/{id}/delete', "Watson\Controller\AdminController::deleteLinkAction")->bind('admin_link_delete');

// Add a user
$app->match('/admin/user/add', "Watson\Controller\AdminController::addUserAction")->bind('admin_user_add');

// Edit an existing user
$app->match('/admin/user/{id}/edit', "Watson\Controller\AdminController::editUserAction")->bind('admin_user_edit');

// Remove a user
$app->get('/admin/user/{id}/delete', "Watson\Controller\AdminController::deleteUserAction")->bind('admin_user_delete');

// API : get all links
$app->get('/api/links', "Watson\Controller\ApiController::getLinksAction")->bind('api_links');

// API : get a link
$app->get('/api/link/{id}', "Watson\Controller\ApiController::getLinkAction")->bind('api_link');

// API : create a link
$app->post('/api/link', "Watson\Controller\ApiController::addLinkAction")->bind('api_link_add');

// API : remove a link
$app->delete('/api/link/{id}', "Watson\Controller\ApiController::deleteLinkAction")->bind('api_link_delete');

// API : get RSS feed
$app->get('/feed', "Watson\Controller\ApiController::getFeedAction")->bind('api_feed');

// Home page
$app->match('/{page}', "Watson\Controller\HomeController::indexAction")->assert('id', '\d+')->value('page', 0)->bind('home');