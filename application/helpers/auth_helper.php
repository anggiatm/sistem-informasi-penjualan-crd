<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        //  $role = $ci->session->userdata('role');
        //  if ($role != 1 || $role != 2 || $role != 3) {
        //      redirect('auth/blocked');
        //  }
    }
}
