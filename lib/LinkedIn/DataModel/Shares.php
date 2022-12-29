<?php

namespace REverse\LinkedIn\DataModel;

class Shares extends Model
{
    private string $owner;

    private string $agent;

    private string $subject;

    private ShareText $text;

    private ShareContent $content;

    private ShareDistributionTarget $distribution;

    private string $resharedShare;

    private string $originalShare;

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): Shares
    {
        $this->owner = $owner;

        return $this;
    }

    public function getAgent(): string
    {
        return $this->agent;
    }

    public function setAgent(string $agent): Shares
    {
        $this->agent = $agent;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): Shares
    {
        $this->subject = $subject;

        return $this;
    }

    public function getText(): ShareText
    {
        return $this->text;
    }

    public function setText(ShareText $text): Shares
    {
        $this->text = $text;

        return $this;
    }

    public function getContent(): ShareContent
    {
        return $this->content;
    }

    public function setContent(ShareContent $content): Shares
    {
        $this->content = $content;

        return $this;
    }

    public function getDistribution(): ShareDistributionTarget
    {
        return $this->distribution;
    }

    public function setDistribution(ShareDistributionTarget $distribution): Shares
    {
        $this->distribution = $distribution;

        return $this;
    }

    public function getResharedShare(): string
    {
        return $this->resharedShare;
    }

    public function setResharedShare(string $resharedShare): Shares
    {
        $this->resharedShare = $resharedShare;

        return $this;
    }

    public function getOriginalShare(): string
    {
        return $this->originalShare;
    }

    public function setOriginalShare(string $originalShare): Shares
    {
        $this->originalShare = $originalShare;

        return $this;
    }
}
