<?php
/**
 * @var $args array
 *
 */
$content = AO_Input_Types::fieldValue( $args['id'], $args['default'] );
$editor_id = $args['id'];

$settings = array(
  'wpautop' => true,
  'media_buttons' => false,
  'textarea_name' => AO_Input_Types::fieldName( $args['id'] ),
  'textarea_rows' => 5,
  'editor_height' => '',
  'tabindex'      => '',
  'editor_css'    => '',
  'editor_class'  => implode( $args['eclass'], ' ' ),
  'teeny'         => false,
  'dfw'           => false,
  'tinymce'       => true,
  'quicktags'     => true,
  'drag_drop_upload'  => true


);
$output = wp_editor( $content, $editor_id, $settings );
echo $output;
