Feature: Visit homepage
  In order to view the website
  As a user
  I need to be able to open the homepage

  Scenario: Searching for "behat"
    Given I am on the homepage
    Then I should see "Recycle for Redford"
