<?php

namespace App\E9Abstract\Library;

class Text extends Field
{
    public function render(): string
    {
        return <<<HTML
<input type="text" name="{$this->name}" />
HTML;
    }
}