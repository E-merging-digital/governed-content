# Glossary

## Governed content

A selected content item that follows the lifecycle of the website rather than the lifecycle of day-to-day editorial publishing.

Governed content is expected to be identifiable, reviewable, versionable and deployable.

## Site-lifecycle content

Content that behaves like part of the stable website structure or compliance layer.

Examples include legal pages, privacy policies, contact pages and corporate pages.

## Editorial content

Ordinary content created and updated through normal editorial activity.

Examples include news, blog posts, events and campaign-specific pages.

Editorial content is not the primary target of this module.

## Governance key

A stable machine-readable key that identifies a governed content item independently of its current database ID.

Example:

`legal.privacy_policy`

## Source of truth

The environment, file or process considered authoritative for a governed content item.

The source of truth must be explicit before implementing import or promotion workflows.

## Drift

A difference between the approved governed content state and the current Drupal entity state.

Drift can indicate that a governed page was changed locally, imported incorrectly or not updated after an approved change.

## Promotion

The controlled movement of a governed content change from one environment to another.

Typical promotion path:

Development  Review  Staging  Production

## Deployment-safe content

Content that can be imported or promoted without unexpected overwrites, identity mismatch or policy violations.