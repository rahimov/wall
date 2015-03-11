<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template
{
    public $template = 'main_template';

    public function action_login()
    {
        $this->template->title = __('Auth') . ' ' . __('Sitesoft');

        $errors = array();
        if ($post = $this->request->post()) {
            $valid = Validation::factory($post);
            $valid->rule(true, 'not_empty');
            $remember = isset($post['remember']);

            if ($valid->check() && Auth::instance()->login($post['username'], $post['password'], $remember)) {
                $this->redirect(URL::base(true));
            } else {
                $valid->labels(array(
                    'username' => __('Login'),
                    'password' => __('Password'),
                ));
                $errors = $valid->errors('auth');
                if (empty($errors)) {
                    $errors['login_error'] = Kohana::message('auth', 'login_error');
                }
            }
        }

        $this->template->content = View::factory('User/auth')
            ->bind('post', $post)
            ->bind('errors', $errors);

    }

    public function action_registration()
    {
        $errors = array();

        if ($post = $this->request->post()) {

            $valid = Validation::factory($post);
            $valid->rule(true, 'not_empty')
                ->rule('password', 'matches', array(':validation', 'password', 'password_confirm'));

            $existUser = false;
            if ($post['username']) {
                $existUser = ORM::factory('User')->where('username', '=', $post['username'])->find()->loaded();
            }

            if ($valid->check() && !$existUser) {

                $user = ORM::factory('User');
                $user->values(array(
                    'username' => HTML::entities(strip_tags($post['username'])),
                    'password' => $post['password'],
                ));
                try {
                    $user->save();

                    $user->add('roles', ORM::factory('Role', array('name' => 'login')));

                    $this->redirect(Route::get('default')->uri(
                        array(
                            'controller' => 'user',
                            'action'     => 'success',
                        )
                    ));
                } catch (ORM_Validtion_Exception $e) {
                    $errors = $e->errors('registration');

                    // echo Debug::vars($errors);
                }


            } else {
                $valid->labels(array(
                    'username'         => __('Login'),
                    'password'         => __('Password'),
                    'password_confirm' => __('Password repeat'),
                ));
                $errors = $valid->errors('registration');
            }

        }

        $this->template->title = __('Registration') . ' ' . __('Sitesoft');
        $this->template->content = View::factory('User/registration')
            ->bind('post', $post)
            ->bind('errors', $errors);
    }

    public function action_success()
    {
        $this->template->title = __('Registration success') . ' ' . __('Sitesoft');
        $this->template->content = View::factory('User/success');
    }

    public function action_logout()
    {
        Auth::instance()->logout();

        return $this->redirect(URL::base(true));
    }

} // End User
