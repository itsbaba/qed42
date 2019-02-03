<?php

namespace Drupal\homepage\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\NodeInterface;
use Drupal\file\Entity\File;

/**
 * Provides a 'Banner' Block.
 *
 * @Block(
 *   id = "banner_block",
 *   admin_label = @Translation("Banner Block"),
 *   category = @Translation("Banner Block"),
 * )
 */
class banner extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
	  $content['banner_image'] = $content['banner_link'] = '';
	  $frontpage = \Drupal::service('path.matcher')->isFrontPage();	  
	  if ($frontpage) {
		$node = \Drupal::routeMatch()->getParameter('node');
		if ($node && $node->hasField('field_banner') && !empty($node->field_banner->target_id)) {
			$bannerParagraph = $node->field_banner->entity;
			if ($bannerParagraph->hasField('field_banner_image') && !empty($bannerParagraph->field_banner_image->target_id)) {
				$banner_file_id = $bannerParagraph->field_banner_image->target_id;
				$banner_load = File::load($banner_file_id);
				$content['banner_image'] = !empty($banner_load) ? file_create_url($banner_load->getFileUri()) : '';				
			}
			if ($bannerParagraph->hasField('field_link_for_banner_image') && !empty($bannerParagraph->field_link_for_banner_image->getValue())) {
				$content['banner_link'] = $bannerParagraph->field_link_for_banner_image->getValue()[0]['uri'];		
			}
		}
	  }
    return array(
	  '#theme' => 'banner',
      '#data' => $content,
    );
  }

}