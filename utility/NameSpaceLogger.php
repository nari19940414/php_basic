<?php 
namespace utility\NameSpaceLogger01;

function dateEcho($object)
{
    $now = date('[Y/m/d H:i:s]');
    echo $now . ' ' . $object . '<br>';
}

namespace utility\NameSpaceLogger02;

function dateEcho($object)
{
    $now = date('[Y/m/d]');
    echo $now . ' ' . $object . '<br>';
}