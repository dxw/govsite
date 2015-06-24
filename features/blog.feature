Feature: Blog

@javascript @wip
Scenario: As a user with the editor role I can post to the blog
Given I am logged in as "adam"
And I follow "Posts"
And I follow "Add New"
And I press "Text"
And I fill in "post_title" with "My Awesome Blog Post"
And I fill in "content" with "This post was made by robots."
And I wait for the message to appear
And I press "Publish"
Then I should see "Post published"
