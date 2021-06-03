# Islandora 8 Migration Reports


## Introduction
This module provides migration reports relating to Islandora 8 repository items.

## Requirements

This module requires the following modules/libraries:

* [Islandora](https://github.com/Islandora/islandora)
* [Search API](https://www.drupal.org/project/search_api)

## Installation

Install as usual, see
[this](https://drupal.org/documentation/install/modules-themes/modules-8) for
further information.

## Configuration

* The Solr field `search_api_reverse_entity_references_media__field_media_of:field_media_use:entity:field_external_uri` should be added to the search API's default index fields. It should have the machine name `field_media_external_uri`.
* The permission `view islandora migration reports` would need to be added appropriately.

## Usage

Navigate to `admin/reports/islandora_migration_reports` and select the report
you wish to view.

## Troubleshooting/Issues

Having problems or solved one? contact
[discoverygarden](http://support.discoverygarden.ca).

## Maintainers/Sponsors

Current maintainers:

* [discoverygarden](http://www.discoverygarden.ca)

## Development

If you would like to contribute to this module create an issue, pull request
and or contact
[discoverygarden](http://support.discoverygarden.ca).

## License

[GPLv3](http://www.gnu.org/licenses/gpl-3.0.txt)
