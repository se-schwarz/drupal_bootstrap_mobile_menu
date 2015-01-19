# drupal_bootstrap_mobile_menu
Provides functions and templates for an easy rendering of a mobile menu in Drupal.

## How to

Activate the module and copy the two templates from the modules example folder into your templates folder.

The easiest way of rendering is just calling the theme function in your template.

```php
print theme('bootstrap_menu_bar', array('item_list' => menu_tree_all_data('main-menu')));
```

Change the 'main-menu' string to the mashine name of what ever menu you want to render.

### Remember

The menu renders only the base, and the second level of the given menu tree. Everything further down is ignored.

### TODOs

Get the active state and set the active-trail and active classes
