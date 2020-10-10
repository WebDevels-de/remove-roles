<?php
/*
Plugin Name: Remove Build-In User Roles
Plugin URI: https://github.com/WebDevels-de/remove-roles
Description: Removes the following Roles: Subscriber, Contributor, Author, Editor, Translator. Just activate the Plugin and disable it again.
Version: 1.0
Author: Fatih Gürsu
Author URI: https://webdevels.de
License:
License URI:
*/

add_action('admin_menu', 'remove_built_in_roles');
function remove_built_in_roles() {
    global $wp_roles;

    $roles_to_remove = array('subscriber', 'contributor', 'author', 'editor', 'translator');

    foreach ($roles_to_remove as $role) {
        if (isset($wp_roles->roles[$role])) {
            $wp_roles->remove_role($role);
        }
    }
}