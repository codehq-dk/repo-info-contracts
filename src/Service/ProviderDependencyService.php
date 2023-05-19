<?php

namespace CodeHqDk\RepositoryInformation\Service;

use CodeHqDk\RepositoryInformation\Factory\InformationFactory;

interface ProviderDependencyService
{
    public function registerClassInDependencyContainer(string $fully_qualified_class_name): void;

    public function registerObjectInDependencyContainer($object): void;

    public function addInformationFactoryToRegistry(InformationFactory $information_factory): void;
}
