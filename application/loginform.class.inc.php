<?php

/**
 * Class LoginForm
 *
 * @copyright   Copyright (C) 2010-2019 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

class LoginForm implements iLoginFSMExtension
{
	private $bForceFormOnError = false;

	/**
	 * Execute action for this login state
	 * If a page is displayed, the action must exit at this point
	 *
	 * @param string $sLoginState (see LoginWebPage::LOGIN_STATE_...)
	 * @param int $iErrorCode (see LoginWebPage::EXIT_CODE_...)
	 *
	 * @return int LoginWebPage::LOGIN_FSM_RETURN_...
	 *
	 * @throws \ArchivedObjectException
	 * @throws \CoreCannotSaveObjectException
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \CoreWarning
	 * @throws \MySQLException
	 * @throws \OQLException
	 */
	public function LoginAction($sLoginState, &$iErrorCode)
	{
		switch ($sLoginState)
		{
			case LoginWebPage::LOGIN_STATE_MODE_DETECTION:
				$sAuthUser = utils::ReadPostedParam('auth_user', '', 'raw_data');
				$sAuthPwd = utils::ReadPostedParam('auth_pwd', null, 'raw_data');
				if (!empty($sAuthUser) && !empty($sAuthPwd))
				{
					$_SESSION['login_mode'] = 'form';
				}
				break;

			case LoginWebPage::LOGIN_STATE_READ_CREDENTIALS:
				if (!isset($_SESSION['login_mode']) || ($_SESSION['login_mode'] == 'form'))
				{
					$sAuthUser = utils::ReadPostedParam('auth_user', '', 'raw_data');
					$sAuthPwd = utils::ReadPostedParam('auth_pwd', null, 'raw_data');
					$_SESSION['login_mode'] = 'form';
					if ($this->bForceFormOnError || empty($sAuthUser) || empty($sAuthPwd))
					{
						if (array_key_exists('HTTP_X_COMBODO_AJAX', $_SERVER))
						{
							// X-Combodo-Ajax is a special header automatically added to all ajax requests
							// Let's reply that we're currently logged-out
							header('HTTP/1.0 401 Unauthorized');
							exit;
						}

						// No credentials yet, display the form
						$oPage = LoginWebPage::NewLoginWebPage();
						$oPage->DisplayLoginForm('form', $this->bForceFormOnError);
						$oPage->output();
						$this->bForceFormOnError = false;
						exit;
					}
				}
				break;

			case LoginWebPage::LOGIN_STATE_CHECK_CREDENTIALS:
				if ($_SESSION['login_mode'] == 'form')
				{
					$sAuthUser = utils::ReadPostedParam('auth_user', '', 'raw_data');
					$sAuthPwd = utils::ReadPostedParam('auth_pwd', null, 'raw_data');
					if (!UserRights::CheckCredentials($sAuthUser, $sAuthPwd, $_SESSION['login_mode'], 'internal'))
					{
						$iErrorCode = LoginWebPage::EXIT_CODE_WRONGCREDENTIALS;
						return LoginWebPage::LOGIN_FSM_RETURN_ERROR;
					}
				}
				break;

			case LoginWebPage::LOGIN_STATE_CREDENTIAL_OK:
				if ($_SESSION['login_mode'] == 'form')
				{
					$sAuthUser = utils::ReadPostedParam('auth_user', '', 'raw_data');
					LoginWebPage::OnLoginSuccess($sAuthUser, 'internal', $_SESSION['login_mode']);
				}
				break;

			case LoginWebPage::LOGIN_STATE_ERROR:
				if ($_SESSION['login_mode'] == 'form')
				{
					$this->bForceFormOnError = true;
				}
				break;

			case LoginWebPage::LOGIN_STATE_CONNECTED:
				if ($_SESSION['login_mode'] == 'form')
				{
					$_SESSION['can_logoff'] = true;
					return LoginWebPage::CheckLoggedUser($iErrorCode);
				}
				break;
		}

		return LoginWebPage::LOGIN_FSM_RETURN_CONTINUE;
	}

	/**
	 * Return the list of supported login modes for this plugin
	 *
	 * @return array of supported login modes
	 */
	public function ListSupportedLoginModes()
	{
		return array('form');
	}
}
