# Decision 0001: Project positioning

## Status

Accepted.

## Context

The Drupal ecosystem already contains modules and APIs for content export, content import, default content, content deployment and synchronization.

Creating another generic export/import module would create unnecessary overlap and reduce the usefulness of this project.

The original need behind this project is more specific.

Some pages are technically content, but behave like stable website assets. These pages often need governance, review, auditability and controlled promotion between environments.

Examples include legal pages, privacy policies, terms of use, contact pages and corporate pages.

## Decision

Governed Content will be positioned as a governance layer for selected site-lifecycle content.

The project will not position itself as a generic content synchronization module.

The project will focus on governed content identity, status, validation, safety and promotion readiness.

Export/import may be implemented later as a supporting mechanism, but it is not the primary product identity.

## Consequences

The MVP must start with governance foundations.

The project must avoid broad synchronization features unless they directly support governed content workflows.

The module should integrate with existing Drupal mechanisms where possible.

A custom serialization or synchronization system requires a later documented decision.

The main value proposition is:

Selected site-lifecycle content becomes governable, versionable, reviewable and deployment-safe.