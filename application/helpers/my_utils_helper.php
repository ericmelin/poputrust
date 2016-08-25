<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('accessCheck')) {

    function accessCheck() {
        $CI = get_instance();
        if ($CI->session->userdata('id') != '') {
            return true;
        } else {
            return false;
        }
    }

}

if (!function_exists('default_value')) {

    /**
     * function to check variable is null, empty set default value
     * @param (type) pass variable and default value
     * @return (type) Function return variable value
     */
    function default_value($var, $default = '') {
        return empty($var) ? $default : $var;
    }

}

if (!function_exists('my_alert_message')) {

    function my_alert_message($class = 'success', $msg = "", $active_tab = '') {
        if ($msg != '' && $class != '') {
            $CI = get_instance();
            $CI->session->set_flashdata('alert', array('class' => $class,
                'message' => $msg,
                'active_tab' => $active_tab));
        }
    }

}

if (!function_exists('my_show_error')) {

    function my_show_error($msg = "") {
        if ($msg != '') {
            echo '<h4 class="alert_error">' . $msg . '</h4>';
        }
    }

}

if (!function_exists('my_datenow')) {

    function my_datenow() {
        date_default_timezone_set('UTC');
        return date('Y-m-d H:i:s');
    }

}

if (!function_exists('my_get_format_datetime')) {

    function my_get_format_datetime($time, $timezone = '', $format = 'm/d/Y H:i:s') {
        if ($timezone != '') {
            if (substr($timezone, 0, 1) == "+") {
                $timezone = "-" . substr($timezone, 1);
            } elseif (substr($timezone, 0, 1) == "-") {
                $timezone = "+" . substr($timezone, 1);
            }

            return date($format, strtotime($timezone, $time));
        } else {
            return date($format, $time);
        }
    }

}

function my_email_send($toemail, $subject, $email_template, $params, $fromemail = "", $fromname = "") {
    $CI = get_instance();
    $body = $CI->load->view('emails/' . $email_template, $params, TRUE);

    $CI->load->library('email');
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "smtp.mandrillapp.com";
    $config['smtp_port'] = "587";
    $config['smtp_user'] = "chintan7027@gmail.com";
    $config['smtp_pass'] = "vNulZ3lK9JmZmarpbi2J5Q";
    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

    $CI->email->initialize($config);

    if ($fromemail == '')
        $fromemail = SITE_EMAIL;
    if ($fromname == '')
        $fromname = SITE_TITLE;

    $CI->email->from(ERROR_REPORT_EMAIL, $fromname);
    $CI->email->to($toemail);
    $CI->email->reply_to(ERROR_REPORT_EMAIL);
    $CI->email->subject($subject);
    $CI->email->message($body);
    $result = $CI->email->send();
    //echo $CI->email->print_debugger();

    return $result;
}

if (!function_exists("my_generator_password")) {

    function my_generator_password($pw_length = 8, $user_en = true, $use_caps = true, $use_numeric = true, $use_specials = true) {
        if (!$user_en && !$use_caps && !$use_numeric && !$use_specials) {
            $user_en = true;
        }
        $chars = array();
        $caps = array();
        $numbers = array();
        $num_specials = 0;
        $reg_length = $pw_length;
        $pws = array();
        if ($user_en)
            for ($ch = 97; $ch <= 122; $ch++)
                $chars[] = $ch; // create a-z
        if ($use_caps)
            for ($ca = 65; $ca <= 90; $ca++)
                $caps[] = $ca; // create A-Z
        if ($use_numeric)
            for ($nu = 48; $nu <= 57; $nu++)
                $numbers[] = $nu; // create 0-9
        $all = array_merge($chars, $caps, $numbers);
        if ($use_specials) {
            $reg_length = ceil($pw_length * 0.75);
            $num_specials = $pw_length - $reg_length;
            if ($num_specials > 5)
                $num_specials = 5;
            for ($si = 33; $si <= 47; $si++)
                $signs[] = $si;
            $rs_keys = array_rand($signs, $num_specials);
            foreach ($rs_keys as $rs) {
                $pws[] = chr($signs[$rs]);
            }
        }
        $rand_keys = array_rand($all, $reg_length);
        foreach ($rand_keys as $rand) {
            $pw[] = chr($all[$rand]);
        }
        $compl = array_merge($pw, $pws);
        shuffle($compl);
        return implode('', $compl);
    }

}

if (!function_exists("my_encrypt")) {

    function my_encrypt($data) {
        $str = "";
        if (is_array($data)) {
            $str = json_encode($data);
        } else {
            $str = $data;
        }

        $s_key = my_generator_password(16, true, true, true, false);
        $s_vector_iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_3DES, MCRYPT_MODE_ECB), MCRYPT_RAND);

        $en_str = mcrypt_encrypt(MCRYPT_3DES, $s_key, $str, MCRYPT_MODE_ECB, $s_vector_iv);

        $result = base64_encode($en_str);
        //$result = bin2hex($en_str);

        return substr($result, 0, 16) . $s_key . substr($result, 16);
    }

}

if (!function_exists("my_decrypt")) {

    function my_decrypt($data) {
        $s_vector_iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_3DES, MCRYPT_MODE_ECB), MCRYPT_RAND);

        $s_key = substr($data, 16, 16);

        $str = substr($data, 0, 16) . substr($data, 32);
        //$de_str = pack("H*", $str);
        $de_str = base64_decode($str);

        return trim(mcrypt_decrypt(MCRYPT_3DES, $s_key, $de_str, MCRYPT_MODE_ECB, $s_vector_iv));
    }

}

if (!function_exists('my_send_notification')) {

    function my_send_notification($sender, $receivers, $message, $type, $link_id) {

        if ($receivers === FALSE)
            return;

        $CI = & get_instance();

        $iphones = array();
        $androids = array();

        foreach ($receivers as $receiver) {
            $notification = array(
                "type" => $type,
                "sender_id" => $sender === FALSE ? 0 : $sender->id,
                "receiver_id" => $receiver->id,
                "registed" => time(),
                "message" => $message,
                "link_id" => $link_id
            );

            $receiver_id = $receiver->id;

            if ($CI->db->insert('notifications', $notification)) {

                $sql = "UPDATE notification_badge SET badge_count=badge_count+1 where user_id=$receiver->id";
                $CI->db->query($sql);

                if (strlen($receiver->device) > 0) {
                    if ($receiver->os == 'ios') {
                        $iphones[] = $receiver->device;
                    } elseif ($receiver->os == 'android') {
                        $androids[] = $receiver->device;
                    }
                }
            }
        }

        $ext_params = array("type" => $type, "link_id" => $link_id);
        if (count($iphones) > 0) {
            my_iphone_push_notification($iphones, $message, $ext_params, $receiver_id);
        } elseif (count($androids) > 0) {
            my_andoid_push_notification($androids, $message, $ext_params, $receiver_id);
        }
    }

}

if (!function_exists('my_iphone_push_notification')) {

    function my_iphone_push_notification($devices, $msg, $ext_params = FALSE, $receiver) {
        $CI = & get_instance();
        $CI->load->config("push");

        $config = $CI->config->item("push");
        $config = $config['iphone'];

        $sql = "SELECT badge_count FROM `notification_badge` WHERE user_id=$receiver";
        $badge_count = $CI->db->query($sql)->row(0)->{"badge_count"};
        $badge_count = (int) $badge_count;

        try {
            require_once APPPATH . 'libraries/ApnsPHP/Autoload.php';

            $apns_message = new ApnsPHP_Message();
            $apns_message->setCustomIdentifier("Message-Badge-3");
            $apns_message->setText($msg);
            if (is_array($ext_params)) {
                foreach ($ext_params as $key => $value) {
                    $apns_message->setCustomProperty($key, $value);
                }
            }
            $apns_message->setSound('Sounds.caf');
            $apns_message->setBadge($badge_count);

            for ($i = 0; $i < count($devices); $i ++) {
                $apns_message->addRecipient($devices[$i]);
            }

            if ($apns_message->getRecipientsNumber() > 0) {
                $push = new ApnsPHP_Push(
                        $config['push_type'], APPPATH . $config['certfile']
                );
                $push->setRootCertificationPassword($config['certpwd']);
                $push->connect();

                $push->add($apns_message);

                $push->send();
                $push->disconnect();
            }

            return TRUE;
        } catch (Exception $e) {
            print_r($e);

            return FALSE;
        }
    }

}

if (!function_exists('my_andoid_push_notification')) {

    function my_andoid_push_notification($devices, $msg, $ext_params = FALSE, $receiver) {
        $CI = & get_instance();

        try {
            $CI->load->library("pushAndroid");

            $ext_params["message"] = $msg;

            $CI->pushandroid->send_notification($devices, $ext_params);
        } catch (Exception $e) {
            print_r($e);
        }
    }

}

if (!function_exists('my_upload_content')) {

    function my_upload_content($file, $filename = 'avatar', $directory) {
        $ci = get_instance();
        if (isset($file[$filename]) && $file[$filename]['tmp_name'] != '') {
            $target_dir = $directory;
            $temp = explode(".", $file[$filename]["name"]);
            $newfilename = random_string('alnum', 25) . '.' . end($temp);
            $target_file = $target_dir . $newfilename;

            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            if ($file[$filename]["size"] > (2 * 1048576)) {
                $ci->error('Sorry, your file is too large');
            }

            if (move_uploaded_file($file[$filename]["tmp_name"], $target_file)) {
                return $newfilename;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}