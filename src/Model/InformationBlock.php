<?php

namespace CodeHqDk\RepositoryInformation\Model;

interface InformationBlock
{
    public const INFO_TYPE_ID = self::class;

    public function getInfoTypeId(): string;

    public function getHeadline(): string;

    public function getModifiedTimestamp(): int;

    public function getValue(): string;

    public function getLabel(): string;

    public function getDetails(): ?string;

    public function getInformationOrigin(): ?string;

    public static function fromArray(array $array): self;

    public function toArray(): array;
}