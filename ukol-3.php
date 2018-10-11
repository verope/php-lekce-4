<?php

function datum(){
    echo date('Y-m-d H:i:s') . '<br>';
    sleep(2);
    echo date('Y-m-d H:i:s');
}

datum();