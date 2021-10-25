<?php

namespace PolyWeb\Attachment\Sdk\Model;

interface ITag
{
    public function getId(): int;

    public function getName(): string;

    /**
     * @return IImage[]
     */
    public function getImages(): array;

    public function addImage(IImage $image): self;
}