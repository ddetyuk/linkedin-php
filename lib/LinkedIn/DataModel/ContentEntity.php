<?php

namespace REverse\LinkedIn\DataModel;

class ContentEntity extends Model
{
    private string $entity;

    private string $entityLocation;

    private string $resolvedUrl;

    /**
     * @var array|Thumbnail[]
     */
    private array $thumbnails = [];

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function setEntity(string $entity): ContentEntity
    {
        $this->entity = $entity;

        return $this;
    }

    public function getEntityLocation(): string
    {
        return $this->entityLocation;
    }

    public function setEntityLocation(string $entityLocation): ContentEntity
    {
        $this->entityLocation = $entityLocation;

        return $this;
    }

    public function getResolvedUrl(): string
    {
        return $this->resolvedUrl;
    }

    public function setResolvedUrl(string $resolvedUrl): ContentEntity
    {
        $this->resolvedUrl = $resolvedUrl;

        return $this;
    }

    /**
     * @return array|Thumbnail[]
     */
    public function getThumbnails(): array
    {
        return $this->thumbnails;
    }

    /**
     * @param array|Thumbnail[] $thumbnails
     */
    public function setThumbnails(array $thumbnails): ContentEntity
    {
        $this->thumbnails = $thumbnails;

        return $this;
    }

    public function addThumbnail(Thumbnail $thumbnail): ContentEntity
    {
        $this->thumbnails[] = $thumbnail;

        return $this;
    }

    public function removeThumbnail(Thumbnail $thumbnail): ContentEntity
    {
        $key = array_search($thumbnail, $this->thumbnails);

        if (false !== $key) {
            unset($this->thumbnails[$key]);
        }

        return $this;
    }
}
