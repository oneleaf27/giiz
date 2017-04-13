$(function() {
  // Onload時処理
  $(document).ready( function(){
    getCount();
    effectCount();
  });


  ion.sound({
    sounds: [
        {name: "fire1"},
        {name: "fire2"}
    ],
    volume: 0.3,
    path: "sounds/",
    preload: true,
    multiplay: true
});


  // いいぞボタンクリックイベント
  $('#add').on('click', function() {
    ion.sound.play("fire2");  // 音声再生
    addCount();         // カウントアップ処理
    effectCount();      // カウンターの増加エフェクト処理
  });

  // カウントアップ処理
  function addCount() {
    $.ajax({
      url:"/addCount",
      type:"POST",
      dataType:"JSON",
      cache:false
    }).done(function(count){
      // 成功時
      $('#counter').html(count);

    }).fail(function() {
      // 失敗時
      //alert('通信失敗であります！');
    });
  }

  // カウント取得処理
  function getCount() {
    $.ajax({
      //url:"{{ url('/getCount') }}",
      url:"/getCount",
      type:'post',
      dataType:'json',
      cache:false
    }).done(function(count){
      // 成功時
      $('#counter').html(count);
    }).fail(function(){
      // 失敗時
      //alert('通信失敗であります！');
    });
  }


  // カウンターの増加エフェクト処理
  function effectCount() {
    // 外枠のDIVを作成
    var elm_div = $('<li />', {
      css: {
        display: 'none',
        width: '50%',
        borderColor: '#' + getRandom(6, 'ABCDEF')
    }}).addClass('wrap');

    // テキストを追加
    elm_div.html("ガルパンはいいぞ");

    // 古いエフェクトをフェードアウト
    $('#onecount').children().animate({width: '30%', height: 'hide', opacity: 'hide', fontSize: '32px'}, 'normal', function () {
        $(this).remove();
    });

    // 作成したDIVを#onecountに追加してフェードイン
    elm_div.appendTo($('#onecount'));
    elm_div.animate({width: '98%',　height: 'show', opacity: 'show'}, 'nomal');
  }

  // シャッフルした指定文字列を指定文字数取得
  function getRandom(len, str) {
      var res = '';
      var strlen = str.length;
      for (var i = 0; i < len; i++) {
          res += str.charAt(Math.floor(Math.random() * strlen));
      }
      return res;
  }
});
