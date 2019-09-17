<?php

function asadasurfside_meta_box($meta_boxes)
{
    $prefix = 'rw_';

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'asadasurfside'),
        'post_types' => array('provider'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
        
            array(
                'id' => $prefix . 'provider_link',
                'name' => esc_html__('Url', 'asadasurfside'),
                'label_description' => '',
                'desc' => 'Please enter url',
                'type' => 'url',
                
            ),
           
        ),
    );
   

    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'asadasurfside_meta_box');