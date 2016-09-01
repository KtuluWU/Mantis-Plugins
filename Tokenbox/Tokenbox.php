<?php

class TokenboxPlugin extends MantisPlugin {
	
    function register() {
        $this->name = "Tokenbox";
        $this->description = "Tokenbox";

        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            'JsonForUser' => '1.0',
            );
 
        $this->author = 'Yun';
        $this->contact = 'yun_wu@vip.126.com';
    }

    public function config() {

        return array(
            'turn_on_tokenbox'  => ON,
        );
    }
	
    function hooks()
    {
        $hooks = array (
            "EVENT_LAYOUT_RESOURCES" => "resources",
			"EVENT_REPORT_BUG_FORM" => "print_tokenbox_for_create",
            "EVENT_REPORT_BUG" => "tokenbox_add",
            "EVENT_LAYOUT_BODY_END"  => "tokenbox_translation_information",
        );
        return $hooks;
    }

	public function resources()
	{
        echo '<script type="text/javascript" src="' . plugin_file("Tokenbox.js") . '"></script>
        <script type="text/javascript" src="' . plugin_file("jquery.tokeninput.js") . '"></script>
        <link rel="stylesheet" type="text/css" href="' . plugin_file( "Tokenbox.css" ) . '"/>';
        
    }

    public function print_tokenbox_for_create() 
    {
        
        echo '<div class="field-container"><label for="bug_tokenbox_username"><span>'. 
             plugin_lang_get( 'title' ) . '</span></label>' . 
             '<span class="input">'.
             '<input type="text" id="bug_tokenbox_username" name="userid" value="" />' .
             '</span></div>';
        
    }

    public function tokenbox_add($p_event, $p_bug_data) {
        $t_bug_id = $p_bug_data->id;
        $t_user_id_string = gpc_get( 'userid' );
        $t_user_id = explode( ",", $t_user_id_string );

        if( $t_user_id === false ) {
            trigger_error( plugin_lang_get( 'error' ) );
        }
        foreach ($t_user_id as $id) {
            bug_monitor( $t_bug_id, $id );
        }
    }

    public function tokenbox_translation_information()
    {
        $t_translation_data['hintText'] = plugin_lang_get( 'hintText' );
        $t_translation_data['noResultsText'] = plugin_lang_get( 'noResultsText' );
        $t_translation_data['searchingText'] = plugin_lang_get( 'searchingText' );
        
        $t_json_translation_data = json_encode( $t_translation_data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE );
        
        $t_html_proof_json_data = str_replace('"', '&quot;', $t_json_translation_data );

        echo  '<input type="hidden" name="tokenbox_translation_data" value="';
        echo $t_html_proof_json_data;
        echo '" />';
    }
}?>