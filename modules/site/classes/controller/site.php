<?php
/**
 * @author Nezzy
 * @date 3/12/2012
 * @brief
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Site extends Controller_Template
{
	public $template = 'public';
	public $sidebar_loc = 'right';

	protected $_title = '';
	protected $_page_title = '';
	protected $_description = '';
	protected $_keywords = '';

	protected $_session;

	protected $_subrequest;

	protected $_banner;

	protected $_content;

	protected $_sidebar;

	protected $_section;

	protected $_theme_name = null;
	protected $_theme_path = 'themes/';

	protected $_campaign;

	protected $_modal;
	protected $_modal_type = 'form';
	protected $_modal_title = null;
	protected $_modal_content = null;
	protected $_modal_view;
	protected $_modal_button_name = 'Place Order';

	protected $_lead_form;
	protected $_lead_form_render = true;
	protected $_lead_download;

	protected $_chat;
	public $chat_url;
	public $chat_id;

	protected function _authenticate()
	{
		return true;
	}

	public function before()
	{
		parent::before();

		$this->_session = Session::instance();

		$this->_set_user();
		$this->_kick_out();
		$this->_set_chat();

		if ($this->request->is_initial() === false) {
			// Subrequests are marked internal
			$this->_subrequest = true;
		}

		// Javascript files
		$this->request->script('jquery');

		if(!$this->request->is_ajax())
		{
			$this->request->script('matrix');
		}

		$this->request->scripts
		(
			array
			(
				'jquery-ui',
				'plugins/jquery.pngfix',
				'bootstrap.min',
				'site',
			)
		);

		// Stylesheets
		$this->request->styles
		(
			array
			(
				'vars',
				'jquery.ui',
				'icons',
				'forms',
			)
		);

		View::bind_global('title', $this->_title);
		View::bind_global('page_title', $this->_page_title);
		View::bind_global('user', $this->_user);

		$this->_campaign = \Cookie::get('campaign_id', '2');
	}

	public function after()
	{
		if (empty($this->_page_title))
		{
			$this->_page_title = $this->_title;
		}

		if(!isset($this->_sidebar))
		{
			$default_sidebar = array(\View::factory('sidebar/downloads', array('language' => true)));
			$this->_sidebar = \Sidebar::factory($default_sidebar)->render();
		}

		if($this->_modal)
		{
			$this->_modal_view = \View::factory('modal')
				->set('title', $this->_modal_title)
				->set('content', $this->_modal_content)
				->set('type', $this->_modal_type)
				->set('button_name', $this->_modal_button_name);
		}

		$this->template->header = \View::factory($this->_theme_path.$this->_theme_name.'/header');
		$this->template->nav = \View::factory('nav');
		$this->template->footer = \View::factory($this->_theme_path.$this->_theme_name.'/footer');

		if ($this->request->is_ajax())
		{
			$this->template = $this->_content;
		}
		else
		{
			$role = explode('_', get_parent_class($this));
			$role = strtolower(end($role));


			$this->template->description = $this->_description;

			$this->template->keywords = $this->_keywords;

			$this->template->head_analytics = \Analytics::factory('head');

			$this->template->foot_analytics = \Analytics::factory('foot');

			$this->template->nav->menu = \Menu::factory($role)->set_current($this->_get_current());

			$this->template->banner = $this->_banner;

			$this->template->header->section = $this->_section;

			$this->template->sidebar = $this->_sidebar;

			$this->template->sidebar_loc = $this->sidebar_loc;

			$this->template->content = $this->_content;

			$this->template->modal = $this->_modal_view;

			$this->template->lead_form = $this->_lead_form_render ? $this->_lead_form : null;

			$this->template->chat = $this->_chat;

		}

		parent::after();
	}

	protected function _get_current()
	{
		$string = '';

		if($this->request->directory() != 'public')
		{
			$string .= '/'.$this->request->directory();
		}

		$string .= '/'.$this->request->controller();

		return $string;
	}

	protected function _kick_out()
	{
		// By default, do nothing
		return;
	}

	protected function _set_chat()
	{
		//setup variables for bold chat to be added to the url string
		if(empty($this->_user))
		{
			$chat_vars = array
			(
				'vi' => 'Visitor',
				'url' => $this->request->uri()
			);
		}
		else
		{
			$chat_vars = array
			(
				'url' => $this->request->uri(),
				'ip' => '' //initial question to visitor - left blank, but I imagine we can use this in the future
			);
		}

		//set chat view
		$this->_chat =  \Boldchat::factory(array('vars' => $chat_vars));
	}

	protected function _set_user()
	{
		$user_id = $this->_session->get('user_id');

		$this->_user = $user_id
			? \Kacela::find('user', $user_id)
			: new \Darth\Model\User;
	}
}