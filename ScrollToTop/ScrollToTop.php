<?php
 
require_once( config_get( 'class_path' ) . 'MantisPlugin.class.php' );

class ScrollToTopPlugin extends MantisPlugin {
    function register() {
        $this->name = "Scroll To Top";
        $this->description = 'Add a button to scroll to top';

        $this->version = '1.0';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            );

        $this->author = 'Yun';
        $this->contact = 'yun.wu@fwa.eu';
        $this->url = 'http://www.fwa.eu';
    }    

    public function config() {

        return array(
            'turn_on_scroll'  => ON,
        );
    }

    /**** Event ****/
    function hooks() {
        $hooks = array(
            "EVENT_LAYOUT_RESOURCES" => "add_resource",
            "EVENT_LAYOUT_BODY_END" => "add_anchor",
            "EVENT_ACCOUNT_PREF_UPDATE_FORM" => "scrolltotop_config",
            "EVENT_ACCOUNT_PREF_UPDATE" => 'Save_scrolltotop_config',
            );
        return  $hooks;
    }

    public function add_resource(){
        if (plugin_config_get('turn_on_scroll') == ON) {
             echo '<script type="text/javascript" src="' . plugin_file("ScrollToTop.js") . '"></script>
            <link rel="stylesheet" type="text/css" href="' . plugin_page("scroll") . '"/>';
        }
    }

    function add_anchor()
    {
         echo '<a href="#0" class="cd-top">Top</a>', "\n";
    }

    public function scrolltotop_config() {
        echo '<fieldset class="field-container"><legend><label for="scrolltotop_config">
            '. 'Scroll To Top' .'
            </label></legend>';
        $this->print_scrolltotop_config();
        echo '</fieldset>';
    }

    function print_scrolltotop_config()
    {
        ?>
        
        <span class="scroll" width="20%">
            <label><input type="radio" name="turn_on_scroll" value="1" <?php echo( ON == plugin_config_get( 'turn_on_scroll' ) ) ? 'checked="checked" ' : ''?>/>
                    <?php echo "ON"?></label>
        </span>
        <span class="scroll" width="20%">
            <label><input type="radio" name="turn_on_scroll" value="0" <?php echo( OFF == plugin_config_get( 'turn_on_scroll' ) ) ? 'checked="checked" ' : ''?>/>
                    <?php echo "OFF"?></label>
        </span>
        
<?php
    }

    public function Save_scrolltotop_config()
    {
        $f_turn_on = gpc_get_int( 'turn_on_scroll', ON );

        if( plugin_config_get( 'turn_on_scroll' ) != $f_turn_on ) {
            plugin_config_set( 'turn_on_scroll', $f_turn_on );
        }
    }

}

?>