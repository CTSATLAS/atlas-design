/*
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2013
 * @link http://ctsfla.com
 */
$(function() {
  var $registrationForm = $('#UserRegistrationForm'),
    $submitButton = $registrationForm.find('input[type="submit"]');

  $registrationForm.submit(function() {
    $submitButton.button('loading');
    return true;
  });
});
