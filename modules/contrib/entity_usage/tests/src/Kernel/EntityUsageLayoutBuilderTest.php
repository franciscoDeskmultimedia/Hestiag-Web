<?php

namespace Drupal\Tests\entity_usage\Kernel;

use Drupal\block_content\Entity\BlockContent;
use Drupal\block_content\Entity\BlockContentType;
use Drupal\entity_test\Entity\EntityTest;
use Drupal\KernelTests\KernelTestBase;
use Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay;
use Drupal\layout_builder\Plugin\SectionStorage\OverridesSectionStorage;
use Drupal\layout_builder\Section;
use Drupal\layout_builder\SectionComponent;

/**
 * Tests layout builder usage plugin records usage.
 *
 * @group entity_usage
 * @group layout_builder
 * @coversDefaultClass \Drupal\entity_usage\Plugin\EntityUsage\Track\LayoutBuilder
 */
class EntityUsageLayoutBuilderTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'entity_usage',
    'entity_test',
    'block_content',
    'block',
    'text',
    'user',
    'layout_builder',
    'layout_discovery',
    'field',
    'system',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->installSchema('entity_usage', ['entity_usage']);
    $this->installSchema('system', ['key_value_expire']);
    $this->installEntitySchema('entity_test');
    $this->installEntitySchema('block_content');

    LayoutBuilderEntityViewDisplay::create([
      'targetEntityType' => 'entity_test',
      'bundle' => 'entity_test',
      'mode' => 'default',
      'status' => TRUE,
    ])
      ->enableLayoutBuilder()
      ->setOverridable()
      ->save();
  }

  /**
   * Tests blocks referenced by inline blocks in layouts are recorded.
   */
  public function testLayoutBuilderInlineBlockUsage() {
    $type = BlockContentType::create([
      'id' => 'foo',
      'label' => 'Foo',
    ]);
    $type->save();
    $block = BlockContent::create([
      'type' => $type->id(),
    ]);
    $block->save();

    $sectionData = [
      new Section('layout_onecol', [], [
        'first-uuid' => new SectionComponent('first-uuid', 'content', [
          'id' => 'inline_block:' . $type->id(),
          'block_revision_id' => $block->getRevisionId(),
        ]),
      ]),
    ];

    $entity = EntityTest::create([OverridesSectionStorage::FIELD_NAME => $sectionData]);
    $entity->save();

    /** @var \Drupal\entity_usage\EntityUsageInterface $entityUsage */
    $entityUsage = \Drupal::service('entity_usage.usage');
    $usage = $entityUsage->listSources($block);
    $expected = [
      $entity->getEntityTypeId() => [
        $entity->id() => [
          [
            'source_langcode' => 'en',
            'source_vid' => '0',
            'method' => 'layout_builder',
            'field_name' => 'layout_builder__layout',
            'count' => '1',
          ],
        ],
      ],
    ];
    $this->assertEquals($expected, $usage);
  }

}
