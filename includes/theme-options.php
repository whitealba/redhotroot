<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => 'Option Types',
          'content'   => '<p>Help content goes here!</p>'
        )
      ),
      'sidebar'       => '<p>Sidebar content goes here!</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'general_settings',
        'title'       => __('General Settings', 'planuswp')
      ),
      array(
        'id'          => 'home_sections',
        'title'       => __('Home Sections', 'planuswp')
      ),
      array(
        'id'          => 'welcome_section',
        'title'       => __('Welcome Section', 'planuswp')
      ),
      array(
        'id'          => 'about_section',
        'title'       => __('About Section', 'planuswp')
      ),
      array(
        'id'          => 'portfolio_section',
        'title'       => __('Portfolio Section', 'planuswp')
      ),
      array(
        'id'          => 'services_section',
        'title'       => __('Services Section', 'planuswp')
      ),
      array(
        'id'          => 'testimonials_section',
        'title'       => __('Testimonials Section', 'planuswp')
      ),
      array(
        'id'          => 'blog_section',
        'title'       => __('Blog Section', 'planuswp')
      ),
      array(
        'id'          => 'contact_section',
        'title'       => __('Contact Section', 'planuswp')
      ),
      array(
        'id'          => 'map_section',
        'title'       => __('Map Section', 'planuswp')
      )
    ),
    'settings'        => array(
      array(
        'id'          => 'logo_upload',
        'label'       => __('Logo upload', 'planuswp'),
        'desc'        => __('Use this field to upload your logo. This logo will be shown on the header bar of the theme. After uploading, you need to <strong>press the "Send to OptionTree" button</strong> in order to populate the input with the URI of that media.', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'white_logo',
        'label'       => __('White Logo Upload', 'planuswp'),
        'desc'        => __('Here you can upload the white or light version of your logo meant to be used on darker backgrounds on the home screen. Also this logo will be used on dark menu.', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo_choice',
        'label'       => __('Choose wich logo to display', 'planuswp'),
        'desc'        => __('Please choose wich logo should be shown on your header. Please take in account your image choice for welcome screen background and menu style choice (white or black).', 'planuswp'),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'normal_website_logo',
            'label'       => __('Normal Logo', 'planuswp'),
            'src'         => ''
          ),
          array(
            'value'       => 'white_website_logo',
            'label'       => __('White Logo', 'planuswp'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'favicon_ico_upload',
        'label'       => __('Favicon upload (.ico)', 'planuswp'),
        'desc'        => __('Use this field to upload your favicon in .ico format (16x16 px)', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'favicon_png_upload',
        'label'       => __('Favicon upload (.png)', 'planuswp'),
        'desc'        => __('Use this field to upload your favicon in .png format (16x16 px)', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'apple_touch_icon',
        'label'       => __('Apple Touch Icon (.png)', 'planuswp'),
        'desc'        => __('Use this field to upload the Apple touch icon in .png format (152x152 px)', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'tile_image',
        'label'       => __('Windows 8 Tile Image (.png)', 'planuswp'),
        'desc'        => __('Use this field to upload the Windows 8 Tile Icon icon in .png format (144x144 px)', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'tile_color',
        'label'       => __('Windows 8 Tile Color', 'planuswp'),
        'desc'        => __('Use this field to choose the color for the Windows 8 Tile.', 'planuswp'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_style',
        'label'       => __('Choose home menu style', 'planuswp'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'white_menu',
            'label'       => 'White menu',
            'src'         => ''
          ),
          array(
            'value'       => 'black_menu',
            'label'       => 'Black menu',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'footer_text',
        'label'       => __('Footer Informations', 'planuswp'),
        'desc'        => __('Use this field to write your disclaymer or copyrights on footer.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_background_settings',
        'label'       => __('Footer Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for footer. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sections',
        'label'       => __('Sections', 'planuswp'),
        'desc'        => __('Here you can set the order of all sections from the home page. Just drag and drop the items to adjust the order.', 'planuswp'),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'home_sections',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'section_title_menu',
            'label'       => __('Section title on menu', 'planuswp'),
            'desc'        => __('Here you can set the name of the section wich will be displayed on home page menu. Please note that if you leave it empty, the section will be omitted from menu.', 'planuswp'),
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'choose_section',
            'label'       => __('Choose Section', 'planuswp'),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'header',
                'label'       => 'Welcome',
                'src'         => ''
              ),
              array(
                'value'       => 'about',
                'label'       => 'About',
                'src'         => ''
              ),
              array(
                'value'       => 'services',
                'label'       => 'Services',
                'src'         => ''
              ),
              array(
                'value'       => 'portfolio',
                'label'       => 'Portfolio',
                'src'         => ''
              ),
              array(
                'value'       => 'testimonials',
                'label'       => 'Testimonials',
                'src'         => ''
              ),
              array(
                'value'       => 'blog',
                'label'       => 'Latest Blog Posts',
                'src'         => ''
              ),
              array(
                'value'       => 'contact',
                'label'       => 'Contact',
                'src'         => ''
              )
            )
          )
        )
      ),
      array(
        'id'          => 'welcome_logo',
        'label'       => __('Welcome Screen logo', 'planuswp'),
        'desc'        => __('This logo is a sign or mark wich you can show on the Welcome Screen. If don;t want it, you can leave it blank.', 'planuswp'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'welcome_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'welcome_title',
        'label'       => __('Welcome Screen Title', 'planuswp'),
        'desc'        => __('This should be the main title of the website visible on the Welcome screen.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'welcome_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'welcome_description',
        'label'       => __('Welcome Screen Description', 'planuswp'),
        'desc'        => __('Please be descriptive but short. This is a generic statement about you or your company.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'welcome_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'welcome_screen_settings',
        'label'       => __('Welcome Screen Background Settings', 'planuswp'),
        'desc'        => __('Here you can replace the image from the Welcome Screen. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'welcome_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'show_contact_button',
        'label'       => __('Show "Quick Contact" button on home screen', 'planuswp'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'welcome_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'text_contact_button',
        'label'       => __('Text for "Quick Contact" button', 'planuswp'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'welcome_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_title',
        'label'       => __('Title', 'planuswp'),
        'desc'        => __('Here you can insert the title for "About Me" section.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_background_settings',
        'label'       => __('Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for the About Section. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'about_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'about_images',
        'label'       => __('Upload Images', 'planuswp'),
        'desc'        => __('Here you can add and upload your images to be seen on About Section. Please <strong>do not upload more than 3 images</strong>.', 'planuswp'),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'about_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'about_image',
            'label'       => __('Image', 'planuswp'),
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'about_content',
        'label'       => __('About Content', 'planuswp'),
        'desc'        => __('Add your description here. You can use the options to style the text.', 'planuswp'),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_section',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'insert_social_icons',
        'label'       => __('Social Icons', 'planuswp'),
        'desc'        => __('Use the Add New button to add social icons to About section.', 'planuswp'),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'about_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'social_profile',
            'label'       => __('Social Profile', 'planuswp'),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'fa-facebook',
                'label'       => 'Facebook',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-twitter',
                'label'       => 'Twitter',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-google-plus',
                'label'       => 'Google Plus',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-linkedin',
                'label'       => 'Linkedin',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-skype',
                'label'       => 'Skype',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-dribbble',
                'label'       => 'Dribbble',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-flickr',
                'label'       => 'Flickr',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-pinterest',
                'label'       => 'Pinterest',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-stack-overflow',
                'label'       => 'Stack Overflow',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-youtube',
                'label'       => 'Youtube',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-vimeo-square',
                'label'       => 'Vimeo',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-dropbox',
                'label'       => 'Dropbox',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-foursquare',
                'label'       => 'Foursquare',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-instagram',
                'label'       => 'Instagram',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-github',
                'label'       => 'Github',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-tumblr',
                'label'       => 'Tumblr',
                'src'         => ''
              ),
              array(
                'value'       => 'fa-xing',
                'label'       => 'Xing',
                'src'         => ''
              )
            )
          ),
          array(
            'id'          => 'profile_url',
            'label'       => __('Profile URL', 'planuswp'),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'portfolio_title',
        'label'       => __('Title for Potfolio Section', 'planuswp'),
        'desc'        => __('Here you can set the title for portfolio Section. By default the values is "Portfolio".', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_background_settings',
        'label'       => __('Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for the Portfolio Section. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'portfolio_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'show_more_work',
        'label'       => __('Show "More work" button', 'planuswp'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'portfolio_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'text_more_work',
        'label'       => __('Text for "More work" button', 'planuswp'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'link_more_work',
        'label'       => __('Link for "More work" button', 'planuswp'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_title',
        'label'       => __('Title for Services Section', 'planuswp'),
        'desc'        => __('This title will be visible on the top of the Services section. Be short and descriptive.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_background_settings',
        'label'       => __('Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for the Services Section. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'services_page',
        'label'       => __('Select the Services page', 'planuswp'),
        'desc'        => __('Please select the Services page wich will be shown on thos section. You need to create a services page in order to be visible on the select field.', 'planuswp'),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'testimonials_title',
        'label'       => __('Ttitle for Testimonial Section', 'planuswp'),
        'desc'        => __('Here goes the title for your Testimonial Section', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'testimonials_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'testimonials_background_settings',
        'label'       => __('Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for the Testimonials Section. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'testimonials_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_title',
        'label'       => __('Title for Blog Section', 'planuswp'),
        'desc'        => __('This title will be visible on the top of the Blog section. Please be descriptive, but keep it short.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'blog_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_background_settings',
        'label'       => __('Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for the Blog Section. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'blog_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'text_read_blog',
        'label'       => __('Text for Blog Button', 'planuswp'),
        'desc'        => __('This is the text for the button bellow blog posts. E.g. "Read our blog" or "Read more articles".', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'blog_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'select_blog_page',
        'label'       => __('Select Blog Page', 'planuswp'),
        'desc'        => __('Select the page created by you as Blog page', 'planuswp'),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'blog_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_title',
        'label'       => __('Title for Contact Section', 'planuswp'),
        'desc'        => __('Here goes the title for your Contact Section.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_background_settings',
        'label'       => __('Background Settings', 'planuswp'),
        'desc'        => __('Here you can set the background for the Contact Section. You can change also the style using all given controls.', 'planuswp'),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_content',
        'label'       => __('Content', 'planuswp'),
        'desc'        => __('Please add here the content you want to be shown on Contact Section.', 'planuswp'),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_email',
        'label'       => __('Your email adress', 'planuswp'),
        'desc'        => __('Add here you ermail adress where you want to receive the email from your website.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_subject',
        'label'       => __('Email Subject', 'planuswp'),
        'desc'        => __('Insert the subject of received emails.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_adress',
        'label'       => __('Adress', 'planuswp'),
        'desc'        => __('Insert your contact adress. This will be displayed under the "map pin" icon.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_phone',
        'label'       => __('Phone Number', 'planuswp'),
        'desc'        => __('Insert your phone number where your users can find you.', 'planuswp'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'map_page',
        'label'       => __('Select the Map page', 'planuswp'),
        'desc'        => __('Please select the Map page wich will be shown on the section. You need to create a map page in order to be visible on the select field.', 'planuswp'),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'map_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}