# Codex workflow

This document defines how Codex must work on the Governed Content repository.

The goal is to keep issues and prompts concise by storing stable project rules in the repository.

## Mandatory reading

Before analysis or implementation, Codex must read:

1. AGENTS.md
2. PROJECT_BRIEF.md
3. README.md
4. docs/vision.md
5. docs/glossary.md
6. docs/comparison-with-existing-modules.md
7. docs/decisions/*.md
8. the GitHub issue and all issue comments

If sources conflict, use this priority order:

1. accepted decisions in docs/decisions
2. AGENTS.md
3. PROJECT_BRIEF.md
4. docs/vision.md
5. GitHub issue
6. GitHub issue comments
7. existing implementation

## Branch rule

Codex must never work directly on `main`.

For each issue, Codex must create a dedicated branch:

`codex/issue-XXX-short-description`

Example:

`codex/issue-001-governed-content-registry`

## Analysis phase

Before implementing, Codex must provide a short analysis including:

- issue summary;
- relevant decisions;
- applicable constraints;
- files likely to be modified;
- implementation plan;
- validation plan.

Implementation must not start before this analysis is produced.

## Implementation rules

Codex must:

- keep changes small and incremental;
- stay strictly inside the issue scope;
- avoid unrelated refactoring;
- avoid adding dependencies unless explicitly required;
- avoid creating generic content synchronization features;
- preserve Drupal 11 compatibility;
- preserve PHP 8.3 compatibility;
- follow Drupal coding standards;
- keep the repository as a Drupal module repository only.

Codex must not add:

- a Drupal installation;
- DDEV configuration;
- vendor dependencies;
- generated files;
- database dumps;
- site-specific configuration.

## Completion response

At the end of a task, Codex must answer in French and include:

- summary of changes;
- validation performed;
- validation results;
- exact list of modified files;
- any limitation or follow-up needed.

Codex must not open a pull request automatically.

Codex may create a branch, commit and push if explicitly requested.

The pull request must be opened manually by Jonathan unless explicitly instructed otherwise.

## Handoff requirements

At the end of each implementation task, Codex must provide:

- the exact list of modified files;
- validation commands executed;
- validation results;
- limitations or skipped validations;
- the exact `git add` command including all modified files;
- the recommended `git commit` command;
- the recommended `git push` command;
- a complete pull request body;
- a command to generate the PR diff for review.

The `git add` command must include every modified file and must be based on the actual `git status` result.

The pull request body must include:

- summary;
- implemented changes;
- out of scope items;
- validation performed;
- skipped or incomplete validation;
- exact list of changed files;
- related issue reference.

Codex must not create the pull request automatically unless Jonathan explicitly asks for it.

Codex must answer in French when providing the final handoff.
