<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.08.2017
 * Time: 15:32
 */
class AjaxAPI
{

    public static function AddFeedback()
    {
        $result = array();
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

        $newPostID = wp_insert_post(array(

            'post_title' => $name,
            'post_type' => 'feedback',
            'post_content' => $phone,
            'post_author' => 1,
            'post_status' => 'publish'

        ));

        if ($newPostID === 0) {
            $result['status'] = 500;
            $result['message'] = 'Не возможно оставить заявку';
        } else {
            $result['status'] = 200;
            $result['message'] = 'Заявка успешно получена';
        }

        echo json_encode($result);
        exit();

    }//AddFeedback

    public static function RegisterApiAction($action)
    {
        add_action( "wp_ajax_$action", array('AjaxAPI', $action));
        add_action( "wp_ajax_nopriv_$action", array('AjaxAPI', $action));
    }//RegisterApiAction

}