<?php

function generate_password($pass_length, $password, $alph) {
    for($i = 0; $i < $pass_length; $i++) {
        $password .= $alph[rand(0, strlen($alph) - 1)];
    }
    return $password;
}