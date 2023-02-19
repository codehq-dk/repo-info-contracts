<?php

namespace CodeHqDk\RepositoryInformation\Factory;

use CodeHqDk\RepositoryInformation\Model\InformationBlock;
use CodeHqDk\RepositoryInformation\Model\RepositoryRequirements;

interface InformationFactory
{
    /**
     * @param string $local_path_to_code
     *
     * @return InformationBlock[] array
     */
    public function createBlocks(string $local_path_to_code): array;

    public function getRepositoryRequirements(): RepositoryRequirements;

    /**
     * @return array An array of Fully Qualified Classnames of the Information block types that the factory can produce
     */
    public function listAvailableInformationBlocks(): array;
}
