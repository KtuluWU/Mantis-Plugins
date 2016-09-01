<?php

class MonitorAutocompletePlugin extends MantisPlugin {
	
    private $condition = null;

    function register() {
        $this->name = "MonitorAutocomplete";
        $this->description = "MonitorAutocomplete";

        $this->version = '1.1';
        $this->requires = array(
            'MantisCore' => '1.3.0',
            'JsonForUser' => '1.0',
            );

        $this->author = 'Yun';
        $this->contact = 'yun_wu@vip.126.com';
    }
	
    function hooks()
    {
        $hooks = array (
			"EVENT_LAYOUT_RESOURCES" => "resources",
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
    
    function resources()
	{
        if( $this->condition() )
        {
            echo '<script type="text/javascript" src="' . plugin_file("MonitorAutocomplete.js") . '"></script>
                <link rel="stylesheet" type="text/css" href="' . plugin_file("MonitorAutocomplete.css") . '"/>';
        }    
    }
}?>