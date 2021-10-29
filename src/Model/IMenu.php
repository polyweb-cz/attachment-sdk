<?php
namespace PolyWeb\Attachment\Sdk\Model;

interface IMenu
{
    /**
     * @return IMenuItem[]
     */
    public function getMenuItems(): array;

    public function isDefault(): bool;
}