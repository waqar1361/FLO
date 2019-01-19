<?php

if (!function_exists("flash")) {
    function flash($message )
    {
        session()->flash('message', $message);
    }
}
