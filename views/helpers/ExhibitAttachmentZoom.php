<?php

/**
 * Exhibit gallery view helper.
 * 
 * @package ExhibitBuilder\View\Helper
 */
class ExhibitBuilder_View_Helper_ExhibitAttachmentZoom extends Zend_View_Helper_Abstract
{
    /**
     * Return the markup for a gallery of exhibit attachments.
     *
     * @uses ExhibitBuilder_View_Helper_ExhibitAttachment
     * @param ExhibitBlockAttachment[] $attachments
     * @param array $fileOptions
     * @param array $linkProps
     * @return string
     */
    public function exhibitAttachmentZoom($attachments, $fileOptions = array(), $linkProps = array(), $forceImage = false, $zoom = false)
    {
        if (!isset($fileOptions['imageSize'])) {
            $fileOptions['imageSize'] = 'square_thumbnail';
        }
        
        $html = '';
        $x=0;
        foreach  ($attachments as $attachment) {
            $html .= '<div class="exhibit-item exhibit-gallery-item">';
            $html .= '<div class="openlayerszoom-images" id="zoom'.$x.'">';
            $html .= $this->view->exhibitAttachment($attachment, $fileOptions, $linkProps, $forceImage, $zoom);
            $html .= '</div></div>';
            $x++;
        }
    
        return apply_filters('exhibit_attachment_gallery_markup', $html,
            compact('attachments', 'fileOptions', 'linkProps'));
    }
}
