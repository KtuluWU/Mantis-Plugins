<?php

class JsonForUserPlugin extends MantisPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "JsonForUser";
        $this->description = "JsonForUser";

        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.3.0',
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
        $hooks = array (
            "EVENT_LAYOUT_RESOURCES" => "resources",
            "EVENT_LAYOUT_BODY_END" => "JSON_users_informations",
        );
        return $hooks;
    }

	function resources()
	{        
        echo '<script type="text/javascript" src="' . plugin_file("json.js") . '"></script>';
             /* Décommenter la ligne suivant afin d'utiliser cookie.
             '<script type="text/javascript" src="' . plugin_file("jquery.cookie.js") . '"></script>';
             */
    }

    function JSON_users_informations() {
        $t_project_id = helper_get_current_project();
        $t_access = ANYBODY;
        $t_project_users_list = project_get_all_user_rows( $t_project_id, $t_access );
        $t_user = array();
        $t_translation_data = array();
        foreach ($t_project_users_list as $key => $Objet) {
            $t_user[] = Array( "id" => $Objet["id"], "name" => $Objet["username"]) ;
        }

        $t_json_user = json_encode( $t_user, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE );

        $t_html_proof_json_user = str_replace('"', '&quot;', $t_json_user );
        
        echo  '<input type="hidden" name="Users_informations" value="';
        echo $t_html_proof_json_user;
        echo '" />';
    }

}?>