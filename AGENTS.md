# Agent instructions

This repository contains only the Drupal module Governed Content.

Do not add a full Drupal installation to this repository.

Do not add:

- a Drupal web root;
- vendor dependencies;
- database dumps;
- DDEV configuration;
- generated files;
- site-specific configuration.

Development and testing happen in a separate Drupal DDEV installation.

## Source of truth

Before making changes, read:

1. PROJECT_BRIEF.md
2. docs/vision.md
3. docs/glossary.md
4. docs/comparison-with-existing-modules.md
5. docs/decisions/*.md
6. README.md
7. the issue or task description provided by the user

## Research first — reuse before building

```text
RESEARCH_FIRST = REQUIRED
REUSE_EXISTING_FIRST = REQUIRED
MINIMAL_CUSTOM_LAST = REQUIRED
```

Before substantial implementation or a new dependency, proportionately inspect the current repository and its existing components, native platform capabilities and official APIs/CLIs, maintained ecosystem packages/modules and their documentation/issue queues, then supported composition or extension options. For Drupal, check Core, Drush/APIs, Recipes and relevant contrib explicitly.

Prefer **REUSE → CONFIGURE/COMPOSE → EXTEND → MINIMAL CUSTOM GLUE**. In the governing Issue/PR, briefly state the selected option and the material gap that justifies new code or dependencies. Check compatibility, maintenance, security and operational cost; this rule never requires a dependency just because one exists.

Keep research proportionate: no new review gate, phase, test suite or exhaustive study for a trivial edit. Existing accepted decisions, task scope, authorizations, security requirements, HOLDs and GitHub protections always prevail. This rule grants no implementation, runtime or deployment authority.
## Project positioning

Governed Content is a governance layer for selected site-lifecycle content.

It is not a generic content synchronization module.

It must not become a duplicate of broad content export/import tools.

The module should focus on governed content identity, status, validation, safety and promotion readiness.

## Project scope

The module manages selected content as governed content.

It must stay focused on content that follows the lifecycle of a website, such as legal pages, privacy policy, terms of use, contact pages and corporate pages.

Do not implement broad synchronization of all nodes, all media or all content entities unless a documented decision explicitly authorizes it.

## Compatibility rules

Target Drupal 11.

The declared core compatibility must remain `^11` unless a documented technical reason requires a stricter constraint.

Use PHP 8.3 or newer.

Do not use PHP language features that require PHP 8.4 or PHP 8.5 while the declared minimum remains PHP 8.3.

The module may be tested on newer PHP versions.

## Development rules

Prefer small, incremental changes.

Each implementation must be linked to a clear issue, task or documented decision.

Create a dedicated branch before implementation.

Do not work directly on `main`.

Do not open a pull request automatically.

Follow Drupal coding standards.

Keep the module compatible with Drupal.org contrib expectations.

Do not introduce unnecessary dependencies.

Do not add AI-related features to the main module unless a documented decision explicitly authorizes it.

AI-related features, if added later, should be considered for a separate companion module.

## MVP guidance

The MVP should start with governance foundations, not export/import.

The first useful capabilities should be:

1. identify governed content;
2. assign stable governed content keys;
3. list governed content items;
4. expose a basic governance status;
5. prepare safe future export/import workflows.

Export/import should come after the governance model is clear.
## Codex workflow

Codex must follow the workflow documented in:

`docs/development/codex-workflow.md`

This workflow is mandatory for all implementation tasks.
