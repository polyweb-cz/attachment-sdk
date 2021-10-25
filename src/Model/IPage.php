<?php
namespace PolyWeb\Attachment\Sdk\Model;

use Poly\Cms\Renderer\Model\Layout;
use Poly\Cms\Renderer\Model\SectionList;

interface IPage
{
    public function getId(): int;

    public function getName(): string;

    public function getDescription(): string;

    public function getKeywords(): string;

    public function getLanguage(): string;

    public function getTitle(): string;

    public function getLayout(): Layout;

    public function getSections(): SectionList;

    public function isBlocked(): bool;

    public function isStable(): bool;

    /**
     * @return IRoute[]
     */
    public function getRoutes(): array;
}