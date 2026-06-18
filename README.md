# Governed Content

Governed Content is a Drupal module intended to manage selected content as governed, versionable, reviewable and deployment-safe content.

The project focuses on stable site-lifecycle content, such as legal pages, privacy policies, terms of use, contact pages and corporate pages.

## Why this module exists

Drupal already has mature tools for code, configuration and editorial workflows.

Drupal also has existing modules for generic content export, import and synchronization.

Governed Content is not intended to duplicate those tools.

Instead, the module focuses on a different problem: some content is technically editorial content, but functionally behaves like a governed website asset.

Examples include:

- legal notices;
- privacy policies;
- terms of use;
- cookie policy pages;
- contact pages;
- corporate pages;
- compliance-related FAQ pages.

These pages often need to be prepared in development, reviewed in staging and deployed to production in a controlled and auditable way.

## Core concept

Governed Content introduces the idea of selected site-lifecycle content.

A governed content item should have:

- a stable key;
- a known Drupal entity identity;
- a clear governance status;
- a predictable deployment lifecycle;
- validation rules;
- protection against unsafe imports or accidental overwrites.

## Intended lifecycle

Development  Review  Staging  Production

## Current status

This project is in early planning and prototyping.

The name Governed Content is currently a working name.

## Registry foundation

Governed content items are represented by Drupal configuration entities. The
configuration entity ID is the stable governance key, while the mapped Drupal
content entity is identified by its entity type ID and UUID. Database IDs are
intentionally not used because they may differ between environments.

The registry currently provides identity only. Export, import, synchronization
and drift detection are outside this foundation.

## Scope

The module is intended for selected, stable, site-lifecycle content.

It is not intended to synchronize all editorial content.

It is not intended to replace existing generic content synchronization modules.

## Requirements

- Drupal 11
- PHP 8.3 or newer

## Development

The repository contains only the Drupal module.

A separate Drupal DDEV installation should be used for local development and testing.
