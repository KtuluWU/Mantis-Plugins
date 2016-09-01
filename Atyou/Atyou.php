<?php

class AtyouPlugin extends MantisFormattingPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "Atyou";
        $this->description = "Atyou";

        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            'MantisCoreFormatting' => '1.0a',
            'JsonForUser' => '1.0',
            );
 
        $this->author = 'Yun';
        $this->contact = 'yun_wu@vip.126.com';
    }

    public function config() {

        return array(       
        );
    }
    
    function hooks()
    {
        $hooks = parent::hooks();
            
            $hooks['EVENT_LAYOUT_RESOURCES'] = 'resources';
            
            return $hooks;      
    }

    public function resources()
    {        
        echo '<script type="text/javascript" src="' . plugin_file("atyou.js") . '"></script>'.
        '<link rel="stylesheet" type="text/css" href="' . plugin_file( "jquery.atwho.css" ) . '"/>'.
        '<script type="text/javascript" src="' . plugin_file("jquery.caret.js") . '"></script>'.
        '<script type="text/javascript" src="' . plugin_file("jquery.atwho.js") . '"></script>';
    }

    public function install() {
        return TRUE;
    }

    public function formatted( $p_event, $p_string, $p_multiline = TRUE ) {
        
        $p_string = mention_format_text( $p_string, /* html */ true );
            
        return $p_string;
    }  
}?>