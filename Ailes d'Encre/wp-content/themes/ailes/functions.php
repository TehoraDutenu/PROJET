<?php

// -- Menu de navigation (enregistrer, initialiser, activer et configurer dans le BO, designer)

// - Enregistrer le menu
function register_menu()
{
    register_nav_menus(
        array(
            'menu-sup' => __('Main menu'),
            'menu-footer' => __('Footer menu'),
            'menu-sidebar' => __('Sidebar menu'),

        )
    );
}

// - Initialiser le menu
add_action('init', 'register_menu');

// - Designer le menu

// class Simple_menu extends Walker_Nav_Menu
// {
//     public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
//     {
//         $title = $data_object->title;
//         $permalink = $data_object->url;

//         $output .= "<div class='nav-item'>";
//         $output .= "<a class='nav-link bg-warning text-dark border m-1 custom_a' href='$permalink'>";
//         $output .= $title;
//         $output .= "</a>";
//     }

//     public function end_el(&$output, $data_object, $depth = 0, $args = null)
//     {
//         $output .= "</div>";
//     }
// }
class Depth_menu extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul class='sub-menu'>";
    }
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        // - Titres et liens
        $title = $data_object->title;
        $permalink = $data_object->url;

        // - Indentation
        $indentation = str_repeat("\t", $depth);

        // - Classes
        $classes = empty($data_object->classes) ? array() : (array) $data_object->classes;
        $class_name = join(' ', apply_filters('nav_menu_css_array', array_filter($classes), $data_object));

        // - Construction
        if ($depth > 0) {
            $output .= $indentation . '<li class="' . esc_attr($class_name) . '">';
        } else {
            $output .= '<li class="' . esc_attr($class_name) . '">';
        }
        $output .= '<a href="' . $permalink . '">' . $title . '</a>';
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        $output .= "</li>";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "</ul>";
    }
}

class Sidebar_menu extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul>";
    }
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        // - Titres et liens
        $title = $data_object->title;
        $permalink = $data_object->url;

        // // - Indentation
        // $indentation = str_repeat("\t", $depth);

        // - Classes
        $classes = empty($data_object->classes) ? array() : (array) $data_object->classes;
        $class_name = join(' ', apply_filters('nav_menu_css_array', array_filter($classes), $data_object));

        // - Construction
        if ($depth > 0) {
            $output .= '<li class="' . esc_attr($class_name) . '">';
        } else {
            $output .= '<li class="' . esc_attr($class_name) . '">';
        }
        $output .= '<a href="' . $permalink . '">' . $title . '</a>';
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        $output .= "</li>";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "</ul>";
    }
}

// - Supprimer le label "Catégorie :" sur les pages de catégories
add_filter('get_the_archive_title_prefix', '__return_false');
