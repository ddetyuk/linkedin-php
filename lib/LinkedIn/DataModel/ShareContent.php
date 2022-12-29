<?php

namespace REverse\LinkedIn\DataModel;

class ShareContent extends Model
{
    public const MEDIA_CATEGORY_NONE     = 'NONE';
    public const MEDIA_CATEGORY_ARTICLE  = 'ARTICLE';
    public const MEDIA_CATEGORY_IMAGE    = 'IMAGE';
    public const MEDIA_CATEGORY_RICH     = 'RICH';
    public const MEDIA_CATEGORY_VIDEO    = 'VIDEO';
    public const MEDIA_CATEGORY_CAROUSEL = 'CAROUSEL';

    private string $description;

    private string $title;

    /**
     * @var array|ContentEntity[]
     */
    private array $contentEntities = [];

    private string $shareMediaCategory;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): ShareContent
    {
        $this->description = $description;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): ShareContent
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return array|ContentEntity[]
     */
    public function getContentEntities(): array
    {
        return $this->contentEntities;
    }

    /**
     * @param array|ContentEntity[] $contentEntities
     */
    public function setContentEntities(array $contentEntities): ShareContent
    {
        $this->contentEntities = $contentEntities;

        return $this;
    }

    public function addContentEntity(ContentEntity $contentEntity): ShareContent
    {
        $this->contentEntities[] = $contentEntity;

        return $this;
    }

    public function removeContentEntity(ContentEntity $contentEntity): ShareContent
    {
        $key = array_search($contentEntity, $this->contentEntities);

        if (false !== $key) {
            unset($contentEntity[$key]);
        }

        return $this;
    }

    public function getShareMediaCategory(): string
    {
        return $this->shareMediaCategory;
    }

    public function setShareMediaCategory(string $shareMediaCategory): ShareContent
    {
        $this->shareMediaCategory = $shareMediaCategory;

        return $this;
    }
}
