<?php


namespace PolyWeb\Attachment\Sdk\Model;


interface IAttachmentData
{

    public function getAttachmentName(): string;

    public function getAttachmentData(): \stdClass;

    /**
     * @return mixed[]
     */
    public function getAttachmentExtensionData(): array;

    public function getColorSchemeId(): int;

    public function getOrder(): int;
}