<?php

class OaiDcGallica_Metadata_OaiDc extends OaiPmhRepository_Metadata_OaiDc
{
    public function appendMetadata($item, $metadataElement)
    {
        parent::appendMetadata($item, $metadataElement);

        $oai_dc = $metadataElement->firstChild;

        if ($item->fileCount() > 0) {
            $file = $item->getFile(0);
            $webPath = $file->getWebPath('square_thumbnail');
            $value = sprintf('vignette : %s', $webPath);
            $oai_dc->appendNewElement('dc:relation', $value);
        }
    }
}
