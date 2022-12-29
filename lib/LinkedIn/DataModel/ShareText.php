<?php

namespace REverse\LinkedIn\DataModel;

class ShareText extends Model
{
    private string $text;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): ShareText
    {
        $this->text = $text;

        return $this;
    }
}
