<?php

namespace BuildystrapAddons\Markdown;

use Buildystrap\Builder\Extends\Module;
use Illuminate\Support\Collection;

use function collect;

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
