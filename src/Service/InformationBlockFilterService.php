<?php

namespace CodeHqDk\RepositoryInformation\Service;

interface InformationBlockFilterService
{
    /**
     * @param string $uuid
     *
     * @return array Returns a list of Enabled Information Blocks (by their fully qualified classnames)
     */
    public function getEnabledBlocks(string $uuid): array;
}