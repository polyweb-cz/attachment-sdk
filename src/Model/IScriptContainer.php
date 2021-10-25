<?php

namespace PolyWeb\Attachment\Sdk\Model;

interface IScriptContainer
{
    public function getGtm(): ?string;

    public function getGads(): ?string;

    public function getSklik(): ?string;

    public function getSklikRetargeting(): ?string;

    public function getFbPixel(): ?string;

    public function getNotifikuj(): ?string;

    public function getSmartsupp(): ?string;

    public function getToplist(): ?int;

    public function getGa(): ?string;
}