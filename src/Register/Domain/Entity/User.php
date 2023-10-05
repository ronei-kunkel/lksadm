<?php declare(strict_types=1);

namespace Larawater\Register\Domain\Entity;

use Larawater\Register\Domain\Type\Email;
use Larawater\Register\Domain\Type\Password;

final class User
{
  private function __construct(
    private string $name,
    private Email $email,
    private Password $password,
  ) {
  }

  public static function build(string $name, string $email, string $password): User
  {
    return new User($name, new Email($email), new Password($password));
  }

  public function name(): string
  {
    return $this->name;
  }

  public function email(): string
  {
    return $this->email->value();
  }

  public function password(): string
  {
    return $this->password->value();
  }
}