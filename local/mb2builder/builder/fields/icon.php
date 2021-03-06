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
 *
 * @package    local_mb2builder
 * @copyright  2018 - 2020 Mariusz Boloz (https://mb2themes.com/)
 * @license    Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();


class LocalMb2builderIcon
{

	static function local_mb2builder_get_input($key, $attr)
	{

		global $CFG;

		if (!isset($attr['default']))
		{
	 		$attr['default'] = '';
		}

		if (!isset($attr['desc']))
		{
	 		$attr['desc'] = '';
		}

		if (!isset($attr['showon']))
		{
			$attr['showon'] = '';
		}

		$showon = local_mb2builder_showon_field($attr['showon']);

		$output  = '<div class="form-group mb2-pb-form-group">';
		$output .= '<label>' . $attr['title'] . '</label><br>';
		$output .= '<div><i style="display:none;position:relative;top:4px;margin-right:7px;font-size:30px;" class="' . $attr['default'] . '"></i></div>';
		$output .= '<a href="#" class="mb2-pb-select-icon btn btn-xs btn-success" data-toggle="modal" data-target="#mb2-pb-modal-font-icons">' .
		get_string('selecticon','local_mb2builder') . '</a> ';
		$output .= '<a href="#" class="mb2-pb-remove-icon btn btn-xs btn-danger">' . get_string('remove','local_mb2builder') . '</a>';
		$output	.= '<input type="hidden" class="form-control mb2-pb-input mb2-pb-input-type-' . $attr['type'] . ' mb2-pb-input-' . $key . '"' .
		$showon . ' data-attrname="' . $key . '" value="' . $attr['default'] . '" />';

		if ($attr['desc'])
		{
			$output	.= '<span class="mb2-pb-from-desc">' . $attr['desc'] . '</span>';
		}

		$output .= '</div>';


		return $output;

	}



}
