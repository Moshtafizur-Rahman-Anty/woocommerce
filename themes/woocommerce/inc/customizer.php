<?php  

/**
 * Theme Name Customizer
 *
 * 
 * @package Theme Name
 * 
 */


 function theme_name_customizer ($wp_customize) {





        // Copyright Section

        $wp_customize->add_section(

            'sec_copyright' , array(

                'title'         =>  __('Copyright Setting', 'theme-name'),
                'description'   =>  __('Copyright Section', 'theme-name')

            )
        );




                //Field 1 - Copyright Text Box

                
                $wp_customize->add_setting(

                    'set_copyright' , array(

                        'type'              =>  'theme_mod',
                        'default'           =>  ' ',
                        'sanitize_callback' =>  'sanitize_text_field'

                    )
                );


                $wp_customize->add_control(

                    'set_copyright' , array(

                        'label'              =>  __('Copyright','theme-name'),
                        'description'        =>  __('Please, add your copyright information here','theme-name'),
                        'section'            =>  'sec_copyright',
                        'type'               =>   'text'

                    )
                );


/*=======================================================================*/

//Slider Section

    
   $wp_customize->add_section(

    'sec_slider' , array(

        'title'         =>  'Slider Settings',
        'description'   =>  'Slider Section'

    )
);


            //Field 1 - Slider Page Number 1

                    
            $wp_customize->add_setting(

            'set_slider_page1' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'absint'

            )
        );


        $wp_customize->add_control(

            'set_slider_page1' , array(

                'label'              =>  __('Set slider page 1','theme-name'),
                'description'        =>  __('Set slider for page 1','theme-name'),
                'section'            =>  'sec_slider',
                'type'               =>   'dropdown-pages'

            )
        );



           //Field 2 - Slider Button Number 1

                    
           $wp_customize->add_setting(

            'set_slider_button_text1' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'sanitize_text_field'

            )
        );


        $wp_customize->add_control(

            'set_slider_button_text1' , array(

                'label'              =>  __('Button Text for page 1','theme-name'),
                'description'        =>  __('Button Text for Page 1','theme-name'),
                'section'            =>  'sec_slider',
                'type'               =>   'text'

            )
        );


               //Field 3 - Slider Button URL Number 1

                    
               $wp_customize->add_setting(

                'set_slider_button_url1' , array(
    
                    'type'              =>  'theme_mod',
                    'default'           =>  ' ',
                    'sanitize_callback' =>  'esc_url_raw'
    
                )
            );
    
    
            $wp_customize->add_control(
    
                'set_slider_button_url1' , array(
    
                    'label'              =>  __('URL for Page 1','theme-name'),
                    'description'        =>  __('URL for Page 1','theme-name'),
                    'section'            =>  'sec_slider',
                    'type'               =>   'url'
    
                )
            );
    

           //Field 4 - Slider Page Number 2

                    
                    
           $wp_customize->add_setting(

            'set_slider_page2' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'absint'

            )
        );


        $wp_customize->add_control(

            'set_slider_page2' , array(

                'label'              =>  __('Set slider page 2','theme-name'),
                'description'        =>  __('Set slider for page 2','theme-name'),
                'section'            =>  'sec_slider',
                'type'               =>   'dropdown-pages'

            )
        );


           //Field 5 - Slider Button Number 2

                    
           $wp_customize->add_setting(

            'set_slider_button_text2' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'sanitize_text_field'

            )
        );


        $wp_customize->add_control(

            'set_slider_button_text2' , array(

                'label'              =>  __('Button Text for page 2','theme-name'),
                'description'        =>  __('Button Text for Page 2','theme-name'),
                'section'            =>  'sec_slider',
                'type'               =>   'text'

            )
        );


               //Field 6 - Slider Button URL Number 2

                    
               $wp_customize->add_setting(

                'set_slider_button_url2' , array(
    
                    'type'              =>  'theme_mod',
                    'default'           =>  ' ',
                    'sanitize_callback' =>  'esc_url_raw'
    
                )
            );
    
    
            $wp_customize->add_control(
    
                'set_slider_button_url2' , array(
    
                    'label'              =>  __('URL for Page 2','theme-name'),
                    'description'        =>  __('URL for Page 2','theme-name'),
                    'section'            =>  'sec_slider',
                    'type'               =>   'url'
    
                )
            );



            

           //Field 7 - Slider Page Number 3

                    
           $wp_customize->add_setting(

            'set_slider_page3' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'absint'

            )
        );


        $wp_customize->add_control(

            'set_slider_page3' , array(

                'label'              =>  __('Set slider page 3','theme-name'),
                'description'        =>  __('Set slider for page 3','theme-name'),
                'section'            =>  'sec_slider',
                'type'               =>   'dropdown-pages'

            )
        );



           //Field 8 - Slider Button Number 3

                    
           $wp_customize->add_setting(

            'set_slider_button_text3' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'sanitize_text_field'

            )
        );


        $wp_customize->add_control(

            'set_slider_button_text3' , array(

                'label'              =>  __('Button Text for page 3','theme-name'),
                'description'        =>  __('Button Text for Page 3','theme-name'),
                'section'            =>  'sec_slider',
                'type'               =>   'text'

            )
        );


               //Field 9 - Slider Button URL Number 3

                    
               $wp_customize->add_setting(

                'set_slider_button_url3' , array(
    
                    'type'              =>  'theme_mod',
                    'default'           =>  ' ',
                    'sanitize_callback' =>  'esc_url_raw'
    
                )
            );
    
    
            $wp_customize->add_control(
    
                'set_slider_button_url3' , array(
    
                    'label'              =>  __('URL for Page 3','theme-name'),
                    'description'        =>  __('URL for Page 3','theme-name'),
                    'section'            =>  'sec_slider',
                    'type'               =>   'url'
    
                )
            );


            
/*=======================================================================*/

//Home Page Setting

    
   $wp_customize->add_section(

    'sec_home_page' , array(

        'title'         =>  'Home Page Products and Blog Settings',
        'description'   =>  'Home Page Section'

    )
);


            //Field 1 

                    
            $wp_customize->add_setting(

            'set_popular_max_num' , array(

                'type'              =>  'theme_mod',
                'default'           =>  ' ',
                'sanitize_callback' =>  'absint'

            )
        );


        $wp_customize->add_control(

            'set_popular_max_num' , array(

                'label'              =>  __('Popular Products Max Number','theme-name'),
                'description'        =>  __('Popular Products Max Number','theme-name'),
                'section'            =>  'sec_home_page',
                'type'               =>   'number'

            )
        );




                //Field 2 

                    
                $wp_customize->add_setting(

                    'set_popular_max_col' , array(
        
                        'type'              =>  'theme_mod',
                        'default'           =>  ' ',
                        'sanitize_callback' =>  'absint'
        
                    )
                );
        
        
                $wp_customize->add_control(
        
                    'set_popular_max_col' , array(
        
                        'label'              =>  __('Popular Products Max Columns','theme-name'),
                        'description'        =>  __('Popular Products Max Columns','theme-name'),
                        'section'            =>  'sec_home_page',
                        'type'               =>   'number'
        
                    )
                );
                


                     //Field 1 

                    
            $wp_customize->add_setting(

                'set_new_arrivals_max_num' , array(
    
                    'type'              =>  'theme_mod',
                    'default'           =>  ' ',
                    'sanitize_callback' =>  'absint'
    
                )
            );
    
    
            $wp_customize->add_control(
    
                'set_new_arrivals_max_num' , array(
    
                    'label'              =>  __('New Arrivals Max Number','theme-name'),
                    'description'        =>  __('New Arrivals Max Number','theme-name'),
                    'section'            =>  'sec_home_page',
                    'type'               =>   'number'
    
                )
            );
    
    
    
    
                    //Field 2 
    
                        
                    $wp_customize->add_setting(
    
                        'set_new_arrivals_max_col' , array(
            
                            'type'              =>  'theme_mod',
                            'default'           =>  ' ',
                            'sanitize_callback' =>  'absint'
            
                        )
                    );
            
            
                    $wp_customize->add_control(
            
                        'set_new_arrivals_max_col' , array(
            
                            'label'              =>  __('New Arrivals Max Columns','theme-name'),
                            'description'        =>  __('New Arrivals Max Columns','theme-name'),
                            'section'            =>  'sec_home_page',
                            'type'               =>   'number'
            
                        )
                    );



                    
                //Deal of the week Checkbox
                

                               
                $wp_customize->add_setting(
    
                    'set_deal_show' , array(
        
                        'type'              =>  'theme_mod',
                        'default'           =>  '',
                        'sanitize_callback' =>  'theme_name_sanitize_checkbox'
        
                    )
                );
        
        
                $wp_customize->add_control(
        
                    'set_deal_show' , array(
        
                        'label'              =>  __('Show Deal of the Week','theme-name'),
                        'section'            =>  'sec_home_page',
                        'type'               =>  'checkbox'
        
                    )
                );

        
    
    

                //Deal of the week product ID
                

                               
                $wp_customize->add_setting(
    
                    'set_deal' , array(
        
                        'type'              =>  'theme_mod',
                        'default'           =>  ' ',
                        'sanitize_callback' =>  'absint'
        
                    )
                );
        
        
                $wp_customize->add_control(
        
                    'set_deal' , array(
        
                        'label'              =>  __('Deal of the week Product ID','theme-name'),
                        'description'        =>  __('Product ID to display','theme-name'),
                        'section'            =>  'sec_home_page',
                        'type'               =>   'number'
        
                    )
                );

        

    



 }





 add_action('customize_register', 'theme_name_customizer');




function theme_name_sanitize_checkbox( $checked ) {

    return (  ( isset ( $checked ) && true == $checked ) ? true : false  );


}