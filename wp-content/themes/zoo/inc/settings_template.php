<?php
 /**
   * The Customize  Page.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license  www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author    AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
function zoo_customize_register( $wp_customize ) {
    //*************************BODY***********************************
     $wp_customize->add_section( 'zoo_body_settings' , array(
        'title'      => __( 'Body Settings','zoo' ),
        'priority'   => 1,
        'capability' => 'edit_theme_options',
    ) );
//***body font***
            $wp_customize->add_setting( 'zoo_body_font' , array(
            'default'     => 'Abel,sans-serif',
            'sanitize_callback' => 'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'body_font',array(
                    'label'=>__( 'Body Font','zoo' ),
                    'settings'=>'zoo_body_font',
                    'priority'=>1,
                    'section'=>'zoo_body_settings',
                    'type'=>'select','choices'=>array(
                        "Abel,sans-serif"=>"Abel",
                        "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                        "Comfortaa"=>"Comfortaa",
                        "Dancing Script,cursive"=>"Dancing Script",
                        "Dosis,sans-serif"=>"Dosis",
                        "Droid Sans,sans-serif"=>"Droid Sans",
                        "Droid Serif,sans-serif"=>"Droid Serif",
                        "Francois One,sans-serif"=>"Francois One",
                        "Georgia,serif"=>"Georgia",
                        "Helvetica,sans-serif"=>"Helvetica",
                        "Josefin Sans,sans-serif"=>"Josefin Sans",
                        "Lato,sans-serif"=>"Lato",
                        "Lobster,sans-serif"=>"Lobster",
                        "Lora,sans-serif"=>"Lora",
                        "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                        "Open Sans,sans-serif"=>"Open Sans",
                        "Oswald,sans-serif"=>"Oswald",
                        "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                        "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                        "PT Sans"=>"PT Sans",
                        "Prosto One,cursive"=>"Prosto One",
                        "Quicksand,sans-serif"=>"Quicksand",
                        "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                        "Roboto,sans-serif"=>"Roboto",
                        "Share,cursive"=>"Share",
                        "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                        "Times New Roman,sans-serif"=>"Times New Roman",
                        "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                        "Ubuntu,sans-serif"=>"Ubuntu",
                        "Verdana,sans-serif"=>"Verdana"))
            )
        );
//***body font size***
        $wp_customize->add_setting( 'zoo_font_size' , array(
            'default'     => '14px',
            'sanitize_callback' => 'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
               $wp_customize,'font_size',array(
                     'label'=>__('Font size','zoo'),
                     'section'=>'zoo_body_settings',
                     'settings'=>'zoo_font_size',
                     'priority'=>2
                     )
             ) );
//***body links font***
        $wp_customize->add_setting( 'zoo_body_links_font' , array(
            'default'     => 'Abel,sans-serif',
            'sanitize_callback' =>'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'body_links_font',array(
                    'label'=>__( 'Body Links Font','zoo' ),
                    'settings'=>'zoo_body_links_font',
                    'priority'=>3,
                    'section'=>'zoo_body_settings',
                    'type'=>'select',
                    'choices'=>array(
                        "Abel,sans-serif"=>"Abel",
                        "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                        "Comfortaa"=>"Comfortaa",
                        "Dancing Script,cursive"=>"Dancing Script",
                        "Dosis,sans-serif"=>"Dosis",
                        "Droid Sans,sans-serif"=>"Droid Sans",
                        "Droid Serif,sans-serif"=>"Droid Serif",
                        "Francois One,sans-serif"=>"Francois One",
                        "Georgia,serif"=>"Georgia",
                        "Helvetica,sans-serif"=>"Helvetica",
                        "Josefin Sans,sans-serif"=>"Josefin Sans",
                        "Lato,sans-serif"=>"Lato",
                        "Lobster,sans-serif"=>"Lobster",
                        "Lora,sans-serif"=>"Lora",
                        "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                        "Open Sans,sans-serif"=>"Open Sans",
                        "Oswald,sans-serif"=>"Oswald",
                        "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                        "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                        "PT Sans"=>"PT Sans",
                        "Prosto One,cursive"=>"Prosto One",
                        "Quicksand,sans-serif"=>"Quicksand",
                        "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                        "Roboto,sans-serif"=>"Roboto",
                        "Share,cursive"=>"Share",
                        "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                        "Times New Roman,sans-serif"=>"Times New Roman",
                        "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                        "Ubuntu,sans-serif"=>"Ubuntu",
                        "Verdana,sans-serif"=>"Verdana"))
            )
         );
//***body links size***
        $wp_customize->add_setting( 'zoo_links_size' , array(
            'default'     => '14px',
            'sanitize_callback' => 'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
               $wp_customize,'links_size',array(
                     'label'=>__('Links size','zoo'),
                     'section'=>'zoo_body_settings',
                     'settings'=>'zoo_links_size',
                     'priority'=>4
                     )
             ) );
//***body font color***
        $wp_customize->add_setting('zoo_font_color',array(
            'default'=>'#92999e',
            'sanitize_callback' => 'sanitize_hex_color',
            'tranzoo'=>'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Color_Control(
               $wp_customize,'font_color',array(
                     'label'=>__('Font Color','zoo'),
                     'section'=>'zoo_body_settings',
                     'settings'=>'zoo_font_color',
                     'priority'=>5
                     )
             ) );
//***body links color***
        $wp_customize->add_setting('zoo_link_color',array(
            'default'=>'#92999e',
            'sanitize_callback' => 'sanitize_hex_color',
            'tranzoo'=>'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Color_Control(
               $wp_customize,'link_color',array(
                     'label'=>__('Link Color','zoo'),
                     'section'=>'zoo_body_settings',
                     'settings'=>'zoo_link_color',
                     'priority'=>6
                     )
             ) );
//***Body Link Hover Color**
         $wp_customize->add_setting('zoo_link_hover_color',array(
                'default'=>'#12abff',
                'sanitize_callback' => 'sanitize_hex_color',
                'tranzoo'=>'postMessage',
                'capability' => 'edit_theme_options',
            ) );
        $wp_customize->add_control(new WP_Customize_Color_Control(
               $wp_customize,'link_hover_color',array(
                     'label'=>__('Link Hover Color','zoo'),
                     'section'=>'zoo_body_settings',
                     'settings'=>'zoo_link_hover_color',
                     'priority'=>7
                     )
          ) );
//***Body Link Underline***
        $wp_customize->add_setting('zoo_link_underline',array(
                'default'=>'none',
                'sanitize_callback' => 'sanitize_text_field',
                'tranzoo'=>'postMessage',
                'capability' => 'edit_theme_options',
            ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'ink_underline',array(
                    'label'=>__('Body links underline','zoo'),
                    'settings'=>'zoo_link_underline',
                    'section'=>'zoo_body_settings',
                    'type'=>'radio',
                    'priority'=>8,
                    'choices'=>array(
                            'none'=>'no',
                            'underline'=>'yes'))
            ) );
//***Body Link Underline Hover***
         $wp_customize->add_setting('zoo_link_underline_hover',array(
                'default'=>'none',
                'sanitize_callback' => 'sanitize_text_field',
                'tranzoo'=>'postMessage',
                'capability' => 'edit_theme_options',
            ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'link_underline_hover',array(
                    'label'=>__('Body links underline hover','zoo'),
                    'settings'=>'zoo_link_underline_hover',
                    'section'=>'zoo_body_settings',
                    'type'=>'radio',
                    'priority'=>9,
                    'choices'=>array(
                            'none'=>'no',
                            'underline'=>'yes'))
          ) );

//*************************Main-menu***********************************
     $wp_customize->add_section( 'zoo_main_settings' , array(
        'title'      => __( 'Main Menu Settings','zoo' ),
        'priority'   => 2,
        'capability' => 'edit_theme_options',
    ) );
//***main font***
            $wp_customize->add_setting( 'zoo_main_font' , array(
            'default'     => 'Abel,sans-serif',
            'sanitize_callback' => 'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'main_font',array(
                    'label'=>__( 'Main Font','zoo' ),
                    'settings'=>'zoo_main_font',
                    'priority'=>1,
                    'section'=>'zoo_main_settings',
                    'type'=>'select','choices'=>array(
                        "Abel,sans-serif"=>"Abel",
                        "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                        "Comfortaa"=>"Comfortaa",
                        "Dancing Script,cursive"=>"Dancing Script",
                        "Dosis,sans-serif"=>"Dosis",
                        "Droid Sans,sans-serif"=>"Droid Sans",
                        "Droid Serif,sans-serif"=>"Droid Serif",
                        "Francois One,sans-serif"=>"Francois One",
                        "Georgia,serif"=>"Georgia",
                        "Helvetica,sans-serif"=>"Helvetica",
                        "Josefin Sans,sans-serif"=>"Josefin Sans",
                        "Lato,sans-serif"=>"Lato",
                        "Lobster,sans-serif"=>"Lobster",
                        "Lora,sans-serif"=>"Lora",
                        "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                        "Open Sans,sans-serif"=>"Open Sans",
                        "Oswald,sans-serif"=>"Oswald",
                        "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                        "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                        "PT Sans"=>"PT Sans",
                        "Prosto One,cursive"=>"Prosto One",
                        "Quicksand,sans-serif"=>"Quicksand",
                        "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                        "Roboto,sans-serif"=>"Roboto",
                        "Share,cursive"=>"Share",
                        "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                        "Times New Roman,sans-serif"=>"Times New Roman",
                        "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                        "Ubuntu,sans-serif"=>"Ubuntu",
                        "Verdana,sans-serif"=>"Verdana"))
            )
        );
//***main font size***
        $wp_customize->add_setting( 'zoo_main_font_size' , array(
            'default'     => '14px',
            'sanitize_callback' => 'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
               $wp_customize,'main_font_size',array(
                     'label'=>__('Font size','zoo'),
                     'section'=>'zoo_main_settings',
                     'settings'=>'zoo_main_font_size',
                     'priority'=>2
                     )
             ) );
//***main font color***
        $wp_customize->add_setting('zoo_main_color',array(
            'default'=>'#92999e',
            'sanitize_callback' => 'sanitize_hex_color',
            'tranzoo'=>'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Color_Control(
               $wp_customize,'main_color',array(
                     'label'=>__('Font Color','zoo'),
                     'section'=>'zoo_main_settings',
                     'settings'=>'zoo_main_color',
                     'priority'=>3
                     )
             ) );
//***main Hover Color**
         $wp_customize->add_setting('zoo_main_hover_color',array(
                'default'=>'#12abff',
                'sanitize_callback' => 'sanitize_hex_color',
                'tranzoo'=>'postMessage',
                'capability' => 'edit_theme_options',
            ) );
        $wp_customize->add_control(new WP_Customize_Color_Control(
               $wp_customize,'main_hover_color',array(
                     'label'=>__('Hover Color','zoo'),
                     'section'=>'zoo_main_settings',
                     'settings'=>'zoo_main_hover_color',
                     'priority'=>4
                     )
          ) );
//***main Link Underline***
        $wp_customize->add_setting('zoo_main_underline',array(
                'default'=>'none',
                'sanitize_callback' => 'sanitize_text_field',
                'tranzoo'=>'postMessage',
                'capability' => 'edit_theme_options',
            ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'main_underline',array(
                    'label'=>__('links underline','zoo'),
                    'settings'=>'zoo_main_underline',
                    'section'=>'zoo_main_settings',
                    'type'=>'radio',
                    'priority'=>5,
                    'choices'=>array(
                            'none'=>'no',
                            'underline'=>'yes'))
            ) );
//***main Link Underline Hover***
         $wp_customize->add_setting('zoo_main_underline_hover',array(
                'default'=>'none',
                'sanitize_callback' => 'sanitize_text_field',
                'tranzoo'=>'postMessage',
                'capability' => 'edit_theme_options',
            ) );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,'main_underline_hover',array(
                    'label'=>__('links underline hover','zoo'),
                    'settings'=>'zoo_main_underline_hover',
                    'section'=>'zoo_main_settings',
                    'type'=>'radio',
                    'priority'=>6,
                    'choices'=>array(
                            'none'=>'no',
                            'underline'=>'yes'))
          ) );

//*************************copyright***********************************
     $wp_customize->add_section( 'zoo_copyright_settings' , array(
          'title'      => __( 'Copyright Menu Settings','zoo' ),
          'priority'   => 6,
          'capability' => 'edit_theme_options',
    ) );
//***copyright text***
    $wp_customize->add_setting( 'zoo_copyright_text' , array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
    $wp_customize->add_control(new WP_Customize_Control(
             $wp_customize,'copyright_text',array(
                   'label'=>__('Text','zoo'),
                   'section'=>'zoo_copyright_settings',
                   'settings'=>'zoo_copyright_text',
                   'priority'=>1
                   )
           ) );

//***copyright link***
    $wp_customize->add_setting( 'zoo_copyright_link' , array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
    $wp_customize->add_control(new WP_Customize_Control(
             $wp_customize,'copyright_link',array(
                   'label'=>__('Link','zoo'),
                   'section'=>'zoo_copyright_settings',
                   'settings'=>'zoo_copyright_link',
                   'priority'=>2
                   )
           ) );
//***copyright font***
     $wp_customize->add_setting( 'zoo_copyright_font' , array(
        'default'     => 'Abel,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'copyright_font',array(
                'label'=>__( 'Font','zoo' ),
                'settings'=>'zoo_copyright_font',
                'priority'=>3,
                  'section'=>'zoo_copyright_settings',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
//***copyright font size***
    $wp_customize->add_setting( 'zoo_copyright_font_size' , array(
        'default'     => '14px',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
    $wp_customize->add_control(new WP_Customize_Control(
             $wp_customize,'copyright_font_size',array(
                   'label'=>__('Font size','zoo'),
                   'section'=>'zoo_copyright_settings',
                   'settings'=>'zoo_copyright_font_size',
                   'priority'=>4
                   )
           ) );
//***copyright font color***
    $wp_customize->add_setting('zoo_copyright_color',array(
      'default'=>'#92999e',
      'sanitize_callback' => 'sanitize_hex_color',
      'tranzoo'=>'postMessage',
      'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Color_Control(
             $wp_customize,'copyright_color',array(
                   'label'=>__('Font Color','zoo'),
                   'section'=>'zoo_copyright_settings',
                   'settings'=>'zoo_copyright_color',
                   'priority'=>5
                   )
           ) );
//***copyright Hover Color**
       $wp_customize->add_setting('zoo_copyright_hover_color',array(
          'default'=>'#12abff',
          'sanitize_callback' => 'sanitize_hex_color',
          'tranzoo'=>'postMessage',
          'capability' => 'edit_theme_options',
        ) );
      $wp_customize->add_control(new WP_Customize_Color_Control(
             $wp_customize,'copyright_hover_color',array(
                   'label'=>__('Hover Color','zoo'),
                   'section'=>'zoo_copyright_settings',
                   'settings'=>'zoo_copyright_hover_color',
                   'priority'=>6
                   )
        ) );
//***copyright Link Underline***
      $wp_customize->add_setting('zoo_copyright_underline',array(
          'default'=>'none',
          'sanitize_callback' => 'sanitize_text_field',
          'tranzoo'=>'postMessage',
          'capability' => 'edit_theme_options',
        ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'copyright_underline',array(
                  'label'=>__('links underline','zoo'),
                  'settings'=>'zoo_copyright_underline',
                  'section'=>'zoo_copyright_settings',
                  'type'=>'radio',
                  'priority'=>7,
                  'choices'=>array(
                      'none'=>'no',
                      'underline'=>'yes'))
          ) );
//***copyright Link Underline Hover***
      $wp_customize->add_setting('zoo_copyright_underline_hover',array(
          'default'=>'none',
          'sanitize_callback' => 'sanitize_text_field',
          'tranzoo'=>'postMessage',
          'capability' => 'edit_theme_options',
        ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'copyright_underline_hover',array(
                  'label'=>__('links underline hover','zoo'),
                  'settings'=>'zoo_copyright_underline_hover',
                  'section'=>'zoo_copyright_settings',
                  'type'=>'radio',
                  'priority'=>8,
                  'choices'=>array(
                      'none'=>'no',
                      'underline'=>'yes'))
      ) );
//Social icons
    $wp_customize->add_section('zoo_soc_settings',array(
        'title'=>__('Social Links','zoo'),
        'priority'=>7,
        'capability' => 'edit_theme_options',
      ) );

        $wp_customize->add_setting('zoo_soc_facebook',array(
        'default'=>'http://ordasoft.com/',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'facebook',array(
            'label'=>__('Facebook','zoo'),
            'settings'=>'zoo_soc_facebook',
            'section'=>'zoo_soc_settings',
            'priority'=>1 )
      ) );
    $wp_customize->add_setting('zoo_soc_twitter',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'twitter',array(
            'label'=>__('Twitter','zoo'),
            'settings'=>'zoo_soc_twitter',
            'section'=>'zoo_soc_settings',
            'priority'=>2 )
      ) );
    $wp_customize->add_setting('zoo_soc_skype',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'skype',array(
            'label'=>__('Skype','zoo'),
            'settings'=>'zoo_soc_skype',
            'section'=>'zoo_soc_settings',
            'priority'=>3 )
      ) );
    $wp_customize->add_setting('zoo_soc_soundcloud',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'soundcloud',array(
            'label'=>__('Soundcloud','zoo'),
            'settings'=>'zoo_soc_soundcloud',
            'section'=>'zoo_soc_settings',
            'priority'=>4 )
      ) );
    $wp_customize->add_setting('zoo_soc_dribbble',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'dribbble',array(
            'label'=>__('Dribbble','zoo'),
            'settings'=>'zoo_soc_dribbble',
            'section'=>'zoo_soc_settings',
            'priority'=>5 )
      ) );
    $wp_customize->add_setting('zoo_soc_google',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'google',array(
            'label'=>__('Google','zoo'),
            'settings'=>'zoo_soc_google',
            'section'=>'zoo_soc_settings',
            'priority'=>6 )
      ) );
    $wp_customize->add_setting('zoo_soc_vimeo',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'vimeo',array(
            'label'=>__('Vimeo','zoo'),
            'settings'=>'zoo_soc_vimeo',
            'section'=>'zoo_soc_settings',
            'priority'=>7 )
      ) );
    $wp_customize->add_setting('zoo_soc_flickr',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'flickr',array(
            'label'=>__('Flickr','zoo'),
            'settings'=>'zoo_soc_flickr',
            'section'=>'zoo_soc_settings',
            'priority'=>8 )
      ) );
    $wp_customize->add_setting('zoo_soc_youtube_play',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'youtube_play',array(
            'label'=>__('Youtube','zoo'),
            'settings'=>'zoo_soc_youtube_play',
            'section'=>'zoo_soc_settings',
            'priority'=>9 )
      ) );
    $wp_customize->add_setting('zoo_soc_instagram',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'instagram',array(
            'label'=>__('Instagram','zoo'),
            'settings'=>'zoo_soc_instagram',
            'section'=>'zoo_soc_settings',
            'priority'=>10 )
      ) );
    $wp_customize->add_setting('zoo_soc_linkedin',array(
        'default'=>'',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'linkedin',array(
            'label'=>__('Linkedin','zoo'),
            'settings'=>'zoo_soc_linkedin',
            'section'=>'zoo_soc_settings',
            'priority'=>11 )
      ) );
//***soc font size***
    $wp_customize->add_setting( 'zoo_soc_size' , array(
        'default'     => '14px',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
    $wp_customize->add_control(new WP_Customize_Control(
             $wp_customize,'copyright_font_size',array(
                   'label'=>__('Font size','zoo'),
                   'section'=>'zoo_soc_settings',
                   'settings'=>'zoo_soc_size',
                   'priority'=>12
                   )
           ) );


     //***soc color***
    $wp_customize->add_setting('zoo_soc_color',array(
        'default'=>'#12abff',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Color_Control(
           $wp_customize,'soc_color',array(
            'label'=>__('Social Links Color','zoo'),
            'settings'=>'zoo_soc_color',
            'section'=>'zoo_soc_settings',
            'priority'=>13 )
      ) );
 //***soc color hover***
    $wp_customize->add_setting('zoo_soc_color_hover',array(
        'default'=>'#12abff',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'=>'postMessage',
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Color_Control(
           $wp_customize,'soc_color_hover',array(
            'label'=>__('Social Links Color Hover','zoo'),
            'settings'=>'zoo_soc_color_hover',
            'section'=>'zoo_soc_settings',
            'priority'=>14 )
      ) );
    $wp_customize->add_setting('zoo_soc_title',array(
            'default'=>__('Social Icons','zoo'),
            'sanitize_callback' => 'sanitize_text_field',
            'tranzoo'   => 'postMessage',
            'capability' => 'edit_theme_options',
        ) );
        $wp_customize->add_control(new WP_Customize_Control(
             $wp_customize,'soc_title',array(
                   'label'=>__('Title','zoo'),
                   'section'=>'zoo_soc_settings',
                   'settings'=>'zoo_soc_title',
                   'priority'=>15
                   )
           ) );
//Logo----------------------------------------------------------------------
    $wp_customize->add_section('zoo_logo',array(
            'title'=>__('Logo','zoo'),
            'priority'=>8,
            'capability' => 'edit_theme_options',
            ) );
    $wp_customize->add_setting('zoo_logo_img',array(
            'default'=>'',
            'sanitize_callback' => 'esc_url_raw',
            'tranzoo'=>'postMessage',
            'capability' => 'edit_theme_options',
      ) );
    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,'logo_img',array(
                'label'=>__('Upload a logo','zoo'),
                'settings'=>'zoo_logo_img',
                'section'=>'zoo_logo',
                'priority'=>1 )
      ) );
    $wp_customize->add_setting('zoo_logo_link',array(
            'default'=>'',
            'sanitize_callback' => 'esc_url_raw',
            'tranzoo'=>'postMessage',
            'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,'logo_link',array(
            'label'=>__('Logo link','zoo'),
            'settings'=>'zoo_logo_link',
            'section'=>'zoo_logo',
            'priority'=>2 )
      ) );

//*******typography***
    $wp_customize->add_section('zoo_typography',array(
        'title'=>__('Typography','zoo'),
        'priority'=>9,
        'capability' => 'edit_theme_options',
      ) );
    $wp_customize->add_setting( 'zoo_h1_font' , array(
        'default'     => 'Francois One,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'h1_font',array(
                'label'=>__( 'h1','zoo' ),
                'settings'=>'zoo_h1_font',
                'priority'=>1,
                  'section'=>'zoo_typography',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
    $wp_customize->add_setting( 'zoo_h2_font' , array(
        'default'     => 'Francois One,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'h2_font',array(
                'label'=>__( 'h2','zoo' ),
                'settings'=>'zoo_h2_font',
                'priority'=>2,
                  'section'=>'zoo_typography',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
    $wp_customize->add_setting( 'zoo_h3_font' , array(
        'default'     => 'Francois One,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'h3_font',array(
                'label'=>__( 'h3','zoo' ),
                'settings'=>'zoo_h3_font',
                'priority'=>3,
                  'section'=>'zoo_typography',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
    $wp_customize->add_setting( 'zoo_h4_font' , array(
        'default'     => 'Francois One,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'h4_font',array(
                'label'=>__( 'h4','zoo' ),
                'settings'=>'zoo_h4_font',
                'priority'=>4,
                  'section'=>'zoo_typography',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
    $wp_customize->add_setting( 'zoo_h5_font' , array(
        'default'     => 'Francois One,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'h5_font',array(
                'label'=>__( 'h5','zoo' ),
                'settings'=>'zoo_h5_font',
                'priority'=>5,
                  'section'=>'zoo_typography',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
    $wp_customize->add_setting( 'zoo_h6_font' , array(
        'default'     => 'Francois One,sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
        'tranzoo'   => 'postMessage',
        'capability' => 'edit_theme_options',
    ) );
      $wp_customize->add_control(new WP_Customize_Control(
              $wp_customize,'h6_font',array(
                'label'=>__( 'h6','zoo' ),
                'settings'=>'zoo_h6_font',
                'priority'=>6,
                  'section'=>'zoo_typography',
                  'type'=>'select','choices'=>array(
                      "Abel,sans-serif"=>"Abel",
                      "Arial,sans-serif"=>"Arial",
                        "Cuprum"=>"Cuprum",
                      "Comfortaa"=>"Comfortaa",
                      "Dancing Script,cursive"=>"Dancing Script",
                      "Dosis,sans-serif"=>"Dosis",
                      "Droid Sans,sans-serif"=>"Droid Sans",
                      "Droid Serif,sans-serif"=>"Droid Serif",
                      "Francois One,sans-serif"=>"Francois One",
                      "Georgia,serif"=>"Georgia",
                      "Helvetica,sans-serif"=>"Helvetica",
                      "Josefin Sans,sans-serif"=>"Josefin Sans",
                      "Lato,sans-serif"=>"Lato",
                      "Lobster,sans-serif"=>"Lobster",
                      "Lora,sans-serif"=>"Lora",
                      "Open Sans Condensed,sans-serif"=>"Open Sans Condensed",
                      "Open Sans,sans-serif"=>"Open Sans",
                      "Oswald,sans-serif"=>"Oswald",
                      "Oxygen,sans-serif"=>"Oxygen",
                        "Playfair Display SC,sans-serif"=>"Playfair Display SC",
                        "Philosopher"=>"Philosopher",
                      "PT Sans Narrow,sans-serif"=>"PT Sans Narrow",
                      "PT Sans"=>"PT Sans",
                      "Prosto One,cursive"=>"Prosto One",
                      "Quicksand,sans-serif"=>"Quicksand",
                      "Roboto Condensed, sans-serif"=>"Roboto Condensed",
                      "Roboto,sans-serif"=>"Roboto",
                      "Share,cursive"=>"Share",
                      "Source Sans Pro,sans-serif"=>"Source Sans Pro",
                      "Merriweather,sans-serif"=>"Merriweather",
                      "Times New Roman,sans-serif"=>"Times New Roman",
                      "Ubuntu Condensed,sans-serif"=>"Ubuntu Condensed",
                      "Ubuntu,sans-serif"=>"Ubuntu",
                      "Verdana,sans-serif"=>"Verdana"))
          )
      );
    //favicon----------------------------------------------------------------------
    $wp_customize->add_section('zoo_favicon',array(
            'title'=>__('Favicon','zoo'),
            'priority'=>10,
            'capability' => 'edit_theme_options',
            ) );
    $wp_customize->add_setting('zoo_favicon_img',array(
            'default'=>'',
            'sanitize_callback' => 'esc_url_raw',
            'tranzoo'=>'postMessage',
            'capability' => 'edit_theme_options',
      ) );
    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,'favicon_img',array(
                'label'=>__('Upload a favicon 16x16px','zoo'),
                'settings'=>'zoo_favicon_img',
                'section'=>'zoo_favicon',
                'priority'=>1 )
      ) );
}
add_action( 'customize_register', 'zoo_customize_register' );