<?php
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->wp_users = $parameters['wp_users'];
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

/**
* Pauses the scenario until the user presses a key. Useful when debugging a scenario.
*
* @Then /^(?:|I )break$/
*/
public function iPutABreakpoint()
{
  fwrite(STDOUT, "\033[s \033[93m[Breakpoint] Press \033[1;93m[RETURN]\033[0;93m to continue...\033[0m");
  while (fgets(STDIN, 1024) == '') {}
    fwrite(STDOUT, "\033[u");
    return;
  }


/**
 * @Then /^I wait for the message to appear$/
 */
public function iWaitForTheMessageToAppear()
{
    $this->getSession()->wait(5000,
        "jQuery('#message').children().length > 0"
    );
}

}
