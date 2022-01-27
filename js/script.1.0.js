function alphabetizeSocialNetwork(){
  $('#social-network').removeClass('categorized');
  $('#alphabetize-social-network').addClass('inactive');
  $('#categorize-social-network').removeClass('inactive');
}

function categorizeSocialNetwork() {
  $('#social-network').addClass('categorized');
  $('#categorize-social-network').addClass('inactive');
  $('#alphabetize-social-network').removeClass('inactive');
}
