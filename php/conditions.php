<?php
    /*
        ==
        ===
        != <>
        !===
    */
    
    // $user_name = 'pph';
    // if ($user_name !== 'pph') {
    //     echo 'no it\'s not pph';
    // }else {
    //     echo 'Yes it is.';
    // }

    // echo "<br>";

    // $age = 1;

    // if($age === 18)
    // {
    //     echo "it's 18";
    // }elseif($age == 19){
    //     echo "it's 19";
    // }
    // else {
    //     echo 'no';
    // }
    
    # ternary operator
    // $isLogin = true;
    // $login = $isLogin ? "it is login" : "it is not login";
    // echo $login;

    # null coalescing operator
    $isLogin = null;
    $login = $isLogin ?? 'no-login';
    echo $login;