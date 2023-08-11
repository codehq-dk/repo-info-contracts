# Release notes
( Repository Information Contracts )

## Version 1.0.0-alpha4
### Breaking changes!
* `RepositoryNameInformationBlock` and `RepositoryTypeInformationBlock` classes have been removed.
* `Repository` interface methods `createRepositoryTypeInformationBlock` and `createRepositoryNameInformationBlock` have been removed.
* `Repository` interface method `getId` has been renamed to `getUuid()`

## Version 1.0.0-alpha3
### Fixes
* Fix spelling mistake in class `ProviderDependencyService` interface. Renamed `addInformactionFactoryToRegistry` to 
`addInformationFactoryToRegistry`    

## Version 1.0.0-alpha2
### Changes
* Added possibility to supply a filter to the `InformationFactory` interface `createBlocks` method.

## Version 1.0.0-alpha1
### Changes
* Change to correct composer alpha sem ver
 
## Version v0.0.2-alpha
### Changes
* Added new InformationBlockFilterService interface 

## Version v0.0.1-alpha
### Changes
* Fix bug in BaseInformationBlock
* Added doc blocks and moved the two basic info blocks into this module
* Added BaseInformationBlock
* Added new interface Repository and InformationBlock
* Adjust namespace
* Added Exception
* Added initial Models and Interfaces
