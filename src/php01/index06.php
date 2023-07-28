<?php
function triangle($bottom,$height)
{
    return $bottom * $height / 2;
}
function square($width,$height)
{
    return $width * $height;
}
function trapezoid($bottom,$top,$height)
{
    return ($bottom + $top) / $height;
}
echo triangle(2,3). "<br/>";
echo square(4,5). "<br/>";
echo trapezoid(4,5,4);
