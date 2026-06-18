# Comparison with existing Drupal modules

Governed Content is intentionally positioned near existing Drupal content export and synchronization tools, but it must not duplicate them.

## Adjacent project categories

Drupal already has solutions for:

- exporting and importing content;
- synchronizing content between environments;
- providing default content for installation profiles, modules or recipes;
- deploying selected content;
- managing editorial workflows;
- managing configuration.

Governed Content must respect this existing ecosystem.

## What this project should not duplicate

Governed Content should not compete by trying to provide the broadest possible content export/import feature set.

The project should not start by attempting to support every content entity type, every field type, every reference type and every export format.

That space is already covered by existing generic content synchronization and default content tools.

## What this project adds

Governed Content adds a governance layer for selected site-lifecycle content.

The key difference is not the ability to export content.

The key difference is the ability to know that a specific content item is governed, why it is governed, whether it is in the expected state, and whether it is safe to promote.

## Differentiating questions

The module should answer questions such as:

- Is this content governed?
- What stable key identifies it?
- What entity currently represents it?
- Is the entity missing?
- Has the entity changed locally?
- Is the content ready for staging?
- Is the content ready for production?
- Would an import overwrite local changes?
- Does the content violate a governance rule?
- Is the production version aligned with the approved version?

## Relationship with export/import mechanisms

Export/import is a mechanism, not the product identity.

Governed Content may later use, integrate with or build on existing Drupal mechanisms for serializing content.

The project should prefer integration over duplication when possible.

A custom export/import mechanism should only be introduced if a documented decision explains why existing mechanisms are insufficient.

## Positioning statement

Governed Content does not aim to be another generic content synchronization module.

Governed Content aims to make selected site-lifecycle content governable, versionable, reviewable and deployment-safe.