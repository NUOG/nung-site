<?php
function dbtc_menu_tree(&$vars) {
  return '<ul class="menu nav">' . $vars['tree'] . '</ul>';
}

// /*
// * Implements hook_menu_link
// * Apply bootstrap menu classes to all menu blocks in the
// * navigation region and the main-menu block by default.
// * Note: if a menu is in the navigation and somewhere else as well,
// * both instances of the menu will have the classes applied,
// * not just the one in the navigation
// */

// function dbtc_menu_link(array $vars) {

//   $element = $vars['element'];

//   if (dbtc_is_in_nav_menu($element)) {
//     $sub_menu = '';

//     if ($element['#below']) {
//       // Add our own wrapper
//       unset($element['#below']['#theme_wrappers']);
//       $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
//       $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
//       $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';

//       // Check if this element is nested within another
//       if ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] > 1)) {
//       // Generate as dropdown submenu
//         $element['#attributes']['class'][] = 'dropdown-submenu';
//       }
//       else {
//         // Generate as standard dropdown
//         $element['#attributes']['class'][] = 'dropdown';
//         $element['#localized_options']['html'] = TRUE;
//         $element['#title'] .= ' <span class="caret"></span>';
//       }

//       // Set dropdown trigger element to # to prevent inadvertant page loading with submenu click
//       $element['#localized_options']['attributes']['data-target'] = '#';
//     }

//     $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//     return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";

//   } else {
//     $element = $vars['element'];
//     $sub_menu = '';

//     if ($element['#below']) {
//       $sub_menu = drupal_render($element['#below']);
//     }
//     $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//     return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
//   }
// }





// // You MUST put this in your template.php file for the theme it is to be used with.
// function dtbc_menu_link(array $variables) {
//   $element = $variables['element'];
//   $sub_menu = '';
 
//   if ($element['#below']) {

   
// // Prevent dropdown functions from being added to management menu as to not affect navbar module.
//     if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
//       $sub_menu = drupal_render($element['#below']);
//     }

//     else {
     
// // Add our own wrapper
//       unset($element['#below']['#theme_wrappers']);
//       $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
//       $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
//       $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';

     
// // Check if this element is nested within another
//       if ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] > 1)) {
//         // Generate as dropdown submenu
//         $element['#attributes']['class'][] = 'dropdown-submenu';
//       }
//       else {
//         // Generate as standard dropdown
//         $element['#attributes']['class'][] = 'dropdown';
//         $element['#localized_options']['html'] = TRUE;
//         $element['#title'] .= ' <span class="caret"></span>';
//       }

     
// // Set dropdown trigger element to # to prevent inadvertant page loading with submenu click
//       $element['#localized_options']['attributes']['data-target'] = '#';
//     }
//   }
// // Issue #1896674 - On primary navigation menu, class 'active' is not set on active menu item.
// // @see http://drupal.org/node/1896674
// if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']) || $element['#localized_options']['language']->language == $language_url->language)) {
//    $element['#attributes']['class'][] = 'active';
// }
//   $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//   return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
// }

