$('.product-card-media').on('mouseover',function(){
    var player = $("#"+this.id);
        froogaloop = $f(player[0].id);
  
    player.mouseover(function(){
        froogaloop.api('play');
    }).mouseout(function(){
        froogaloop.api('pause');
    });
  });
