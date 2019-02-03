<?php

namespace Drupal\homepage\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\NodeInterface;

/**
 * Provides a 'Bullet Point' Block.
 *
 * @Block(
 *   id = "bullet_points",
 *   admin_label = @Translation("Bullet Points Block"),
 *   category = @Translation("Bullet Points Block"),
 * )
 */
class bulletPoints extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
	  $content['bullet_value'] = '';
	  $frontpage = \Drupal::service('path.matcher')->isFrontPage();	  
	  if ($frontpage) {
		$node = \Drupal::routeMatch()->getParameter('node');
		if ($node && $node->hasField('field_six_bullet_point') && !empty($node->field_six_bullet_point->target_id)) {
			$bulletParagraph = $node->field_six_bullet_point->entity;
			if ($bulletParagraph->hasField('field_6_bullet_points') && !empty($bulletParagraph->field_6_bullet_points->value)) {
				$bulletValues = $bulletParagraph->field_6_bullet_points->value;
				$content['bullet_value'] = !empty($bulletValues) ? $bulletValues : '';				
			}
		}
	  }
    return array(
	  '#theme' => 'bullet',
      '#data' => $content,
    );
  }

}