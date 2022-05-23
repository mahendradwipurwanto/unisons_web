<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{

    // VARIABEL
    public $user_id         = "";
    public $user_name       = "";
    public $user_email      = "";

    public $logo            = "";
    public $logo2           = "";

    public function __construct()
    {
        parent::__construct();

        // LOAD MODEL
        $this->load->model('M_authentication', 'M_auth');
        $this->load->model('M_admin');
        $this->logo = $this->M_admin->get_websiteInfo("logo");
        $this->logo2 = $this->M_admin->get_websiteInfo("logo2");
    }

    # LOGIN

    // display login page
    public function index()
    {
        // check if already loggedin
        if ($this->session->userdata('logged_in') == FALSE || !$this->session->userdata('logged_in')) {
            $this->template_utilities->view('authentication/login');
        } else {
            $this->session->set_flashdata('warning', "Sorry, you already logged in !");
            redirect('dashboard');
        }
    }

    // login process
    public function process_login()
    {
        // get value from view and save to variabel
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        // check if user exist
        if (!empty($this->M_auth->get_user($email))) {
            // get user if exist and save it to user as array
            $user     = $this->M_auth->get_user($email);

            // check if password is equal with saved password
            if (password_verify($password, $user->password)) {

                // save user login data's to session
                $session_data = [
                    'user_id'   => $user->user_id,
                    'email'     => $user->email,
                    'name'      => $user->name,
                    'role'      => $user->role,
                    'logged_in' => true,
                ];

                $this->session->set_userdata($session_data);

                // set to global variabel
                $this->user_id        = $this->session->userdata('user_id');
                $this->user_name      = $this->session->userdata('name');
                $this->user_email     = $this->session->userdata('email');

                // check what type role of logged user

                // ADMIN
                if ($user->ROLE == 0) {
                    // arahkan ke halaman admin
                    if ($this->session->userdata('redirect')) {
                        $this->session->set_flashdata('success', 'Hi ' . $this->user_name . ', success logged in to your last activities !');
                        redirect($this->session->userdata('redirect'));
                    } else {
                        $this->session->set_flashdata('success', 'Hi, success logged in. Welcome ' . $this->user_name . ' !');
                        redirect(site_url('dashboard'));
                    }

                    // role is undefied
                } else {
                    $this->session->set_flashdata('error', "Sorry, we can`t find your account type !");
                    redirect(site_url('logout'));
                }
            } else {
                $this->session->set_flashdata('warning', "Sorry, your password is wrong !");
                redirect(site_url('login'));
            }
        } else {
            $this->session->set_flashdata('warning', "Sorry, we can`t find any account related to this email !");
            redirect(site_url('login'));
        }
    }

    # FORGOT PASSWORD

    // forgot password page
    public function recovery_password()
    {
        $this->template_utilities->view('authentication/request_recovery');
    }

    // send link forgot password
    public function send_link_recovery_password()
    {
        $email      = $this->input->post('email');

        if (!empty($this->M_auth->get_user($email))) {

            $user     = $this->M_auth->get_user($email);
            if ($this->M_auth->create_reset_request($user->user_id) == TRUE) {

                $user     = $this->M_auth->get_user($email);
                $subject  = "Set your new password";
                $message  = '
                            <p style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;margin-top:12px">
                                <a style="text-decoration:none;color:inherit">Hi ' . $user->nama . ',</a>
                            </p>
                            <p style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;margin-top:12px">
                                We`ve received a request to set a new password for account: <b><a style="text-decoration:none;color:inherit">' . $user->email . '</a></b>.
                            </p>
                            <div style="margin-top:24px;margin-bottom:24px">
                                <a href="' . base_url() . 'reset-password?code=' . $user->reset_code . '" style="box-sizing:border-box;border-radius:3px;border-width:0;border:none;display:inline-flex;font-style:normal;font-size:inherit;height:2.28571429em;line-height:2.28571429em;margin:0;outline:none;padding:0 12px;text-align:center;vertical-align:middle;white-space:nowrap;text-decoration:none;background:#0052cc;color:#ffffff" target="_blank">Set password</a>
                            </div>
                            <p style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;margin-top:12px">
                                <span style="color:#5e6c84">If you didn`t request this, you can safely ignore this email.</span>
                            </p>
                            ';

                if ($this->send_email($email, $subject, $message) == true) {
                    $this->session->set_flashdata('success', "Recovery link already sent to your email, please check your inbox or spam folder !");
                    redirect($this->agent->referrer());
                } else {
                    $this->session->set_flashdata('error', "Sorry, there is a problem when trying to send recovery link to your email. Please try again later. !");
                    redirect($this->agent->referrer());
                }
            } else {
                $this->session->set_flashdata('warning', "There is a problem when trying to create recovery request !");
                redirect($this->agent->referrer());
            }
        } else {
            $this->session->set_flashdata('warning', "We can`t find any account related to this email !");
            redirect($this->agent->referrer());
        }
    }

    // receive confirmation from email
    public function change_password()
    {
        $reset_code = $this->input->get('code');
        if (!empty($this->M_auth->get_userByResetCode($reset_code))) {
            $user = $this->M_auth->get_userByResetCode($reset_code);
            $data['user_id'] = $user->user_id;
            $this->session->set_flashdata('warning', "Please insert your new password !");
            $this->template_utilities->view('authentication/reset_password', $data);
        } else {
            $this->session->set_flashdata('warning', "Failed identified recovery password request !");
            redirect(site_url('login'));
        }
    }

    // change password
    public function proses_ubahPassword()
    {
        $user_id        = $this->input->post('user_id');
        $password       = $this->input->post('password');
        $password_conf  = $this->input->post('password_conf');

        if ($password == $password_conf) {

            $user = $this->M_auth->get_userByID($user_id);

            if ($this->M_auth->update_user(['password'  => password_hash($password, PASSWORD_DEFAULT)], ['user_id' => $user->user_id])) {

                $now      = date("d F Y - H:i");

                $subject  = "Password Changed";
                $message  = '
                            <p style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;margin-top:12px">
                                <a style="text-decoration:none;color:inherit">Hi ' . $user->nama . ', Your password has changed</a>
                            </p>
                            <p style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;margin-top:12px">
                                We`re confirming that you changed your account password for: <b><a style="text-decoration:none;color:inherit">' . $user->email . '</a></b>.
                            </p>
                            <p style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;margin-top:12px">
                                <span style="color:#5e6c84">If you didn`t make this change, please contact our admin</span>
                            </p>
                            ';

                $this->send_email($user->email, $subject, $message);

                $this->session->set_flashdata('success', "Your password has been changed, login to your account with new password !");
                redirect(site_url('login'));
            } else {
                $this->session->set_flashdata('error', "Sorry, there is a problem when trying to change your password. Please try again later !");
                redirect($this->agent->referrer());
            }
        } else {
            $this->session->set_flashdata('warning', "Your confirmation doesn`t match, please try again !");
            redirect($this->agent->referrer());
        }
    }

    // logout
    public function logout()
    {

        // SESS DESTROY
        $this->session->sess_destroy();
        redirect(base_url() . '?a=logout');
    }

    // MAILER SENDER

    function test()
    {
        echo $this->send_email("mahendradwipurwanto@gmail.com", "TESTING", "This is a test");
    }

    function send_email($email, $subject, $message)
    {

        $mail = [
            'to'             => $email,
            'subject'        => $subject,
            'message'        => $this->body_html($message)
        ];

        if ($this->mailer->send($mail) == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // hashing
    public function password_hash()
    {
        echo password_hash("uclab20@!", PASSWORD_DEFAULT);
    }

    function body_html($message)
    {
        return '
        <div style="font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px;background:#ffffff;margin-left:8px;margin-right:8px">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td align="center">
                            <div style="max-width:520px;margin:0 auto">
                                <div style="vertical-align:top;text-align:left;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;font-size:14px;font-weight:400;letter-spacing:-0.005em;color:#091e42;line-height:20px">
                                    <div style="padding-top:30px;padding-bottom:10px;vertical-align:top;text-align:center">
                                        <a href="' . base_url() . '" target="_blank">
                                            <img src="' . base_url() . 'berkas/'.$this->logo2.'" height="24" alt="UC LAB" style="border:0" class="CToWUd">
                                        </a>
                                    </div>
                                    <hr style="margin-top:24px;margin-bottom:24px;border:0;border-bottom:1px solid #c1c7d0">
                                    ' . $message . '
                                    <hr style="margin-top:24px;margin-bottom:24px;border:0;border-bottom:1px solid #c1c7d0">
                                    <div
                                        style="color:#707070;font-size:13px;line-height:19px;text-align:center;margin-top:10px">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" align="center" style="padding-top:10px;line-height:18px;text-align:center;font-weight:none;font-size:12px;color:#505f79"> <span>This message was sent to you by UC LAB</span><br></td>
                                                </tr>
                                                <tr valign="top">
                                                    <td align="center" style="padding-top:15px;padding-bottom:30px"><a href="' . base_url() . '" target="_blank"><img src="' . base_url() . 'berkas/'.$this->logo2.'" width="114" border="0" alt="UC LAB" style="display:block;color:#4c9ac9" class="CToWUd"></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        ';
    }
}
