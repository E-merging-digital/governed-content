# Project brief

Governed Content is the working name of a Drupal module intended to manage selected content as governed, versionable, reviewable and deployment-safe content.

## Product vision

The module helps site builders and agencies manage specific content items that follow the lifecycle of a website rather than the lifecycle of day-to-day editorial publishing.

The goal is not to synchronize all content.

The goal is to make selected content governable.

## Problem

Many Drupal websites contain pages that are technically content entities but behave more like stable website assets.

Examples include:

- legal notice pages;
- privacy policy;
- cookie policy;
- terms of use;
- terms and conditions;
- contact page;
- corporate pages;
- compliance-related FAQ pages.

These pages often need to be changed carefully, reviewed before publication and promoted across environments.

A common workflow is:

Development  Review  Staging  Production

Without a dedicated governance layer, these pages are often copied manually, exported through generic tools, or edited directly in production.

That creates risks:

- inconsistent content between environments;
- accidental overwrites;
- unclear source of truth;
- missing auditability;
- weak review process;
- production edits that bypass staging;
- difficulty validating whether production matches the approved version.

## Differentiation

Governed Content is not a generic content synchronization module.

The project should not compete by building another broad YAML export/import mechanism for every content entity.

Existing tools already cover generic content export, content import, default content, deployment or single-entity synchronization use cases.

Governed Content adds a governance layer for selected site-lifecycle content.

The module should focus on questions such as:

- Which content items are governed?
- What stable key identifies each governed content item?
- Which Drupal entity currently represents it?
- Which environment is authoritative?
- Has the content changed since the last approved export?
- Is the content safe to import?
- Would an import overwrite local changes?
- Is the content ready for staging or production?
- Does the content satisfy required governance rules?

## Goals

The module should allow site builders to:

- mark selected content as governed;
- assign stable governance keys;
- list governed content items;
- check the governance status of selected content;
- detect missing or inconsistent governed content;
- prepare safe export/import workflows;
- support Git-based review workflows;
- support Dev  Staging  Production promotion patterns.

## Non-goals

The module must not become a generic content synchronization tool.

The module must not attempt to synchronize all nodes, all media, all taxonomy terms or all content entities by default.

The module must not replace editorial workflows, Content Moderation, Workspaces, Configuration Management, Recipes, Default Content or generic content synchronization modules.

The module must not introduce AI-related features in the main module unless a later documented decision explicitly authorizes it.

AI-related features, if added later, should be considered for a separate companion module.

## Compatibility

The module declares compatibility with Drupal 11 in general.

Development and tests should prioritize recent Drupal 11 versions, including Drupal 11.4 when available, but compatibility must not be restricted to Drupal 11.4 unless a documented technical reason requires it.

The module requires PHP 8.3 or newer.

The code may be tested with PHP 8.4 and PHP 8.5, but it must not use PHP 8.4- or PHP 8.5-only language features while the declared minimum remains PHP 8.3.

## Working name

Governed Content is a working name.

The machine name `governed_content` is provisional until publication decisions are finalized.