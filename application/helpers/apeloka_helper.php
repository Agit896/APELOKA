<?php

function cek_login()
{
  $ci = get_instance();

  if (!$ci->session->userdata('email')) {
    redirect(base_url());
  } else {
    $nama = $ci->session->userdata('nama');
    $role = $ci->session->userdata('role');
    $email = $ci->session->userdata('email');
  }
}
