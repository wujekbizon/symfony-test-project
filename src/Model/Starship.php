<?php

namespace App\Model;

final readonly class Starship
{
  public function __construct(
    public int    $id,
    public string $name,
    public string $class,
    public string $captain,
    public StarshipStatusEnum $status,
  ) {}
}
