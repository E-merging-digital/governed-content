# Vision

Governed Content is a Drupal module focused on selected content that should follow the lifecycle of a website.

The project is based on the idea that some content is technically editorial content, but functionally behaves like a governed site asset.

## Main idea

Some pages should not be treated like ordinary editorial content.

They should be treated as governed content.

Governed content should be:

- identifiable;
- versionable;
- reviewable;
- auditable;
- deployable;
- protected against unsafe overwrites.

## Typical examples

- Legal notice page
- Privacy policy
- Cookie policy
- Terms of use
- Terms and conditions
- Contact page
- About page
- Corporate pages
- Compliance-related FAQ pages

## Intended workflow

A typical workflow is:

1. a governed page is created or updated in development;
2. the change is reviewed;
3. the approved version is promoted to staging;
4. the same approved version is promoted to production;
5. production can be checked for drift.

## Strategic positioning

The project should not focus on generic synchronization.

It should focus on governance.

Generic export/import is a technical mechanism.

Governance is the product value.

## Long-term vision

Governed Content could eventually support:

- governed content registry;
- stable governance keys;
- status checks;
- drift detection;
- validation rules;
- safe import guards;
- Git-based review workflows;
- Drush commands for CI;
- integration with existing export/import mechanisms;
- optional companion modules for advanced workflows.

The first versions must remain intentionally narrow.