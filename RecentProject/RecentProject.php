<?php

define( 'TOKEN_LAST_VISITED_PROJECT', 8 );
class RecentProjectPlugin extends MantisPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "RecentProject";
        $this->description = "RecentProject";

        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            );
 
        $this->author = 'Yun';
        $this->contact = 'yun_wu@vip.126.com';
    }

    public function config() {

        return array(       
        'recently_visited_count' => 5, 
        'lenth_project_name' => 11,
        'sub_lenth_project_name' => 10,
        );
    }
	
    function hooks()
    {
        $hooks = array (
            "EVENT_LAYOUT_RESOURCES" => "resources",
			"EVENT_SET_PROJECT" => "RecentProject",
            "EVENT_LAYOUT_CONTENT_BEGIN" => "set_token",
        );
        return $hooks;
    }

	public function resources()
	{        
        echo '<link rel="stylesheet" type="text/css" href="' . plugin_file( "RecentProject.css" ) . '"/>';
    }

    function RecentProject() 
    {
        $t_project_ids = $this->last_visited_project_get_array();
        if( count( $t_project_ids ) == 0 ) {
            return;
        }

        echo '<div id="RecentProject">';
        echo plugin_lang_get('name') . " : ";

        $t_first = true;

        foreach( $t_project_ids as $t_project_id ) {
            if( !$t_first ) {
                echo ', ';
            } else {
                $t_first = false;
            }
            $this->print_rencent_project( $t_project_id );
        }

        echo '</div>';

    }

    function print_rencent_project( $p_project_id )
    {
        $t_project_id = $p_project_id;
        
        $full_project_id = $current_project_id = $t_project_id;
        while (($current_project_id = project_hierarchy_get_parent( $current_project_id )) !=0)
        {
            $full_project_id = $current_project_id . ";" . $full_project_id;
        }
        
        $t_project_name = project_get_name($t_project_id);
        $t_project_name_five_first = ( strlen($t_project_name) >= plugin_config_get( 'lenth_project_name' ) ) ? 
            substr($t_project_name, 0, plugin_config_get( 'sub_lenth_project_name' ))."..." : $t_project_name;

        $set_project_url = helper_mantis_url( 'set_project.php' );

        echo '[';
        echo "<a href=\"$set_project_url?project_id=$full_project_id\" title=\"$t_project_name\" >$t_project_name_five_first</a>";
        echo ']';
    }
    
    function last_visited_project( $p_project_id, $p_user_id = null ) {
        if( !last_visited_enabled() ) {
            return;
        }
        if ( 0 == $p_project_id ) {
            return;
        }
        $t_value = token_get_value( TOKEN_LAST_VISITED_PROJECT, $p_user_id );
        if( is_null( $t_value ) ) {
            $t_value = $p_project_id;
        } else {
            $t_ids = explode( ',', $p_project_id . ',' . $t_value );
            $t_ids = array_unique( $t_ids );
            $t_ids = array_slice( $t_ids, 0, plugin_config_get('recently_visited_count') );
            $t_value = implode( ',', $t_ids );
        }

        token_set( TOKEN_LAST_VISITED_PROJECT, $t_value, TOKEN_EXPIRY_LAST_VISITED, $p_user_id );
    }

    function last_visited_project_get_array( $p_user_id = null ) {
        if( !last_visited_enabled() ) {
            return array();
        }

        $t_value = token_get_value( TOKEN_LAST_VISITED_PROJECT, $p_user_id );

        if( is_null( $t_value ) ) {
            return array();
        }

        $t_ids = explode( ',', $t_value );

        return $t_ids;
    }

    function set_token()
    {
        $t_project_id = helper_get_current_project();
        $this->last_visited_project( $t_project_id );
    }
    
}?>