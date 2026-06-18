# Decision 0002: Runtime compatibility

## Status

Accepted.

## Context

The module is developed while Drupal 11 continues to evolve.

Drupal 11.4 is an important target for development and testing, but supporting Drupal 11.4 does not require dropping compatibility with earlier Drupal 11 minor versions unless a specific technical dependency requires it.

The module should remain usable by agencies and site builders who update Drupal progressively.

## Decision

Governed Content declares compatibility with Drupal 11 in general.

The module requires PHP 8.3 or newer.

The module may be developed and tested on newer PHP versions such as PHP 8.4 and PHP 8.5, but the code must not use language features that require PHP 8.4 or PHP 8.5 while the declared minimum remains PHP 8.3.

The Composer constraint is:

- PHP: `>=8.3`
- Drupal core: `^11`

The Drupal info file constraint is:

- `core_version_requirement: ^11`

## Consequences

The module remains accessible to Drupal 11 sites broadly.

Recent Drupal 11 versions should be used as the preferred development and validation target.

A stricter Drupal or PHP requirement can only be introduced later through a documented decision explaining the technical reason.