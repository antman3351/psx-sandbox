--TEST--
Execute function through match
--FILE--
<?php

$a = match ( '1' )
{
    (fn () => exec('ls -l'))() => '1',
    default => null,
};