<?php

/**
 * @file
 * template.php
 */

	function ils_preprocess_page(&$vars) {
		//tempalte file called page--ils.tpl.php
		if (isset($vars['node']->type)) {
			$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
		}
	}

	