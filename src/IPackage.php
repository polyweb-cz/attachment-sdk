<?php


namespace PolyWeb\Attachment\Sdk;


interface IPackage
{
    public function getWorkDirectory(): string;

    public function getAttachmentPrefix(): string;

    public function getAttachmentModule(): string;

    public function getAttachmentPath(string $name): string;
}