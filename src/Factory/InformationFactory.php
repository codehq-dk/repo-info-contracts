<?php

namespace CodeHqDk\RepositoryInformation\Factory;

use CodeHqDk\RepositoryInformation\Model\InformationBlock;
use CodeHqDk\RepositoryInformation\Model\RepositoryRequirements;

/**
 * Implement this factory to produce you own Information blocks
 * @see InformationBlock
 */
interface InformationFactory
{
    public const DEFAULT_ENABLED_BLOCKS = [
        // e.g. HelloWorldInformationBlock::class,
    ];

    /**
     * @param string $local_path_to_code The path to the code you can build information blocks from
     * @param array  $information_block_types_to_create An array of Information blocks (by their FQCN) to create
     *
     * @return InformationBlock[] array
     */
    public function createBlocks(string $local_path_to_code, array $information_block_types_to_create = self::DEFAULT_ENABLED_BLOCKS): array;

    /**
     * Return a model that describe the requirements to the Repository to match this Information factory
     * @see RepositoryRequirements
     */
    public function getRepositoryRequirements(): RepositoryRequirements;

    /**
     * @return array An array of Fully Qualified Classnames of the Information block types that the factory can produce
     */
    public function listAvailableInformationBlocks(): array;
}
