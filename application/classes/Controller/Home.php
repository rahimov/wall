<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template
{
    public $template = 'main_template';

    public function action_index()
    {
        $errors = array();
        if ($post = $this->request->post()) {
            if (isset($post['text']) && Auth::instance()->logged_in()) {

                if (trim($post['text'])) {
                    $message = ORM::factory('Post');
                    $message->values(array(
                        'text'        => HTML::entities(strip_tags($post['text'])),
                        'user_id'     => Auth::instance()->get_user()->id,
                        'published'   => 1,
                        'publishedon' => time(),
                    ));
                    try {
                        $message->save();

                    } catch (ORM_Validtion_Exception $e) {
                        $errors = $e->errors();
                        // echo Debug::vars($errors);
                    }
                } else {
                    $errors['empty_message'] = Kohana::message('post', 'empty_message');
                }

                if (Request::initial()->is_ajax()) {
                    if (isset($errors['empty_message'])) {
                        $result = array('error' => true, 'message' => $errors['empty_message']);
                    } else {
                        $result = array(
                            'error'   => false,
                            'message' => array(
                                'publishedon' => date('H:i:s d.m.Y ', $message->get('publishedon')),
                                'user'        => $message->get('user')->username,
                                'text'        => $message->get('text'),
                            )
                        );
                    }
                    header('Content-Type: text/json; charset=utf8');
                    echo json_encode($result);
                    exit;
                }
            }
        }

        $messages = ORM::factory('Post')->order_by('id', 'desc')->find_all();
        $this->template->title = __('Posts wall') . ' ' . __('sitesoft');
        $this->template->content = View::factory('index')
            ->bind('errors', $errors)
            ->bind('messages', $messages);
    }


} // End Home
