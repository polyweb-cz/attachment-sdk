<?php


namespace PolyWeb\Attachment\Sdk\Model;


use Poly\Cms\Renderer\Model\AttachmentList;

interface ISection
{
    public function getKey(): string;

    public function getAttachmentList(): AttachmentList;
}