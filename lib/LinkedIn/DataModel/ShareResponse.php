<?php

namespace REverse\LinkedIn\DataModel;

class ShareResponse extends Model
{
    private string $id;

    private string $activity;

    private ShareContent $content;

    private bool $edited;

    private string $owner;

    private string $subject;

    private ShareText $text;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): ShareResponse
    {
        $this->id = $id;

        return $this;
    }

    public function getActivity(): string
    {
        return $this->activity;
    }

    public function setActivity(string $activity): ShareResponse
    {
        $this->activity = $activity;

        return $this;
    }

    public function getContent(): ShareContent
    {
        return $this->content;
    }

    public function setContent(ShareContent $content): ShareResponse
    {
        $this->content = $content;

        return $this;
    }

    public function isEdited(): bool
    {
        return $this->edited;
    }

    public function setEdited(bool $edited): ShareResponse
    {
        $this->edited = $edited;

        return $this;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): ShareResponse
    {
        $this->owner = $owner;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): ShareResponse
    {
        $this->subject = $subject;

        return $this;
    }

    public function getText(): ShareText
    {
        return $this->text;
    }

    public function setText(ShareText $text): ShareResponse
    {
        $this->text = $text;

        return $this;
    }
}
