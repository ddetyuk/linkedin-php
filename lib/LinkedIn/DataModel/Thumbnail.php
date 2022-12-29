<?php

namespace REverse\LinkedIn\DataModel;

class Thumbnail
{
    private array $authors = [];

    /**
     * @var object|array
     */
    private $imageSpecificContent;

    private array $publishers = [];

    private string $resolvedUrl;

    public function getAuthors(): array
    {
        return $this->authors;
    }

    public function setAuthors(array $authors): Thumbnail
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * @return object
     */
    public function getImageSpecificContent()
    {
        return $this->imageSpecificContent;
    }

    /**
     * @param object|array $imageSpecificContent
     */
    public function setImageSpecificContent($imageSpecificContent): Thumbnail
    {
        $this->imageSpecificContent = $imageSpecificContent;

        return $this;
    }

    public function getPublishers(): array
    {
        return $this->publishers;
    }

    public function setPublishers(array $publishers): Thumbnail
    {
        $this->publishers = $publishers;

        return $this;
    }

    public function getResolvedUrl(): string
    {
        return $this->resolvedUrl;
    }

    public function setResolvedUrl(string $resolvedUrl): Thumbnail
    {
        $this->resolvedUrl = $resolvedUrl;

        return $this;
    }
}
