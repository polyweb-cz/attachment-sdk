<?php


namespace PolyWeb\Attachment\Sdk;


abstract class APackage implements IPackage
{
    public function getAttachmentPath(string $name): string
    {
        $path = $this->getWorkDirectory() . '/' . $name;
        if (!file_exists($path)) {
            throw new \Exception('Attachment "' . $name . '" does not exist in "' . $this->getWorkDirectory() . '"');
        }
        return $path;
    }
}