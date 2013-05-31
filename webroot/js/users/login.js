/*
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2013
 * @link http://ctsfla.com
 */
$(function() {
  var $loginForm = $('form'),
    $submitButton = $loginForm.find('input[type="submit"]');

  $loginForm.submit(function() {
    $submitButton.button('loading');
    return true;
  });
});
