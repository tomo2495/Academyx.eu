<?php

//add a sub-menu under the appearance menu.
function theme_menu()
{
  add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'theme_options.php', 'theme_page');  
}
add_action('admin_menu', 'theme_menu');


function theme_page()
{
?>   
<div class="section panel">    
    <h1>Graviti Theme Options</h1>
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php 
          settings_fields('theme_options'); 
        
          do_settings_sections('theme_options.php');
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
        </p>
    </form>    
</div>
<?php
}


/**
 * Register the settings to use on the theme options page
 */
add_action( 'admin_init', 'register_settings' );


//ahoj
function display_section($section){ 
echo 'Welcome and feel free to setup your Graviti theme the way you like';
}

/**
 * Function to register the settings
 */
function register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'theme_options', 'theme_options', 'validate_settings' );

    // Add settings section
    add_settings_section( 'text_section', 'Nazov prvej sekcie', 'display_section', 'theme_options.php' );

    
// Create Title textbox field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'title',
      'name'      => 'title',
      'desc'      => 'Text after Page Title',
      'std'       => '',
      'label_for' => 'title',
      'class'     => ''
    );

    add_settings_field( 'title', 'Title', 'display_setting', 'theme_options.php', 'text_section', $field_args );


// Create Meta description field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'meta_description',
      'name'      => 'meta_description',
      'desc'      => 'Write your meta description',
      'std'       => '',
      'label_for' => 'meta_description',
      'class'     => ''
    );

    add_settings_field( 'meta_description', 'Meta description', 'display_setting', 'theme_options.php', 'text_section', $field_args );
    
    
// Create Meta keywords field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'meta_keywords',
      'name'      => 'meta_keywords',
      'desc'      => 'Write your meta keywords',
      'std'       => '',
      'label_for' => 'meta_keywords',
      'class'     => ''
    );

    add_settings_field( 'meta_keywords', 'Meta keywords', 'display_setting', 'theme_options.php', 'text_section', $field_args );    
    
    
}


/**
 * Function to display the settings on the page
 * This is setup to be expandable by using a switch on the type variable.
 * In future you can add multiple types to be display from this function,
 * Such as checkboxes, select boxes, file upload boxes etc.
 */
function display_setting($args)
{
    extract( $args );

    $option_name = 'theme_options';

    $options = get_option( $option_name );

    switch ( $type ) {  
          case 'text':  
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";  
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break;  
    }
}


/**
 * Callback function to the register_settings function will pass through an input variable
 * You can then validate the values and the return variable will be the values stored in the database.
 */
function validate_settings($input)
{
  foreach($input as $k => $v)
  {
    $newinput[$k] = trim($v);
    
    // Check the input is a letter or a number
    if(!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
      $newinput[$k] = '';
    }
  }

  return $newinput;
}
