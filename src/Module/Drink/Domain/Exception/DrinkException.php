<?php declare(strict_types=1);

namespace Larawater\Module\Register\Domain\Exception;

use DomainException;

final class DrinkException extends DomainException
{
  public static function onlyPositiveDrinksAllowed() {
    $message = sprintf('Only positive drinks are allowed.');
    return new self($message);
  }

}