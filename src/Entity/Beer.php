<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Beer
{
    /**
     * @var Collection<int, Review>
     */
    private Collection $reviews;

    public function __construct(
        private readonly int $id,
        private Brewery $brewery,
        private string $name,
        private string $style,
        private ?float $abv,
    ) {
        $this->reviews = new ArrayCollection();
    }
}
