$(document).ready(function() {

  function elemsByArticle(parent) {
    return {
      jeuinfo: $(parent).find('p'),
      tabclose: $(parent).find('div.tabclose'),
      jeutitre: $(parent).find('h4'),
      jeuimage: $(parent).find('.categorie div'),
      infoform: $(parent).find('div.infoscroll'),
      savoirform: $(parent).find('a[data-infoscroll]'),
      inscriform: $(parent).find('a[data-inscrire]'),
      arrowform: $(parent).find('.tabclose img'),
      buttonSubscription: $(parent).find('a.cta')
    };
  };

  $('button.infoscroll').click(function() {
    var elem = elemsByArticle($(this).parent().parent());
    $(this).toggleClass('hidden');
    $(elem.jeuinfo).slideToggle('10000');
    $(elem.tabclose).slideToggle('100000');
    $(elem.jeuimage).toggleClass('blurOff');
    // $(jeutitre).toogleClass('à Faire');
  });

  $('article.jeu div.tabclose').click(function() {
    var elem = elemsByArticle($(this).parent());
    $(elem.jeuinfo).slideToggle('10000');
    $(elem.tabclose).slideToggle('10000');
    $(elem.jeuimage).toggleClass('blurOff');
  });

  $('a[data-infoscroll]').click(function(event) {
    event.preventDefault();
    var elem = elemsByArticle($(this).parent().parent());
    $(this).slideToggle('10000');
    $(elem.inscriform).toggleClass('hidden');
    $(elem.infoform).slideToggle("10000");
    $(elem.arrowform).toggleClass('arrowDown');
  });

  $('.formule div.tabclose').click(function() {
    var elem = elemsByArticle($(this).parent());
    $(elem.inscriform).toggleClass('hidden');
    $(elem.infoform).slideToggle('10000');
    $(elem.arrowform).toggleClass('arrowDown');
    $(elem.savoirform).toggleClass('hidden');

  });

  // activation du formulaire d'inscription
  function inactivateSubscription() {
    var elem = elemsByArticle($('#subscriptionList').parent().next());
    $(elem.buttonSubscription).addClass('cta-inactive');
    $(elem.buttonSubscription).click(function(event) {
      event.preventDefault();
    });
  };

  function activateSubscription() {
    var elem = elemsByArticle($('#subscriptionList').parent().next());
    $(elem.buttonSubscription).removeClass('cta-inactive');
    $(elem.buttonSubscription).click(function(event) {
      event.preventDefault();
      displaySubscriptionForm($(elem.buttonSubscription));
    });
  };

  function checkActivatedCheckBoxes() {
    var numberOfCheckBoxes = $("#subscriptionList input[type='checkbox']").length;
    var numberOfCheckBoxesChecked = $("#subscriptionList input[type='checkbox']:checked").length;
    if (numberOfCheckBoxes == numberOfCheckBoxesChecked) {
      activateSubscription();
    } else {
      inactivateSubscription();
    }
  };

  function displaySubscriptionForm($elem) {
    if ($('#wpcf7-f481-p143-o1').css('display') == 'none') {
      $('#wpcf7-f481-p143-o1').slideToggle('10000');
      $elem.html('Cacher le formulaire de pré-inscription');
    } else {
      $('#wpcf7-f481-p143-o1').slideToggle('10000');
      $elem.html('Remplir le formulaire de pré-inscription');
    }
  };

  $("#subscriptionList input[type='checkbox']").click(function() {
    checkActivatedCheckBoxes();
  });

  checkActivatedCheckBoxes();


});
