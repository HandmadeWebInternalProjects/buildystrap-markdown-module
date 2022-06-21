<?php

namespace BuildystrapAddons\Markdown;

use Buildystrap\Builder\Extends\Module;
use BuildystrapAddons\Fields\Markdown;
use Illuminate\Support\Collection;

class MarkdownModule extends Module
{
    protected function blueprint(): Collection
    {
        return collect([
            'markdown-field' => MarkdownField::class,
        ]);
    }

    protected function augment(): void
    {
    }
}
