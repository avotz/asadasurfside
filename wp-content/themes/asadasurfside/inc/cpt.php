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

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'asadasurfside'),
        'post_types' => array('medidor'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
        
            array(
                'id'               => $prefix . 'file_medidores',
                'name'             => 'File',
                'type'             => 'file',

                // Delete file from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same file for multiple posts
                'force_delete'     => true,

                // Maximum file uploads.
                'max_file_uploads' => 1,


                'upload_dir' => WP_CONTENT_DIR . '/uploads/medidores',

                
            ),
           
        ),
    );
   

    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'asadasurfside_meta_box');