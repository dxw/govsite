<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

  // require_once 'PHPUnit/Autoload.php';
  // require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
{

  /**
   * Initializes context.
   * Every scenario gets it's own context object.
   *
   * @param array $parameters context parameters (set them up through behat.yml)
   */
  public function __construct($wp_users)
  {
      $this->wp_users = $wp_users;
  }

  /**
   * @When /^I search for "([^"]*)"$/
   */
  public function iSearchFor($arg1)
  {
    $this->fillField('Search Drupal.org', $arg1);
    $this->pressButton('Search');
  }

  /**
  * Authenticates a user.
  *
  * @Given /^I am logged in as "([^"]*)" with the password "([^"]*)"$/
  */
  public function iAmLoggedInAsWithThePassword($username, $passwd) {
      // Go to the Login page.
      $this->getSession()->visit($this->locatePath('/wp-login.php'));
      // Log in
      $element = $this->getSession()->getPage();
      if (empty($element)) {
       throw new Exception('Page not found');
      }
      $element->fillField('Username', $username);
      $element->fillField('Password', $passwd);
      $submit = $element->findButton('Log In');
      if (empty($submit)) {
        throw new Exception('No submit button at ' . $this->getSession()
        ->getCurrentUrl());
      }
      $submit->click();
      $link = $this->getSession()->getPage()->findLink("Dashboard");
      if (empty($link)) {
        throw new Exception('Login failed at ' . $this->getSession()
        ->getCurrentUrl());
      }
      return;
  }

  /**
  * Authenticates a user with password from configuration.
  *
  * @Given /^I am logged in as "([^"]*)"$/
  */
  public function iAmLoggedInAs($username) {
    $password = $this->fetchPassword($username);
    $this->iAmLoggedInAsWithThePassword($username, $password);
  }



  /**
  * Helper function to fetch user passwords stored in behat.local.yml.
  *
  * @param string $type
  *   The user type, e.g. drupal or git.
  *
  * @param string $name
  *   The username to fetch the password for.
  *
  * @return string
  *   The matching password or FALSE on error.
  */
  public function fetchPassword($name) {
    $property_name = 'wp_users';
    try {
      $property = $this->$property_name;
      $password = $property[$name];
      return $password;
    } catch (Exception $e) {
      throw new Exception("Non-existent user/password for $property_name:$name please check behat.local.yml.");
    }
  }

}
