<?php

function flash($message, $level = 'info')
{
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}

function set_active($uri)
{
    return Request::is($uri) ? 'active' : '';
}

function highlight($query, $value)
{
    return preg_replace("/\w*?$query\w*/i", '<b>$0</b>', $value);
}
