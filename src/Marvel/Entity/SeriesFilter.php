<?php declare(strict_types = 1);

namespace ikoene\Marvel\Entity;

/**
 * Class SeriesFilter
 * @package ikoene\Marvel\Entity
 */
class SeriesFilter
{
    /**
     * Return only series matching the specified title.
     *
     * @var string
     */
    public $name;

    /**
     * Return series with titles that begin with the specified string (e.g. Sp).
     *
     * @var string
     */
    public $titleStartsWith;

    /**
     * Return only series matching the specified start year.
     *
     * @var int
     */
    public $startYear;

    /**
     * Return only series which have been modified since the specified date.
     *
     * @var string
     */
    public $modifiedSince;

    /**
     * Return only series which contain the specified comics
     * (accepts a comma-separated list of ids).
     *
     * @var int
     */
    public $comics;

    /**
     * Return only series which contain the specified stories
     * (accepts a comma-separated list of ids).
     *
     * @var int
     */
    public $stories;

    /**
     * Return only series which have comics that take place during the specified events
     * (accepts a comma-separated list of ids).
     *
     * @var int
     */
    public $events;

    /**
     * Return only series which feature work by the specified creators
     * (accepts a comma-separated list of ids).
     *
     * @var int
     */
    public $creators;

    /**
     * Return only series which feature the specified characters
     * (accepts a comma-separated list of ids).
     *
     * @var int
     */
    public $characters;

    /**
     * Filter the series by publication frequency type.
     *
     * @var string
     */
    public $seriesType;

    /**
     * Return only series containing one or more comics with the specified format.
     *
     * @var string
     */
    public $contains;

    /**
     * Order the result set by a field or fields.
     * Add a "-" to the value sort in descending order.
     * Multiple values are given priority in the order in which they are passed.
     *
     * @var string
     */
    public $orderBy;

    /**
     * Limit the result set to the specified number of resources.
     *
     * @var int
     */
    public $limit;

    /**
     * Skip the specified number of resources in the result set.
     *
     * @var int
     */
    public $offset;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTitleStartsWith()
    {
        return $this->titleStartsWith;
    }

    /**
     * @param string $titleStartsWith
     */
    public function setTitleStartsWith(string $titleStartsWith)
    {
        $this->titleStartsWith = $titleStartsWith;
    }

    /**
     * @return int
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * @param int $startYear
     */
    public function setStartYear(int $startYear)
    {
        $this->startYear = $startYear;
    }

    /**
     * @return string
     */
    public function getModifiedSince()
    {
        return $this->modifiedSince;
    }

    /**
     * @param string $modifiedSince
     */
    public function setModifiedSince(string $modifiedSince)
    {
        $this->modifiedSince = $modifiedSince;
    }

    /**
     * @return int
     */
    public function getComics()
    {
        return $this->comics;
    }

    /**
     * @param ComicList $comics
     */
    public function setComics(ComicList $comics)
    {
        $this->comics = $comics;
    }

    /**
     * @return int
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param StoryList $stories
     */
    public function setStories(StoryList $stories)
    {
        $this->stories = $stories;
    }

    /**
     * @return int
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param EventList $events
     */
    public function setEvents(EventList $events)
    {
        $this->events = $events;
    }

    /**
     * @return int
     */
    public function getCreators()
    {
        return $this->creators;
    }

    /**
     * @param CreatorList $creators
     */
    public function setCreators(CreatorList $creators)
    {
        $this->creators = $creators;
    }

    /**
     * @return int
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param CharacterList $characters
     */
    public function setCharacters(CharacterList $characters)
    {
        $this->characters = $characters;
    }

    /**
     * @return string
     */
    public function getSeriesType()
    {
        return $this->seriesType;
    }

    /**
     * @param string $seriesType
     */
    public function setSeriesType(string $seriesType)
    {
        $this->seriesType = $seriesType;
    }

    /**
     * @return string
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * @param string $contains
     */
    public function setContains(string $contains)
    {
        $this->contains = $contains;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     */
    public function setOrderBy(string $orderBy)
    {
        $this->orderBy = $orderBy;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }
}