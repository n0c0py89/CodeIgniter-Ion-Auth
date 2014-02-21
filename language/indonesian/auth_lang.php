<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - Indonesia
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
* 
* Translator: TheCRJ
* 			  TheCRJ.blogspot.com
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description: contoh view Ion Auth Bahasa Indonesia
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Login';
$lang['login_subheading']      = 'Login dengan email/username dan password anda.';
$lang['login_identity_label']  = 'Email/Username:';
$lang['login_password_label']  = 'Password:';
$lang['login_remember_label']  = 'Ingat Saya:';
$lang['login_submit_btn']      = 'Login';
$lang['login_forgot_password'] = 'Lupa password?';

// Index
$lang['index_heading']           = 'Users';
$lang['index_subheading']        = 'Below is a list of the users.';
$lang['index_fname_th']          = 'Nama awal';
$lang['index_lname_th']          = 'Nama akhir';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Grup';
$lang['index_status_th']         = 'Status';
$lang['index_action_th']         = 'Aksi';
$lang['index_active_link']       = 'Active';
$lang['index_inactive_link']     = 'Inactive';
$lang['index_create_user_link']  = 'Buat user baru';
$lang['index_create_group_link'] = 'Buat grup baru';

// Deactivate User
$lang['deactivate_heading']                  = 'Nonaktifkan User';
$lang['deactivate_subheading']               = 'Apa anda yakin menonaktifkan user \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Ya:';
$lang['deactivate_confirm_n_label']          = 'Tidak:';
$lang['deactivate_submit_btn']               = 'Kirim';
$lang['deactivate_validation_confirm_label'] = 'Konfirmasi';
$lang['deactivate_validation_user_id_label'] = 'user ID';

// Create User
$lang['create_user_heading']                           = 'Buat User';
$lang['create_user_subheading']                        = 'Please enter the users information below.';
$lang['create_user_fname_label']                       = 'Nama awal:';
$lang['create_user_lname_label']                       = 'Nama akhir:';
$lang['create_user_company_label']                     = 'Nama Perusahaan:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Telepon:';
$lang['create_user_password_label']                    = 'Password:';
$lang['create_user_password_confirm_label']            = 'Konfirmasi Password:';
$lang['create_user_submit_btn']                        = 'Buat User';
$lang['create_user_validation_fname_label']            = 'Nama awal';
$lang['create_user_validation_lname_label']            = 'Nama akhir';
$lang['create_user_validation_email_label']            = 'Alamat Email';
$lang['create_user_validation_phone1_label']           = 'Telepon pertama';
$lang['create_user_validation_phone2_label']           = 'Telepon kedua';
$lang['create_user_validation_phone3_label']           = 'Telepon ketiga';
$lang['create_user_validation_company_label']          = 'Nama perusahaan';
$lang['create_user_validation_password_label']         = 'Password';
$lang['create_user_validation_password_confirm_label'] = 'Konfirmasi Password';

// Edit User
$lang['edit_user_heading']                           = 'Rubah User';
$lang['edit_user_subheading']                        = 'Isi informasi user.';
$lang['edit_user_fname_label']                       = 'Nama awal:';
$lang['edit_user_lname_label']                       = 'Nama akhir:';
$lang['edit_user_company_label']                     = 'Nama perusahaan:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Telepon:';
$lang['edit_user_password_label']                    = 'Password: (hanya isi bila anda merubah password)';
$lang['edit_user_password_confirm_label']            = 'Konfirmasi Password: (hanya isi bila anda merubah password)';
$lang['edit_user_groups_heading']                    = 'Anggota grup';
$lang['edit_user_submit_btn']                        = 'Simpan User';
$lang['edit_user_validation_fname_label']            = 'Nama awal';
$lang['edit_user_validation_lname_label']            = 'Nama akhir';
$lang['edit_user_validation_email_label']            = 'Alamat Email';
$lang['edit_user_validation_phone1_label']           = 'Telepon pertama';
$lang['edit_user_validation_phone2_label']           = 'Telepon kedua';
$lang['edit_user_validation_phone3_label']           = 'Telepon ketiga';
$lang['edit_user_validation_company_label']          = 'Nama perusahaan';
$lang['edit_user_validation_groups_label']           = 'Grup';
$lang['edit_user_validation_password_label']         = 'Password';
$lang['edit_user_validation_password_confirm_label'] = 'Konfirmasi password';

// Create Group
$lang['create_group_title']                  = 'Buat Grup';
$lang['create_group_heading']                = 'Buat Grup';
$lang['create_group_subheading']             = 'Isi informasi grup.';
$lang['create_group_name_label']             = 'Nama Grup:';
$lang['create_group_desc_label']             = 'Deskripsi:';
$lang['create_group_submit_btn']             = 'Buat Grup';
$lang['create_group_validation_name_label']  = 'Nama Grup';
$lang['create_group_validation_desc_label']  = 'Deskripsi';

// Edit Group
$lang['edit_group_title']                  = 'Edit Group';
$lang['edit_group_saved']                  = 'Grup telah disimpan';
$lang['edit_group_heading']                = 'Edit Group';
$lang['edit_group_subheading']             = 'Isi informasi grup.';
$lang['edit_group_name_label']             = 'Nama Grup:';
$lang['edit_group_desc_label']             = 'Deskripsi:';
$lang['edit_group_submit_btn']             = 'Simpan Grup';
$lang['edit_group_validation_name_label']  = 'Nama Grup';
$lang['edit_group_validation_desc_label']  = 'Deskripsi';

// Change Password
$lang['change_password_heading']                               = 'Ubah Password';
$lang['change_password_old_password_label']                    = 'Password lama:';
$lang['change_password_new_password_label']                    = 'Password baru (setidaknya terdiri dari %s karakter):';
$lang['change_password_new_password_confirm_label']            = 'Konfirmasi Password baru:';
$lang['change_password_submit_btn']                            = 'Ubah';
$lang['change_password_validation_old_password_label']         = 'Password lama';
$lang['change_password_validation_new_password_label']         = 'Password baru';
$lang['change_password_validation_new_password_confirm_label'] = 'Konfirmasi password baru';

// Forgot Password
$lang['forgot_password_heading']                 = 'Lupa Password';
$lang['forgot_password_subheading']              = 'Isi alamat email anda %s agar kami dapat mengirim email untuk me-reset password anda.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Kirim';
$lang['forgot_password_validation_email_label']  = 'Alamat Email';
$lang['forgot_password_username_identity_label'] = 'Username';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'Tidak ada data untuk alamat email terkait.';

// Reset Password
$lang['reset_password_heading']                               = 'Ubah Password';
$lang['reset_password_new_password_label']                    = 'Password baru (setidaknya terdiri dari %s karakter):';
$lang['reset_password_new_password_confirm_label']            = 'Konfirmasi password baru:';
$lang['reset_password_submit_btn']                            = 'Ubah';
$lang['reset_password_validation_new_password_label']         = 'Password baru';
$lang['reset_password_validation_new_password_confirm_label'] = 'Konfirmasi Password baru';

// Activation Email
$lang['email_activate_heading']    = 'Aktifasi akun untuk %s';
$lang['email_activate_subheading'] = 'Klik link ini untuk %s.';
$lang['email_activate_link']       = 'Mengaktifasi akun anda';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Reset Password ke %s';
$lang['email_forgot_password_subheading'] = 'Klik link ini untuk %s.';
$lang['email_forgot_password_link']       = 'Reset Password anda';

// New Password Email
$lang['email_new_password_heading']    = 'Password baru untuk %s';
$lang['email_new_password_subheading'] = 'Password anda sudah dikirim ke: %s';
