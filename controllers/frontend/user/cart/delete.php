<?php

unset($_SESSION['cart'][$_GET['id']]);

 redirectTo("cart");

