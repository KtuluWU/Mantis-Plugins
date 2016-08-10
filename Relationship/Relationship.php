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
            'turn_on_relationship'  => ON,
        );
    }
	
    function hooks()
    {
        $hooks = array (
            "EVENT_LAYOUT_RESOURCES" => "resources",
			"EVENT_REPORT_BUG_FORM_BOT" => "relationship",
            "EVENT_REPORT_BUG" => "relationship_add",
            "EVENT_ACCOUNT_PREF_UPDATE_FORM" => "relationship_config",
            "EVENT_ACCOUNT_PREF_UPDATE" => 'Save_relationship_config',
        );
        return $hooks;
    }

	public function resources()
	{
        // <script type="text/javascript" src="' . plugin_file("relationship.js") . '"></script>
        if (plugin_config_get('turn_on_relationship') == ON) {
            echo '<link rel="stylesheet" type="text/css" href="' . plugin_file( "relationship.css" ) . '"/>';
        }
    }

    function relationship() 
    {
        if (plugin_config_get('turn_on_relationship') == ON) {
            echo '<div class="field-container"><label><span>'. lang_get( 'this_bug' ) .'</span>'. '</label>'. 
                 '<span class="input">';
                 relationship_list_box( config_get( 'default_bug_relationship' ) ) ;
            echo '<input type="text" name="dest_bug_id" value=""/>'.
                 '</span></div>';
        }
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

    public function relationship_config($p_event, $p_user_id) {
        echo '<fieldset class="field-container"><legend><label for="relationship_config">
            '. 'Relationship' .'
            </label></legend>';
        $this->print_relationship_config();
        echo '</fieldset>';
    }

    function print_relationship_config()
    {
        ?>
        
        <span class="relationship" width="20%">
            <label><input type="radio" name="turn_on_relationship" value="1" <?php echo( ON == plugin_config_get( 'turn_on_relationship' ) ) ? 'checked="checked" ' : ''?>/>
                    <?php echo "ON"?></label>
        </span>
        <span class="relationship" width="20%">
            <label><input type="radio" name="turn_on_relationship" value="0" <?php echo( OFF == plugin_config_get( 'turn_on_relationship' ) ) ? 'checked="checked" ' : ''?>/>
                    <?php echo "OFF"?></label>
        </span>
        
<?php
    }

    public function Save_relationship_config($p_event, $p_user_id)
    {
        $f_turn_on = gpc_get_int( 'turn_on_relationship', ON );

        if( plugin_config_get( 'turn_on_relationship' ) != $f_turn_on ) {
            plugin_config_set( 'turn_on_relationship', $f_turn_on, $p_user_id );
        }
    }



}?>