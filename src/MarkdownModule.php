<?php

namespace BuildystrapAddons\Markdown;

use Buildystrap\Builder\Extends\Module;

class MarkdownModule extends Module
{
    protected static function blueprint(): array
    {
        return [
            'markdown-field' => MarkdownField::class,
        ];
    }
}
