<?php
namespace PolyWeb\Attachment\Sdk\Model;

interface IMenuItem
{
    /**
     * @return IMenuItem[]
     */
    public function getChildren(): array;

    public function getRoute(): ?IRoute;

    public function getRedirect(): ?string;

    public function getPage(): ?IPage;
}