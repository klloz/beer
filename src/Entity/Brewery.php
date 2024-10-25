<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Brewery
{
    /**
     * @var Collection<int, Beer>
     */
    private Collection $beers;

    public function __construct(private readonly int $id, private ?string $name)
    {
        $this->beers = new ArrayCollection();
    }
}
