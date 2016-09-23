<?php declare(strict_types = 1);

namespace ikoene\Marvel\DataContainer;

use ikoene\Marvel\Entity\Comic;

/**
 * Class ComicDataContainer
 * @package ikoene\Marvel\DataContainer
 */
class ComicDataContainer extends AbstractDataContainer
{
    /**
     * The list of comics returned by the call
     *
     * @var array
     */
    private $results;

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param $item
     */
    public function addResult(Comic $item)
    {
        $this->results[] = $item;
    }
}