<?php

class OaiDcGallicaPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array(
        'oai_pmh_repository_metadata_formats',
    );

    public function filterOaiPmhRepositoryMetadataFormats($formats)
    {
        $formats['oai_dc']['class'] = 'OaiDcGallica_Metadata_OaiDc';

        return $formats;
    }
}
