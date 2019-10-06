$(document).ready(function() {

  function elemsByArticle(parent) {
    return {
      jeuinfo : $(parent).find('p'),
      tabclose : $(parent).find('div.tabclose'),
      jeutitre : $(parent).find('h4'),
      jeuimage : $(parent).find('.categorie div'),
      infoform : $(parent).find('div.infoscroll'),
      savoirform : $(parent).find('a[data-infoscroll]'),
      inscriform : $(parent).find('a[data-inscrire]')
    };
  };

  $('button[data-infoscroll]').click(function() {
    var elem = elemsByArticle($(this).parent().parent());
    $(this).toggleClass('hidden');
    $(elem.jeuinfo).toggleClass('hidden');
    $(elem.tabclose).toggleClass('hidden');
    $(elem.jeuimage).toggleClass('blurOff');
    // $(jeutitre).toogleClass('à Faire');
  });
  $('article div.tabclose').click(function(){
    var elem = elemsByArticle($(this).parent());
    $(elem.jeuinfo).toggleClass('hidden');
    $(elem.tabclose).toggleClass('hidden');
    $(elem.jeuimage).toggleClass('blurOff');
  });

  $('a[data-infoscroll]').click(function(event) {
    event.preventDefault();
    console.log('showInfo');
    var elem = elemsByArticle($(this).parent().parent());
    $(this).toggleClass('hidden');
    $(elem.inscriform).toggleClass('hidden');
    $(elem.infoform).toggleClass('hidden');
    $(elem.tabclose).toggleClass('hidden');
  });


  $('.formule div.tabclose').click(function(){
    console.log('tabclose');
    var elem = elemsByArticle($(this).parent());
    $(elem.inscriform).toggleClass('hidden');
    $(elem.infoform).toggleClass('hidden');
    $(elem.tabclose).toggleClass('hidden');
    $(elem.savoirform).toggleClass('hidden');

  });

});

// $('#jeux div.tabclose div').click(function(){
//   console.log('remonte');
//   $('#jeux p.infoscroll').slideUp(1000, $('#jeux p.infoscroll').toggle('.hidden'));
//   $('#jeux .categorie div').css('filter','blur(10px)');
//   $('button[data-infoscroll]').toggle('.hidden');
//   $('#jeux div.tabclose').toggle('.hidden');
// });
//
// });
