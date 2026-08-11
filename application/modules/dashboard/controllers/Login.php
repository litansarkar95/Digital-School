<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("authentication_model");
    }

    public function index() {
      
        if ($this->session->userdata('loggedin')) {
            redirect(base_url() . "dashboard", "refresh");
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
              $data = array();
                $data['active'] = "authentication";
                    $data['title'] = "Authentication"; 
        
            $this->load->view('login', $data); 
        } else {
            $username = $this->security->xss_clean($this->input->post("username"));
            $password = $this->security->xss_clean($this->input->post("password"));
            $remember = $this->input->post('remember');

            $user = $this->authentication_model->admin_login($username, $password);

            if ($user) {
           
                if ($user->active == 1) {
                    
                   $roleMapping = [
                        1 => 'superadmin',
                        2 => 'admin',
                        3 => 'staff',
                        4 => 'client',
                        5 => 'manager',
                        6 => 'accounts'
                    ];
                    $userType = $roleMapping[$user->role] ?? 'user';

                    $getUser = $this->authentication_model->getUserNameByRoleID($user->role, $user->user_id);
           
                    $sessionData = array(
                        'name'               => $getUser['name'] ?? 'Unknown',
                        'logger_photo'       => $getUser['picture'] ?? '',
                        'logger_contact'     => $getUser['contact_no'] ?? '',
                        'loggedin_org_id'    => $user->organization_id,
                        'loggedin_branch_id' => $user->branch_id,
                        'active_branch_id'   => $user->branch_id,
                        'loggedin_id'        => $user->id,
                        'loggedin_userid'    => $user->user_id,
                        'loggedin_role_id'   => $user->role,
                        'loggedin_type'      => $userType,
                        'loggedin'           => true,
                        'needs_branch_select'=> ($user->branch_id == 0)
                    );

                   

                    // remember
                if ($remember) {
                    $this->load->helper('cookie');
                    set_cookie('remember_username', $username, 1209600);
                    set_cookie('remember_password', $password, 1209600);
                } else {
                    $this->load->helper('cookie');
                    delete_cookie('remember_username');
                    delete_cookie('remember_password');
                }

                    $this->session->set_userdata($sessionData);

                    $this->db->update('login_credential', 
                        array('last_login' => date('Y-m-d H:i:s')), 
                        array('id' => $user->id)
                    );

                    $this->session->set_flashdata('success', "Welcome Back " . $getUser['name']);




                    if ($this->session->has_userdata('redirect_url')) {
                        redirect($this->session->userdata('redirect_url'));
                    } else {
                        if ($user->role == 1) {
                            redirect(base_url() . "dashboard/systemadmin", "refresh");
                            
                        } else {
                            redirect(base_url() . "dashboard", "refresh");
                        }
                    }

                } else {
                   
                    $this->session->set_flashdata('error', "আপনার অ্যাকাউন্টটি বর্তমানে ইন-অ্যাক্টিভ আছে।");
                   redirect(base_url() . "login", "refresh");
                }

            } else {
             
                $this->session->set_flashdata('error', 'ইউজারনেম অথবা পাসওয়ার্ড ভুল!');
                redirect(base_url() . "login", "refresh");
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . "login", "refresh");
    }

    public function register_admin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hash = password_hash($password, PASSWORD_BCRYPT);

        $data = array(
            'username' => $username,
            'password' => $hash,
            'active'   => 1
        );
        $this->db->insert('login_credential', $data);
    }

   
public function forgot_password() {
    $this->load->view('forgot_password'); 
}

public function send_reset_otp() {
    $mobile = $this->input->post('mobile');
    $user = $this->db->get_where('login_credential', array('username' => $mobile))->row();

    if ($user) {
        $otp = rand(100000, 999999);
        
        $expiry_time = date("Y-m-d H:i:s", strtotime('+2 minutes'));

        $this->db->where('username', $mobile);
        $this->db->update('login_credential', array(
            'otp_code' => $otp,
            'otp_expiry' => $expiry_time
        ));

        $this->session->set_userdata('reset_mobile', $mobile);
        $this->session->set_userdata('reg_mobile', $mobile); 

           $org_id=1;
            $branch_id=1;
            $message = "Smart Solution OTP: " . $otp . ". Valid for 2 mins.\n@smart-solution.com #" . $otp;
         $this->sms_gateway->send_single_api_sms($org_id, $branch_id, $mobile, $message);

        $this->session->set_flashdata('success', 'আপনার মোবাইলে একটি OTP পাঠানো হয়েছে।');
        $this->load->view('otp_verification_view'); 
    } else {
        $this->session->set_flashdata('error', 'মোবাইল নাম্বারটি পাওয়া যায়নি!');
        redirect(base_url('login/forgot_password'));
    }
}

public function verify_reset_otp() {
    $mobile = $this->session->userdata('reset_mobile');
    $user_otp = $this->input->post('otp');
    $current_time = date("Y-m-d H:i:s");

    $user = $this->db->get_where('login_credential', array(
        'username' => $mobile,
        'otp_code' => $user_otp
    ))->row();

    if ($user) {
   
        if ($current_time <= $user->otp_expiry) {
    
            $this->load->view('reset_password_view');
        } else {
            $this->session->set_flashdata('error', 'OTP-র মেয়াদ (২ মিনিট) শেষ হয়ে গেছে!');
            $this->load->view('otp_verification_view');
        }
    } else {
        $this->session->set_flashdata('error', 'ভুল OTP কোড! আবার চেষ্টা করুন।');
        $this->load->view('otp_verification_view');
    }
}

public function update_password() {
   
    $new_password = $this->input->post('password');
    $confirm_password = $this->input->post('confirm_password');
    $mobile = $this->session->userdata('reset_mobile');

    if (!$mobile) {
        $this->session->set_flashdata('error', 'সেশন শেষ হয়ে গেছে, আবার চেষ্টা করুন।');
        redirect(base_url('forgot-password'));
        return;
    }

    if ($new_password !== $confirm_password) {
        $this->session->set_flashdata('error', 'পাসওয়ার্ড দুটি মিলেনি!');
        $this->load->view('reset_password_view');
        return;
    }

   
    $hashed_password = password_hash($new_password, PASSWORD_BCRYPT); 


    $this->db->where('username', $mobile);
    $update = $this->db->update('login_credential', array(
        'password'   => $hashed_password,
        'otp_code'   => NULL, 
        'otp_expiry' => NULL
    ));

    if ($update) {
        $this->session->unset_userdata('reset_mobile');
        $this->session->unset_userdata('reset_otp');
        $this->session->unset_userdata('reg_mobile');

        $this->session->set_flashdata('success', 'পাসওয়ার্ড সফলভাবে পরিবর্তন হয়েছে। নতুন পাসওয়ার্ড দিয়ে লগইন করুন।');
        redirect(base_url('login'));
    } else {
        $this->session->set_flashdata('error', 'পাসওয়ার্ড আপডেট করতে সমস্যা হয়েছে। আবার চেষ্টা করুন।');
        redirect(base_url('login/forgot_password'));
    }
}
}