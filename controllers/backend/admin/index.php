<?php


if (false !== checkAuth() && session('auth_user')['is_admin'] == 1) {
    view("backend/index.view.php");
} elseif (false !== checkAuth() && session('auth_user')['is_admin'] == 0) {
    abort(404);
} elseif (false == checkAuth()) {
    view("backend/login.view.php");
}
