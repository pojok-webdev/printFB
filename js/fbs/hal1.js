(function($){
    console.log('test');
    $.ajax({
        url:'/localhost:2020/getfb/1',
        dataType:'json'
    })
    .done(function(res){
        console.log('Res',res);
    })
    .fail(function(err){
        console.log('err',err);
    });
}(jQuery))