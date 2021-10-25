<?php
namespace PolyWeb\Attachment\Sdk\Model;


interface IRoute
{
    public function getInputUrl(): string;


    public function getRedirectToUrl(): ?string;


    public function isReadGetEnabled(): bool;


    public function isReadPostEnabled(): bool;


    public function isWriteGetEnabled(): bool;


    public function isReadingPostEnabled(): bool;


    public function getMenuItem(): ?IMenuItem;

    public function setMenuItem(IMenuItem $menuItem): IRoute;

    public function getPage(): ?IPage;


    public function getAnchor(): ?string;

}