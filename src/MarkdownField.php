<?php

namespace BuildystrapAddons\Markdown;

use Buildystrap\Builder\Extends\Field;
use League\CommonMark\CommonMarkConverter;

class MarkdownField extends Field
{
    protected static function blueprint(): array
    {
    }

    protected function augment(): void
    {
        $commonmark = new CommonMarkConverter([]);

        $this->value = $commonmark->convert($this->value);
    }
}
