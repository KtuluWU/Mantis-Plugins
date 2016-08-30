<?php

class MentionPlugin extends MantisFormattingPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "Mention";
        $this->description = "Mention";

        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            'MantisCoreFormatting' => '1.0a',
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
            $hooks['EVENT_LAYOUT_BODY_END'] = 'json_user_name';
            
            return $hooks;      
    }

	public function resources()
	{        
        echo '<script type="text/javascript" src="' . plugin_file("mention.js") . '"></script>'.
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

    function json_user_name() {
        $t_project_id = helper_get_current_project();
        $t_access = ANYBODY;

        $t_project_users_list = project_get_all_user_rows( $t_project_id, $t_access );

        $t_user = array();
        foreach ($t_project_users_list as $key => $Objet) {
            $t_user[] =  $Objet["username"];
        }
        
        $t_json = json_encode( $t_user, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE );
        $t_html_proof_json = str_replace('"', '&quot;', $t_json );

        echo  '<input type="hidden" name="mention_usr_information" value="';
        echo $t_html_proof_json;
        echo '" />';
    }

      
    
}?>