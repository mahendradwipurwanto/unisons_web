<?php defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
        $this->_ci = &get_instance();
        $this->_ci->load->database();
    }

    // get data from information
    public function get_data($param)
    {
        $query = $this->_ci->db->query("SELECT a.description, b.value FROM tb_information_type a, tb_information b WHERE a.key = 'mailer' AND b.name = '$param'");
        return $query->row()->value;
    }

    // send email via mailer
    public function send($data)
    {
        // Include PHPMailer library files
        require_once APPPATH . 'third_party/PHPMailer/Exception.php';
        require_once APPPATH . 'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH . 'third_party/PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);

        // SMTP configuration
        $mail->isSMTP();

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // $mail->SMTPDebug      = 1;
        $mail->SMTPAuth       = TRUE;
        $mail->SMTPKeepAlive  = TRUE;
        $mail->SMTPSecure     = "tls";
        $mail->Port           = 587;
        $mail->Host           = "smtp.gmail.com";
        $mail->Username   = $this->get_data("username");
        $mail->Password   = $this->get_data("password");

        $mail->setFrom("noreply" . $this->get_data("username"), $this->get_data("set_form"));
        $mail->addReplyTo("noreply" . $this->get_data("username"), $this->get_data("set_form"));

        // Add a recipient
        $mail->addAddress($data['to']);

        // Email subject
        $mail->Subject = $data['subject'];

        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $data['message'];

        // Send email
        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
        $mail->clearAddresses();
        $mail->clearAttachments();
    }
}
