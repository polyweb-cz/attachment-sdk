<?php


namespace PolyWeb\Attachment\Sdk\Model;

interface IAttachment
{
    public function getName(): string;

    public function getData(): array;

    public function getColorScheme(): IColorScheme;
}