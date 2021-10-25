<?php


namespace PolyWeb\Attachment\Sdk\Model;


interface IImage
{
    public function getId(): int;

    public function getTitle(): string;

    public function getFilePath(): string;

    public function getThumbnail(int $thumb): IImageThumbnail;

    public function getDescription(): string;

    public function getFilename(): string;

    public function getDominantColor(): string;

    public function getTags(): array;
}