<?php

namespace Drupal\governed_content\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\Attribute\ConfigEntityType;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\governed_content\GovernedContentInterface;

/**
 * Defines a governed content registry entry.
 *
 * The entity ID is the stable governance key. The target UUID is used instead
 * of a database ID so the identity can remain meaningful across environments.
 */
#[ConfigEntityType(
  id: 'governed_content',
  label: new TranslatableMarkup('Governed content'),
  label_collection: new TranslatableMarkup('Governed content'),
  label_singular: new TranslatableMarkup('governed content item'),
  label_plural: new TranslatableMarkup('governed content items'),
  entity_keys: [
    'id' => 'id',
    'label' => 'label',
  ],
  config_export: [
    'id',
    'label',
    'target_entity_type_id',
    'target_entity_uuid',
  ],
)]
class GovernedContent extends ConfigEntityBase implements GovernedContentInterface {

  /**
   * The stable governance key.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable label.
   *
   * @var string
   */
  protected $label;

  /**
   * The target content entity type ID.
   *
   * @var string
   */
  protected $target_entity_type_id = '';

  /**
   * The target content entity UUID.
   *
   * @var string
   */
  protected $target_entity_uuid = '';

  /**
   * {@inheritdoc}
   */
  public function getGovernanceKey(): string {
    return $this->id();
  }

  /**
   * {@inheritdoc}
   */
  public function getTargetEntityTypeId(): string {
    return $this->target_entity_type_id;
  }

  /**
   * {@inheritdoc}
   */
  public function getTargetEntityUuid(): string {
    return $this->target_entity_uuid;
  }

  /**
   * {@inheritdoc}
   */
  public function setTargetEntity(ContentEntityInterface $entity): static {
    $this->target_entity_type_id = $entity->getEntityTypeId();
    $this->target_entity_uuid = $entity->uuid();
    return $this;
  }

}
