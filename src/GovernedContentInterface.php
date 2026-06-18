<?php

namespace Drupal\governed_content;

use Drupal\Core\Config\Entity\ConfigEntityInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the interface for governed content registry entries.
 */
interface GovernedContentInterface extends ConfigEntityInterface {

  /**
   * Gets the stable governance key.
   *
   * @return string
   *   The stable governance key.
   */
  public function getGovernanceKey(): string;

  /**
   * Gets the target content entity type ID.
   *
   * @return string
   *   The target content entity type ID.
   */
  public function getTargetEntityTypeId(): string;

  /**
   * Gets the target content entity UUID.
   *
   * @return string
   *   The target content entity UUID.
   */
  public function getTargetEntityUuid(): string;

  /**
   * Maps this registry entry to a content entity identity.
   *
   * @param \Drupal\Core\Entity\ContentEntityInterface $entity
   *   The content entity to map.
   *
   * @return $this
   */
  public function setTargetEntity(ContentEntityInterface $entity): static;

}
