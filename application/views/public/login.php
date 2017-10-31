<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
ONPOTIK - Online Apotik
Sistem Informasi Apotik Online
Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="<?= base_url('login/cek_login'); ?>">
            <?= base_url('login'); ?>
            <input type="text" name="username" required>
            <input type="password" name="password" required>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
