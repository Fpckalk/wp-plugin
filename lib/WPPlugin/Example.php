<?php

namespace WPPlugin;

/**
 * Example class
 * 
 * I like to put my code in classes (and namespaces) to keep everything contained.
 */
class Example
{
  /**
   * Class constructor
   * 
   * I use this function to set default properties
   */
  public function __construct()
  {
    $this->example_property = 'Hi! I\'m just an example';
    $this->something = $this->only_used_here();
  }

  /**
   * Add some output.
   * 
   * This function is public. WordPress hooks can't find functions that aren't public.
   *
   * @return void
   */
  public function add_some_output()
  {
    echo '<meta name="custom_meta" content="Just a test string">';
  }

  /**
   * Add extra classes to the existing body classes
   *
   * @param string[] $classes
   * @param string[] $class
   * @return void
   */
  public function alter_some_body_classes($classes, $class)
  {
    return array_merge($classes, ['my-extra-class']);
  }

  /**
   * Only used here
   * 
   * This function is private because it is only used by this class to do some calculations.
   * I won't be used by a WordPress hook.
   *
   * @return void
   */
  private function only_used_here()
  {
    return null;
  }
}