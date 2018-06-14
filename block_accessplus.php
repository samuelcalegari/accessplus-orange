<?php
class block_accessplus extends block_base
{
    CONST JS = '/blocks/accessplus/orange-confort-plus/js/toolbar.js';

    public function init()
    {
        $this->title = get_string('accessplus', 'block_accessplus');
    }

    public function get_content() {

        global $CFG;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;

        $content = '';

        $content .= html_writer::div('','',array('id' => "block_accessplus_wrapper"));

        $content .= '
        <script type="text/javascript">
            accessibilitytoolbar_custom = {
            idLinkModeContainer : "block_accessplus_wrapper",
            cssLinkModeClassName : "linkClass",
        };
        </script>
        <script src="/blocks/accessplus/orange-confort-plus/js/toolbar.js"></script>
        ';

        $this->content->text   = $content;
        return $this->content;
    }

    public function instance_allow_multiple(){
        return false;
    }
}