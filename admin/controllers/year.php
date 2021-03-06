<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
class ListsControllerYear extends JControllerForm
{
	public function save()
	{
		$input = $this->input->getInput('jform');

		$model = $this->getModel();

		$year = $input['year'];
		if ($model->addYear($year))
		{
			$this->setRedirect(JRoute::_('index.php?option=com_lists&view=years', false), JText::_('Year added with success!'));
		}
		else
		{
			$this->setRedirect(JRoute::_('index.php?option=com_lists&view=year&layout=edit&year='.$year, false));
		}
	}
}
