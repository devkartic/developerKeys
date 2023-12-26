<?php

namespace App\E9Abstract\Library;

class Radio extends Boolean
{
    public function render(): string
    {
        return <<<HTML
<input type="radio" name="{$this->name}" />
HTML;
    }
}