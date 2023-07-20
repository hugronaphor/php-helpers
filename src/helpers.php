<?php

namespace Hugronaphor\PhpHelpers;

/**
 * Call the given Closure with the given value and return the result of it.
 */
function call(callable $callback, mixed $value = NULL): mixed {
  return $callback($value);
}

/**
 * Catch a potential exception and return a default value.
 */
function rescue(callable $callback, mixed $rescue = NULL): mixed {
  try {
    return $callback();
  } catch (\Throwable $e) {
    return value($rescue, $e);
  }
}

/**
 * Return the default value of the given value.
 */
function value(mixed $value, ...$args): mixed {
  return $value instanceof \Closure ? $value(...$args) : $value;
}
