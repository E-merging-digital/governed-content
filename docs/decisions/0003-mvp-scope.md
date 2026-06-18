# Decision 0003: MVP scope

## Status

Accepted.

## Context

The project needs a narrow MVP that proves the governance concept without duplicating existing content synchronization tools.

Starting with export/import would make the project look like another synchronization module.

The first useful step is to establish how governed content is identified and checked.

## Decision

The MVP will focus on the governed content foundation.

The MVP must support the following concepts:

1. a governed content registry;
2. stable governance keys;
3. mapping between a governance key and a Drupal content entity;
4. a basic governed content listing;
5. a basic governance status;
6. preparation for future export/import safety checks.

The MVP must not include broad content synchronization.

The MVP must not attempt to support every entity type.

The first implementation may focus on node entities only if needed to keep the scope narrow.

## Out of scope for MVP

The following are out of scope for the initial MVP:

- generic export/import of all content;
- synchronization of all nodes;
- synchronization of media, taxonomy terms, users or paragraphs as a broad feature;
- AI-assisted content generation;
- translation workflows;
- complex approval workflows;
- CI integration;
- production drift enforcement;
- custom serialization format unless explicitly required.

## Consequences

The first functional task should not be export/import.

The first functional task should define how content becomes governed.

A later decision must define the export/import strategy before implementation begins.