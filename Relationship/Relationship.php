<?php

class RelationshipPlugin extends MantisPlugin {
	
    function register() {
        $this->name = "Relationship";
        $this->description = "Relationship";

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
			"EVENT_REPORT_BUG_FORM_BOT" => "relationship",
            "EVENT_REPORT_BUG" => "relationship_add",
        );
        return $hooks;
    }

	public function resources()
	{
        echo '<link rel="stylesheet" type="text/css" href="' . plugin_file( "relationship.css" ) . '"/>';
        
    }

    function relationship() 
    {
        echo '<div class="field-container"><label><span>'. lang_get( 'this_bug' ) .'</span>'. '</label>'. 
             '<span class="input">';
             relationship_list_box( config_get( 'default_bug_relationship' ) ) ;
        echo '<input type="text" name="dest_bug_id" value=""/>'.
             '</span></div>';
        
    }

    function relationship_add($p_event, $p_bug_data) {
        $f_rel_type = gpc_get( 'rel_type' ); 
        $t_src_bug_id = $p_bug_data->id;
        $f_dest_bug_id = gpc_get( 'dest_bug_id' );

        if( $f_rel_type > BUG_REL_ANY && bug_exists($f_dest_bug_id) ) {
            relationship_add( $t_src_bug_id, $f_dest_bug_id, $f_rel_type );
            history_log_event_special( $t_src_bug_id, BUG_ADD_RELATIONSHIP, $f_rel_type, $f_dest_bug_id );
            history_log_event_special( $f_dest_bug_id, BUG_ADD_RELATIONSHIP, relationship_get_complementary_type( $f_rel_type ), $t_src_bug_id );
        }
    }
}?>