<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    block_accessplus
 * @copyright  2017- 2021 Université de Perpignan (https://www.univ-perp.fr)
 * @author     Samuel Calegari <samuel.calegari@univ-perp.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_accessplus extends block_base
{
    public function init()
    {
        $this->title = get_string('accessplus', 'block_accessplus');
    }

    public function get_content() {

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