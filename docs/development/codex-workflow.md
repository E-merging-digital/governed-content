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

## Mandatory handoff

At the end of an implementation task, Codex must provide a complete handoff in
French. The handoff must be ready for Jonathan to review and use without having
to reconstruct commands or pull request content.

The handoff must include:

- a concise summary of the changes;
- the exact repository-relative path of every modified file;
- every validation command that was run;
- the result of each validation command, including failures;
- every relevant validation that was skipped and the reason it was skipped;
- any limitation or follow-up needed;
- copy-paste-ready commands to stage, commit and push the changes;
- a complete proposed pull request title and body;
- a command to generate the pull request diff for review.

The Git commands must use the actual branch name, exact modified file paths and
an issue-specific commit message. Codex must not suggest broad staging commands
such as `git add .` when the changed files can be listed explicitly. The handoff
must provide commands equivalent to:

```shell
git add <exact-modified-file-paths>
git commit -m "<issue-specific commit message>"
git push -u origin <branch-name>
```

The proposed pull request body must be complete Markdown and must include:

- a summary of the change;
- the main implementation details;
- validation commands and results;
- skipped validations and their reasons;
- the related issue, using a closing reference when appropriate.

The handoff must include the exact command Jonathan can run after committing to
review the diff that the pull request will contain. Unless the repository state
requires another base, use:

```shell
git diff origin/main...HEAD
```

Codex must not open a pull request automatically. It may create a branch, commit,
push or open a pull request only when explicitly requested. Otherwise, Jonathan
performs these actions manually using the handoff.
