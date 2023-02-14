<?php

namespace RepositoryInformation\Factory;

use RepositoryInformation\Model\InformationBlock;
use RepositoryInformation\Model\RepositoryRequirements;

interface InformationFactory
{
    /**
     * @param string $local_path_to_code
     *
     * @return InformationBlock[] array
     */
    public function createBlocks(string $local_path_to_code): array;

    public function getRepositoryRequirements(): RepositoryRequirements;
}
