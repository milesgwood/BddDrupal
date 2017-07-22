<?php

/** * Implements hook_preprocess_entity(). */
function bdd_theme_preprocess_entity(&$variables) {
    // Only act on paragraphs_item entity types of the slide_container bundle.
    if ($variables['entity_type'] == 'paragraphs_item' && $variables['paragraphs_item']->bundle === 'slide_container') {
        // Start active_class TRUE for the first slide.
        $variables['active_class'] = TRUE;
        // For setting the slide interval.
        $interval = field_get_items('paragraphs_item', $variables['paragraphs_item'], 'field_slide_interval');
        $variables['interval'] = !empty($interval) ? $interval[0]['value'] : ‘5000’;
    }
}

    // Now we need hook_theme() to register our tpl.php file for these entities.



        /** * Implements hook_theme(). */
        function bdd_theme_theme($existing, $type, $theme, $path) {
        return array(
            'paragraphs_item__slide_container' => array(
            'render element' => 'elements',
            'path' => $path . '/templates',
            'template' => 'paragraphs-item--slide_container',
    ),
    );
    }

?>