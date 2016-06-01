<?php

class MonitorAutocompletePlugin extends MantisPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "MonitorAutocomplete";
        $this->description = "MonitorAutocomplete";

        $this->version = '1.2';
        $this->requires = array(
            'MantisCore' => '1.2.0, 1.3.0',
            );

        $this->author = 'Yun WU';
        $this->contact = 'yun_wu@vip.126.com';
        $this->url = 'https://github.com/KtuluWU/Mantis-Plugins';
    }
	
    function hooks()
    {
        $hooks = array (
			"EVENT_LAYOUT_RESOURCES" => "resources",
            "EVENT_LAYOUT_BODY_END"  => "username_array",
        );
        return $hooks;
    }

	function condition()
    {
        $condition = $this->condition;
        $page = '/view.php';
        $determine = $_SERVER['PHP_SELF'];
        $page_determine = stripos( $determine, $page );

        if (is_null($condition))
        {
            if ( $page_determine !== false ) 
                $condition = true;
            else
                $condition = false;
        }
        return $condition;
    }
    
    

	public function resources()
	{
        if( $this->condition() )
        {
            echo '<script type="text/javascript" src="' . plugin_file("MonitorAutocomplete.js") . '"></script>
                <link rel="stylesheet" type="text/css" href="' . plugin_file("MonitorAutocomplete.css") . '"/>';

        }
        
    }

    public function username_array()
    {
        if( $this->condition() )
        {
            $t_project_id = helper_get_current_project();
            $t_access = ANYBODY;

            $t_project_users_list = project_get_all_user_rows( $t_project_id, $t_access );

            $t_user = array();
            foreach ($t_project_users_list as $key => $Objet) {
                
                $t_user[] =  $Objet["username"] ;
            }
            

            $t_json = json_encode( $t_user, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE );
            $t_html_proof_json = str_replace('"', '&quot;', $t_json );
             
            echo  '<input type="hidden" name="username_array" value="';
            echo $t_html_proof_json;
            echo '" />';
        }
    }

}?>