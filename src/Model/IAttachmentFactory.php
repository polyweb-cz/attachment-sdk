<?php


namespace PolyWeb\Attachment\Sdk\Model;


use Poly\Cms\Renderer\Renderer\Model\AttachmentModel;

interface IAttachmentFactory
{
    /**
     * @return AttachmentModel
     */
    public function createAttachment(IAttachmentData $data): AttachmentModel;
}