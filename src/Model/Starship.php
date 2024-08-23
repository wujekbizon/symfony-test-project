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

  public function getStatusString(): string
  {
    return $this->status->value;
  }

  public function getStatusImageFilename(): string
  {
    return match ($this->status) {
      StarshipStatusEnum::WAITING => 'images/status-waiting.png',
      StarshipStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
      StarshipStatusEnum::COMPLETED => 'images/status-complete.png',
    };
  }
}
