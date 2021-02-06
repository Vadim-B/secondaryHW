<?php


namespace Hillel\HomeWork;


class Str
{
  public static function after($subject, $after)
  {
    if (!is_numeric(strpos($subject, $after))) {
      return $subject;
    }
    return substr($subject, strpos($subject, $after) + strlen($after));
  }

  public static function afterLast($subject, $after)
  {
    if (!is_numeric(strrpos($subject, $after))) {
      return $subject;
    }
    return substr($subject, strrpos($subject, $after) + strlen($after));
  }
}