<?php

namespace App\Entity;

class Review
{
    private int $id;
    public function __construct(
        private Beer $beer,
        private string $overall,
        private string $aroma,
        private string $appearance,
        private string $taste,
        private string $palate,
        private ?string $reviewer,
        private \DateTimeImmutable $createdAt,
    ) {
    }
}
