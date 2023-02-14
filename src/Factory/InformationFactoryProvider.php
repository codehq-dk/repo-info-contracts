<?php

namespace RepositoryInformation\Factory;

use RepositoryInformation\Service\ProviderDependencyService;

interface InformationFactoryProvider
{
    public function addFactory(ProviderDependencyService $provider_dependency_service): void;
}