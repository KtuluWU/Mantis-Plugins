<?php

class SelectorAutocompletePlugin extends MantisPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "SelectorAutocomplete";
        $this->description = "SelectorAutocomplete";

        $this->version = '1.1';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            );

        $this->author = 'Yun';
        $this->contact = 'yun_wu@vip.126.com';
    }
	
    public function config() {

        return array(
            'turn_on'  => ON,
        );
    }

    function hooks()
    {
        $hooks = array (
			"EVENT_LAYOUT_RESOURCES" => "resources",
            "EVENT_ACCOUNT_PREF_UPDATE_FORM" => "selectorautocomplete_config",
            'EVENT_ACCOUNT_PREF_UPDATE' => 'Save_selectorautocomplete_config',
        );
        return $hooks;
    }

	public function resources()
	{
        if (plugin_config_get('turn_on') == ON) {
            echo '<script type="text/javascript" src="' . plugin_file("SelectorAutocomplete.js") . '"></script>
          <link rel="stylesheet" type="text/css" href="' . plugin_file("SelectorAutocomplete.css") . '"/>';
        }
     
    }

    public function selectorautocomplete_config($p_event, $p_user_id)
    {
        echo '<fieldset class="field-container"><legend><label for="selectorautocomplete_config">
            '. 'Selector Autocomplete' .'
            </label></legend>';
        $this->print_selectorautocomplete_config();
        echo '</fieldset>'; 
    }

    function print_selectorautocomplete_config()
    {
        ?>
        
            <span class="center" width="20%">
                <label><input type="radio" name="turn_on" value="1" <?php echo( ON == plugin_config_get( 'turn_on' ) ) ? 'checked="checked" ' : ''?>/>
                    <?php echo "ON"?></label>
            </span>
            <span class="center" width="20%">
                <label><input type="radio" name="turn_on" value="0" <?php echo( OFF == plugin_config_get( 'turn_on' ) ) ? 'checked="checked" ' : ''?>/>
                    <?php echo "OFF"?></label>
            </span>
        
<?php
    }

    public function Save_selectorautocomplete_config($p_event, $p_user_id)
    {
        $f_turn_on = gpc_get_int( 'turn_on', ON );

        if( plugin_config_get( 'turn_on' ) != $f_turn_on ) {
            plugin_config_set( 'turn_on', $f_turn_on, $p_user_id );
        }
    }

}?>